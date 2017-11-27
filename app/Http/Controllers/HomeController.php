<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
      $unescape = "<b>INI UNESCAPE</b>";
      return view('admin/home', ['unescape' => $unescape]);
    }

    public function show($id)
    {
      return $id;
    }
}
