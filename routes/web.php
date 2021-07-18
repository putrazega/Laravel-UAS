<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|c
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

Route::get('matkul', 'MatkulController@index')->name('matkul');
Route::get('matkul-create', 'MatkulController@create')->name('tambah_matkul');
Route::post('matkul-save', 'MatkulController@store')->name('simpan_matkul');
Route::get('matkul-edit/{id}', 'MatkulController@edit')->name('edit_matkul');
Route::post('matkul-update/{id}', 'MatkulController@update')->name('update_matkul');
Route::get('matkul-delete/{id}', 'MatkulController@destroy')->name('hapus_matkul');

Route::get('mahasiswa', 'MahasiswaController@index')->name('mahasiswa');
Route::get('mahasiswa-create', 'MahasiswaController@create')->name('tambah_mahasiswa');
Route::post('mahasiswa-save', 'MahasiswaController@store')->name('simpan_mahasiswa');
Route::get('mahasiswa-edit/{id}', 'MahasiswaController@edit')->name('edit_mahasiswa');
Route::post('mahasiswa-update/{id}', 'MahasiswaController@update')->name('update_mahasiswa');
Route::get('mahasiswa-delete/{id}', 'MahasiswaController@destroy')->name('hapus_mahasiswa');

Route::get('nilai', 'NilaiController@index')->name('nilai');
Route::get('nilai-create', 'NilaiController@create')->name('tambah_nilai');
Route::post('nilai-save', 'NilaiController@store')->name('simpan_nilai');
Route::get('nilai-edit/{id}', 'NilaiController@edit')->name('edit_nilai');
Route::post('niali-update/{id}', 'NilaiController@update')->name('update_nilai');
Route::get('nilai-delete/{id}', 'NilaiController@destroy')->name('hapus_nilai');