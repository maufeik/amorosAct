<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropietarioController;
use App\Http\Controllers\MascotaController;

Route::get('/', function () { return view('welcome'); });
Route::resource('propietarios', PropietarioController::class);
Route::resource('mascotas', MascotaController::class);