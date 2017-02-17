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

Route::get('/', 'HomeController@index')->name('home');

Route::get('post/create', 'PostsController@create')->name('postCreate');

Route::get('post/edit/{id}', 'PostsController@edit')->name('postEdit');

Route::post('post/create', 'PostsController@store')->name('postCreate');

Route::get('post/delete/{id}', 'PostsController@delete')->name('postDelete');

Route::get('post/{id}', 'PostsController@show')->name('postShow');

Route::get('auth', 'AuthController@index');

Route::get('posts/new}', 'PostsController@create');

Route::get('users', 'UsersController@index');

Route::get('users/{id}', 'UsersController@get');

Route::get('users/{name}', 'UsersController@create');

Auth::routes();
