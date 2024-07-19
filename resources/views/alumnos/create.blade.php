@extends('welcome')

@section('title', 'Ingresar Alumno')
@section('header', 'Ingresar Alumno')

@section('content')
<div class="container mt-5">
<form action="{{ route('alumnos.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" required>
    </div>
    <div class="mb-3">
        <label for="a_p" class="form-label">Apellido Paterno</label>
        <input type="text" class="form-control" id="a_p" name="a_p" required>
    </div>
    <div class="mb-3">
        <label for="a_m" class="form-label">Apellido Materno</label>
        <input type="text" class="form-control" id="a_m" name="a_m" required>
    </div>
    <div class="mb-3">
        <label for="correo" class="form-label">Correo Electrónico</label>
        <input type="email" class="form-control" id="correo" name="correo">
    </div>
    <div class="mb-3">
        <label for="telefono" class="form-label">Teléfono</label>
        <input type="text" class="form-control" id="telefono" name="telefono" required>
    </div>
    <div class="mb-3">
        <label for="f_nac" class="form-label">Fecha de Nacimiento</label>
        <input type="date" class="form-control" id="f_nac" name="f_nac" required>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
</div>
@endsection

