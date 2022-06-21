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



Route::get('/mahasiswa', 'MahasiswaController@mahasiswa');

Route::get('/mahasiswa/cari','MahasiswaController@pencarian');

Route::get('/mahasiswa/editMahasiswa{id}','MahasiswaController@editMahasiswa');

Route::get('/mahasiswa/deleteMahasiswa{id}','MahasiswaController@deleteMahasiswa');

Route::get('/mahasiswa/tambahData','MahasiswaController@');


