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

Route::get('/karyawan','Karyawan_c@index');

Route::get('/jabatan','Jabatan_c@index');

Route::get('departemen','Departemen_c@index');


