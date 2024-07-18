<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artista;

class ArtistaController extends Controller
{ 
    public function lista()
    {
        $artistas = Artista::all();
        return view('artista.artistas', compact('artistas'));
    }

    public function crear()
    {
        return view('artista.form');
    }

    public function editar(Artista $artista)
    {
        return view('artista.formE', compact('artista'));
    }

    public function guardar(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apodo' => 'required',
            'fecha_nacimiento' => 'required|date',
        ]);

        Artista::create($request->all());

        return redirect()->route('artista.artistas')
                         ->with('success', 'Artista creado exitosamente.');
    }

    public function update(Request $request, Artista $artista)
    {
        $request->validate([
            'nombre' => 'required',
            'apodo' => 'required',
            'fecha_nacimiento' => 'required|date',
        ]);

        $artista->update($request->all());

        return redirect()->route('artista.artistas')
                         ->with('success', 'Artista actualizado exitosamente.');
    }

    public function eliminar(Artista $artista)
    {
        $artista->delete();

        return redirect()->route('artista.artistas')
                         ->with('success', 'Artista eliminado exitosamente.');
    }
}



