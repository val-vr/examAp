@extends('layouts.welcome')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Editar Canción</div>

                    <div class="card-body">
                        <form action="{{ route('cancion.update', $cancion->id_C) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" value="{{ old('nombre', $cancion->nombre) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="duracion">Duración:</label>
                                <input type="number" class="form-control" name="duracion" id="duracion" value="{{ old('duracion', $cancion->duracion) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="album_id">Álbum:</label>
                                <select class="form-control" name="album_id" id="album_id" required>
                                    @foreach ($albumes as $album)
                                        <option value="{{ $album->id_Al }}" {{ $cancion->album_id == $album->id_Al ? 'selected' : '' }}>{{ $album->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="artista_id">Artista:</label>
                                <select class="form-control" name="artista_id" id="artista_id" required>
                                    @foreach ($artistas as $artista)
                                        <option value="{{ $artista->id_A }}" {{ $cancion->artista_id == $artista->id_A ? 'selected' : '' }}>{{ $artista->nombre }}</option>
                                    @endforeach
                                </select>
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
