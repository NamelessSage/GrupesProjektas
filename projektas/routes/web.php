<?php

use App\Http\Controllers\CartPartController;
use App\Http\Controllers\construction\AddingController;
use App\Http\Controllers\construction\CatalogController;
use App\Http\Controllers\construction\ComputerController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\OrderController;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/krepselis', [App\Http\Controllers\HomeController::class, 'krepselis'])->name('krepselis');
Route::get('/konstravimo', [App\Http\Controllers\HomeController::class, 'konstravimo'])->name('konstravimo');
Route::get('/preke', [App\Http\Controllers\HomeController::class, 'apziura'])->name('preke');
Route::get('/krepselioPatvirtinimas', [App\Http\Controllers\HomeController::class, 'krepselioPatvirtinimas'])->name('krepselioPatvirtinimas');
Route::get('/konstravimo', [App\Http\Controllers\HomeController::class, 'konstravimo'])->name('konstravimo');

//Kliento dalis
Route::get('/klientas', [App\Http\Controllers\KlientoController::class, 'klientas'])->name('klientas');
Route::get('/redaguoti_profili', [App\Http\Controllers\KlientoController::class, 'redaguoti_profili'])->name('redaguoti_profili');
Route::post('/redaguoti_profili', [App\Http\Controllers\KlientoController::class, 'redaguoti_profilipost'])->name('redaguoti_profilipost');
Route::get('/atsiliepimai', [App\Http\Controllers\KlientoController::class, 'atsiliepimai'])->name('atsiliepimai');
Route::get('/delete_user', [App\Http\Controllers\KlientoController::class, 'delete_user'])->name('delete_user');
Route::get('/pagalba', [App\Http\Controllers\KlientoController::class, 'pagalba'])->name('pagalba');


//administracine dalis
//Route::middleware(['auth', 'admin'])->group( function () {
Route::get('/administracinis', [App\Http\Controllers\AdminController::class, 'administracinis'])->name('administracinis');
Route::get('/administracinis/uzsakymai', [App\Http\Controllers\AdminController::class, 'admin_uzsakymai'])->name('admin_uzsakymai');
Route::get('/administracinis/klientai', [App\Http\Controllers\AdminController::class, 'admin_klientai'])->name('admin_klientai');
Route::get('/administracinis/naujas_klientas', [App\Http\Controllers\AdminController::class, 'admin_prideti_klienta'])->name('admin_naujas_klientas');
Route::post('/administracinis/naujas_klientas', [App\Http\Controllers\AdminController::class, 'admin_prideti_klienta_post'])->name('admin_naujas_klientas_post');
Route::get('/administracinis/admin_klientas_perziura/{id}', [App\Http\Controllers\AdminController::class, 'admin_klientas'])->name('admin_klientas');
Route::get('/administracinis/admin_redaguoti_klienta/{id}', [App\Http\Controllers\AdminController::class, 'admin_redaguoti_klienta'])->name('admin_redaguoti_klienta');
Route::get('/administracinis/admin_pagalbos_sarasas', [App\Http\Controllers\AdminController::class, 'admin_pagalbos_sarasas'])->name('admin_pagalbos_sarasas');
Route::get('/administracinis/admin_pokalbio_langas', [App\Http\Controllers\AdminController::class, 'admin_pokalbio_langas'])->name('admin_pokalbio_langas');
//});

//construction
Route::get('/katalogas', [CatalogController::class, 'index'])->name('katalogas');

Route::get('/katalogas/sortByPrice', [CatalogController::class, 'sortByPrice'])->name('sortByPrice');
Route::get('/katalogas/sortByName', [CatalogController::class, 'sortByName'])->name('sortByName');
Route::get('/katalogas/sortByCreator', [CatalogController::class, 'sortByCreator'])->name('sortByCreator');

Route::get('/katalogas/addPart/{id}', [CatalogController::class, 'addPart'])->name('addPart');

Route::get('/kompiuteris', [ComputerController::class, 'index'])->name('kompiuteris');
Route::get('/kompiuteris/deletePart/{id}', [ComputerController::class, 'deletePart'])->name('deletePart');

Route::post('/pildymas', [AddingController::class, 'store']);
Route::get('/pildymas', [AddingController::class, 'index'])->name('pildymas');

//cart
Route::get('/addToCart', [CartController::class, 'addToCart'])->name('addToCart');
Route::get('cart', [CartController::class, 'index'])->name('cart');
Route::get('delete-cart-part/{id}', [CartPartController::class, 'destroy'])->name('destroyCartPart');
Route::get('make-order/{cart}', [OrderController::class, 'create'])->name('makeOrder');
Route::get('discount/{cart}', [CartController::class, 'addDiscount'])->name('createDiscount');
Route::post('changeQuantity/{cartPart}', [CartPartController::class, 'changeQuantity'])->name('changeQuantity');
