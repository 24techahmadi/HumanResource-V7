@extends('layouts.EmpLayout')

@section('title')
    HR | فورم بست خالی
@stop
<link rel="icon" href="{{ URL::asset('assets/images/favicon/favicon-32x32.png') }}" sizes="32x32">

<!-- Favicons-->
<link rel="apple-touch-icon-precomposed" href="{{ URL::asset('assets/images/favicon/apple-touch-icon-152x152.png')}}">
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

<!-- START HEADER -->
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
                                <li><a href="employment">دشبورد</a></li>
                                <li class="active">بست های خالی</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!--breadcrumbs end-->

            @section('content')
                <h2 class="header" align="right">بست های خالی</h2>
                 <br /> <br />

                <div class="row">
                    <form method="POST" action="{{ url('emptybast') }}" class="col s11 right" data-parsley-validate>
                        {!! csrf_field() !!}

                        <div class="row">
                            <div class="input-field col s12">
                                <!-- <i class="mdi-action-account-box prefix"></i> -->
                                <input name="Name" type="text"  data-parsley-required="true">
                                <label for="Name">اسم</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <!--  <i class="mdi-action-perm-identity prefix"></i> -->
                                <input name="Bast" type="text" data-parsley-required="true">
                                <label for="Bast">بست</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <!--   <i class="mdi-action-home prefix"></i> -->
                                <input name="Office" type="text" data-parsley-required="true">
                                <label for="Office">اداره</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <!--  <i class="mdi-hardware-keyboard-alt prefix"></i> -->
                                <input name="AnnouncementStartDate" type="text" class="datepicker" data-parsley-required="true">
                                <label for="AnnouncementStartDate">تاریخ اعلان</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <!--  <i class="mdi-hardware-keyboard-alt prefix"></i> -->
                                <input name="AnnouncementEndDate" type="text" class="datepicker" data-parsley-required="true">
                                <label for="AnnouncementEndDate">تاریخ ختم</label>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <div>
                                <button type="submit" name="submit" class="waves-effect waves-light btn right">Save</button>
                            </div>                        </div>
                    </form>
                </div>

            @stop
        </section>
    </div>
</div>
</body>
