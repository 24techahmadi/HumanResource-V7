<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.geekslabs.com/materialize/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Jul 2015 13:00:12 GMT -->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <title>@yield('title')</title>

  <!-- Favicons-->
  <link rel="icon" href="{{ URL::asset('assets/images/favicon/favicon-32x32.png') }}" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="{{ URL::asset('assets/images/favicon/apple-touch-icon-152x152.png') }}">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  <link href="{{ URL::asset('assets/css/materialize.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="{{ URL::asset('assets/css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="{{ URL::asset('assets/css/page-center.css') }}" type="text/css" rel="stylesheet" media="screen,projection">

  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
<link href="{{ URL::asset('assets/css/prism.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="{{ URL::asset('assets/js/plugins/perfect-scrollbar/perfect-scrollbar.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
  
  
</head>

<body class="cyan">
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->

    @yield('content')

  <!-- ================================================
    Scripts
    ================================================ -->

    <!-- jQuery Library -->
    <script type="text/javascript" src="{{ URL::asset('assets/js/jquery-1.11.2.min.js') }}"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="{{ URL::asset('assets/js/materialize.js') }}"></script>
    <!--prism-->
    <script type="text/javascript" src="{{ URL::asset('assets/js/prism.js') }}"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="{{ URL::asset('assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="{{ URL::asset('assets/js/plugins.js') }}"></script>   
   

@yield('function')
</body>


<!-- Mirrored from demo.geekslabs.com/materialize/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Jul 2015 13:00:16 GMT -->
</html>