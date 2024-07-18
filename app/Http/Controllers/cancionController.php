<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cancion;
use App\Models\Album;
use App\Models\Artista;

class CancionController extends Controller
{
    public function lista()
    {
        $cancions = Cancion::with('album', 'artista')->get();
        return view('cancion.cancions', compact('cancions'));

        
    }

    public function create()
    {
        $albumes = Album::all();
        $artistas = Artista::all();
        return view('cancion.form', compact('albumes', 'artistas'));
    }

    public function guardar(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'duracion' => 'required',
            'album_id' => 'required',
            'artista_id' => 'required'
        ]);

        Cancion::create([
            'nombre' => $request->nombre,
            'duracion' => $request->duracion,
            'album_id' => $request->album_id,
            'artista_id' => $request->artista_id
        ]);

        return redirect()->route('cancion.lista');
    }

    public function edit(Cancion $cancion)
    {
        $albumes = Album::all();
        $artistas = Artista::all();
        return view('cancion.formE', compact('cancion', 'albumes', 'artistas'));
    }

    public function update(Request $request, Cancion $cancion)
    {
        $request->validate([
            'nombre' => 'required',
            'duracion' => 'required',
            'album_id' => 'required',
            'artista_id' => 'required'
        ]);

        $cancion->update([
            'nombre' => $request->nombre,
            'duracion' => $request->duracion,
            'album_id' => $request->album_id,
            'artista_id' => $request->artista_id
        ]);

        return redirect()->route('cancion.lista');
    }

    public function destroy(Cancion $cancion)
    {
        $cancion->delete();
        return redirect()->route('cancion.lista');
    }
}
