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
<header class="site-header  text-white" style="background:#006600">
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
                    <a href="http://facebook.com/yabatech" target="_blank" rel="noreferrer"><i class="ti-facebook"></i></a>
                </li>
                <li class="list-inline-item mr-0 p-2 border-right border-white-0_1">
                    <a href="http://twitter.com/yabatechng"
                       target="_blank" rel="noreferrer"><i class="ti-twitter"></i></a>
                </li>

                <li class="list-inline-item mr-0 p-2 border-right border-white-0_1">
                    <a href="http://instagram.com/yabatechofficial"
                       target="_blank" rel="noreferrer"><i class="ti-instagram"></i></a>
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
@include('pages.includes.nav')
<!-- END ec-nav -->

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
                            <a class="iconbox bg-white-0_2 hover:primary" href="http://facebook.com/yabatech"
                            target="_blank" rel="noreferrer"><i class="ti-facebook"> </i
                                ></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="iconbox bg-white-0_2 hover:primary" href="http://twitter.com/yabatechng"
                            target="_blank" rel="noreferrer"><i class="ti-twitter"> </i
                                ></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="iconbox bg-white-0_2 hover:primary" href="http://instagram.com/yabatechofficial"
                            target="_blank" rel="noreferrer"><i class="ti-instagram"> </i
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
                        <li class="mb-2"><a href="#">Art Gallery</a></li>
                        <li class="mb-2"><a href="#">Yabatech Radio</a></li>
                        <li class="mb-2">
                            <a href="https://net.nbte.gov.ng/" target="_blank" rel="noreferrer">NBTE</a>
                        </li>
                        <li class="mb-2"><a href="https://education.gov.ng/" target="_blank" rel="noreferrer">Ministry of Education</a></li>
                        <li class="mb-2"><a href="#">FSDC</a></li>
                        <li class="mb-2"><a href="#">Give to Yabatech</a></li>
                        <li class="mb-2"><a href="#">Principal Officers</a></li>
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
                <a href="#" target="_blank">CITM</a>
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

