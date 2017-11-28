<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index');
Route::get('/home/{id}', 'HomeController@show');

// Category
Route::get('/category','CategoryController@index');
Route::get('/category/add','CategoryController@add');
Route::get('/category/{id}','CategoryController@edit');
Route::put('/category/{id}','CategoryController@update');
Route::get('/category/delete/{id}','CategoryController@delete');


// Lesson
Route::get('/lesson','LessonController@index');
Route::get('/lesson/add','LessonController@add');
Route::get('/lesson/{id}','LessonController@edit');
Route::get('/lesson/delete/{id}','LessonController@delete');
Route::get('/lesson/search/{name}','LessonController@search');
