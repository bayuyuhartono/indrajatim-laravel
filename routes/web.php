<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminCheck;

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminBeritaController;

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\XmlController;

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

Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'login']);
    Route::post('/login', [AdminAuthController::class, 'checkLogin']);
    Route::get('/logout', [AdminAuthController::class, 'logout']);
    Route::middleware([AdminCheck::class])->group(function () {
        Route::get('/', [AdminDashboardController::class, 'index']);
        Route::resource('berita', AdminBeritaController::class);
        Route::get('berita/delete/{id}', [AdminBeritaController::class, 'destroy']);
        Route::post('berita/edit/{id}', [AdminBeritaController::class, 'update']);
        Route::get('getBerita', [AdminBeritaController::class, 'getBerita'])->name('ajax.berita'); 
    });
});

Route::get('/', [BerandaController::class, 'index']);
Route::get('sitemap.xml', [XmlController::class, 'sitemap']);
Route::get('{kategori}/sitemap.xml', [XmlController::class, 'sitemapKategori']);
Route::get('pencarian', [BerandaController::class, 'cari']);
Route::get('pencarian/{keyword}', [BerandaController::class, 'pencarian']);
Route::get('{kategori}', [BerandaController::class, 'kategori_list']);
Route::get('{kategori}/{slug}', [DetailController::class, 'detail']);
Route::get('{kategori}/detail/{slug}', [RedirectController::class, 'detail_old_url']);