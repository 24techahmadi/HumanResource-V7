<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.geekslabs.com/materialize/page-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Jul 2015 13:00:18 GMT -->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">

  <title>@yield('title') </title>
  
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
  <link href="{{ URL::asset('assets/dataTable/css/jquery.dataTables.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
  


  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="{{ URL::asset('assets/css/prism.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="{{ URL::asset('assets/js/plugins/perfect-scrollbar/perfect-scrollbar.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="{{ URL::asset('assets/js/plugins/data-tables/css/jquery.dataTables.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="{{ URL::asset('assets/js/plugins/chartist-js/chartist.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection">

    <style type="text/css">
        .parsley-required{color:red;}
        .parsley-equalto{color:red;}
        .parsley-length{color:red;}
    </style>
</head>

<body>


  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->


  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START MAIN -->
  <div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

      <!-- START LEFT SIDEBAR NAV-->
  
      <aside id="left-sidebar-nav">
          <ul id="slide-out" class="side-nav fixed leftside-navigation">
              <li class="user-details cyan darken-2">
                  <div class="row">
                      <div id="user-pic" class="col col s4 m4 l4">
                          <img src="{{ URL::asset('assets/images/avatar.jpg') }}" alt="" class="circle responsive-img valign profile-image">
                      </div>

                  </div>
                  <div class="col col s8 m8 l8">
                          <ul id="profile-dropdown" class="dropdown-content">
                              <li><a href="{{ URL::to('#') }}"><i class="mdi-action-face-unlock"></i> Profile</a>
                              </li>
                              <li><a href="{{ URL::to('#') }}"><i class="mdi-action-settings"></i> Settings</a>
                              </li>
                              <li><a href="{{ URL::to('#') }}"><i class="mdi-communication-live-help"></i> Help</a>
                              </li>
                              <li class="divider"></li>
                              <li><a href="{{ URL::to('lock') }}"><i class="mdi-action-lock-outline"></i> Lock</a>
                              </li>
                              <li><a href="{{ URL::to('login') }}"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                              </li>
                          </ul>
                             <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">مدیریت ارزیابی<i class="mdi-navigation-arrow-drop-down right"></i></a>
                          
                      </div> 
              </li>


              <li class="bold"><a href="{{ URL::to('evaluation') }}" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i>دشبورد</a>
              </li>


              <li class="no-padding">
                  <ul class="collapsible collapsible-accordion">
                      <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-invert-colors"></i>پلان ها</a>
                          <div class="collapsible-body">
                              <ul>
                                  <li><a href="{{ URL::to('evaluationplanA') }}">پلان الف</a>
                                  </li>
                                  <li><a href="{{ URL::to('evaluationplanB') }}">پلان ب</a>
                                  </li>
                                  <li><a href="{{ URL::to('evaluationplanC') }}">پلان ج</a>
                                  </li>
                              </ul>
                          </div>
                      </li>

                      <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-editor-border-all"></i>ارزیابی</a>
                          <div class="collapsible-body">
                              <ul>
                                  <li><a href="{{ URL::to('upperevaluation') }}">سطح بلند</a>
                                  </li>
                                  <li><a href="{{ URL::to('lowerevaluation') }}">سطح پاین</a>
                                  </li>

                              </ul>
                          </div>
                      </li>

                      <li class="bold"><a href="{{ URL::to('course') }}" class="collapsible-header  waves-effect waves-cyan"><i class="mdi-editor-insert-invitation"></i>کورس ها</a>

                      </li>

                      <li class="bold"><a href="{{ URL::to('userdocumentation')}}" class="collapsible-header waves-effect waves-cyan"><i class="mdi-social-pages"></i>سوانح</a>

                      </li>

                      <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-action-swap-vert-circle"></i>تقاعد و فوت</a>
                          <div class="collapsible-body">
                              <ul>
                                  <li><a href="{{ URL::to('retired') }}">تقاعد</a>
                                  </li>
                                  <li><a href="{{ URL::to('death') }}">فوت</a>
                                  </li>


                              </ul>
                          </div>
                      </li>

                      <li class="bold"><a href="{{ URL::to('evaluationreport') }}" class="collapsible-header  waves-effect waves-cyan"><i class="mdi-editor-insert-invitation"></i>گذارشات</a>

                      </li>

                  </ul>
          <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only darken-2"><i class="mdi-navigation-menu" ></i></a>
      </aside>
      <!-- END LEFT SIDEBAR NAV-->

      <!-- //////////////////////////////////////////////////////////////////////////// -->

      <!-- START CONTENT -->
      
      <section id="content">
     
        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper" class=" grey lighten-3">
          <div class="container">
            <div class="row">
              @yield('page_nave')
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->
        

        <!--start container-->
        <div class="container">
          <div class="section">

            @yield('content')
            
          </div>
        </div>

     
        <!--end container-->
      </section>
      <!-- END CONTENT -->

     

    </div>
    <!-- END WRAPPER -->

  </div>
  <!-- END MAIN -->


  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START FOOTER -->
  <footer class="page-footer">
    <div class="footer-copyright">
      <div class="container">
        <span class="left">Copyright © 2015 <a class="grey-text text-lighten-4" href="#" target="_blank">ISD Department</a> All rights reserved.</span>
        <span class="right"> Design and Developed by <a class="grey-text text-lighten-4" href="#">MOHE</a></span>
        </div>
    </div>
  </footer>
  <!-- END FOOTER -->


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
    <!-- data-tables -->
    <script type="text/javascript" src="{{ URL::asset('assets/js/plugins/data-tables/js/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/plugins/data-tables/data-tables-script.js') }}"></script>
    <!-- chartist -->
    <script type="text/javascript" src="{{ URL::asset('assets/js/plugins/chartist-js/chartist.min.js') }}"></script>   
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="{{ URL::asset('assets/js/plugins.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('assets/js/parsley.js') }}"></script>




</body>


<!-- Mirrored from demo.geekslabs.com/materialize/page-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Jul 2015 13:00:18 GMT -->
</html>