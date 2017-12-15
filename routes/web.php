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

Route::get('/', 'Web\PostController@index')->name('home');
Route::get('/post/{post}', 'Web\PostController@show')->name('post');

Auth::routes();

Route::prefix('admin')->namespace('Admin')->group(function () {
    // Post
    Route::get('/post/create', 'PostController@create')->name('admin.post.create');
    Route::post('/post', 'PostController@store')->name('admin.post.store');
    Route::get('/post/edit/{post}', 'PostController@edit')->name('admin.post.edit');

    // TODO: Topic
});