<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
      $data = Category::all();
      return view('admin/category', ['data' => $data]);
    }

    public function add()
    {
      $data['title']="Add Category";
      return view('admin/add_category', $data);
    }

    public function edit($id)
    {
      $data = Category::find($id);
      $title = "Edit Category";
      if(!$data) abort(404);
      return view('admin/update_category',['data' => $data, 'title'=>$title]);
    }

    public function update(Request $request, $id)
    {
      $category = Category::find($id);
      $category->name = $request->name;
      $category->save();
      return redirect('/category');
    }

    public function delete($id)
    {
      $data = Category::find($id);
      $data->delete();
      return redirect('/category');
    }
}
