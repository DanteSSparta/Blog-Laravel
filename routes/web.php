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





Auth::routes();

Route::get('/','PostsController@index')->name('home');
Route::get('/posts/create','PostsController@create');

Route::post('/posts','PostsController@store');



Route::get('/posts/{post}','PostsController@show');
Route::get('/posts/tags/{tag}','TagsController@index');

Route::post('/posts/{post}/comments','CommentsController@store');

Route::get('/register','RegistrationController@create');
Route::post('/register','RegistrationController@store');


Route::get('/login','SessionController@create')->name('login');
Route::post('/login','SessionController@store');

Route::get('/logout','SessionController@destroy');
//posts

//GET /posts
//GET /posts/create
//POST /posts
//GET /posts/{id}/edit
//GET /posts/{id}
//PATCH /posts/{id}
//DELETE /posts{id}

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
