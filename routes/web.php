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

 	$lines = [

 		'line1',
 		'line2',
 		'line3'
 	];

   return view('welcome', compact('lines'));	

});

Route::get('about', function() {
	return view('about');

});


Route::get('/home', 'PostsController@home');


Route::get('/test', 'PostsController@test');

Route::get('/create', 'PostsController@create');

Route::post('/posts', 'PostsController@store');

Route::get('/posts/{post}', 'PostsController@show');

Route::post('/posts/{post}/comments', 'CommentsController@store');

