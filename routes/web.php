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

// Get all posts
Route::get('/', 'PostsController@index');

// Get the form to create a post
Route::get('/posts/create', 'PostsController@create');

// Get an individual post
Route::get('/posts/{post}', 'PostsController@show')->name('post');

// Post a new post via the form
Route::post('/posts', 'PostsController@store');