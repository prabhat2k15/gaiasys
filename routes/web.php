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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('user', 'UserController@getUser')->name('get.user');

Route::post('tools/group/add', 'ToolGroupController@add')->name('tool.group.add');

Route::post('tools/add', 'ToolController@add')->name('tool.add');