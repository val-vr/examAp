@extends('layouts.welcome')

@section('content')
<div class="container">
    <h1>Gestión de Álbumes</h1>

    <h2>Agregar Álbum</h2>
    <form action="{{ route('album.guardar') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="portada" class="form-label">Portada:</label>
            <input type="text" name="portada" id="portada" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="fecha_lanzamiento" class="form-label">Fecha de lanzamiento:</label>
            <input type="date" name="fecha_lanzamiento" id="fecha_lanzamiento" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>

    <h2>Lista de Álbumes</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Portada</th>
                <th>Fecha de Lanzamiento</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($albums as $album)
                <tr>
                    <td>{{ $album->nombre }}</td>
                    <td><img src="{{ $album->portada }}" alt="{{ $album->nombre }}" width="50"></td>
                    <td>{{ $album->fecha_lanzamiento }}</td>
                    <td>
                        <a href="{{ route('album.editar', $album->id_Al) }}" class="btn btn-primary btn-sm">Editar</a>
                        <form action="{{ route('album.eliminar', $album->id_Al) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

