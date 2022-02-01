<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::group(['middleware' => 'auth'] , function(){
    Route::get('/', 'HomeController@pelanggan')->name('home');

});


Route::group(['middleware' => 'auth','is_admin'] , function(){

    Route::get('/admin/home', 'HomeController@admin')->name('admin.home');

    //pelanggan
    Route::get('/pelanggan','PelangganController@index')->name('pelanggan');
    Route::get('/tambah/pelanggan','PelangganController@create')->name('tambah.pelanggan');
    Route::post('/simpan/pelanggan','PelangganController@store')->name('simpan.pelanggan');

    //tarif
    Route::get('/tarif','TarifController@index')->name('tarif');
    Route::get('/tambah/tarif','TarifController@create')->name('tambah.tarif');
    Route::post('/tarif/simpan','TarifController@store')->name('simpan.tarif');
    Route::get('/edit/tarif/{id}','TarifController@edit')->name('edit.tarif');
    Route::post('/update/tarif','TarifController@update')->name('update.tarif');
    Route::delete('/tarif/hapus/{id}','TarifController@delete')->name('hapus.tarif');

    //penggunaan
    Route::get('/penggunaan','PenggunaanController@index')->name('penggunaan');
    Route::get('/penggunaan/tambah','PenggunaanController@create')->name('tambah.penggunaan');
    Route::post('/penggunaan/simpan','PenggunaanController@store')->name('simpan.penggunaan');
    Route::get('/edit/penggunaan/{id}','PenggunaanController@edit')->name('edit.penggunaan');
    Route::post('/update/penggunaan','PenggunaanController@update')->name('update.penggunaan');
    Route::delete('/penggunaan/hapus/{id}','PenggunaanController@destroy')->name('hapus.penggunaan');

    //tagihan
    Route::get('/tagihan','TagihanController@index')->name('tagihan');
    Route::get('/tambah/tagihan','TagihanController@create')->name('tambah.tagihan');
    Route::post('/simpan/tagihan','TagihanController@store')->name('simpan.tagihan');
    Route::get('/tagihan/edit/{id}','TagihanController@edit')->name('edit.tagihan');
    Route::post('/update/tagihan','TagihanController@update')->name('update.tagihan');
    Route::delete('/tagihan/{id}','TagihanController@destroy')->name('hapus.tagihan');
});

Route::get('/pembayaran','PembayaranController@index')->name('pembayaran')->middleware('auth');


