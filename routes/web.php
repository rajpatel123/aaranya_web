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
Route::get('/body', function () {
    return view('body');
});
Route::get('/header', function () {
    return view('header');
});
Route::get('/sample', function () {
    return view('sample');
});
Route::get('/cardview', function () {
    return view('card');
});
Route::get('/card', function () {
    return view('cardview');
});