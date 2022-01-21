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

Route::get('/', [App\Http\Controllers\MusicController::class, 'index'])->name('dash');
Route::get('/home', [App\Http\Controllers\MusicController::class, 'index'])->name('home');

// music
Route::get('/music/{id}', [App\Http\Controllers\MusicController::class, 'detail'])->name('detail');
Route::get('/add', [App\Http\Controllers\MusicController::class, 'add'])->name('add');
Route::post('/music/store', [App\Http\Controllers\MusicController::class, 'store'])->name('store_music');
Route::delete('/music/destroy/{id}', [App\Http\Controllers\MusicController::class, 'destroy'])->name('destroy');
Route::get('/playlist', [App\Http\Controllers\MusicController::class, 'playlist'])->name('playlist');
Route::get('/playlist/{id}', [App\Http\Controllers\MusicController::class, 'playlist_play'])->name('playlist_play');
Route::get('/category', [App\Http\Controllers\MusicController::class, 'category'])->name('category');
Route::get('/category/{id}', [App\Http\Controllers\MusicController::class, 'categoryDetail'])->name('categoryDetail');
Route::get('/category/{id}/{music}', [App\Http\Controllers\MusicController::class, 'category_play'])->name('category_play');
Route::get('/addCategory', [App\Http\Controllers\MusicController::class, 'addCategory'])->name('add_product');
Route::post('/category/store', [App\Http\Controllers\MusicController::class, 'categoryStore'])->name('store_category');
Route::get('/music/edit/{id}', [App\Http\Controllers\MusicController::class, 'edit'])->name('edit');
Route::patch('/music/update', [App\Http\Controllers\MusicController::class, 'musicUpdate'])->name('musicUpdate');

// user
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
Route::get('/profile/{id}', [App\Http\Controllers\HomeController::class, 'profileEdit'])->name('profileEdit');
Route::patch('/profile/update', [App\Http\Controllers\HomeController::class, 'profileUpdate'])->name('profileUpdate');


