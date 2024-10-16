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
    <main class="container">
        <h2>Documentos Publicados</h2>

        <!-- Formulario de búsqueda -->
        <form method="GET" action="{{ route('home') }}">
            <input type="text" name="search" placeholder="Buscar por título" value="{{ request('search') }}">
            <button type="submit">Buscar</button>
        </form>

        <div class="document-list">
            @foreach ($documentos as $documento)
                <div class="document-item">
                    <h3><a href="{{ route('documento.show', $documento->id) }}">{{ $documento->titulo }}</a></h3>
                    <p>{{ $documento->resumen }}</p>
                    <p>Publicado el <b>{{ $documento->created_at->format('d/m/Y') }}</b></p>

                    <!-- Mostrar autores -->
                    <p><strong>Autores:</strong>
                        @foreach ($documento->autores as $autor)
                            {{ $autor->posgraduantes->datosPersonales->full_name ?? 'Desconocido' }}@if (!$loop->last)
                                ,
                            @endif
                        @endforeach
                    </p>

                    @if ($documento->respaldoDigital && $documento->respaldoDigital->archivo)
                        <a href="{{ asset('storage/' . $documento->respaldoDigital->archivo) }}" class="btn-download"
                            target="_blank">Descargar PDF</a>
                    @else
                        <p>No disponible</p>
                    @endif
                </div>
            @endforeach
        </div>
        <div class="document-list">
            <div class="document-item">
                <h3><a href="{{ route('diplomados') }}">DIPLOMADOS</a></h3>
            </div>
            <div class="document-item">
                <h3><a href="{{ route('maestrias') }}">MAESTRÍAS</a></h3>
            </div>
            <div class="document-item">
                <h3><a href="{{ route('doctorados') }}">DOCTORADOS</a></h3>
            </div>
            <div class="document-item">
                <h3><a href="{{ route('posdoctorados') }}">POSDOCTORADOS</a></h3>
            </div>
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
