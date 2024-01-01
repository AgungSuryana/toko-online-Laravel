<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [App\Http\Controllers\Controller::class, 'index'])->name('Home');
Route::get('/shop', [App\Http\Controllers\Controller::class, 'shop'])->name('shop');
Route::get('/transaksi', [App\Http\Controllers\Controller::class, 'transaksi'])->name('transaksi');
Route::get('/contact', [App\Http\Controllers\Controller::class, 'contact'])->name('contact');