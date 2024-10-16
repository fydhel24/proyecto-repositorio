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

        <div class="document-detail">
            <h1>{{ $documento->titulo }}</h1>
            <p><strong>Resumen:</strong> {{ $documento->resumen }}</p>
            <p><strong>Programa:</strong> {{ $documento->programa->nombre }}</p>
            <p><strong>Programa Posgrado:</strong> {{ $documento->tipo_programa }}</p>
            <p><strong>Autor(es):</strong>
                @foreach ($documento->autores as $autor)
                    {{ $autor->posgraduantes->datosPersonales->full_name ?? 'Desconocido' }}@if (!$loop->last)
                        ,
                    @endif
                @endforeach
            </p>
            <p><strong>Tipo de Documento:</strong> {{ $documento->modalidad->nombre }}</p>
            <p><strong>Ciudad:</strong> {{ $documento->ciudad->nombre }}</p>
            <p><strong>Publicado el:</strong> {{ $documento->created_at }}</p>

            @if ($documento->respaldoDigital && $documento->respaldoDigital->archivo)
                <a href="{{ asset('storage/' . $documento->respaldoDigital->archivo) }}" class="btn-download"
                    target="_blank">Descargar PDF</a>
            @else
                <p>No disponible</p>
            @endif
            <!-- Botón de Volver atrás -->
            <a href="{{ url()->previous() }}" class="btn-back">Volver atrás</a>
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
