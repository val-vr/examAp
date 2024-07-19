<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function index()
    {
        $alumnos = Alumno::all();
        return view('alumnos.index', compact('alumnos'));
    }

    public function create()
    {
        return view('alumnos.create');
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'nombre' => 'required|string',
        'a_p' => 'required|string',
        'a_m' => 'required|string',
        'correo' => 'nullable|email',
        'telefono' => 'required|string|max:10',
        'f_nac' => 'required|date',
    ]);

    Alumno::create($validatedData);

    return redirect()->route('alumnos.index')->with('success', 'Alumno creado correctamente.');
}
}

