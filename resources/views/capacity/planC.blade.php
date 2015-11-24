@extends('layouts.CapacityLayout')

@section('title')
  HR | Plan C
@stop
 
  <link rel="icon" href="{{ URL::asset('assets/images/favicon/favicon-32x32.png') }}" sizes="32x32">

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
                    <h1 class="logo-wrapper"><a class="brand-logo darken-1"><img src="{{ URL::asset('assets/images/MOHE.png') }}" height="50" width="50" alt="HR logo" sizes></a></h1>
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

        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper" class=" grey lighten-3">
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">Admin Dashboard</h5>
                <ol class="breadcrumb">
                  <li><a href="capacitybuilding">Dashboard</a>
                  </li>
                  
                  <li class="active">Plan C</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
       <!--breadcrumbs end-->
          @section('content')
         <h1 class="header">Plan C</h1>

            <!--Input fields-->
            <div class="row">
            <div class="col s12 m12 l12">
              <div class="card-panel">
                <h1 align="center" class="logo-wrapper"><a class="brand-logo darken-1"><img src="{{ URL::asset('assets/images/AF2.png') }}" height="100" width="100" alt="materialize logo" sizes></a></h1>
                <h5 align="center" class="header">Islamic And Republic Of Afghanistan</h5>
                <h5 align="center" class="header">Ministry of Higher Education</h5>
                <h5 align="center" class="header">Human Resouces Organization</h5>
                <hr>
                <div class="row">
                  
 <div class="input-field col s12">
                          <ul id="task-card" class="collection with-header">
                          <li class="collection-header cyan">
                          <h6 class="task-card-title">Needed Bastes For Libraries,Haspitals,And Edary Of Universies And Higher Educations And Center Of Ministry</h6>
                          </li>
                          </ul>
                        </div>
                  
                        <div class="input-field col s6">
            <i class="mdi-action-schedule prefix"></i>
                          <input id="Date Of last Evaluation" type="date" class="datepicker">
                          <label for="Date Of last Evaluation">Year Of</label>
                        </div>

                        <div class="row">
                        <div class="input-field col s6">
                        <i class="mdi-action-perm-identity prefix"></i>
                          <input  id="Number" type="text" class="validate">
                          <label for="Number">Number</label>
                        </div>

                        <div class="input-field col s6">
              <i class="mdi-maps-place prefix"></i>
                          <input  id="org" type="text" class="validate">
                          <label for="org">Organization</label>
                        </div>

                        <div class="input-field col s12">
                          <ul id="task-card" class="collection with-header">
                          <li class="collection-header cyan">
                          <h5 class="task-card-title">Employee</h5>
                          </li>
                          </ul>
                        </div>

                        <div class="input-field col s6">
              <i class="mdi-maps-place prefix"></i>
                          <input  id="Edary" type="text" class="validate">
                          <label for="Edary">Edary</label>
                        </div>

                      <div class="input-field col s6">
              <i class="mdi-maps-place prefix"></i>
                          <input  id="Library" type="text" class="validate">
                          <label for="Library">Library</label>
                        </div>

                        <div class="input-field col s6">
              <i class="mdi-maps-place prefix"></i>
                          <input  id="Haspital" type="text" class="validate">
                          <label for="Haspital">Haspital</label>
                        </div>

                        <div class="input-field col s6">
              <i class="mdi-maps-place prefix"></i>
                          <input  id="Haspital" type="text" class="validate">
                          <label for="Haspital">Total</label>
                        </div>

                        <div class="input-field col s12">
                          <ul id="task-card" class="collection with-header">
                          <li class="collection-header cyan">
                          <h5 class="task-card-title">Service Worker</h5>
                          </li>
                          </ul>
                        </div>

                        <div class="input-field col s6">
              <i class="mdi-maps-place prefix"></i>
                          <input  id="Edary1" type="text" class="validate">
                          <label for="Edary1">Edary</label>
                        </div>

                      <div class="input-field col s6">
              <i class="mdi-maps-place prefix"></i>
                          <input  id="Library1" type="text" class="validate">
                          <label for="Library1">Library</label>
                        </div>

                        <div class="input-field col s6">
              <i class="mdi-maps-place prefix"></i>
                          <input  id="Haspital1" type="text" class="validate">
                          <label for="Haspital1">Haspital</label>
                        </div>

                        <div class="input-field col s6">
              <i class="mdi-maps-place prefix"></i>
                          <input  id="Total1" type="text" class="validate">
                          <label for="Total1">Total</label>
                        </div>

                        <div class="input-field col s6">
            <i class="mdi-social-person prefix"></i>
                          <input id="Totale2" type="text" class="validate">
                          <label for="Totale2">Totale Of Totle</label>
                        </div>


            
                        


                  <div class="input-field col s6">
             <button class="btn cyan waves-effect waves-light left" type="submit" name="action">Submit
                            
                              </button>
            </div>
                </div>
                        
               
            
          
                        
                        </div>
                        </div>
                        </div>
                        

          @stop
          </div></div>
</body>
