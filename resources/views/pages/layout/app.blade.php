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
@include('pages.includes.header')
<!-- END site header-->
@include('pages.includes.nav')
<!-- END ec-nav -->

<!-- Main content-->
@yield('content')
<!-- Main content end-->

@include('pages.includes.footer')
<!-- END site-footer -->

<div class="scroll-top">
    <i class="ti-angle-up"></i>
</div>
<!-- Scripts-->
@include('pages.includes.main-js')
@stack('scripts')
@yield('script')
</body>
</html>

