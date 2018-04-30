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
Route::get('/', 'HomeController@index')->name('site.index');
Route::get('/detail/{id}', 'HomeController@detail')->name('site.detail');
Route::get('/home', 'AdminController@index')->name('admin.index');
Route::get('/editar/{id}', 'AdminController@editar')->name('admin.editar');
Route::get('/novo', 'AdminController@novo')->name('admin.novo');

Route::post('/create', 'MaterialController@create')->name('material.create');
Route::put('/update/{id}', 'MaterialController@update')->name('material.update');
Route::post('/delete/{id}', 'MaterialController@delete')->name('material.delete');
