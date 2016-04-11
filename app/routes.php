<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', "HomeController@index");

Route::get('read/{id}', 'HomeController@read');

Route::get('posts', ['as' => 'posts', 'uses' => 'PostController@index']);

Route::get('posts/add', 'PostController@add');
Route::post('posts/create', 'PostController@create');

Route::get('posts/edit/{id}', 'PostController@edit');
Route::post('posts/update/{id}', 'PostController@update');

Route::post('posts/delete/{id}', 'PostController@delete');
