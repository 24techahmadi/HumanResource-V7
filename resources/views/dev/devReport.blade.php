@extends('layouts.DevLayout')

@section('title')
  HR | Yearly Report
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

                        <!-- Dropdown Trigger -->                        
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
                  <li><a href="development">Dashboard</a>
                  </li>
                  
                  <li class="active">Yearly Report</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->
          @section('content')
         <h1 class="header">Yearly Report</h1>

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
                          <h5 class="task-card-title">Yearly Report</h5>
                          </li>
                          </ul>
                        </div>

                        <div class="input-field col s6">
            <i class="mdi-action-alarm-add prefix"></i>
                          <input id="Date" type="date" class="datepicker">
                          <label for="Date">From</label>
              </div>

              <div class="input-field col s6">
            <i class="mdi-action-alarm-add prefix"></i>
                          <input id="To" type="date" class="datepicker">
                          <label for="To">To</label>
              </div>
 
<div class="input-field col s6">
                        <i class="mdi-social-person prefix"></i>
                          <input id="Reporter" type="text" class="validate">
                          <label for="Reporter">Reporter</label>
                        </div>
            
            <div class="input-field col s6">
                          <i class="mdi-maps-location-history prefix"></i>
                        <input id="Purpouses" type="text">
                          <label for="Purpouses">Job Achievement Goles</label>
                        </div>
            
                        <div class="input-field col s6">
                        <i class="mdi-editor-merge-type prefix"></i>
                          <input id="Management Field" type="text" class="validate">
                          <label for="Management Field">Management Field</label>
                        </div>

                        <div class="input-field col s6">
                        <i class="mdi-editor-merge-type prefix"></i>
                          <input id="Finance Field" type="text" class="validate">
                          <label for="Finance Field">Finance Field</label>
                        </div>

                        <div class="input-field col s6">
                        <i class="mdi-editor-merge-type prefix"></i>
                          <input id="English Language Field" type="text" class="validate">
                          <label for="English Language Field">English Language Field</label>
                        </div>

                        <div class="input-field col s6">
                        <i class="mdi-editor-merge-type prefix"></i>
                          <input id="leadership Development Field" type="text" class="validate">
                          <label for="leadership Development Field">Leadership Development Field</label>
                        </div>

                        <div class="input-field col s6">
                        <i class="mdi-editor-merge-type prefix"></i>
                          <input id="Typs Of Activities Done" type="text" class="validate">
                          <label for="Typs Of Activities Done">Typs Of Activities Done</label>
                        </div>
            
            <div class="input-field col s6">
                        <i class="mdi-editor-merge-type prefix"></i>
                          <input id="Learning Activities Field" type="text" class="validate">
                          <label for="Learning Activities Field">Learning Activities Field</label>
                        </div>

                        <div class="input-field col s6">
                        <i class="mdi-editor-merge-type prefix"></i>
                          <input id="IT Field" type="text" class="validate">
                          <label for="IT Field">IT Field</label>
                        </div>

                        <div class="input-field col s6">
                        <i class="mdi-editor-merge-type prefix"></i>
                          <input id="Organization Field" type="text" class="validate">
                          <label for="Organization Field">Organization Field</label>
                        </div>

                        <div class="input-field col s6">
                        <i class="mdi-editor-merge-type prefix"></i>
                          <input id="Acheavments" type="text" class="validate">
                          <label for="Acheavments">Acheavments</label>
                        </div>

                        <div class="input-field col s6">
                        <i class="mdi-editor-merge-type prefix"></i>
                          <input id="Errors In Activities" type="text" class="validate">
                          <label for="Errors In Activities">Errors In Activities</label>
                        </div>

                        <div class="input-field col s6">
                        <i class="mdi-editor-merge-type prefix"></i>
                          <input id="Problems Of Actitvities" type="text" class="validate">
                          <label for="Problems Of Actitvities">Problems Of Actitvities</label>
                        </div>

                        <div class="input-field col s6">
                        <i class="mdi-editor-merge-type prefix"></i>
                          <input id="Proventers Of Job Done" type="text" class="validate">
                          <label for="Proventers Of Job Done">Proventers Of Job Done</label>
                        </div>

                        <div class="input-field col s6">
                        <i class="mdi-editor-merge-type prefix"></i>
                          <input id="Report Prapretioner" type="text" class="validate">
                          <label for="Report Prapretioner">Praperd By</label>
                        </div>

                        <div class="input-field col s6">
                        <i class="mdi-editor-merge-type prefix"></i>
                          <input id="Report Justfiers" type="text" class="validate">
                          <label for="Report Justfiers">Justified By</label>
                        </div>

                        <div class="input-field col s6">
                        <i class="mdi-editor-merge-type prefix"></i>
                          <input id="Signature" type="text" class="validate">
                          <label for="Signature">Signature</label>
                        </div>

                        <div class="input-field col s6">
                        <i class="mdi-editor-merge-type prefix"></i>
                          <input id="Signature2" type="text" class="validate">
                          <label for="Signature2">Signature</label>
                        </div>

                        <div class="input-field col s6">
            <i class="mdi-action-alarm-add prefix"></i>
                          <input id="Date1" type="date" class="datepicker">
                          <label for="Date1">Date</label>
              </div>

                        <div class="input-field col s6">
            <i class="mdi-action-alarm-add prefix"></i>
                          <input id="Date2" type="date" class="datepicker">
                          <label for="Date2">Date</label>
              </div>
            
               <div class="input-field col s6">
             <button class="btn cyan waves-effect waves-light left" type="submit" name="action">Submit
                            
                              </button>
            </div>
            
            
                        </div>
          
                        </div>
                        </div>
                        </div>
                        </div>
                        </form>
                        </div>
                        </div>

          @stop
          </div></div></section></div></div>
</body>
