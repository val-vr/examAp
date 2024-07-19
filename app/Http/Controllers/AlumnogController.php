<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Grupo;
use App\Models\Alumnog;
use Illuminate\Http\Request;

class AlumnogController extends Controller
{
    public function index(Request $request)
    {
        $order = $request->input('order', 'asc');
        if (!in_array($order, ['asc', 'desc'])) {
            $order = 'asc';
        }

        $buscar = $request->input('buscar', '');

        $alumnogs = Alumnog::with('alumno', 'grupo')
            ->where('id', 'like', "%{$buscar}%")
            ->orderBy('id', $order)
            ->get();


        return view('alumnog.index', compact('alumnogs', 'order', 'buscar'));
    }

    public function create()
    {
        $alumnos = Alumno::all();
        $grupos = Grupo::all();
        return view('alumnog.create', compact('alumnos', 'grupos'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'alumno_id' => 'required|exists:alumnos,Mat',
            'grupo_id' => 'required|exists:grupos,cve',
        ]);

        Alumnog::create($validatedData);

        return redirect()->route('alumnog.index')->with('success', 'Relación alumno-grupo creada correctamente.');
    }
}


