<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropietarioController;
use App\Http\Controllers\MascotaController;

Route::get('/propietarios', [PropietarioController::class, 'index'])->name('propietarios.index');

Route::get('/propietarios/buscar-mascotas', [PropietarioController::class, 'searchMascotasForm'])->name('propietarios.searchForm');
Route::post('/propietarios/buscar-mascotas', [PropietarioController::class, 'listMascotasByOwner'])->name('propietarios.listByOwner');

Route::get('/propietarios/{id}/edit', [PropietarioController::class, 'edit'])->name('propietarios.edit');
Route::put('/propietarios/{id}', [PropietarioController::class, 'update'])->name('propietarios.update');

Route::get('/mascotas', [MascotaController::class, 'index'])->name('mascotas.index');

Route::get('/mascotas/{id}', [MascotaController::class, 'show'])->name('mascotas.show');

Route::get('/mascotas/historial/nuevo', [MascotaController::class, 'createHistorial'])->name('mascotas.createHistorial');
Route::post('/mascotas/historial', [MascotaController::class, 'storeHistorial'])->name('mascotas.storeHistorial');