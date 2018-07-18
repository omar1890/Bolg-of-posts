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
Route::get('/', 'PostController@index' )->name("homepage");

Route::get('posts/create' , 'PostController@create')->name("CreatePost")->middleware('auth');

Route::get('/posts/{post}' , 'PostController@show');

Route::post('/posts' , 'PostController@store');

Route::post('/posts/{post}/comments' , 'CommentsController@addcomment');


//Login
Route::get('/login' , 'LoginController@create')->name('login')->middleware('guest');

Route::post('/login' , 'LoginController@store')->middleware('guest');

Route::get('/logout' , 'LoginController@destroy')->name("logout");


//REGISTER
Route::get('/register' , 'RegisterController@create')->name('register');

Route::post('/register' , 'RegisterController@store');

/*
Route::get('/show/{task}' , function($id){


	$task = Task::find($id);

	return view('Task.show' ,compact('task'));


});
*/