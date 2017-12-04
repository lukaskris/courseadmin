<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lesson;
use App\Models\Category;

class LessonController extends Controller
{

      public function index()
      {
        $data = Lesson::all();
        $notif = "";
        if(session()->has('data')){
          $data1 = session('data');
          $notif =
              "$.notify({
                  icon: 'pe-7s-check',
                  message: '$data1'
                },{
                    type: 'success',
                    timer: 400
                });";
          session()->forget('data');
        }
        return view('admin/lesson/lesson', ['data' => $data, 'notif' => $notif]);
      }

      public function add()
      {
        $data['title']="Add Lesson";
        $data['data'] = Category::all();
        return view('admin/lesson/add_lesson', $data);
      }

      public function store(Request $request)
      {
        // dd($request->sublesson);
        $this->validate($request, [
          'title' => 'required|min:2',
          'category' => 'required',
          'sublesson.title.*' => 'required|min:2',
          'sublesson.src.*' => 'required|min:2',
        ]);

        $data = new Lesson;
        $data->name = $request->name;
        $data->save();
        return redirect('lesson')->with('data','Add new lesson successful!');
      }

      public function edit($id)
      {
        $data = Lesson::find($id);
        $title = "Edit lesson";
        if(!$data) abort(404);
        return view('admin/lesson/update_lesson',['data' => $data, 'title'=>$title]);
      }

      public function update(Request $request, $id)
      {
        $category = Lesson::find($id);
        $category->name = $request->name;
        $category->save();
        return redirect('/lesson')->with('data','Update lesson successful!');
      }

      public function delete($id)
      {
        $data = Lesson::find($id);
        $data->delete();
        return redirect('/lesson')->with('data','Delete lesson successful!');
      }
}
