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

// routing baru

Route::get('mahasiswa','MahasiswaController@index');
Route::get('/mahasiswa_create','MahasiswaController@create')->name('mahasiswa_create');

Route::get('makul', 'makulController@index')->name('makul');
Route::get('tambah-makul', 'makulController@create')->name('tambah.makul');
Route::post('simpan-makul', 'makulController@store')->name('simpan.makul');

Route::get('edit-makul/{id}', 'makulController@edit')->name('edit.makul');
Route::post('update-makul/{id}', 'makulController@update')->name('update.makul');
Route::get('hapus-makul/{id}', 'makulController@destroy')->name('hapus.makul');