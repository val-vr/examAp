<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\AlumnogController;

Route::get('/', function () {
    return view('welcome');
});




Route::get('alumnos', [AlumnoController::class, 'index'])->name('alumnos.index');
Route::get('alumnos/create', [AlumnoController::class, 'create'])->name('alumnos.create');
Route::post('alumnos', [AlumnoController::class, 'store'])->name('alumnos.store');


Route::get('grupos', [GrupoController::class, 'index'])->name('grupos.index');
Route::get('grupos/create', [GrupoController::class, 'create'])->name('grupos.create');
Route::post('grupos', [GrupoController::class, 'store'])->name('grupos.store');

Route::get('alumnog', [AlumnogController::class, 'index'])->name('alumnog.index');
Route::get('alumnog/create', [AlumnogController::class, 'create'])->name('alumnog.create');
Route::post('alumnog', [AlumnogController::class, 'store'])->name('alumnog.store');


//aqui estan las dos practicas, reflejar en la base de datos los datos proporcionados en el formulario y p2. aplicar los filtros 