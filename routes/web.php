<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\FHomeController;
use App\Http\Controllers\FKelasController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\KelasController;
use App\Http\Controllers\admin\MateriController;
use App\Http\Controllers\admin\KategoriKelasController;

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
//     return view('frontend.index');
// });

Route::get('/', [FHomeController::class, 'index'])->name('Fhome');
Route::get('/Fkelas/{KategoriKelas:slug}', [FKelasController::class, 'index'])->name('Fkelas.index');
Route::get('/Fkelas/{KategoriKelas:slug}/{Kelas:slug}', [FKelasController::class, 'show'])->name('Fkelas.show');


Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart', [CartController::class, 'addToCart'])->name('addToCart');
Route::post('/cart/update', [CartController::class, 'updateCart'])->name('updateCart');
Route::post('/cart/remove', [CartController::class, 'removeCart'])->name('removeCart');
Route::post('/cart/removeAll', [CartController::class, 'clearAllCart'])->name('removeAllCart');
Route::post('/cart/buyAll', [CartController::class, 'store'])->name('buyAll');


Route::get('owned', [StatusController::class, 'index'])->name('owned.index');




Auth::routes();
Route::group(['middleware' => ['role:admin']], function() {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('/kelas', KelasController::class);
    Route::resource('/kategori', kategoriKelasController::class);
    Route::resource('/materi', MateriController::class);
    Route::get('/checkout', [StatusController::class, 'indexAdmin'])->name('checkout.admin');
    Route::put('/checkout/{id}', [StatusController::class, 'update'])->name('checkout.update');


});

// Sluggable
Route::get('/dashboard/checkSlug', [kategoriKelasController::class, 'checkSlug']);
Route::get('/dashboard/checkSlug', [KelasController::class, 'checkSlug']);
