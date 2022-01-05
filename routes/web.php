<?php

use GuzzleHttp\Middleware;
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
// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/', function () {
//     return view('index');
// });

Route::group(['middleware' => ['web']], function () {

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/book-a-demo', [App\Http\Controllers\HomeController::class, 'bookDemo']);
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about']);
Route::get('/plans', [App\Http\Controllers\HomeController::class, 'plans']);
Route::get('/solutions', [App\Http\Controllers\HomeController::class, 'solution']);

//Send Mail
Route::post('/send-mail', [App\Http\Controllers\HomeController::class, 'sendMail']);

//Set Dark Mode
Route::post('/set-dark-mode', [App\Http\Controllers\HomeController::class, 'setDarkMode'])->name('darkmode.set');
Route::post('/reset-dark-mode', [App\Http\Controllers\HomeController::class, 'resetDarkMode'])->name('darkmode.unset');
});