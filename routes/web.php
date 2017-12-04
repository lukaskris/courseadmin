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
Route::post('/category','CategoryController@store');
Route::get('/category/{id}','CategoryController@edit');
Route::put('/category/{id}','CategoryController@update');
Route::delete('/category/{id}','CategoryController@delete');


// Lesson
Route::get('/lesson','LessonController@index');
Route::get('/lesson/add','LessonController@add');
Route::post('/lesson','LessonController@store');
Route::get('/lesson/{id}','LessonController@edit');
Route::put('/lesson/{id}','LessonController@update');
Route::delete('/lesson/{id}','LessonController@delete');
