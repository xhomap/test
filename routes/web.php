<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', ['as' => 'user.index', 'uses' => 'UserController@index']);
Route::get('/{user}-{name}')->name('user.edit')->uses('UserController@edit');
Route::patch('{user}', ['as' => 'user.update', 'uses' => 'UserController@update']);
Route::get('create', ['as' => 'user.create', 'uses' => 'UserController@create']);
Route::post('create', ['as' => 'user.store', 'uses' => 'UserController@store']);
Route::get('{user}/delete', ['as' => 'user.delete', 'uses' => 'UserController@delete']);
