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
    Route::get('/pelanggan','UserController@index')->name('pelanggan');

    //tarif
    Route::get('/tarif','TarifController@index')->name('tarif');
    Route::get('/tambah/tarif','TarifController@create')->name('tambah.tarif');
    Route::post('/tarif/simpan','TarifController@store')->name('simpan.tarif');
    Route::get('/edit/tarif/{id}','TarifController@edit')->name('edit.tarif');
    Route::post('/update/tarif','TarifController@update')->name('update.tarif');
    Route::delete('/tarif/hapus/{id}','TarifController@delete')->name('hapus.tarif');
});


