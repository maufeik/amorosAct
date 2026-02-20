<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="utf-8">
    <title>MascotesClínic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/body.css') }}">
</head>
<body>
    <div id="page" class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <span class="fs-4">Mascotas Clinica</span>
        </header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4 rounded">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Inicio</a></li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Propietarios</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('propietarios.index') }}">Listar todos</a></li>
                            <li><a class="dropdown-item" href="{{ route('propietarios.create', ['option' => 'form_search_mascotes']) }}">Buscar mascotas</a></li>
                            <li><a class="dropdown-item" href="{{ route('propietarios.create', ['option' => 'form_search']) }}">Modificar</a></li>
                        </ul>
                    </li>
                
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Mascotas</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('mascotas.index') }}">Listar todas</a></li>
                            <li><a class="dropdown-item" href="{{ route('mascotas.create', ['option' => 'form_search_mascotes_by_id']) }}">Buscar</a></li>
                            <li><a class="dropdown-item" href="{{ route('mascotas.create', ['option' => 'form_add_historial_mascotes']) }}">Añadir historial</a></li>
                        </ul>
                    </li>
                </ul>
                </div>
            </div>
            </nav>
        <main id="content">
            @if(session('info')) <div class="alert alert-success">{{ session('info') }}</div> @endif
            @yield('content')
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>