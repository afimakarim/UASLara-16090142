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

Route::get('/a', function () {
    return view('welcome');
});
//ganti beranda
Route::get('/admin', function () {
    return view('pages.home');
});
//ganti tentang
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('belajar','BelajarController@index'); 
Route::get('karyawan','BelajarController@index'); 


Route::get('pengaturan','AdminController@setting');

Route::get('admin','AdminController@homeAdmin')->name('admin.home');
Route::post('store','AdminController@store');
Route::get('admin/{id_jadwal}/editJadwal','AdminController@editJadwal')->name('editJadwal');
Route::post('admin/{id_jadwal}/updateJadwal','AdminController@updateJadwal')->name('updateJadwal');
Route::get('admin/{id_jadwal}/deleteJadwal','AdminController@deleteJadwal')->name('deleteJadwal');

Route::get('daftarTim','AdminController@tim'); 
Route::post('store2','AdminController@store2');
Route::get('tim/{id_tim}/editTim','AdminController@editTim');
Route::post('tim/{id_tim}/updateTim','AdminController@updateTim')->name('updateTim');
Route::get('tim/{id_tim}/deleteTim','AdminController@deleteTim')->name('deleteTim');

Route::get('daftarPemain','AdminController@pemain'); 
Route::post('store3','AdminController@store3');
Route::get('pemain/{id_pemain}/editPemain','AdminController@editPemain');
Route::post('pemain/{id_pemain}/updatePemain','AdminController@updatePemain')->name('updatePemain');
Route::get('pemain/{id_Pemain}/deletePemain','AdminController@deletePemain')->name('deletePemain');


Route::get('logout','AdminController@logout');

Route::get('login','AdminController@login');
Route::get('/','UserController@index');
Route::get('jadwalUser','UserController@jadwalUser');
Route::get('score','UserController@score');
Route::get('Tim','UserController@daftarTimUser');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
