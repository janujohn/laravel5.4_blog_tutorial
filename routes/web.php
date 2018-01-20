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


Route::get('/', 'PostsController@show')->name('home');

Route::get('/create', 'PostsController@create');

Route::post('/posts', 'PostsController@store');

Route::get('/posts/{post}', 'PostsController@show');

Route::post('/posts/{post}/comments', 'CommentsController@store');


Auth::routes();

Route::get('/homes', 'HomeController@index');

Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create');

Route::post('/login', 'SessionsController@store');


Route::get('/logout', 'SessionsController@destroy');
