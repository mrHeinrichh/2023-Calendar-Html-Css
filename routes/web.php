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

Route::get('/home', function () {
    return view('home');
});

Route::get('/january', function () {
    return view('january');
});
Route::get('/february', function () {
    return view('february');
});
Route::get('/march', function () {
    return view('march');
});
Route::get('/april', function () {
    return view('april');
});
Route::get('/may', function () {
    return view('may');
});
Route::get('/june', function () {
    return view('june');
});
Route::get('/july', function () {
    return view('july');
});
Route::get('/august', function () {
    return view('august');
});
Route::get('/september', function () {
    return view('september');
});
Route::get('/october', function () {
    return view('october');
});
Route::get('/november', function () {
    return view('november');
});
Route::get('/december', function () {
    return view('december');
});