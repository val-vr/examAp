@extends('welcome')

@section('title', 'Lista de Relaciones Alumno-Grupo')
@section('header', 'Lista de Relaciones Alumno-Grupo')

@section('content')
<div class="container mt-5">
    <a href="{{ route('alumnog.create') }}" class="btn btn-primary mb-3">Agregar Relación</a>

  
    <form action="{{ route('alumnog.index') }}" method="GET" class="mb-3">
        <div class="input-group">
            <input type="text" name="buscar" value="{{ $buscar }}" class="form-control" placeholder="Buscar por ID">
            <button type="submit" class="btn btn-secondary">Buscar</button>
        </div>
    </form>

   
    <div class="mb-3">
        <a href="{{ route('alumnog.index', ['order' => 'asc', 'buscar' => $buscar]) }}" class="btn btn-secondary {{ $order == 'asc' ? 'active' : '' }}">Orden Ascendente</a>
        <a href="{{ route('alumnog.index', ['order' => 'desc', 'buscar' => $buscar]) }}" class="btn btn-secondary {{ $order == 'desc' ? 'active' : '' }}">Orden Descendente</a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Alumno</th>
                <th>Grupo</th>
            </tr>
        </thead>
        <tbody>
            @forelse($alumnogs as $alumnog)
                <tr>
                    <td>{{ $alumnog->id }}</td>
                    <td>{{ $alumnog->alumno->nombre }} {{ $alumnog->alumno->a_p }} {{ $alumnog->alumno->a_m }}</td>
                    <td>{{ $alumnog->grupo->grado }} {{ $alumnog->grupo->seccion }} {{ $alumnog->grupo->area }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">No se encontraron resultados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
