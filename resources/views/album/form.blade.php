@extends('layouts.welcome')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ isset($album) ? 'Editar Álbum' : 'Agregar Álbum' }}</div>

                <div class="card-body">
                    <form action="{{ isset($album) ? route('album.update', $album->id_Al) : route('album.store') }}" method="POST">
                        @csrf
                        @if(isset($album))
                            @method('PUT')
                        @endif

                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" value="{{ old('nombre', $album->nombre ?? '') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="portada">Portada:</label>
                            <input type="text" class="form-control" name="portada" id="portada" value="{{ old('portada', $album->portada ?? '') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="fecha_lanzamiento">Fecha de Lanzamiento:</label>
                            <input type="date" class="form-control" name="fecha_lanzamiento" id="fecha_lanzamiento" value="{{ old('fecha_lanzamiento', $album->fecha_lanzamiento ?? '') }}" required>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary mt-3">{{ isset($album) ? 'Actualizar' : 'Agregar' }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
