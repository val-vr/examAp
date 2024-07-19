@extends('welcome')



@section('content')
<div class="container mt-5">
    <a href="{{ route('grupos.create') }}" class="btn btn-primary mb-3">Agregar Grupo</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Clave</th>
                <th>Grado</th>
                <th>Sección</th>
                <th>Área</th>
                <th>Turno</th>
                <th>Tutor</th>
            </tr>
        </thead>
        <tbody>
            @foreach($grupos as $grupo)
                <tr>
                    <td>{{ $grupo->cve }}</td>
                    <td>{{ $grupo->grado }}</td>
                    <td>{{ $grupo->seccion }}</td>
                    <td>{{ $grupo->area }}</td>
                    <td>{{ $grupo->turno }}</td>
                    <td>{{ $grupo->tutor }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
