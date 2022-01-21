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

// Route::get('/', function () {
//     return view('home');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\ProductController::class, 'index'])->name('dash');
Route::get('/home', [App\Http\Controllers\ProductController::class, 'index'])->name('home');
Route::get('/view', [App\Http\Controllers\ProductController::class, 'view'])->name('view');
Route::get('/add', [App\Http\Controllers\ProductController::class, 'add'])->name('add_product');
Route::get('/product/{id}', [App\Http\Controllers\ProductController::class, 'detail'])->name('detail');
Route::post('/product/store', [App\Http\Controllers\ProductController::class, 'store'])->name('store_product');
Route::delete('/product/destroy/{id}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('destroy');

// music
Route::get('/music/{id}', [App\Http\Controllers\MusicController::class, 'detail'])->name('detail');
Route::post('/music/store', [App\Http\Controllers\MusicController::class, 'store'])->name('store_music');
Route::delete('/music/destroy/{id}', [App\Http\Controllers\MusicController::class, 'destroy'])->name('destroy');


Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
