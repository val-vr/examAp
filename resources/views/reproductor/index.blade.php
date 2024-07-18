@extends('layouts.welcome')

@section('content')
<div class="container">
    <h1>Reproductor de Canciones</h1>

    <form action="{{ route('reproductor.index') }}" method="GET" class="mb-3">
        <div class="row">
            <div class="col-md-3">
                <label for="id_C">Buscar por ID:</label>
                <input type="text" id="id_C" name="id_C" class="form-control" value="{{ request('id_C') }}">
            </div>
            <div class="col-md-3">
                <label for="ordenarPor">Ordenar por:</label>
                <select name="ordenarPor" id="ordenarPor" class="form-control">
                    <option value="id_C" {{ request('ordenarPor') == 'id_C' ? 'selected' : '' }}>ID</option>
                    <option value="nombre" {{ request('ordenarPor') == 'nombre' ? 'selected' : '' }}>Nombre Canción</option>
                    <option value="duracion" {{ request('ordenarPor') == 'duracion' ? 'selected' : '' }}>Duración</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="orden">Orden:</label>
                <select name="orden" id="orden" class="form-control">
                    <option value="asc" {{ request('orden') == 'asc' ? 'selected' : '' }}>Ascendente</option>
                    <option value="desc" {{ request('orden') == 'desc' ? 'selected' : '' }}>Descendente</option>
                </select>
            </div>
            <div class="col-md-3">
                <label>&nbsp;</label><br>
                <button type="submit" class="btn btn-primary">Filtros</button>
            </div>
        </div>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre Canción</th>
                <th>Nombre Artista</th>
                <th>Duración</th>
                <th>Nombre Álbum</th>
                <th>Portada</th>
                <th>Reproducir</th>
            </tr>
        </thead>
        <tbody id="songs-table-body">
            @forelse ($canciones as $cancion)
                <tr>
                    <td>{{ $cancion->id_C }}</td>
                    <td>{{ $cancion->nombre }}</td>
                    <td>{{ $cancion->artista->nombre }}</td>
                    <td>{{ $cancion->duracion }}</td>
                    <td>{{ $cancion->album->nombre }}</td>
                    <td><img src="{{ $cancion->album->portada }}" alt="{{ $cancion->album->nombre }}" width="50"></td>
                    <td><a href="{{ route('reproductor.reproducir', ['id' => $cancion->id_C]) }}" class="btn btn-primary">Reproducir</a></td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">No se encontraron canciones.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
