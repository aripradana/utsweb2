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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/about', function () {
//     $nama = 'Pecinta Buku!';
//     return view('about', ['nama' => $nama]);
// });

Route::get('/inputbuku', 'BukuController@create');

Route::get('/', 'PagesController@beranda');
Route::get('/about', 'PagesController@about');

Route::get('/buku', 'BukuController@index');
Route::get('/buku/create', 'BukuController@create');
Route::POST('/buku', 'BukuController@store');
Route::get('/buku/{buku}', 'BukuController@destroy');
Route::get('/buku/edit/{id}', 'BukuController@edit');