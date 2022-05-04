<?php

use App\Http\Controllers\maestro;
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

Route::get('/', [maestro::class, 'maes_ayiti_espo'])->name('ayiti_espo');
Route::get('/atik', [maestro::class, 'maes_atik'])->name('atik');
Route::get('/pwogramasyon', [maestro::class, 'maes_pwogramasyon'])->name('pwogramasyon');
Route::get('/videyo', [maestro::class, 'maes_videyo'])->name('videyo');
Route::get('/lejand', [maestro::class, 'maes_lejand'])->name('lejand');
Route::get('/kontak', [maestro::class, 'maes_kontak'])->name('kontak');

