<?php

namespace App\Http\Controllers;

use App\Models\Grupo;
use Illuminate\Http\Request;

class GrupoController extends Controller
{
    public function index()
    {
        $grupos = Grupo::all();
        return view('grupos.index', compact('grupos'));
    }

    public function create()
    {
        return view('grupos.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
 
            'grado' => 'required|integer',
            'seccion' => 'required|string',
            'area' => 'required|string',
            'turno' => 'required|string',
            'tutor' => 'required|string',
        ]);

        Grupo::create($validatedData);

        return redirect()->route('grupos.index')->with('success', 'Grupo creado correctamente.');
    }
}
