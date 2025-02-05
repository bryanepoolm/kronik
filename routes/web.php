<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\CreditLineController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('modules.home.index');
});

Route::get('clientes/datosIne', [ClientController::class, 'datosIne'])->name('client.ine');
Route::post('clientes/datosIneStore', [ClientController::class, 'datosIneStore'])->name('ine.store');
Route::post('clientes/datosPersonalesStore', [ClientController::class, 'datosPersonalesStore']);
Route::get('clientes/datosPersonales', [ClientController::class, 'datosPersonales']);

Route::resource('/productos', ProductController::class);
Route::resource('/lineasCredito', CreditLineController::class);
