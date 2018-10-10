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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('layouts/master');
});
Route::get('/welcome', function () {
    return view('welcome1');
});

Route::get('/home','HomeController@index');

Route::get('/karyawan','KaryawanController@index');

Route::get('/jabatan','JabatanController@index');

Route::get('departemen','DepartemenController@index');

Route::get('/arsip','ArsipController@index');

Route::get('/inventory','InventoryController@index');


