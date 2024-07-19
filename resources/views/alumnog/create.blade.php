@extends('welcome')

@section('title', 'Relacionar Alumno con Grupo')
@section('header', 'Relacionar Alumno con Grupo')

@section('content')
<div class="container mt-5">
    <form action="{{ route('alumnog.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="alumno_id" class="form-label">ID Alumno</label>
            <select class="form-select" id="alumno_id" name="alumno_id" required>
                @foreach($alumnos as $alumno)
                    <option value="{{ $alumno->Mat }}">{{ $alumno->nombre }} {{ $alumno->a_p }} {{ $alumno->a_m }}</option>
                @endforeach
            </select>
        </div> 
        <div class="mb-3">
            <label for="grupo_id" class="form-label">ID Grupo</label>
            <select class="form-select" id="grupo_id" name="grupo_id" required>
                @foreach($grupos as $grupo)
                    <option value="{{ $grupo->cve }}">{{ $grupo->grado }} {{ $grupo->seccion }} {{ $grupo->area }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection


