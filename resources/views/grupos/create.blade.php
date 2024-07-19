@extends('welcome')

@section('title', 'Ingresar Grupo')
@section('header', 'Ingresar Grupo')

@section('content')
<div class="container mt-5">
    <form action="{{ route('grupos.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="grado" class="form-label">Grado</label>
            <input type="number" class="form-control" id="grado" name="grado" required>
        </div>
        <div class="mb-3">
            <label for="seccion" class="form-label">Sección</label>
            <input type="text" class="form-control" id="seccion" name="seccion" required>
        </div>
        <div class="mb-3">
            <label for="area" class="form-label">Área</label>
            <input type="text" class="form-control" id="area" name="area" required>
        </div>
        <div class="mb-3">
            <label for="turno" class="form-label">Turno</label>
            <input type="text" class="form-control" id="turno" name="turno" required>
        </div>
        <div class="mb-3">
            <label for="tutor" class="form-label">Tutor</label>
            <input type="text" class="form-control" id="tutor" name="tutor" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
