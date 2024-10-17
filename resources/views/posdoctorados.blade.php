@extends('layouts.guest')
@section('seccion')
    <!-- main-area -->
    <main class="fix row">
        <section id="about" class="section-title">
            <h3>POSDOCTORADOS</h3>
            <div class="right-side">
                <h3 class="section-title">Listar por título</h3>
                <div class="letters">
                    <a href="#">A</a>
                    <a href="#">B</a>
                    <a href="#">C</a>
                    <a href="#">D</a>
                    <a href="#">E</a>
                    <a href="#">F</a>
                    <a href="#">G</a>
                    <a href="#">H</a>
                    <a href="#">I</a>
                    <a href="#">J</a>
                    <a href="#">K</a>
                    <a href="#">L</a>
                    <a href="#">M</a>
                    <a href="#">N</a>
                    <a href="#">O</a>
                    <a href="#">P</a>
                    <a href="#">Q</a>
                    <a href="#">R</a>
                    <a href="#">S</a>
                    <a href="#">T</a>
                    <a href="#">U</a>
                    <a href="#">V</a>
                    <a href="#">W</a>
                    <a href="#">X</a>
                    <a href="#">Y</a>
                    <a href="#">Z</a>
                </div>
                <div class="container">
                    <div class="search-bar">
                        <form method="GET" action="{{ route('posdoctorados') }}">
                            <input type="text" name="search" placeholder="Buscar documento"
                                value="{{ request('search') }}">
                            <button type="submit">Buscar</button>
                        </form>
                    </div>
                </div>

                <div class="container">
                    <table align="center" class="table" summary="This table browses all dspace content">
                        <colgroup>
                            <col width="80" />
                            <col width="130" />
                            <col width="60%" />
                            <col width="40%" />
                        </colgroup>
                        <tr>
                            <th id="t1" class="oddRowEvenCol">Vista Previa</th>
                            <th id="t2" class="oddRowOddCol">Fecha de publicación</th>
                            <th id="t3" class="oddRowEvenCol"><strong>Título</strong></th>
                            <th id="t4" class="oddRowOddCol">Autor(es)</th>
                        </tr>
                        @if ($documentos->isEmpty())
                            <tr>
                                <td colspan="4" align="center">No hay documentos disponibles.</td>
                            </tr>
                        @else
                            @foreach ($documentos as $documento)
                                <tr>
                                    <td headers="t1">
                                        @if ($documento->respaldoDigital && $documento->respaldoDigital->archivo)
                                            <a href="{{ asset('storage/' . $documento->respaldoDigital->archivo) }}"
                                                target="_blank">
                                                <img src="{{ asset('imagenes/iconos/icono_de_pdf.png') }}" alt=""
                                                    width="40" />
                                            </a>
                                        @else
                                            <p>No disponible</p>
                                        @endif
                                    </td>
                                    <td headers="t2">{{ $documento->created_at->format('d/m/Y') }}</td>
                                    <td headers="t3">
                                        <strong>
                                            <a
                                                href="{{ route('documento.show', $documento->id) }}">{{ $documento->titulo }}</a>
                                        </strong>
                                    </td>
                                    <td headers="t4">
                                        @foreach ($documento->autores as $autor)
                                            {{ $autor->posgraduantes->datosPersonales->full_name ?? 'Desconocido' }}
                                            @if (!$loop->last)
                                                ,
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </table>
                </div>
                <div class="container3">
                    <button class="boton">Fecha Publicación</button>
                    <button class="boton">Autor</button>
                    <button class="boton">Título</button>
                    <button class="boton">Materia</button>
                </div>
            </div>
        </section>
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
