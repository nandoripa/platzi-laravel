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

Route::get('/', 'HomeController@index');

Route::get('posts', 'PostsController@index');

Route::get('posts/{id}', 'PostsController@get');

Route::get('posts/new}', 'PostsController@create');

Route::get('users', 'UsersController@index');

Route::get('users/{id}', 'UsersController@get');

Route::get('users/{name}', 'UsersController@create');