<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;

class AlbumController extends Controller
{
    public function lista()
    {
        $albums = Album::all();
        return view('album.albums', compact('albums'));
    }

    public function crear()
    {
        return view('album.form');
    }

    public function editar(Album $album)
    {
        return view('album.form', compact('album'));
    }

    public function guardar(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'portada' => 'required',
            'fecha_lanzamiento' => 'required|date',
        ]);

        Album::create($request->all());

        return redirect()->route('album.albums')
                         ->with('success', 'Álbum creado exitosamente.');
    }

    public function update(Request $request, Album $album)
    {
        $request->validate([
            'nombre' => 'required',
            'portada' => 'required',
            'fecha_lanzamiento' => 'required|date',
        ]);

        $album->update($request->all());

        return redirect()->route('album.albums')
                         ->with('success', 'Álbum actualizado exitosamente.');
    }

    public function eliminar(Album $album)
    {
        $album->delete();

        return redirect()->route('album.albums')
                         ->with('success', 'Álbum eliminado exitosamente.');
    }
}
