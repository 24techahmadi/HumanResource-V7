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

<style type="text/css">
    .parsley-required{color:red;}
    .parsley-equalto{color:red;}
    .parsley-length{color:red;}

</style>
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
          <section>
          @section('content')
            
            <h1 class="header" align="right">فورمه کمیته مصاحبه</h1>
              <a class=" waves-effect waves-light btn right " href="{{ URL::to('interview') }}">All Members</a> <br /> <br />

             <!-- Form with validation -->
              <div class="col s12 m12 l6">
                <div class="card-panel">
                  <h4 class="header2">اضافه نمودن عضو جدید کمیته مصاحبه</h4>
                  <div class="row">
                    <form method="POST" action="{{ url('interview') }}" accept-charset="utf-8" class="col s11 right" data-parsley-validate>
                        {!! csrf_field() !!}

                      <div class="row">
                        <div class="input-field col s12 {{ $errors->has('Name') ? 'has-error' : '' }}">
                          <i class="mdi-action-account-box prefix"></i>
                          <input id="Name" name="Name" type="text" data-parsley-required="true" >
                          <label for="Name">اسم</label>
                            <span style="font-size: small; color:red;">{{ $errors->first('Name', ' :message') }}</span>
                        </div>
                      </div>

                      <div class="row">
                        <div class="input-field col s12 {{ $errors->has('LastName') ? 'has-error' : '' }}">
                          <i class="mdi-action-perm-identity prefix"></i>
                          <input id="LastName" name="LastName" type="text" data-parsley-required="true" >
                          <label for="LastName">تخلص</label>
                            <span style="font-size: small; color:red;">{{ $errors->first('LastName', ' :message') }}</span>
                        </div>
                      </div>

                      <div class="row">
                        <div class="input-field col s12 {{ $errors->has('Job') ? 'has-error' : '' }}">
                          <i class="mdi-action-accessibility prefix"></i>
                          <input id="Job" name="Job" type="text" data-parsley-required="true" >
                          <label for="Job">وظیفه</label>
                            <span style="font-size: small; color:#ff0000;">{{ $errors->first('Job', ' :message') }}</span>
                        </div>
                      </div>

                      <div class="row">
                        <div class="input-field col s12 {{ $errors->has('CommiteePosition') ? 'has-error' : '' }}">
                          <i class="mdi-hardware-keyboard-alt prefix"></i>
                          <input id="CommiteePosition" name="CommiteePosition" type="text" data-parsley-required="true" >
                          <label for="CommiteePosition">موقف در کومیته</label>
                            <span style="font-size: small; color:red;">{{ $errors->first('CommiteePosition', ' :message') }}</span>
                        </div>
                      </div>

                      <div class="row">
                          <i class="mdi-communication-email prefix"></i>
                          <input id="Email" name="Email" type="email" data-parsley-type="email">
                          <label for="Email">ایمیل</label>
                        </div>
                      </div>

                      <div class="row">
                        <div class="input-field col s12 {{ $errors->has('Date') ? 'has-error' : '' }}">
                          <i class="mdi-action-schedule prefix"></i>
                          <input id="Date" type="Date" name="Date" class="datepicker" data-parsley-required="true" >
                          <label for="Date">تارخ</label>
                            <span style="font-size: small; color:red;">{{ $errors->first('Date', ' :message') }}</span>
                        </div>
                      </div>

                      <div class="row">
                         <div class="row">
                          <div class="input-field col s12">
                            <button type="submit" class="btn cyan waves-effect waves-light right">Add Member
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

         @stop
 </section>
        </div>
   </div>

</body>
