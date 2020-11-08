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
Route::get('/klientas', [App\Http\Controllers\HomeController::class, 'klientas'])->name('klientas');
Route::get('/konstravimo', [App\Http\Controllers\HomeController::class, 'konstravimo'])->name('konstravimo');
Route::get('/pagalba', [App\Http\Controllers\HomeController::class, 'pagalba'])->name('pagalba');
Route::get('/redaguoti_profili', [App\Http\Controllers\HomeController::class, 'redaguoti_profili'])->name('redaguoti_profili');


//administracine dalis
Route::get('/administracinis', [App\Http\Controllers\HomeController::class, 'administracinis'])->name('administracinis');
Route::get('/administracinis/uzsakymai', [App\Http\Controllers\HomeController::class, 'admin_uzsakymai'])->name('admin_uzsakymai');
Route::get('/administracinis/klientai', [App\Http\Controllers\HomeController::class, 'admin_klientai'])->name('admin_klientai');
Route::get('/administracinis/naujas_klientas', [App\Http\Controllers\HomeController::class, 'admin_prideti_klienta'])->name('admin_naujas_klientas');
Route::get('/administracinis/admin_klientas', [App\Http\Controllers\HomeController::class, 'admin_klientas'])->name('admin_klientas');
Route::get('/administracinis/admin_redaguoti_klienta', [App\Http\Controllers\HomeController::class, 'admin_redaguoti_klienta'])->name('admin_redaguoti_klienta');
Route::get('/administracinis/admin_pagalbos_sarasas', [App\Http\Controllers\HomeController::class, 'admin_pagalbos_sarasas'])->name('admin_pagalbos_sarasas');
Route::get('/administracinis/admin_pokalbio_langas', [App\Http\Controllers\HomeController::class, 'admin_pokalbio_langas'])->name('admin_pokalbio_langas');

