@extends('layouts.welcome')

@section('content')
    <div class="container">
        <h1>Gestión de Artistas</h1>

        <h2>Agregar Artista</h2>
        <form action="{{ route('artista.guardar') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control">
            </div>
            <div class="mb-3">
                <label for="apodo" class="form-label">Apodo:</label>
                <input type="text" name="apodo" id="apodo" class="form-control">
            </div>
            <div class="mb-3">
                <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento:</label>
                <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Agregar</button>
        </form>

        <h2>Lista de Artistas</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apodo</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($artistas as $artista)
                <tr>
                    <td>{{ $artista->nombre }}</td>
                    <td>{{ $artista->apodo }}</td>
                    <td>{{ $artista->fecha_nacimiento }}</td>
                    <td>
                        <a href="{{ route('artista.editar', $artista->id_A) }}" class="btn btn-sm btn-primary">Editar</a>

                        <form action="{{ route('artista.eliminar', $artista->id_A) }}" method="POST" style="display:inline;">
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

