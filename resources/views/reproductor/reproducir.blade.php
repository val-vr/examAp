@extends('layouts.welcome')

@section('content')
<div class="container">
    <h1>Reproduciendo: {{ $cancion->nombre }}</h1>
    <p>Artista: {{ $cancion->artista->nombre }}</p>
    <p>Álbum: {{ $cancion->album->nombre }}</p>
    <p>Duración: {{ $cancion->duracion }}</p>
    <img src="{{ $cancion->album->portada }}" alt="{{ $cancion->album->nombre }}" width="200">

    <div class="player-controls">
        <button id="prevBtn" class="btn btn-secondary" onclick="anteriorCancion()">Anterior</button>
        <button id="nextBtn" class="btn btn-secondary" onclick="siguienteCancion()">Siguiente</button>
    </div>
</div>

@section('js')
<script>
    function anteriorCancion() {
        let currentId = {{ $cancion->id_C }};
        let prevId = currentId - 1; // Lógica simple para ir a la canción anterior
        window.location.href = `/reproducir/${prevId}`;
    }

    function siguienteCancion() {
        let currentId = {{ $cancion->id_C }};
        let nextId = currentId + 1; // Lógica simple para ir a la siguiente canción
        window.location.href = `/reproducir/${nextId}`;
    }
</script>
@endsection

@endsection
