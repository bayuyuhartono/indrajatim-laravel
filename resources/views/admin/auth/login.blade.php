<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Indrajatim">
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


    <title>Indrajatim</title>

    <!-- vendor css -->
    <link href="{{ asset('assets/admin/res') }}/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="{{ asset('assets/admin/res') }}/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="{{ asset('assets/admin/res') }}/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">

    <!-- Amanda CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/res') }}/css/amanda.css">
  </head>

  <body>

    <div class="am-signin-wrapper">
      <div class="am-signin-box">
        <div class="row no-gutters">
          <div class="col-lg-5">
            <div>
                <a href="index.html" class="am-logo"><img src="{{ asset('assets/images/logo.png') }}" class="logoimg" alt="Indrajatim" style="width: 240px;"/></a>
            </div>
          </div>
          <div class="col-lg-7">
            <h5 class="tx-gray-800 mg-b-25">Signin to Your Account</h5>
            <form method="POST" action="{{ url('admin/login') }}">
                @csrf
                <div class="form-group">
                <label class="form-control-label">Username:</label>
                <input type="text" name="username" class="form-control" placeholder="Enter your username">
                </div><!-- form-group -->

                <div class="form-group">
                <label class="form-control-label">Password:</label>
                <input type="password" name="password" class="form-control" placeholder="Enter your password">
                </div><!-- form-group -->

                {{-- <div class="form-group mg-b-20"><a href="">Reset password</a></div> --}}

                <button type="submit" class="btn btn-block">Sign In</button>
            </form>
          </div><!-- col-7 -->
        </div><!-- row -->
        {{-- <p class="tx-center tx-white-5 tx-12 mg-t-15">Copyright &copy; 2017. All Rights Reserved. Amanda by ThemePixels</p> --}}
      </div><!-- signin-box -->
    </div><!-- am-signin-wrapper -->

    <script src="{{ asset('assets/admin/res') }}/lib/jquery/jquery.js"></script>
    <script src="{{ asset('assets/admin/res') }}/lib/popper.js/popper.js"></script>
    <script src="{{ asset('assets/admin/res') }}/lib/bootstrap/bootstrap.js"></script>
    <script src="{{ asset('assets/admin/res') }}/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>

    <script src="{{ asset('assets/admin/res') }}/js/amanda.js"></script>
  </body>
</html>
