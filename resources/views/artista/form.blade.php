@extends('layouts.welcome')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Agregar Artista</div>
                    <div class="card-body">
                        <form action="{{ route('artista.guardar') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" value="{{ old('nombre') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="apodo">Apodo:</label>
                                <input type="text" class="form-control" name="apodo" id="apodo" value="{{ old('apodo') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                                <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" required>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary mt-3">Agregar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
