<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8"/>
    <!-- Title-->
    <title>Yaba College of Technology @yield('title')</title>
    <!-- SEO Meta-->
    <meta
        name="description"
        content="Yaba College of Technology Lagos Nigeria the first institution and best polytechnic in Nigeria"
    />
    <meta name="author" content="Yabatech"/>
    <meta
        name="keywords"
        content="Yabatech, Polytechnic, NBTE, Yct, College, Technology"
    />
    <meta name="author" content="Yabatech"/>
    <meta name="copyright" content="Yaba College of Technology Lagos Nigeria"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta
        name="description"
        content="Yaba College of Technology, the first institution and best polytechnic in Nigeria"
    />
    <meta name="rating" content="general"/>
    <meta name="robots" content="all,follow"/>
    <meta name="googlebot" content="index,follow"/>
    <meta property="og:url" content="https://facebook.com/yabatech"/>
    <meta property="og:type" content="website"/>
    <meta
        property="og:title"
        content="Yaba College of Technology Lagos Nigeria"
    />
    <meta
        property="og:description"
        content="Yaba College of Technology Lagos Nigeria the first institution and best polytechnic in Nigeria"
    />
    <meta
        property="og:image"
        content="./assets/img/favicon/favicon-96x96.png"
    />
    <!-- viewport scale-->
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"
    />
    <!-- Favicon and Apple Icons-->
    <link
        rel="apple-touch-icon"
        sizes="57x57"
        href="{{ asset('./assets/img/favicon/apple-icon-57x57.png') }}"
    />
    <link
        rel="apple-touch-icon"
        sizes="60x60"
        href="{{ asset('./assets/img/favicon/apple-icon-60x60.png') }}"
    />
    <link
        rel="apple-touch-icon"
        sizes="72x72"
        href="{{ asset('./assets/img/favicon/apple-icon-72x72.png') }}"
    />
    <link
        rel="apple-touch-icon"
        sizes="76x76"
        href="{{ asset('./assets/img/favicon/apple-icon-76x76.png') }}"
    />
    <link
        rel="apple-touch-icon"
        sizes="114x114"
        href="{{ asset('./assets/img/favicon/apple-icon-114x114.png') }}"
    />
    <link
        rel="apple-touch-icon"
        sizes="120x120"
        href="{{ asset('./assets/img/favicon/apple-icon-120x120.png') }}"
    />
    <link
        rel="apple-touch-icon"
        sizes="144x144"
        href="{{ asset('./assets/img/favicon/apple-icon-144x144.png') }}"
    />
    <link
        rel="apple-touch-icon"
        sizes="152x152"
        href="{{ asset('./assets/img/favicon/apple-icon-152x152.png') }}"
    />
    <link
        rel="apple-touch-icon"
        sizes="180x180"
        href="{{ asset('./assets/img/favicon/apple-icon-180x180.png') }}"
    />
    <link
        rel="icon"
        type="image/png"
        sizes="192x192"
        href="{{ asset('./assets/img/favicon/android-icon-192x192.png') }}"
    />
    <link
        rel="icon"
        type="image/png"
        sizes="32x32"
        href="{{ asset('./assets/img/favicon/favicon-32x32.png') }}"
    />
    <link
        rel="icon"
        type="image/png"
        sizes="96x96"
        href="{{ asset('./assets/img/favicon/favicon-96x96.png') }}"
    />
    <link
        rel="icon"
        type="image/png"
        sizes="16x16"
        href="{{ asset('./assets/img/favicon/favicon-16x16.png') }}"
    />
    <link rel="manifest" href="{{ asset('./assets/img/favicon/manifest.json') }}"/>
    <meta name="msapplication-TileColor" content="#00cb54"/>
    <meta
        name="msapplication-TileImage"
        content="{{ asset('./assets/img/favicon/ms-icon-144x144.png') }}"
    />
    <meta name="theme-color" content="#00cb54"/>
    <!-- General pae styles-->
@include('pages.includes.main-css')
<!-- Include individual page styles-->
    @yield('styles')
</head>
<body>
<header class="site-header bg-dark text-white-0_5">
    <div class="container">
        <div class="row align-items-center justify-content-between mx-0">
            <ul class="list-inline d-none d-lg-block mb-0">
                <li class="list-inline-item mr-3">
                    <div class="d-flex align-items-center">
                        <i class="ti-email mr-2"></i>
                        <a href="mailto:registrar@yabatech.edu.ng"
                        >registrar@yabatech.edu.ng</a
                        >
                    </div>
                </li>
                <li class="list-inline-item mr-3">
                    <div class="d-flex align-items-center">
                        <i class="ti-headphone mr-2"></i>
                        <a href="tel:+2347037431055">+234-7037431055</a>
                    </div>
                </li>
            </ul>
            <ul class="list-inline mb-0">
                <li
                    class="list-inline-item mr-0 p-2 border-right border-left border-white-0_1"
                >
                    <a href="#"><i class="ti-facebook"></i></a>
                </li>
                <li class="list-inline-item mr-0 p-2 border-right border-white-0_1">
                    <a href="#"><i class="ti-twitter"></i></a>
                </li>

                <li class="list-inline-item mr-0 p-2 border-right border-white-0_1">
                    <a href="#"><i class="ti-linkedin"></i></a>
                </li>
            </ul>
            <ul class="list-inline mb-0">
                <li
                    class="list-inline-item mr-0 p-md-2 p-2 border-right border-left border-white-0_1"
                >
                    <a href="#">Research</a>
                </li>
                <li
                    class="list-inline-item mr-0 p-md-2 p-2 border-right border-white-0_1"
                >
                    <a href="#">Apply to Yabatech</a>
                </li>
            </ul>
        </div>
        <!-- END END row-->
    </div>
    <!-- END container-->
</header>
<!-- END site header-->

<nav class="ec-nav sticky-top bg-white">
    <div class="container">
        <div class="navbar p-0 navbar-expand-lg">
            <div class="navbar-brand">
                <a class="logo-default" href="{{ route('pages.index') }}"
                ><img width="217" alt="" src="{{ asset('./assets/img/logo-black.svg') }}"
                    /></a>
            </div>
            <span
                aria-expanded="false"
                class="navbar-toggler ml-auto collapsed"
                data-target="#ec-nav__collapsible"
                data-toggle="collapse"
            >
            <div class="hamburger hamburger--spin js-hamburger">
              <div class="hamburger-box">
                <div class="hamburger-inner"></div>
              </div>
            </div>
          </span>
            <div
                class="collapse navbar-collapse when-collapsed"
                id="ec-nav__collapsible"
            >
                <ul class="nav navbar-nav ec-nav__navbar ml-auto">
                    <li class="nav-item nav-item__has-dropdown">
                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            data-toggle="dropdown"
                        >About</a
                        >
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('about.vision') }}" class="nav-link__list"
                                >Vision & Mission</a
                                >
                            </li>
                            <li>
                                <a href="#" class="nav-link__list">History</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item nav-item__has-dropdown">
                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            data-toggle="dropdown"
                        >Admissions</a
                        >
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#" class="nav-link__list"
                                >Programmes</a
                                >
                            </li>
                            <li>
                                <a href="#" class="nav-link__list"
                                >Apply to Yabatech</a
                                >
                            </li>
                            <li>
                                <a href="#" class="nav-link__list"
                                >Entry Requirements</a
                                >
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item nav-item__has-dropdown">
                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            data-toggle="dropdown"
                        >Students</a
                        >
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#" class="nav-link__list">Student Portal</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link__list">
                                    Sports & Societies</a
                                >
                            </li>
                            <li>
                                <a href="#" class="nav-link__list"
                                >Downloads</a
                                >
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item nav-item__has-megamenu">
                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            data-toggle="dropdown"
                        >Academics</a
                        >
                        <div class="dropdown-menu p-2 p-md-4">
                            <div class="row mx-0">
                                <div class="col-md-4">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a
                                                class="nav-link__list px-0 font-weight-bold text-uppercase"
                                                href="#"
                                            >Schools</a
                                            >
                                        </li>
                                        <li>
                                            <a class="nav-link__list px-0" href="#"
                                            >Art, Design & Printing</a
                                            >
                                        </li>
                                        <li>
                                            <a class="nav-link__list px-0" href="#"
                                            >Engineering</a
                                            >
                                        </li>
                                        <li>
                                            <a class="nav-link__list px-0" href="#"
                                            >Liberal studies</a
                                            >
                                        </li>
                                        <li>
                                            <a class="nav-link__list px-0" href="#"
                                            >Management & Business studies</a
                                            >
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-4">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a
                                                class="nav-link__list px-0 font-weight-bold text-uppercase"
                                                href="#"
                                            >CCS</a
                                            >
                                        </li>
                                        <li>
                                            <a class="nav-link__list px-0" href="#"
                                            >Weekend Programmes</a
                                            >
                                        </li>

                                        <li>
                                            <a class="nav-link__list px-0" href="#"
                                            >Weekday/Evening Programmes</a
                                            >
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-4">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a
                                                class="nav-link__list px-0 font-weight-bold text-uppercase"
                                                href="#"
                                            >Students</a
                                            >
                                        </li>
                                        <li>
                                            <a class="nav-link__list px-0" href="#"
                                            >Students Affairs</a
                                            >
                                        </li>

                                        <li>
                                            <a class="nav-link__list px-0" href="#"
                                            >E-Learning</a
                                            >
                                        </li>

                                        <li>
                                            <a class="nav-link__list px-0" href="#"
                                            >E-Screening Portal</a
                                            >
                                        </li>

                                        <li>
                                            <a class="nav-link__list px-0" href="#"
                                            >Student Portal</a
                                            >
                                        </li>

                                        <li>
                                            <a class="nav-link__list px-0" href="#"
                                            >Calendars</a
                                            >
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item nav-item__has-dropdown">
                        <a class="nav-link" href="#">Payments</a>
                    </li>

                    <li class="nav-item nav-item__has-dropdown">
                        <a class="nav-link" href="#">News</a>
                    </li>

                    <li class="nav-item nav-item__has-dropdown">
                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            data-toggle="dropdown"
                        >More</a
                        >
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#" class="nav-link__list">Consult</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link__list"> Library</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link__list">TETFund</a>
                            </li>

                            <li>
                                <a href="#" class="nav-link__list">Alumni</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link__list">Contact</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="nav-toolbar">
                <ul class="navbar-nav ec-nav__navbar">
                    <li class="nav-item">
                        <a class="nav-link site-search-toggler" href="#">
                            <i class="ti-search"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END container-->
</nav>
<!-- END ec-nav -->

<div class="site-search">
    <div class="site-search__close bg-black-0_8"></div>
    <form class="form-site-search" action="#" method="POST">
        <div class="input-group">
            <input
                type="text"
                placeholder="Search"
                class="form-control py-3 border-white"
                required=""
            />
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                    <i class="ti-search"></i>
                </button>
            </div>
        </div>
    </form>
</div>
<!-- END site-search-->

<!-- Main content-->
@yield('content')
<!-- Main content end-->

<footer class="site-footer">
    <div class="footer-top bg-dark text-white-0_6 pt-5 paddingBottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mt-5">
                    <img src="{{ asset('./assets/img/logo-white.svg') }}" alt="Logo"/>
                    <div class="margin-y-40">
                        <p>
                            On behalf of the Governing Council, College Management, Staff
                            and Students, it is my pleasure and privilege to welcome you
                            to Yaba College of Technology...
                        </p>
                    </div>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a class="iconbox bg-white-0_2 hover:primary" href=""
                            ><i class="ti-facebook"> </i
                                ></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="iconbox bg-white-0_2 hover:primary" href=""
                            ><i class="ti-twitter"> </i
                                ></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="iconbox bg-white-0_2 hover:primary" href=""
                            ><i class="ti-linkedin"> </i
                                ></a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 mt-5">
                    <h4 class="h5 text-white">Contact Us</h4>
                    <div class="width-3rem bg-primary height-3 mt-3"></div>
                    <ul class="list-unstyled marginTop-40">
                        <li class="mb-3">
                            <i class="ti-headphone mr-3"></i
                            ><a href="tel:+234-7037431055">234-7037431055 </a>
                        </li>
                        <li class="mb-3">
                            <i class="ti-email mr-3"></i
                            ><a href="mailto:registrar@yabatech.edu.ng"
                            >registrar@yabatech.edu.ng</a
                            >
                        </li>
                        <li class="mb-3">
                            <div class="media">
                                <i class="ti-location-pin mt-2 mr-3"></i>
                                <div class="media-body">
                      <span
                      >Yaba College of Technology, Herbert Macaulay Road,
                        Opposite WAEC office, Yaba Lagos.</span
                      >
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-6 mt-5">
                    <h4 class="h5 text-white">Quick links</h4>
                    <div class="width-3rem bg-primary height-3 mt-3"></div>
                    <ul class="list-unstyled marginTop-40">
                        <li class="mb-2"><a href="#">Apply to Yabatech</a></li>
                        <li class="mb-2"><a href="#">Yabatech radio</a></li>
                        <li class="mb-2">
                            <a href="#">National Board for Technical Education</a>
                        </li>
                        <li class="mb-2"><a href="#">Ministry of Education</a></li>
                        <li class="mb-2"><a href="#">Give to Yabatech</a></li>
                        <li class="mb-2"><a href="#">Give to Yabatech</a></li>
                        <li class="mb-2"><a href="#">Principal officers</a></li>
                        <li class="mb-2"><a href="#">Alumni</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 mt-5">
                    <h4 class="h5 text-white">Newsletter</h4>
                    <div class="width-3rem bg-primary height-3 mt-3"></div>
                    <div class="marginTop-40">
                        <p class="mb-4">
                            Subscribe to get update and information. Don't worry, we won't
                            send spam!
                        </p>
                        <form class="marginTop-30" action="#" method="POST">
                            <div class="input-group">
                                <input
                                    type="text"
                                    placeholder="Enter your email"
                                    class="form-control py-3 border-white"
                                    required=""
                                />
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">
                                        Subscribe
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- END row-->
        </div>
        <!-- END container-->
    </div>
    <!-- END footer-top-->

    <div class="footer-bottom bg-black-0_9 py-5 text-center">
        <div class="container">
            <p class="text-white-0_5 mb-0">
                &copy; @php echo date('Y') @endphp Yaba College Of Technology . All rights reserved.
                Created by
                <a href="#" target="_blunk">CITM</a>
            </p>
        </div>
    </div>
    <!-- END footer-bottom-->
</footer>
<!-- END site-footer -->

<div class="scroll-top">
    <i class="ti-angle-up"></i>
</div>
<!-- Scripts-->
@include('pages.includes.main-js')
@stack('scripts')
</body>
</html>

