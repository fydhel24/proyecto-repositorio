<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Publicaciones de Documentos</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>

<body>

    <!-- Barra de Navegación -->
    <header class="navbar">
        <div class="container">
            <h1>Repositorio de Documentos</h1>
            <nav>
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Publicaciones</a></li>
                    <li><a href="#">Acerca de</a></li>
                    <li><a href="#">Contacto</a></li>
                    <li><a href="{{ route('filament.admin.auth.login') }}">Iniciar Sesion</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Sección de Contenido Principal -->
    {{-- <main class="container">
        <h2>Documentos Publicados</h2>
        <div class="document-list">
            @if ($documentos->isEmpty())
                <p>No hay documentos disponibles para este tipo de programa.</p>
            @else
                @foreach ($documentos as $documento)
                    <div class="document-item">
                        <h3><a href="{{ route('documento.show', $documento->id) }}">{{ $documento->titulo }}</a></h3>
                        <p>{{ $documento->resumen }}</p>
                    </div>
                @endforeach
            @endif
        </div>

    </main> --}}
    <main class="container">
        <h1>DIPLOMADOS</h1>

    <form method="GET" action="{{ route('diplomados') }}">
        <input type="text" name="search" placeholder="Buscar documento" value="{{ request('search') }}">
        <button type="submit">Buscar</button>
    </form>

    <div class="document-list">
        @if ($documentos->isEmpty())
            <p>No hay documentos disponibles.</p>
        @else
            @foreach ($documentos as $documento)
                <div class="document-item">
                    <h3><a href="{{ route('documento.show', $documento->id) }}">{{ $documento->titulo }}</a></h3>
                    <p>{{ $documento->resumen }}</p>
                </div>
            @endforeach
        @endif
    </div>
    </main>

    <!-- Pie de Página -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 Repositorio de Documentos - Todos los derechos reservados</p>
        </div>
    </footer>

</body>

</html>
