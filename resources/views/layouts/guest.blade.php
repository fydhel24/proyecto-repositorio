<!DOCTYPE html>
<html class="no-js" lang="en">
<meta
    http-equiv="content-type"
    content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Posgrado UPEA Repositorio</title>
    <link
        rel="shortcut icon"
        type="image/x-icon"
        href="assets/img/favicon.png" />
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <link rel="stylesheet" href="assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css" />
    <link rel="stylesheet" href="assets/css/flaticon.css" />
    <link rel="stylesheet" href="assets/css/odometer.css" />
    <link rel="stylesheet" href="assets/css/swiper-bundle.css" />
    <link rel="stylesheet" href="assets/css/aos.css" />
    <link rel="stylesheet" href="assets/css/default.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body>
    <!--Recargador-->
    <div id="preloader">
        <div id="loader" class="loader">
            <div class="loader-container">
                <div class="loader-icon">
                    <img src="assets/img/logo/preloader.png" alt="Preloader" />
                </div>
            </div>
        </div>
    </div>
    <!-- Recargador-end -->
    <!-- Dezplasador -->
    <button class="scroll__top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <!-- Dezplasador-end-->
    <!-- área de encabezado -->
    <header class="header">
        <div class="tg-header__top">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="tg-header__top-info left-side list-wrap">
                            <li>
                                <i class="flaticon-phone-call"></i><a href="tel:0123456789">+123 4567 000</a>
                            </li>
                            <li><i class="flaticon-pin"></i>La Paz, El Alto</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul class="tg-header__top-right list-wrap">
                            <li>
                                <i class="flaticon-envelope"></i><a href="https://posgrado.upea.bo/">posgrado.upea.bo</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- menu-encabezado -->
        <div id="sticky-header" class="tg-header__area">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-12">
                        <div class="tgmenu__wrap">
                            <nav class="tgmenu__nav">
                                <div class="logo">
                                    <a href="{{ route('main') }}">
                                        <img src="{{ asset('assets/img/logo/logo.png') }}" alt="Logo" />
                                    </a>
                                </div>
                                <div
                                    class="tgmenu__navbar-wrap tgmenu__main-menu d-none d-lg-flex">
                                    <ul class="navigation">
                                        <li class="menu-item-has-children">
                                            <a href="#">Oferta Academica</a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="about">Diplomados</a>
                                                <li><a href="about">Especialidades</a></li>
                                                <li><a href="about-2">Maestrias</a></li>
                                                <li><a href="about">Doctorado</a></li>
                                                <li><a href="about">Posdoctorado</a></li>
                                        </li>
                                    </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Conocenos</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog">Mision, Vision y Proposito</a></li>
                                        </ul>
                                    </li>
                                    </ul>
                                </div>
                                <div class="tgmenu__action d-none d-md-block">
                                    <ul class="list-wrap">
                                        <li class="header-search">
                                            <a href="javascript:void(0)" class="search-open-btn">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20"
                                                    fill="none">
                                                    <path
                                                        d="M19 19.0002L14.657 14.6572M14.657 14.6572C15.3999 13.9143 15.9892 13.0324 16.3912 12.0618C16.7933 11.0911 17.0002 10.0508 17.0002 9.00021C17.0002 7.9496 16.7933 6.90929 16.3913 5.93866C15.9892 4.96803 15.3999 4.08609 14.657 3.34321C13.9141 2.60032 13.0322 2.01103 12.0616 1.60898C11.0909 1.20693 10.0506 1 9.00002 1C7.94942 1 6.90911 1.20693 5.93848 1.60898C4.96785 2.01103 4.08591 2.60032 3.34302 3.34321C1.84269 4.84354 0.999817 6.87842 0.999817 9.00021C0.999817 11.122 1.84269 13.1569 3.34302 14.6572C4.84335 16.1575 6.87824 17.0004 9.00002 17.0004C11.1218 17.0004 13.1567 16.1575 14.657 14.6572Z"
                                                        stroke="currentcolor"
                                                        stroke-width="2"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="offCanvas-menu">
                                            <a href="javascript:void(0)" class="menu-tigger">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 18 18"
                                                    fill="none">
                                                    <path
                                                        d="M0 2C0 0.895431 0.895431 0 2 0C3.10457 0 4 0.895431 4 2C4 3.10457 3.10457 4 2 4C0.895431 4 0 3.10457 0 2Z"
                                                        fill="currentcolor" />
                                                    <path
                                                        d="M0 9C0 7.89543 0.895431 7 2 7C3.10457 7 4 7.89543 4 9C4 10.1046 3.10457 11 2 11C0.895431 11 0 10.1046 0 9Z"
                                                        fill="currentcolor" />
                                                    <path
                                                        d="M0 16C0 14.8954 0.895431 14 2 14C3.10457 14 4 14.8954 4 16C4 17.1046 3.10457 18 2 18C0.895431 18 0 17.1046 0 16Z"
                                                        fill="currentcolor" />
                                                    <path
                                                        d="M7 2C7 0.895431 7.89543 0 9 0C10.1046 0 11 0.895431 11 2C11 3.10457 10.1046 4 9 4C7.89543 4 7 3.10457 7 2Z"
                                                        fill="currentcolor" />
                                                    <path
                                                        d="M7 9C7 7.89543 7.89543 7 9 7C10.1046 7 11 7.89543 11 9C11 10.1046 10.1046 11 9 11C7.89543 11 7 10.1046 7 9Z"
                                                        fill="currentcolor" />
                                                    <path
                                                        d="M7 16C7 14.8954 7.89543 14 9 14C10.1046 14 11 14.8954 11 16C11 17.1046 10.1046 18 9 18C7.89543 18 7 17.1046 7 16Z"
                                                        fill="currentcolor" />
                                                    <path
                                                        d="M14 2C14 0.895431 14.8954 0 16 0C17.1046 0 18 0.895431 18 2C18 3.10457 17.1046 4 16 4C14.8954 4 14 3.10457 14 2Z"
                                                        fill="currentcolor" />
                                                    <path
                                                        d="M14 9C14 7.89543 14.8954 7 16 7C17.1046 7 18 7.89543 18 9C18 10.1046 17.1046 11 16 11C14.8954 11 14 10.1046 14 9Z"
                                                        fill="currentcolor" />
                                                    <path
                                                        d="M14 16C14 14.8954 14.8954 14 16 14C17.1046 14 18 14.8954 18 16C18 17.1046 17.1046 18 16 18C14.8954 18 14 17.1046 14 16Z"
                                                        fill="currentcolor" />
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mobile-nav-toggler">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 18 18"
                                        fill="none">
                                        <path
                                            d="M0 2C0 0.895431 0.895431 0 2 0C3.10457 0 4 0.895431 4 2C4 3.10457 3.10457 4 2 4C0.895431 4 0 3.10457 0 2Z"
                                            fill="currentcolor" />
                                        <path
                                            d="M0 9C0 7.89543 0.895431 7 2 7C3.10457 7 4 7.89543 4 9C4 10.1046 3.10457 11 2 11C0.895431 11 0 10.1046 0 9Z"
                                            fill="currentcolor" />
                                        <path
                                            d="M0 16C0 14.8954 0.895431 14 2 14C3.10457 14 4 14.8954 4 16C4 17.1046 3.10457 18 2 18C0.895431 18 0 17.1046 0 16Z"
                                            fill="currentcolor" />
                                        <path
                                            d="M7 2C7 0.895431 7.89543 0 9 0C10.1046 0 11 0.895431 11 2C11 3.10457 10.1046 4 9 4C7.89543 4 7 3.10457 7 2Z"
                                            fill="currentcolor" />
                                        <path
                                            d="M7 9C7 7.89543 7.89543 7 9 7C10.1046 7 11 7.89543 11 9C11 10.1046 10.1046 11 9 11C7.89543 11 7 10.1046 7 9Z"
                                            fill="currentcolor" />
                                        <path
                                            d="M7 16C7 14.8954 7.89543 14 9 14C10.1046 14 11 14.8954 11 16C11 17.1046 10.1046 18 9 18C7.89543 18 7 17.1046 7 16Z"
                                            fill="currentcolor" />
                                        <path
                                            d="M14 2C14 0.895431 14.8954 0 16 0C17.1046 0 18 0.895431 18 2C18 3.10457 17.1046 4 16 4C14.8954 4 14 3.10457 14 2Z"
                                            fill="currentcolor" />
                                        <path
                                            d="M14 9C14 7.89543 14.8954 7 16 7C17.1046 7 18 7.89543 18 9C18 10.1046 17.1046 11 16 11C14.8954 11 14 10.1046 14 9Z"
                                            fill="currentcolor" />
                                        <path
                                            d="M14 16C14 14.8954 14.8954 14 16 14C17.1046 14 18 14.8954 18 16C18 17.1046 17.1046 18 16 18C14.8954 18 14 17.1046 14 16Z"
                                            fill="currentcolor" />
                                    </svg>
                                </div>
                            </nav>
                        </div>
                        <!-- Mobile Menu  -->
                        <div class="tgmobile__menu">
                            <nav class="tgmobile__menu-box">
                                <div class="close-btn"><i class="fas fa-times"></i></div>
                                <div class="nav-logo">
                                    <a href="{{ route('main') }}"><img src="{{ asset('assets/img/logo/logo.png') }}" alt="Logo" /></a>
                                </div>

                                <div class="tgmobile__search">
                                    <form action="#">
                                        <input type="text" placeholder="Search here..." />
                                        <button><i class="fas fa-search"></i></button>
                                    </form>
                                </div>
                                <div class="tgmobile__menu-outer">
                                    <!--Aquí el menú aparecerá automáticamente a través de Javascript/mismo menú que en el encabezado-->
                                </div>
                                <div class="tgmobile__menu-bottom">
                                    <div class="contact-info">
                                        <ul class="list-wrap">
                                            <li>
                                                <a href="posgrado.upea.bo/">https://posgrado.upea.bo/</a>
                                            </li>
                                            <li><a href="tel:0123456789">+123 888 9999</a></li>
                                        </ul>
                                    </div>
                                    <div class="social-links">
                                        <ul class="list-wrap">
                                            <li>
                                                <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)"><i class="fab fa-youtube"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                        <div class="tgmobile__menu-backdrop"></div>
                        <!-- End Mobile Menu -->
                    </div>
                </div>
            </div>
        </div>
        <!-- menu-encabezado-end -->
        <!-- Busqueda-encabezado -->
        <div class="search__popup">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="search__wrapper">
                            <div class="search__close">
                                <button type="button" class="search-close-btn">
                                    <svg
                                        width="18"
                                        height="18"
                                        viewBox="0 0 18 18"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17 1L1 17"
                                            stroke="currentColor"
                                            stroke-width="1.5"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M1 1L17 17"
                                            stroke="currentColor"
                                            stroke-width="1.5"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="search__form">
                                <form action="#">
                                    <div class="search__input">
                                        <input
                                            class="search-input-field"
                                            type="text"
                                            placeholder="Buscar en repositorio Posgrado" />
                                        <span class="search-focus-border"></span>
                                        <button>
                                            <svg
                                                width="20"
                                                height="20"
                                                viewBox="0 0 20 20"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.55 18.1C14.272 18.1 18.1 14.272 18.1 9.55C18.1 4.82797 14.272 1 9.55 1C4.82797 1 1 4.82797 1 9.55C1 14.272 4.82797 18.1 9.55 18.1Z"
                                                    stroke="currentColor"
                                                    stroke-width="1.5"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path
                                                    d="M19.0002 19.0002L17.2002 17.2002"
                                                    stroke="currentColor"
                                                    stroke-width="1.5"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Busqueda-encabezado-end -->
        <!-- encabezado -->
        <div class="offCanvas__info">
            <div class="offCanvas__close-icon menu-close">
                <button><i class="far fa-window-close"></i></button>
            </div>
            <div class="offCanvas__logo mb-30">
                <a href="index.html"><img src="assets/img/logo/logo.png" alt="Logo" /></a>
            </div>
            <div class="offCanvas__side-info mb-30">
                <div class="contact-list mb-30">
                    <h4>Repositorio Posgrado</h4>
                    <p>Universidad Publica De El Alto</p>
                </div>
                <div class="contact-list mb-30">
                    <h4>Contactanos</h4>
                    <p>+0989 7876 9865 9</p>
                </div>
                <div class="contact-list mb-30">
                    <h4>Email</h4>
                    <p>example.mail@hum.com</p>
                </div>
            </div>
            <div class="offCanvas__social-icon mt-30">
                <a href="https://www.facebook.com/estudiaenposgradoupea/"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/posgradoupea"><i class="fab fa-twitter"></i></a>
                <a href="https://www.youtube.com/c/EstudiaenPosgradoUPEA/"><i class="fab fa-google-plus-g"></i></a>
                <a href="https://www.instagram.com/posgrado_upea/"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <!-- encabezado-end -->
    </header>
    <!-- área de encabezado-end -->
	<!-- breadcrumb-area -->
	<section class="breadcrumb__area breadcrumb__bg" data-background="assets/img/bg/breadcrumb_bg.jpg">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="breadcrumb__content">
								<nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('main') }}">Inicio</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Diplomados</li>
                                    </ol>
								</nav>
							</div>
						</div>
					</div>
				</div>
				<div class="breadcrumb__shape">
					<img src="assets/img/images/breadcrumb_shape01.png" alt="Apexa" />
					<img src="assets/img/images/breadcrumb_shape02.png" alt="Apexa" class="rightToLeft" />
					<img src="assets/img/images/breadcrumb_shape03.png" alt="Apexa" />
					<img src="assets/img/images/breadcrumb_shape04.png" alt="Apexa" />
					<img src="assets/img/images/breadcrumb_shape05.png" alt="Apexa" class="alltuchtopdown" />
				</div>
	</section>
	<!-- breadcrumb-area-end -->
    <section class="fix">
        <div class="row">
            <div class="explorar-por">

                <h3 class="section-title">Explorar por: </h3>
                <div>
                    <a href="#">Diplomados (353)</a>
                    <a href="#">Especialidades (353)</a>
                    <a href="#">Maestrias (110)</a>
                    <a href="#">Doctorados (210)</a>
                    <a href="#">Posdoctorados (100)</a>
                </div>

                <div>
                    <h3 class="section-title">Fecha</h3>
                    <a href="#" class="orange-buttons">2023 - 2024</a>
                    <a href="#" class="orange-buttons">2022 - 2023</a>
                    <a href="#" class="orange-buttons">2021 - 2022</a>
                    <a href="#" class="orange-buttons">2020 - 2021</a>
                </div>

                <h3 class="section-title">Explorar el repositorio</h3>
                <a href="#">Tesis de Grado</a>
                <a href="#">Monografias</a>
                <a href="#">Tesina</a>
            </div>
        </div>
    </section>

    @yield ('seccion')

    <footer>
        <div class="footer-area">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="footer-widget">
                                <div class="fw-logo mb-25">
                                    <a href="index.html"><img src="assets/img/logo/logo.png" alt="" /></a>
                                </div>
                                <div class="footer-content">
                                    <p>
                                        Direccion: Edificio de Posgrado UPEA Av. Sucre <br>
                                        B, lado del Area Financiera Zona Villa <br>
                                        Esperanza - El Alto
                                    </p>
                                    <div class="footer-social">
                                        <ul class="list-wrap">
                                            <li>
                                                <a href="https://www.facebook.com/estudiaenposgradoupea/"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://twitter.com/posgradoupea"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://www.instagram.com/posgrado_upea/"><i class="fab fa-instagram"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://www.limkedin.com/in/posgrado-upea-9324581a3/"><i class="fab fa-pinterest-p"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://www.youtube.com/c/EstudiaenPosgradoUPEA/"><i class="fab fa-youtube"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="copyright-text">
                                <p>
                                    Copyright © <a href="https://posgrado.upea.bo/">| Posgrado Upea</a>
                                </p>
                                <a href="contact">Desarrollado por : Team PSG</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-shape">
                <img
                    src="assets/img/images/footer_shape01.png"
                    alt=""
                    data-aos="fade-right"
                    data-aos-delay="400" />
                <img
                    src="assets/img/images/footer_shape02.png"
                    alt=""
                    data-aos="fade-left"
                    data-aos-delay="400" />
                <img
                    src="assets/img/images/footer_shape03.png"
                    alt=""
                    data-parallax='{"x" : 100 , "y" : -100 }' />
            </div>
        </div>
    </footer>
    <!-- footer-area-end -->
    <!-- JS here -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.odometer.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/gsap.js"></script>
    <script src="assets/js/ScrollTrigger.js"></script>
    <script src="assets/js/SplitText.js"></script>
    <script src="assets/js/gsap-animation.js"></script>
    <script src="assets/js/jquery.parallaxScroll.min.js"></script>
    <script src="assets/js/swiper-bundle.js"></script>
    <script src="assets/js/ajax-form.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>