<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LessonController extends Controller
{
  public function index()
  {

    return view('admin/lesson');
  }

  public function show($id)
  {
    return $id;
  }
}
