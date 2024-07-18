<?php

namespace App\Http\Controllers;

use App\Models\Cancion;
use Illuminate\Http\Request;

class ReproductorController extends Controller
{
    public function index(Request $request)
    {
        $consulta = Cancion::query();

        if ($request->has('id_C')) {
            $consulta->where('id_C', $request->input('id_C'));
        }

        if ($request->has('ordenarPor') && $request->has('orden')) {
            $consulta->orderBy($request->input('ordenarPor'), $request->input('orden'));
        }

        $canciones = $consulta->get();

        return view('reproductor.index', compact('canciones'));
    }

    public function reproducir($id_C)
    {
        $cancion = Cancion::findOrFail($id_C);
        $totalCanciones = Cancion::count();

        $primerId = Cancion::orderBy('id_C', 'asc')->first()->id_C;
        $ultimoId = Cancion::orderBy('id_C', 'desc')->first()->id_C;

        $esPrimera = ($id_C == $primerId);
        $esUltima = ($id_C == $ultimoId);

        // Obtener todos los IDs de canciones en orden ascendente
        $todosIds = Cancion::orderBy('id_C', 'asc')->pluck('id_C')->toArray();

        return view('reproductor.reproducir', compact('cancion', 'totalCanciones', 'esPrimera', 'esUltima', 'primerId', 'ultimoId', 'todosIds'));
    }
}
