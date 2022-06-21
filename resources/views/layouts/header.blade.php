<header class="header-classic">

    <div class="container-xl">
        <!-- header top -->
        <div class="header-top">
            <div class="row align-items-center">

                <div class="col-md-4 col-xs-12">
                    <!-- site logo -->
                    <a class="navbar-brand" href="{{ url('') }}"><img src="{{ asset('assets/images/logo.png') }}" alt="logo" /></a> 
                </div>

                <div class="col-md-8 d-none d-md-block">
                    <!-- social icons -->
                    <ul class="social-icons list-unstyled list-inline mb-0 float-end">
                        <li class="list-inline-item"><a href="https://www.facebook.com/indrajatim.com" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="https://twitter.com/indrajatimcom" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.instagram.com/indrajatimcom" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        
                        
                        <li class="list-inline-item"><a href="https://www.youtube.com/indrajatim" target="_blank"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg">
        <!-- header bottom -->
        <div class="header-bottom  w-100">
            
            <div class="container-xl">
                <div class="d-flex align-items-center">
                    <div class="collapse navbar-collapse flex-grow-1">
                        <ul class="navbar-nav">
                        <!-- menus -->
                            <li class="nav-item"> <a class="nav-link" href="{{ url('') }}"><i class="icon-home"></i></a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{ url('infoterkini') }}">Info Terkini</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{ url('kabarjatim') }}">Kabar Jatim</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{ url('politik') }}">Politik</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{ url('budaya') }}">Budaya</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{ url('sejarah') }}">Sejarah</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{ url('hiburan') }}">Hiburan</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{ url('catatanakhirpekan') }}">CAP</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{ url('tokoh') }}">Tokoh</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{ url('advertorial') }}">Advertorial</a></li>
                        </ul>
                    </div>

                    <!-- header buttons -->
                    <div class="header-buttons">
                        <button class="search icon-button">
                            <i class="icon-magnifier"></i>
                        </button>
                            <a class="navbar-brand spss" href="{{ url('') }}"><img src="{{ asset('assets/images/logo.png') }}" alt="logo" style="width: 75% !important" /></a> 
                        <button class="burger-menu icon-button ms-2 float-end float-lg-none">
                            <span class="burger-icon"></span>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </nav>
