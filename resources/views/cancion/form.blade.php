@extends('layouts.welcome')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Agregar Canción</div>
                    <div class="card-body">
                        <form action="{{ route('cancion.guardar') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" value="{{ old('nombre') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="duracion">Duración:</label>
                                <input type="number" class="form-control" name="duracion" id="duracion" value="{{ old('duracion') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="album_id">Álbum:</label>
                                <select class="form-control" name="album_id" id="album_id" required>
                                    @foreach ($albumes as $album)
                                        <option value="{{ $album->id_Al }}">{{ $album->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="artista_id">Artista:</label>
                                <select class="form-control" name="artista_id" id="artista_id" required>
                                    @foreach ($artistas as $artista)
                                        <option value="{{ $artista->id_A }}">{{ $artista->nombre }}</option>
                                    @endforeach
                                </select>
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
