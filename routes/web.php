<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\onshop;
use App\Http\Controllers\barangControllers;

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

Route::get('/', [barangControllers::class, 'index'])->name('welcome');

Route::get('/detail', [barangControllers::class, 'detail'])->name('shop');
Route::get('/tambah', [barangControllers::class, 'create'])->name('tambah');
Route::post('/tambah', [barangControllers::class, 'store']);

Route::get('/edit/{id}', [barangControllers::class, 'edit'])->name('edit');
Route::put('/update/{id}', [barangControllers::class, 'update'])->name('update');


Route::delete('/hapus/{id}', [barangControllers::class, 'destroy'])->name('destroy');
