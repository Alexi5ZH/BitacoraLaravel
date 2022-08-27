<?php

use App\Http\Controllers\Admin\BitacoraController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductoController;
use Illuminate\Support\Facades\Route;
Route::get('', [HomeController::class, 'index'])->name('admin.home');

Route::resource('productos', ProductoController::class)->names('admin.productos');

Route::get('bitacora', [BitacoraController::class, 'index'])->name('admin.bitacora');