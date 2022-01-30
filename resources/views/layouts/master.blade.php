<!doctype html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Indrajatim</title>
    <meta name="description" content="Indrajatim - Minimal Blog & Magazine HTML Theme">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('assets/css/simple-line-icons.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css" media="all">

    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    <style>
        .page-header {
            background: #edeef0;
        }
    </style>
    @stack('styles')

</head>

<body>
    <!-- site wrapper -->
    <div class="site-wrapper">

        <div class="main-overlay"></div>

        <header class="header-classic">
            @include('layouts.header')
        </header>

        @yield('content')

        <!-- footer -->
        <footer>
            @include('layouts.footer')
        </footer>

    </div><!-- end site wrapper -->

    <!-- search popup area -->
    <div class="search-popup">
        <!-- close button -->
        <button type="button" class="btn-close" aria-label="Close"></button>
        <!-- content -->
        <div class="search-content">
            <div class="text-center">
                <h3 class="mb-4 mt-0">Press ESC to close</h3>
            </div>
            <!-- form -->
            <form class="d-flex search-form" action="/pencarian" method="GET">
                <input class="form-control me-2" type="search" placeholder="Search and press enter ..."
                    aria-label="Search" name="q">
                <button class="btn btn-default btn-lg" type="submit"><i class="icon-magnifier"></i></button>
            </form>
        </div>
    </div>

    <!-- canvas menu -->
    <div class="canvas-menu d-flex align-items-end flex-column">
        <!-- close button -->
        <button type="button" class="btn-close" aria-label="Close"></button>

        <!-- logo -->
        <div class="logo">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Indrajatim" />
        </div>

        <!-- menu -->
        <nav>
            <ul class="vertical-menu">
                <li class=""> <a class="" href="{{ url('') }}">Beranda</i></a></li>
                <li class=""> <a class="" href="{{ url('infoterkini') }}">Info Terkini</a></li>
                <li class=""> <a class="" href="{{ url('kabarjatim') }}">Kabar Jatim</a></li>
                <li class=""> <a class="" href="{{ url('politik') }}">Politik</a></li>
                <li class=""> <a class="" href="{{ url('budaya') }}">Budaya</a></li>
                <li class=""> <a class="" href="{{ url('sejarah') }}">Sejarah</a></li>
                <li class=""> <a class="" href="{{ url('hiburan') }}">Hiburan</a></li>
                <li class=""> <a class="" href="{{ url('catatanakhirpekan') }}">CAP</a></li>
                <li class=""> <a class="" href="{{ url('tokoh') }}">Tokoh</a></li>
                <li class=""> <a class="" href="{{ url('advertorial') }}">Advertorial</a></li>
            </ul>
        </nav>

        <!-- social icons -->
        <ul class="social-icons list-unstyled list-inline mb-0 mt-auto w-100">
            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
        </ul>
    </div>

    <!-- JAVA SCRIPTS -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.sticky-sidebar.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    @stack('scripts')

</body>

</html>