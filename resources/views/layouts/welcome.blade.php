<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Music VR10</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: white;
            color: grey;
        }
        .navbar {
            margin-bottom: 20px;
        }
        .container {
            color: black;
        }
        .content {
            padding: 20px;
            background-color: white;
            border-radius: 10px;
        }
        .image-container img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 20px auto;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Music VR10</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ Request::is('artista*') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('artista.artistas') }}">Artistas</a>
            </li>
            <li class="nav-item {{ Request::is('album*') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('album.albums') }}">Álbumes</a>
            </li>
            <li class="nav-item {{ Request::is('cancion*') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('cancion.lista') }}">Canciones</a>
            </li>
            <li class="nav-item {{ Request::is('reproductor*') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('reproductor.index') }}">Reproducir</a>
            </li>
          </ul>
        </div>
    </nav>

    <div class="container">
        <div class="content">
           <center> <h1> M U S I C V R 1 0</h1> </center>
            @yield('content')
        </div>
    </div>

    <div class="image-container"> 
        <img src="{{ asset('images/maxresdefault (4).jpg') }}" alt="No hay imagen papoi">
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    @yield('js')
</body>
</html>
