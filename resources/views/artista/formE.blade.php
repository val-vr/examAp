@extends('layouts.welcome')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Editar Artista</div>

                    <div class="card-body">
                        <form action="{{ route('artista.update', $artista->id_A) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" value="{{ old('nombre', $artista->nombre) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="apodo">Apodo:</label>
                                <input type="text" class="form-control" name="apodo" id="apodo" value="{{ old('apodo', $artista->apodo) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                                <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" value="{{ old('fecha_nacimiento', $artista->fecha_nacimiento) }}" required>
                            </div>

                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary mt-3">Actualizar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
