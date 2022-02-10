<!doctype html>
<html>

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-T3KH7JK37T"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-T3KH7JK37T');
    </script>
    
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NP2T99J');</script>
    <!-- End Google Tag Manager -->

    <title>{{ isset($detailBerita->judul) ? $detailBerita->judul : 'Berita Terkini Jawa Timur'; }} - indrajatim.com</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="INDRA JATIM" />
    <meta name="description" content="{{ isset($detailBerita->judul) ? $detailBerita->judul : 'Berita terkini dan terbaru dari Jawa Timur mengenai politik, budaya, sejarah, hiburan dan informasi masyarakat.'; }}">
    <meta name="keywords" content="{{ isset($detailBerita->judul) ? $detailBerita->judul : 'berita terkini, berita jatim, berita politik, berita terbaru, berita hari ini, budaya'; }}">
    <meta name="news_keywords" content="{{ isset($detailBerita->judul) ? $detailBerita->judul : 'berita terkini, berita jatim, berita politik, berita terbaru, berita hari ini, budaya'; }}">
    <meta content='id' name='language'/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="googlebot" content="index, follow" />
    <meta name="author" content="Indra Jatim">
    <meta name="robots" content="index, follow" />
    <meta name="language" content="id" />
    <meta name="geo.country" content="id" />
    <meta http-equiv="content-language" content="In-Id" />
    <meta name="geo.placename" content="Indonesia" />

    <meta property="og:type" content="article"/>
    <meta property="og:url" content="{{ $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";  }}">
    <meta property="og:title" content="{{ isset($detailBerita->judul) ? $detailBerita->judul : 'Berita Terkini Jawa Timur'; }} - indrajatim.com">
    <meta property="og:description" content="{{ isset($detailBerita->judul) ? $detailBerita->judul : 'Berita terkini dan terbaru dari Jawa Timur mengenai politik, budaya, sejarah, hiburan dan informasi masyarakat'; }}">
    <meta property="og:image" content="{{ isset($detailBerita->gambar) ? asset('assets/admin/upload/berita/'.$detailBerita->Gambar) : asset('assets/indrajatim_assets/indrajatim-og.png'); }}">
    <meta property="og:image:secure_url" content="{{ isset($detailBerita->gambar) ? asset('assets/admin/upload/berita/'.$detailBerita->Gambar) : asset('assets/indrajatim_assets/indrajatim-og.png'); }}">
    <meta property="og:site_name" content="INDRAJATIM.com" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image:alt" content="Indrajatim">
    <meta name="twitter:site" content="@indrajatimcom" />
    <meta name="twitter:creator" content="@indrajatimcom">
    <meta name="twitter:title" content="{{ isset($detailBerita->judul) ? $detailBerita->judul : 'Berita Terkini Jawa Timur'; }} - indrajatim.com">
    <meta name="twitter:description" content="{{ isset($detailBerita->judul) ? $detailBerita->judul : 'Berita terkini dan terbaru dari Jawa Timur mengenai politik, budaya, sejarah, hiburan dan informasi masyarakat'; }}">
    <meta name="twitter:image" content="{{ isset($detailBerita->gambar) ? asset('assets/admin/upload/berita/'.$detailBerita->Gambar) : asset('assets/indrajatim_assets/indrajatim-og.png'); }}">
    
    <meta name="google-site-verification" content="2wEnOD0KzP2P4JJj45kb9w9EgQfvf5pfWGCuhOIWOks" />

    <link rel="shortcut icon" href="{{ asset('assets/indrajatim_assets/favicon_ijt1.ico');}}" />
    <link rel="canonical" href="{{ url()->current() }}">

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
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NP2T99J" 
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

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
            <li class="list-inline-item"><a href="https://www.facebook.com/indrajatim.com"><i class="fab fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="https://twitter.com/indrajatimcom"><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="https://www.instagram.com/indrajatim.com"><i class="fab fa-instagram"></i></a></li>
            
            
            <li class="list-inline-item"><a href="https://www.youtube.com/indrajatim"><i class="fab fa-youtube"></i></a></li>
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