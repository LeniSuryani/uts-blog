<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\UserController;

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

// admin
Route::get('dashboard', [ArtikelController::class, 'dashboard']);

// 
// 
// artikel
Route::get('admin/artikel', [ArtikelController::class, 'index']);
Route::get('admin/artikel/create', [ArtikelController::class, 'create']);
Route::post('admin/artikel', [ArtikelController::class, 'store']);
Route::get('admin/artikel/{artikel}', [ArtikelController::class, 'show']);
Route::get('admin/artikel/{artikel}/edit', [ArtikelController::class, 'edit']);
Route::put('admin/artikel/{artikel}', [ArtikelController::class, 'update']);
Route::delete('admin/artikel/{artikel}', [ArtikelController::class, 'destroy']);

// 
// 
// Komentar
Route::get('admin/komentar', [KomentarController::class, 'index']);
Route::get('admin/komentar/create', [KomentarController::class, 'create']);
Route::post('admin/komentar', [KomentarController::class, 'store']);
Route::get('admin/komentar/{komentar}', [KomentarController::class, 'show']);
Route::get('admin/komentar/{komentar}/edit', [KomentarController::class, 'edit']);
Route::put('admin/komentar/{komentar}', [KomentarController::class, 'update']);
Route::delete('admin/komentar/{komentar}', [KomentarController::class, 'destroy']);
// 
// 
// user
Route::get('admin/user', [UserController::class, 'index']);






// user
Route::get('/', [HomeController::class, 'user']);

Route::get('artikel', [HomeController::class, 'artikel']);
Route::get('artikel/{artikel}', [HomeController::class, 'artikel_show']);




Route::get('kontak', [HomeController::class, 'kontak']);
/*
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::resource('produk', ProdukController::class);
    Route::post('produk/filter', [ProdukController::class, 'filter']);
    Route::resource('kategori', KategoriController::class);
    Route::resource('user', UserController::class);
    Route::resource('promo', PromoController::class);
});


contoh crud yg lama:
Route::get('produk', [ProdukController::class, 'index']); //mendefinisikan link, lalu di arahkan ke controller yg menampilkan view.produk.index
Route::get('produk/create', [ProdukController::class, 'create']);
Route::post('produk', [ProdukController::class, 'store']); //dari view(create)lalu ke routes dan mengarah ke Produk Controller
Route::get('produk/{produk}', [ProdukController::class, 'show']);
Route::get('produk/{produk}/edit', [ProdukController::class, 'edit']);
Route::put('produk/{produk}', [ProdukController::class, 'update']);
Route::delete('produk/{produk}', [ProdukController::class, 'destroy']);

*/