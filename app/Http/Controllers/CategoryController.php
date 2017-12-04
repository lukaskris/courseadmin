<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
      $data = Category::all();
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
      return view('admin/category/category', ['data' => $data, 'notif' => $notif]);
    }

    public function add()
    {
      $data['title']="Add Category";
      return view('admin/category/add_category', $data);
    }

    public function store(Request $request)
    {
      $this->validate($request, [
        'name' => 'required|min:2'
      ]);

      $data = new Category;
      $data->name = $request->name;
      $data->save();
      return redirect('category')->with('data','Add new category successful!');
    }

    public function edit($id)
    {
      $data = Category::find($id);
      $title = "Edit Category";
      if(!$data) abort(404);
      return view('admin/category/update_category',['data' => $data, 'title'=>$title]);
    }

    public function update(Request $request, $id)
    {
      $category = Category::find($id);
      $category->name = $request->name;
      $category->save();
      return redirect('/category')->with('data','Update category successful!');
    }

    public function delete($id)
    {
      $data = Category::find($id);
      $data->delete();
      return redirect('/category')->with('data','Delete category successful!');
    }
}
