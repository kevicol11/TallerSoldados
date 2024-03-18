<?php

use App\Http\Controllers\CompañiaController;
use App\Http\Controllers\CuartelController;
use App\Http\Controllers\CuerpoController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\SoidierController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/soidier', [SoidierController::class,'mostrar'])->name('mostrarsoidier');
Route::post('/soidier-store', [SoidierController::class,'store'])->name('store.soidier');

Route::get('Cuartel', [CuartelController::class,'mostrar'])->name('mostrarCuartel');
Route::post('Cuartel-store', [CuartelController::class,'store'])->name('store.Cuartel');

Route::get('/Cuerpo', [CuerpoController::class,'mostrar'])->name('mostrarCuerpo');
Route::post('/Cuerpo-store', [CuerpoController::class,'store'])->name('store.Cuerpo');

Route::get('/Compañia', [CompañiaController::class,'mostrar'])->name('mostrarCompañia');
Route::post('/Compañia-store', [CompañiaController::class,'store'])->name('store.Compañia');

Route::get('/servicio', [ServicioController::class,'mostrar'])->name('mostrarservicio');
Route::post('/servicio-store', [ServicioController::class,'store'])->name('store.servicio');