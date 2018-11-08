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

Route::get('/', 'ProjectController@index');
Route::resource('project', 'ProjectController');
Route::post('/task/{project}', "TaskController@store");
Route::put('/task/{task}',"TaskController@update");
Route::delete('/task/{task}',"TaskController@destroy");