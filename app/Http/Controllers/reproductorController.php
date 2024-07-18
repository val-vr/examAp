<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cancion;
use App\Models\Artista;
use App\Models\Album;

class ReproductorController extends Controller
{
    public function index(Request $request)
{
    
    $query = Cancion::with('artista', 'album');

    
    if ($request->filled('id_C')) {
        $query->where('id_C', $request->id_C); 
    }


    $orderBy = $request->input('orderBy', 'id_C');
    $order = $request->input('order', 'asc');
    $query->orderBy($orderBy, $order);


    $cancions = $query->get();

    return view('reproductor.index', compact('cancions'));
}

public function reproducir($id)
{
    $cancion = Cancion::with('artista', 'album')->findOrFail($id);
    return view('reproductor.reproducir', compact('cancion'));
}

}