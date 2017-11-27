<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
      $data = [];
      return view('admin/category', ['data' => $data]);
    }

    public function add()
    {
      $data['title']="Add Category";
      return view('admin/add_category', $data);
    }
}
