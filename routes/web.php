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
    return view('welcome');
});

Route::get('halo', function () {
    return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

Route::get('/halo2', function () {
    return "<h1>Halo Apakabs</h1>";
});

Route::get('blog', function() {
    return view('blog');
});

Route::get('/502622118', function () {
    return view('502622118');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/js1', function() {
    return view('js1');
});

Route::get('/js2', function() {
    return view('js2');
});

Route::get('/latihanLayout', function () {
    return view('latihanLayout');
});

Route::get('/link', function () {
    return view('link');
});

Route::get('/responsive', function () {
    return view('responsive');
});

Route::get('/style', function () {
    return view('style');
});

Route::get('/validasi', function () {
    return view('validasi');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/ets', function () {
    return view('ets');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index' );
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata' );
