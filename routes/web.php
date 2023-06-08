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
Route::get('/', function(){
    return view('welcome');
});

Route::get('/konfig', function(){
    return view('konfig');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/regis', function () {
    return view('regis');
});

Route::get('/konek', function(){
    return view('konek');
})->name('konek');

Route::get('/halaman', 'HalamanController@metode');

