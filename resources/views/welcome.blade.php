<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>val messi</title>
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
        <a class="navbar-brand" href="#">val messi</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('alumnos.index') }}"> Alumnos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('grupos.index') }}"> Grupos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('alumnog.index') }}"> Alumno-Grupo</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="content">
           <center> <h1> R E G I S T R A U N P I B E</h1> </center>
            @yield('content')
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
