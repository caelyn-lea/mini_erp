<?php

use App\Http\Controllers\CrudController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ItemoutController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\ReportController;


/*
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

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');  

Route::group(['middleware' => ['role:admin']], function(){
    // barang
    Route::resource('barang', BarangController::class);
    Route::get('/barang/delete/{id}', [App\Http\Controllers\BarangController::class, 'destroy']);
    Route::get('/barang/cetak', [App\Http\Controllers\BarangController::class, 'cetak']);
    // transaksi barang masuk
    Route::get('/list-inventory', [App\Http\Controllers\UserController::class, 'index']);
    Route::get('/checkout/{id}', [App\Http\Controllers\UserController::class, 'checkout']);
    Route::post('/cetak-resi/{id}', [App\Http\Controllers\UserController::class, 'cetakresi']);
    // list request barang masuk
    Route::get('/list-purchasing', [App\Http\Controllers\UserController::class, 'inventory']);
    Route::get('/enter/{id}', [App\Http\Controllers\UserController::class, 'enter']);
    // transaksi barang keluar
    Route::resource('itemout', ItemoutController::class);
    Route::get('/itemout/delete/{id}', [App\Http\Controllers\ItemoutController::class, 'destroy']);
    // grafik
    Route::get('/grafik-inventory', [App\Http\Controllers\ReportController::class, 'grafikinventory']);
    Route::get('/grafik-pembelian', [App\Http\Controllers\ReportController::class, 'grafikpembelian']);
    // laporan
    Route::get('/laporan-masuk', [App\Http\Controllers\ReportController::class, 'laporanMasuk']);
    Route::get('/laporan-keluar', [App\Http\Controllers\ReportController::class, 'laporanKeluar']);
    Route::get('/cetak-masuk', [App\Http\Controllers\ReportController::class, 'cetakMasuk']);
    Route::get('/cetak-keluar', [App\Http\Controllers\ReportController::class, 'cetakKeluar']);
});

Route::group(['middleware' => ['role:user']], function(){
    Route::resource('supplier', SupplierController::class);
    Route::get('/supplier/delete/{id}', [App\Http\Controllers\SupplierController::class, 'destroy']);
    Route::get('/list-pembelian', [App\Http\Controllers\CrudController::class, 'listpembelian']);
    Route::post('/done/{id}', [App\Http\Controllers\CrudController::class, 'done']);
});