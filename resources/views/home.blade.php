@extends('layouts.app')
@section('seccion')
    <!-- main-area -->
    <main class="fix">
        <div class="row">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-7">
                        <div class="section-title text-center mb-50 tg-heading-subheading animation-style3">
                            <h2 class="title tg-element-title">
                                Ultimas Publicaciones
                            </h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <!-- Formulario de búsqueda -->
                <div class="search-bar">
                    <form method="GET" action="{{ route('home') }}">
                        <input type="text" name="search" placeholder="Buscar..." value="{{ request('search') }}">
                        <button type="submit">Buscar</button>
                    </form>
                </div>

            </div>
            <div class="container">
                <table align="center" class="table table-striped">
                    <colgroup>
                        <col width="130" />
                        <col width="80" />
                        <col width="70%" />
                        <col width="30%" />
                    </colgroup>
                    <tr>
                        <th id="t1" class="oddRowEvenCol">Vista previa</th>
                        <th id="t2" class="oddRowOddCol">Fecha de publicación</th>
                        <th id="t3" class="oddRowEvenCol"><strong>Título</strong></th>
                        <th id="t4" class="oddRowOddCol">Autor(es)</th>
                    </tr>
                    @foreach ($documentos as $documento)
                        <tr>
                            <td headers="t1">
                                @if ($documento->respaldoDigital && $documento->respaldoDigital->archivo)
                                    <a href="{{ asset('storage/' . $documento->respaldoDigital->archivo) }}"
                                        target="_blank">
                                        <img src="{{ asset('imagenes/iconos/icono_de_pdf.png') }}" alt="Descargar PDF"
                                            width="40" />
                                    </a>
                                @else
                                    <p>No disponible</p>
                                @endif
                            </td>
                            <td headers="t2">{{ $documento->created_at->format('d/m/Y') }}</td>
                            <td headers="t3">
                                <strong>
                                    <a href="{{ route('documento.show', $documento->id) }}">{{ $documento->titulo }}</a>
                                </strong>
                            </td>
                            <td headers="t4">
                                @foreach ($documento->autores as $autor)
                                    {{ $autor->posgraduantes->datosPersonales->full_name ?? 'Desconocido' }}@if (!$loop->last)
                                        ,
                                    @endif
                                @endforeach
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-7">
                        <div class="section-title text-center mb-50 tg-heading-subheading animation-style3">
                            <h2 class="title tg-element-title">
                                Programas Posgrado
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-item-wrap">
                <div class="container custom-container-two">
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <a href="{{ route('diplomados') }}"><img
                                            src="{{ asset('assets/img/project/project_img01.jpg') }}" alt="" /></a>
                                </div>
                                <div class="project-content">
                                    <div class="left-side-content">
                                        <h4 class="title">
                                            <a href="{{ route('diplomados') }}">Diplomados</a>
                                        </h4>
                                        <span>Repositorio</span>
                                    </div>
                                    <div class="link-arrow">
                                        <a href="{{ route('diplomados') }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 15" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M17.6293 3.27957C17.7117 2.80341 17.4427 2.34763 17.0096 2.17812C16.9477 2.15385 16.8824 2.13552 16.8144 2.12376L6.96081 0.419152C6.41654 0.325049 5.89911 0.689856 5.80491 1.23411C5.71079 1.77829 6.07564 2.29578 6.61982 2.38993L14.0946 3.68295L1.36574 12.6573C0.914365 12.9756 0.806424 13.5995 1.12467 14.0509C1.44292 14.5022 2.06682 14.6102 2.51819 14.2919L15.247 5.31753L13.954 12.7923C13.8598 13.3365 14.2247 13.854 14.7689 13.9482C15.3131 14.0422 15.8305 13.6774 15.9248 13.1332L17.6293 3.27957Z"
                                                    fill="currentcolor" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M17.6293 3.27957C17.7117 2.80341 17.4427 2.34763 17.0096 2.17812C16.9477 2.15385 16.8824 2.13552 16.8144 2.12376L6.96081 0.419152C6.41654 0.325049 5.89911 0.689856 5.80491 1.23411C5.71079 1.77829 6.07564 2.29578 6.61982 2.38993L14.0946 3.68295L1.36574 12.6573C0.914365 12.9756 0.806424 13.5995 1.12467 14.0509C1.44292 14.5022 2.06682 14.6102 2.51819 14.2919L15.247 5.31753L13.954 12.7923C13.8598 13.3365 14.2247 13.854 14.7689 13.9482C15.3131 14.0422 15.8305 13.6774 15.9248 13.1332L17.6293 3.27957Z"
                                                    fill="currentcolor" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <a href="{{ route('maestrias') }}"><img src="assets/img/project/project_img03.jpg"
                                            alt="" /></a>
                                </div>
                                <div class="project-content">
                                    <div class="left-side-content">
                                        <h4 class="title">
                                            <a href="{{ route('maestrias') }}">Maestrias</a>
                                        </h4>
                                        <span>Repositorio</span>
                                    </div>
                                    <div class="link-arrow">
                                        <a href="{{ route('maestrias') }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 15" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M17.6293 3.27957C17.7117 2.80341 17.4427 2.34763 17.0096 2.17812C16.9477 2.15385 16.8824 2.13552 16.8144 2.12376L6.96081 0.419152C6.41654 0.325049 5.89911 0.689856 5.80491 1.23411C5.71079 1.77829 6.07564 2.29578 6.61982 2.38993L14.0946 3.68295L1.36574 12.6573C0.914365 12.9756 0.806424 13.5995 1.12467 14.0509C1.44292 14.5022 2.06682 14.6102 2.51819 14.2919L15.247 5.31753L13.954 12.7923C13.8598 13.3365 14.2247 13.854 14.7689 13.9482C15.3131 14.0422 15.8305 13.6774 15.9248 13.1332L17.6293 3.27957Z"
                                                    fill="currentcolor" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M17.6293 3.27957C17.7117 2.80341 17.4427 2.34763 17.0096 2.17812C16.9477 2.15385 16.8824 2.13552 16.8144 2.12376L6.96081 0.419152C6.41654 0.325049 5.89911 0.689856 5.80491 1.23411C5.71079 1.77829 6.07564 2.29578 6.61982 2.38993L14.0946 3.68295L1.36574 12.6573C0.914365 12.9756 0.806424 13.5995 1.12467 14.0509C1.44292 14.5022 2.06682 14.6102 2.51819 14.2919L15.247 5.31753L13.954 12.7923C13.8598 13.3365 14.2247 13.854 14.7689 13.9482C15.3131 14.0422 15.8305 13.6774 15.9248 13.1332L17.6293 3.27957Z"
                                                    fill="currentcolor" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <a href="{{ route('doctorados') }}"><img src="assets/img/project/project_img04.jpg"
                                            alt="" /></a>
                                </div>
                                <div class="project-content">
                                    <div class="left-side-content">
                                        <h4 class="title">
                                            <a href="{{ route('doctorados') }}">Doctorados</a>
                                        </h4>
                                        <span>Repositorio</span>
                                    </div>
                                    <div class="link-arrow">
                                        <a href="{{ route('doctorados') }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 15" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M17.6293 3.27957C17.7117 2.80341 17.4427 2.34763 17.0096 2.17812C16.9477 2.15385 16.8824 2.13552 16.8144 2.12376L6.96081 0.419152C6.41654 0.325049 5.89911 0.689856 5.80491 1.23411C5.71079 1.77829 6.07564 2.29578 6.61982 2.38993L14.0946 3.68295L1.36574 12.6573C0.914365 12.9756 0.806424 13.5995 1.12467 14.0509C1.44292 14.5022 2.06682 14.6102 2.51819 14.2919L15.247 5.31753L13.954 12.7923C13.8598 13.3365 14.2247 13.854 14.7689 13.9482C15.3131 14.0422 15.8305 13.6774 15.9248 13.1332L17.6293 3.27957Z"
                                                    fill="currentcolor" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M17.6293 3.27957C17.7117 2.80341 17.4427 2.34763 17.0096 2.17812C16.9477 2.15385 16.8824 2.13552 16.8144 2.12376L6.96081 0.419152C6.41654 0.325049 5.89911 0.689856 5.80491 1.23411C5.71079 1.77829 6.07564 2.29578 6.61982 2.38993L14.0946 3.68295L1.36574 12.6573C0.914365 12.9756 0.806424 13.5995 1.12467 14.0509C1.44292 14.5022 2.06682 14.6102 2.51819 14.2919L15.247 5.31753L13.954 12.7923C13.8598 13.3365 14.2247 13.854 14.7689 13.9482C15.3131 14.0422 15.8305 13.6774 15.9248 13.1332L17.6293 3.27957Z"
                                                    fill="currentcolor" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <a href="{{ route('posdoctorados') }}"><img
                                            src="assets/img/project/project_img05.jpg" alt="" /></a>
                                </div>

                                <div class="project-content">
                                    <div class="left-side-content">
                                        <h4 class="title">
                                            <a href="{{ route('posdoctorados') }}">Posdoctorados</a>
                                        </h4>
                                        <span>Repositorio</span>
                                    </div>
                                    <div class="link-arrow">
                                        <a href="{{ route('posdoctorados') }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 15" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M17.6293 3.27957C17.7117 2.80341 17.4427 2.34763 17.0096 2.17812C16.9477 2.15385 16.8824 2.13552 16.8144 2.12376L6.96081 0.419152C6.41654 0.325049 5.89911 0.689856 5.80491 1.23411C5.71079 1.77829 6.07564 2.29578 6.61982 2.38993L14.0946 3.68295L1.36574 12.6573C0.914365 12.9756 0.806424 13.5995 1.12467 14.0509C1.44292 14.5022 2.06682 14.6102 2.51819 14.2919L15.247 5.31753L13.954 12.7923C13.8598 13.3365 14.2247 13.854 14.7689 13.9482C15.3131 14.0422 15.8305 13.6774 15.9248 13.1332L17.6293 3.27957Z"
                                                    fill="currentcolor" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M17.6293 3.27957C17.7117 2.80341 17.4427 2.34763 17.0096 2.17812C16.9477 2.15385 16.8824 2.13552 16.8144 2.12376L6.96081 0.419152C6.41654 0.325049 5.89911 0.689856 5.80491 1.23411C5.71079 1.77829 6.07564 2.29578 6.61982 2.38993L14.0946 3.68295L1.36574 12.6573C0.914365 12.9756 0.806424 13.5995 1.12467 14.0509C1.44292 14.5022 2.06682 14.6102 2.51819 14.2919L15.247 5.31753L13.954 12.7923C13.8598 13.3365 14.2247 13.854 14.7689 13.9482C15.3131 14.0422 15.8305 13.6774 15.9248 13.1332L17.6293 3.27957Z"
                                                    fill="currentcolor" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6"></div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-7">
                        <div class="section-title text-center mb-50 tg-heading-subheading animation-style3">
                            <h2 class="title tg-element-title">
                                Ultimas Publicaciones
                            </h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="project-shape-wrap">
                <img src="assets/img/project/project_shape01.png" alt="" class="alltuchtopdown" />
                <img src="assets/img/project/project_shape02.png" alt="" class="rotateme" />
            </div>
        </div>

    </main>
    <!-- contadores -->
    <section class="counter-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="counter-item">
                        <div class="icon">
                            <i class="flaticon-trophy"></i>
                        </div>
                        <div class="content">
                            <h2 class="count">
                                <span class="odometer" data-count="2.350"></span>
                            </h2>
                            <p>
                                Titulados
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="counter-item">
                        <div class="icon">
                            <i class="flaticon-happy"></i>
                        </div>
                        <div class="content">
                            <h2 class="count">
                                <span class="odometer" data-count="1.200"></span>
                            </h2>
                            <p>
                                Estudiantes
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="counter-item">
                        <div class="icon">
                            <i class="flaticon-time"></i>
                        </div>
                        <div class="content">
                            <h2 class="count">
                                <span class="odometer" data-count="600"></span>
                            </h2>
                            <p>
                                Visitas
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="counter-shape-wrap">
            <img src="assets/img/images/counter_shape01.png" alt="" data-aos="fade-right"
                data-aos-delay="400" />
            <img src="assets/img/images/counter_shape02.png" alt="" data-parallax='{"x" : 100 , "y" : -100 }' />
            <img src="assets/img/images/counter_shape03.png" alt="" data-aos="fade-left" data-aos-delay="400" />
        </div>
    </section>
    <!-- contadores-end -->
@endsection
