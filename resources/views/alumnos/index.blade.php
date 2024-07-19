@extends('welcome')

@section('title', 'Listado de Alumnos')
@section('header', 'Listado de Alumnos')

@section('content')
<div class="container mt-5">
    <a href="{{ route('alumnos.create') }}" class="btn btn-primary mb-3">Agregar Alumno</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Matrícula</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Correo Electrónico</th>
                <th>Teléfono</th>
                <th>Fecha de Nacimiento</th>
            </tr>
        </thead>
        <tbody>
            @foreach($alumnos as $alumno)
                <tr>
                    <td>{{ $alumno->Mat }}</td>
                    <td>{{ $alumno->nombre }}</td>
                    <td>{{ $alumno->a_p }}</td>
                    <td>{{ $alumno->a_m }}</td>
                    <td>{{ $alumno->correo }}</td>
                    <td>{{ $alumno->telefono }}</td>
                    <td>{{ $alumno->f_nac }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
