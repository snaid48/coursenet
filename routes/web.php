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
Route::get('/karyawan/add','KaryawanController@create');
Route::get('/karyawan/edit/{id}','KaryawanController@edit');
Route::get('/karyawan/show/{id}','KaryawanController@show');

Route::get('/jabatan','JabatanController@index');
Route::get('/jabatan/add','JabatanController@create');
Route::get('/jabatan/edit/{id}','JabatanController@edit');
Route::get('/jabatan/show/{id}','JabatanController@show');

Route::get('departemen','DepartemenController@index');
Route::get('departemen/add','DepartemenController@create');
Route::get('departemen/edit/{id}','DepartemenController@edit');
Route::get('departemen/show/{id}','DepartemenController@show');

Route::get('/arsip','ArsipController@index');
Route::get('/arsip/add','ArsipController@create');
Route::get('/arsip/edit/{id}','ArsipController@edit');
Route::get('/arsip/show/{id}','ArsipController@show');

Route::get('/inventory','InventoryController@index');
Route::get('/inventory/add','InventoryController@create');
Route::get('/inventory/edit/{id}','InventoryController@edit');
Route::get('/inventory/show/{id}','InventoryController@show');


