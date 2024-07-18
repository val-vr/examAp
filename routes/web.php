<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReproductorController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\CancionController;
use App\Http\Controllers\ArtistaController;

Route::get('artista', [ArtistaController::class, 'lista'])->name('artista.artistas');
Route::get('artista/crear', [ArtistaController::class, 'crear'])->name('artista.crear');
Route::post('artista', [ArtistaController::class, 'guardar'])->name('artista.guardar');
Route::get('artista/{artista}/editar', [ArtistaController::class, 'editar'])->name('artista.editar');
Route::put('artista/{artista}', [ArtistaController::class, 'update'])->name('artista.update');
Route::delete('artista/{artista}', [ArtistaController::class, 'eliminar'])->name('artista.eliminar');

Route::get('/',function(){
    return view('layouts.welcome');
});


Route::get('album', [AlbumController::class, 'lista'])->name('album.albums');
Route::get('album/crear', [AlbumController::class, 'crear'])->name('album.crear');
Route::post('album', [AlbumController::class, 'guardar'])->name('album.guardar');
Route::get('album/{album}/editar', [AlbumController::class, 'editar'])->name('album.editar');
Route::put('album/{album}', [AlbumController::class, 'update'])->name('album.update');
Route::delete('album/{album}', [AlbumController::class, 'eliminar'])->name('album.eliminar');









Route::get('canciones', [CancionController::class, 'lista'])->name('cancion.lista');
Route::get('cancion/crear', [CancionController::class, 'create'])->name('cancion.create');
Route::post('cancion', [CancionController::class, 'guardar'])->name('cancion.guardar');
Route::get('cancion/{cancion}/editar', [CancionController::class, 'edit'])->name('cancion.edit');
Route::put('cancion/{cancion}', [CancionController::class, 'update'])->name('cancion.update');
Route::delete('cancion/{cancion}', [CancionController::class, 'destroy'])->name('cancion.destroy');







Route::get('/reproducir', [ReproductorController::class, 'index'])->name('reproductor.index');
Route::get('/reproductor', [ReproductorController::class, 'index'])->name('reproductor.index');
Route::get('/reproducir/{id}', [ReproductorController::class, 'reproducir'])->name('reproductor.reproducir');






