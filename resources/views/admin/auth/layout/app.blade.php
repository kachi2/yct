<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta name="description" content="Responsive Admin Template">
    <meta name="author" content="RedstarHospital">
    <title>Yaba College of Technology | @yield('title')</title>
    <!-- google font -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css">
    <!-- icons -->
    <link href="{{ asset('./admin/assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css') }}">
    <link rel="stylesheet" href="{{ asset('./admin/assets/plugins/iconic/css/material-design-iconic-font.min.css') }}">
    <!-- bootstrap -->
    <link href="{{ asset('./admin/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <!-- style -->
    <link rel="stylesheet" href="{{ asset('./admin/assets/css/pages/extra_pages.css') }}">
    <!-- favicon -->
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
</head>
<body>

<!-- Content-->
@yield('content')

<!-- start js include path -->
<script src="{{ asset('./admin/assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- bootstrap -->
<script src="{{ asset('./admin/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('./admin/assets/js/pages/extra-pages/pages.js') }}"></script>
<!-- end js include path -->
</body>
</html>
