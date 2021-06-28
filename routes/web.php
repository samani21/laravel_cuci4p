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

//ini halaman biaya
Route::get('/biaya', 'BiayaController@index')->name('biaya');

//ini halaman create
Route::get('/tambah-biaya', 'BiayaController@create')->name('tambah.biaya');

//ini untuk menambah
Route::post('/simpan-biaya', 'BiayaController@store')->name('simpan.biaya');

// ini hallaman edit
Route::get('/edit-biaya/{id}', 'BiayaController@edit')->name('edit.biaya');
// proses edit
Route::post('/update-biaya{id}', 'BiayaController@update')->name('update.biaya');

// ini halaman Delete
Route::get('/hapus-biaya/{id}', 'BiayaController@destroy')->name('hapus.biaya');