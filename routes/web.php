<?php

use App\Http\Controllers\StoreController;
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
//home
Route::get('/', [StoreController::class, 'index'])->name('home');

//buat
Route::get('/buat', [StoreController::class, 'create'])->name('store.tambah-data');
Route::post('/buat-data', [StoreController::class, 'store'])->name('store.buat-data');

//edit
Route::get('/edit/{id}', [StoreController::class, 'edit'])->name('store.edit');
Route::post('/update/{id}', [StoreController::class, 'update'])->name('store.update');

//detail
Route::get('/detail/{id}', [StoreController::class, 'show'])->name('store.show');

//delete
Route::delete('/delete/{id}', [StoreController::class, 'destroy'])->name('store.destroy');