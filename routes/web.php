<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BelajarController;
use App\Http\Controllers\CalculatorController;
use Brick\Math\Internal\Calculator;

Route::get('/', [\App\Http\Controllers\LoginController::class, 'index']);
Route::post('action-login', [\App\Http\Controllers\LoginController::class, 'actionLogin'])->name('action-login');;
Route::get('belajar', [\App\Http\Controllers\BelajarController::class, 'index'])->name('belajar.index');
Route::get('belajar/tambah', [\App\Http\Controllers\BelajarController::class, 'tambah'])->name('belajar.tambah');
Route::post('storeTambah', [\App\Http\Controllers\BelajarController::class, 'storeTambah'])->name('storeTambah');
Route::get('belajar/kurang', [\App\Http\Controllers\BelajarController::class, 'kurang'])->name('belajar.kurang');
Route::post('storeKurang', [\App\Http\Controllers\BelajarController::class, 'storeKurang'])->name('storeKurang');

Route::get('calculator', [CalculatorController::class, 'create']);
Route::post('calculator/create', [CalculatorController::class, 'store'])->name('calculator.store');
// get: preview / menampilkan doang gaada action apa apa
// post: mengirim sebuah data melalui form
// put: mengirim sebuah data melalui form tapi update (edit)
// delete: mengirim sebuah data melalui form tapi hapus