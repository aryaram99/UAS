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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
// Route alpha
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/tambah', 'HomeController@tambah');
Route::post('/home/alpha/store', 'HomeController@store');
Route::get('/home/alpha/edit/{id}', 'HomeController@edit');
Route::put('/home/alpha/update/{id}', 'HomeController@update');
Route::get('/home/alpha/hapus/{id}', 'HomeController@delete');
// route bravo
Route::get('/bravo', 'HomeController@index2');
Route::get('/tambah2', 'HomeController@tambah2');
Route::post('/bravo/store', 'HomeController@store2');
Route::get('/bravo/edit/{id}', 'HomeController@edit2');
Route::put('/bravo/update/{id}', 'HomeController@update2');
Route::get('/bravo/hapus/{id}', 'HomeController@delete2');
// route charlie
Route::get('/charlie', 'HomeController@index3');
Route::get('/tambah3', 'HomeController@tambah3');
Route::post('/charlie/store', 'HomeController@store3');
Route::get('/charlie/edit/{id}', 'HomeController@edit3');
Route::put('/charlie/update/{id}', 'HomeController@update3');
Route::get('/charlie/hapus/{id}', 'HomeController@delete3');
// route delta
Route::get('/delta', 'HomeController@index4');
Route::get('/tambah4', 'HomeController@tambah4');
Route::post('/delta/store', 'HomeController@store4');
Route::get('/delta/edit/{id}', 'HomeController@edit4');
Route::put('/delta/update/{id}', 'HomeController@update4');
Route::get('/delta/hapus/{id}', 'HomeController@delete4');
// route echo
Route::get('/echo', 'HomeController@index5');
Route::get('/tambah5', 'HomeController@tambah5');
Route::post('/echo/store', 'HomeController@store5');
Route::get('/echo/edit/{id}', 'HomeController@edit5');
Route::put('/echo/update/{id}', 'HomeController@update5');
Route::get('/echo/hapus/{id}', 'HomeController@delete5');