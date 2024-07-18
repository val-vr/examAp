@extends('layouts.welcome')

@section('content')
<div class="container">
    <h1>Reproduciendo: {{ $cancion->nombre }}</h1>
    <p>Artista: {{ $cancion->artista->nombre }}</p>
    <p>Álbum: {{ $cancion->album->nombre }}</p>
    <p>Duración: {{ $cancion->duracion }}</p>
    <img src="{{ $cancion->album->portada }}" alt="{{ $cancion->album->nombre }}" width="200">

    <div class="player-controls">
        <button id="prevBtn" class="btn btn-secondary" onclick="anteriorCancion()" {{ $esPrimera ? 'disabled' : '' }}>Anterior</button>
        <button id="nextBtn" class="btn btn-secondary" onclick="siguienteCancion()" {{ $esUltima ? 'disabled' : '' }}>Siguiente</button>
        <button id="randomBtn" class="btn btn-secondary" onclick="cancionAleatoria()">Aleatoria</button>
    </div>
</div>

@section('js')
<script>
    let todosIds = @json($todosIds);
    let idActual = {{ $cancion->id_C }};
    
    function anteriorCancion() {
        let indiceActual = todosIds.indexOf(idActual);
        if (indiceActual > 0) {
            let idAnterior = todosIds[indiceActual - 1];
            window.location.href = `/reproducir/${idAnterior}`;
        }
    }

    function siguienteCancion() {
        let indiceActual = todosIds.indexOf(idActual);
        if (indiceActual < todosIds.length - 1) {
            let idSiguiente = todosIds[indiceActual + 1];
            window.location.href = `/reproducir/${idSiguiente}`;
        }
    }

    function cancionAleatoria() {
        let idAleatorio = todosIds[Math.floor(Math.random() * todosIds.length)];
        window.location.href = `/reproducir/${idAleatorio}`;
    }
</script>
@endsection

@endsection
