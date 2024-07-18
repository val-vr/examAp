@extends('layouts.welcome')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Álbum</div>

                <div class="card-body">
                    <form action="{{ route('album.update', $album->id_Al) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" value="{{ old('nombre', $album->nombre) }}" required>
                        </div>

                        <div class="form-group">
                            <label for="portada">Portada:</label>
                            <input type="text" class="form-control" name="portada" id="portada" value="{{ old('portada', $album->portada) }}" required>
                        </div>

                        <div class="form-group">
                            <label for="fecha_lanzamiento">Fecha de Lanzamiento:</label>
                            <input type="date" class="form-control" name="fecha_lanzamiento" id="fecha_lanzamiento" value="{{ old('fecha_lanzamiento', $album->fecha_lanzamiento) }}" required>
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

