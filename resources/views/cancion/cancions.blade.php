@extends('layouts.welcome')

@section('content')
    <div class="container">
        <h1>Gestión de Canciones</h1>

        <a href="{{ route('cancion.create') }}" class="btn btn-primary mb-3">Agregar Canción</a>

        <h2>Lista de Canciones</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Duración</th>
                    <th>Álbum</th>
                    <th>Artista</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($cancions as $cancion)
                <tr>
                    <td>{{ $cancion->nombre }}</td>
                    <td>{{ $cancion->duracion }}</td>
                    <td>{{ $cancion->album->nombre }}</td>
                    <td>{{ $cancion->artista->nombre }}</td>
                    <td>
                        <a href="{{ route('cancion.edit', $cancion->id_C) }}" class="btn btn-sm btn-primary">Editar</a>
                        <form action="{{ route('cancion.destroy', $cancion->id_C) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>  
        </table>
    </div>
@endsection
