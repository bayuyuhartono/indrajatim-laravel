<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('sitemap.xml', [XmlController::class, 'sitemap']);
Route::get('{kategori}/sitemap.xml', [XmlController::class, 'sitemapKategori']);
Route::get('pencarian', [HomeController::class, 'cari']);
Route::get('pencarian/{keyword}', [HomeController::class, 'pencarian']);
Route::get('{kategori}', [HomeController::class, 'kategori_list']);
Route::get('{kategori}/{slug}', [DetailController::class, 'detail']);
Route::get('{kategori}/detail/{slug}', [RedirectController::class, 'detail_old_url']);