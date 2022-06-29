<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Amanda">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/amanda/img/amanda-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/amanda">
    <meta property="og:title" content="Bracket">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/amanda/img/amanda-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/amanda/img/amanda-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">


    <title>Admin - Indrajatim.com</title>

    <!-- vendor css -->
    <link href="{{ asset('assets/admin/res') }}/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="{{ asset('assets/admin/res') }}/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="{{ asset('assets/admin/res') }}/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="{{ asset('assets/admin/res') }}/lib/jquery-toggles/toggles-full.css" rel="stylesheet">
    <link href="{{ asset('assets/admin/res') }}/lib/rickshaw/rickshaw.min.css" rel="stylesheet">
    <link href="{{ asset('assets/admin/res') }}/lib/highlightjs/github.css" rel="stylesheet">
    <link href="{{ asset('assets/admin/res') }}/lib/select2/css/select2.min.css" rel="stylesheet">
    <link href="{{ asset('assets/admin/res') }}/lib/spectrum/spectrum.css" rel="stylesheet">

    <!-- Amanda CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/res') }}/css/amanda.css">

    <style>
        .logoimg {
            width: 275px;
            padding-top: 3px;
            filter: brightness(0) invert(1);
        }
    </style>
    @stack('styles')

</head>

<body>

    <div class="am-header">

        @include('admin.layouts.header')

    </div><!-- am-header -->

    <div class="am-sideleft">

        <ul class="nav am-sideleft-tab">
            <li class="nav-item">
                <a href="#mainMenu" class="nav-link active"><i class="icon ion-ios-home-outline tx-24"></i></a>
            </li>
            <li class="nav-item">
                <a href="#emailMenu" class="nav-link"><i class="icon ion-ios-email-outline tx-24"></i></a>
            </li>
            <li class="nav-item">
                <a href="#chatMenu" class="nav-link"><i class="icon ion-ios-chatboxes-outline tx-24"></i></a>
            </li>
            <li class="nav-item">
                <a href="#settingMenu" class="nav-link"><i class="icon ion-ios-gear-outline tx-24"></i></a>
            </li>
        </ul>

        <div class="tab-content">
            <div id="mainMenu" class="tab-pane active">

                <ul class="nav am-sideleft-menu">
                    {{-- <li class="nav-item">
                      <a href="{{ url('admin') }}" class="nav-link active">
                        <i class="icon ion-ios-home-outline"></i>
                        <span>Dashboard</span>
                      </a>
                    </li><!-- nav-item --> --}}
                    <li class="nav-item">
                      <a href="{{ url('admin/berita') }}" class="nav-link active">
                        <i class="icon ion-ios-list-outline"></i>
                        <span>Berita</span>
                      </a>
                    </li><!-- nav-item -->
                    <li class="nav-item">
                        <a href="{{ url('admin/banner-main') }}" class="nav-link active">
                          <i class="icon ion-ios-list-outline"></i>
                          <span>Banner Utama</span>
                        </a>
                      </li><!-- nav-item -->
                      <li class="nav-item">
                          <a href="{{ url('admin/banner-side') }}" class="nav-link active">
                            <i class="icon ion-ios-list-outline"></i>
                            <span>Banner Samping</span>
                          </a>
                      </li><!-- nav-item -->
                </ul>

            </div><!-- #mainMenu -->
            <div id="settingMenu" class="tab-pane">


            </div><!-- #settingMenu -->
        </div><!-- tab-content -->
    </div><!-- am-sideleft -->

    <div class="am-mainpanel">

        @yield('content')

        <div class="am-footer">
            <span>Copyright &copy;. indrajatim.com</span>
        </div><!-- am-footer -->
    </div><!-- am-mainpanel -->

    <script src="{{ asset('assets/admin/res') }}/lib/jquery/jquery.js"></script>
    <script src="{{ asset('assets/admin/res') }}/lib/popper.js/popper.js"></script>
    <script src="{{ asset('assets/admin/res') }}/lib/bootstrap/bootstrap.js"></script>
    <script src="{{ asset('assets/admin/res') }}/lib/jquery-ui/jquery-ui.js"></script>
    <script src="{{ asset('assets/admin/res') }}/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="{{ asset('assets/admin/res') }}/lib/jquery-toggles/toggles.min.js"></script>
    <script src="{{ asset('assets/admin/res') }}/lib/highlightjs/highlight.pack.js"></script>
    <script src="{{ asset('assets/admin/res') }}/lib/select2/js/select2.min.js"></script>
    <script src="{{ asset('assets/admin/res') }}/lib/spectrum/spectrum.js"></script>


    
    <script src="{{ asset('assets/admin/res') }}/js/amanda.js"></script>
    
    @stack('scripts')
    <script>
        $(function(){
            'use strict';

            $('.select2').select2({
                minimumResultsForSearch: Infinity
            });

            $('.fc-datepicker').datepicker({
                showOtherMonths: true,
                selectOtherMonths: true,
            });

            $(".tokenizer").select2({
                tags: true,
            })

        })
    </script>

</body>

</html>
