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

Route::get('/home', 'AdminController@index')->name('manager.admin_page');
Route::get('/list-post', 'PostController@index')->name('manager.admin_page.list_post');
Route::get('/edit-post/post_id={post_id}', 'PostController@edit')->name('manager.admin_page.edit_post');

