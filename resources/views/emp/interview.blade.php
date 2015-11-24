@extends('layouts.EmpLayout')

@section('title')
  HR | فورمه کمیته مصاحبه

@stop
<link rel="icon" href="{{ URL::asset('assets/images/favicon/favicon-32x32.png') }}" sizes="32x32"
      xmlns="http://www.w3.org/1999/html">

  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="{{ URL::asset('assets/images/favicon/apple-touch-icon-152x152.png') }}">
<meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">


<body>
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START HEADER -->
  <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="cyan">
                <div class="nav-wrapper">
                    <h1 class="logo-wrapper"><a class="brand-logo darken-1"><img src="{{ URL::asset('assets/images/MOHE.png') }}" height="50" width="50" alt="materialize logo" sizes></a> <span class="logo-text">Materialize</span></h1>
                    <ul class="right hide-on-med-and-down">
                        <li class="search-out">
                            <input type="text" class="search-out-text">
                        </li>
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- end header nav-->
  </header>
  <!-- END HEADER -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START MAIN -->
  <div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

     

      <!-- //////////////////////////////////////////////////////////////////////////// -->

      <!-- START CONTENT -->
      <section id="content">

        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper" class=" grey lighten-3">
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12" align="right">
                <h5 class="breadcrumbs-title">مدیریت کارمندان</h5>
                <ol class="breadcrumb">
                  <li><a href="employment">دشبورد</a>
                  </li>
                 
                  <li class="active">فورمه کمیته مصاحبه</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->
          
          @section('content')
            
            <h1 class="header" align="right">فورمه کمیته مصاحبه</h1>
              <a class=" waves-effect waves-light btn right " href="{{ URL::to('interview/members') }}">All Members</a> <br /> <br />

             <!-- Form with validation -->
              <div class="col s12 m12 l6">
                <div class="card-panel">
                  <h4 class="header2">اضافه نمودن عضو جدید کمیته مصاحبه</h4>
                  <div class="row">
                    <form method="POST" action="{{ url('interviews') }}" accept-charset="utf-8" class="col s11 right">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-action-account-box prefix"></i>
                          <input id="Name" type="text">
                          <label for="Name">اسم</label>
                        </div>
                      </div>

                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-action-perm-identity prefix"></i>
                          <input id="LastName" type="text">
                          <label for="LastName">تخلص</label>
                        </div>
                      </div>

                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-action-accessibility prefix"></i>
                          <input id="Job" type="text">
                          <label for="Job">وظیفه</label>
                        </div>
                      </div>

                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-hardware-keyboard-alt prefix"></i>
                          <input id="CommiteePosition" type="text">
                          <label for="CommiteePosition">موقف در کمیته</label>
                        </div>
                      </div>

                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-communication-email prefix"></i>
                          <input id="Email" type="email" >
                          <label for="Email">ایمل</label>
                        </div>
                      </div>

                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-action-schedule prefix"></i>
                          <input id="Date" type="date" class="datepicker">
                          <label for="Date">تاریخ</label>
                        </div>
                      </div>

                      <div class="row">
                         <div class="row">
                          <div class="input-field col s12">
                            <button class="btn cyan waves-effect waves-light right" type="submit" name="submit">ثبت
                              <i class="mdi-content-send right"></i>
                            </button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>




            <!-- <div class="col-sm-6">
                    <label>Password <span class="text-danger"/>*</span></label>
                    <input type="password" name="pass"  class="form-control" id="anotherfield" data-parsley-required="true" data-parsley-length="[6, 14]"> 
                  </div>
                  <div class="col-sm-6">
                    <label>Confirm Password <span class="text-danger"/>*</span></label>
                    <input type="password" name="confpass" class="form-control"   data-parsley-equalto="#anotherfield" 
                    data-parsley-required="true" data-parsley-equalto-message="Password does not match">
                  </div> -->

         @stop
    
           </section>
        </div>
   </div>

</body>
