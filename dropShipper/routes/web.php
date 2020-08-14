<?php

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


Route::get('/', "AppController@index");
Route::get('/kategori', "KategoriController@index")->name("kategori");
Route::get('/toko', "TokoController@index")->name("toko");
Route::get('/trends', "TrendController@index")->name("trends");

// Toko
Route::get('/analisis', "AnalisisController@index")->name("analisis");
Route::get('/beli', "BeliController@index")->name("beli");
Route::get('/berhasil', "BerhasilController@index")->name("berhasil");
Route::get('/cart', "CartController@index")->name("cart");
Route::get('/editprofil', "EditProfilController@index")->name("editprofil");
Route::get('/invoice', "InvoiceController@index")->name("invoice");
Route::get('/produktoko', "ProdukTokoController@index")->name("produktoko");
Route::get('/registertoko', "RegisterController@index")->name("registertoko");

Route::get('/login', "LoginController@index")->name("login");