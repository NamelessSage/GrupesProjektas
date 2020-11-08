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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/krepselis', [App\Http\Controllers\HomeController::class, 'krepselis'])->name('krepselis');
Route::get('/administracinis', [App\Http\Controllers\HomeController::class, 'administracinis'])->name('administracinis');
Route::get('/klientas', [App\Http\Controllers\HomeController::class, 'klientas'])->name('klientas');
Route::get('/konstravimo', [App\Http\Controllers\HomeController::class, 'konstravimo'])->name('konstravimo');
