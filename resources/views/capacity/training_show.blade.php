
@extends('layouts.CapacityLayout')

@section('title')
    HR | فورم لیست ترنینگ ها

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

        <!-- //////////////////////////////////////////////////////////////////////////// -->

        <!-- START CONTENT -->
        <section id="content">

            <!--breadcrumbs start-->
            <div id="breadcrumbs-wrapper" class=" grey lighten-3">
                <div class="container">
                    <div class="row">
                        <div class="col s12 m12 l12" align="right">
                            <h5 class="breadcrumbs-title">فورم ها</h5>
                            <ol class="breadcrumb">
                                <li><a href="capacitybuilding">دشبورد</a>
                                </li>
                                <li class="active">لیست تریننگ ها</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!--breadcrumbs end-->
            @section('content')
                <h1 class="header" align="right">لیست تریننگ ها</h1>

                <!--Input fields-->
                <form class="col s12" data-parsley-validate>
                    {!! csrf_field() !!}
                    <div class="row">
                        <div class="col s12 m12 l12">
                            <div class="card-panel">
                                <h1 align="center" class="logo-wrapper"><a class="brand-logo darken-1"><img src="{{ URL::asset('assets/images/AF2.png') }}" height="100" width="100" alt="materialize logo" sizes></a></h1>
                                <h5 align="center" class="header">جمهوری اسلامی افغانستان</h5>
                                <h5 align="center" class="header">وزارت تحصیلات عالی افغانستان</h5>
                                <h5 align="center" class="header">ریاست منابع بشری</h5>
                                <hr>
                                <div class="row">

                                    <div class="input-field col s6">
                                        <i class="mdi-action-perm-identity prefix"></i>
                                        <input  name="id" type="text" class="validate" value="{{ $record->id }}">
                                        <label for="id">شماره</label>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col s6">
                                            <i class="mdi-social-person prefix"></i>
                                            <input name="CourseTitle" type="text" data-parsley-required="true" value="{{ $record->CourseTitle }}">
                                            <label for="CourseTitle">عنوان کورس</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-social-person prefix"></i>
                                            <input name="Duration" type="text" data-parsley-required="true" value="{{ $record->Duration }}">
                                            <label for="Duration">مدت</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-social-person prefix"></i>
                                            <input name="StartDate" type="text" data-parsley-required="true" value="{{ $record->StartDate }}">
                                            <label for="StartDate">تاریخ آغاز</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-social-person prefix"></i>
                                            <input name="EndDate" type="text" data-parsley-required="true" value="{{ $record->EndDate }}">
                                            <label for="EndDate">تاریخ ختم</label>
                                        </div>


                                        <div class="input-field col s12">
                                            {{--<button class="btn cyan waves-effect waves-light right" type="submit" name="submit">تایید--}}
                                                {{--<i class="mdi-content-send right"></i>--}}
                                            {{--</button>--}}
                                            <a onclick="moreInfo({{ $record->id }});" class="modal-trigger" href="#modal2" value="{{ $record->id }}"> <i class="mdi-editor-border-color prefix"></i></a>
                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
    </div>
</div>


<div id="modal2" class="modal" style="border-radius:25px">
    <div class="modal-content">
        <div class="card-panel cyan darken-1">
            <h5 class="card-content white-text"> Update Records</h5>
        </div>
        <!-- strat Content of Modal2 -->

        <!--Show Specific Record-->
        <div class="row">
            <div class="col s12 m12 l12">
                <div class="card-panel">
                    <h4 class="header2"><b>Record Information</b></h4>
                    <div class="divider"> </div>
                    <div class="row">
                        <form method="POST" action="{{ route('training.update',['id'=>$record]) }}" accept-charset="utf-8" class="col s11 right" data-parsley-validate>
                            {!! csrf_field() !!}
                            <input name="_method" type="hidden" value="PATCH">

                            <div class="row">
                                <div class="input-field col s6">
                                    <i class="mdi-action-perm-identity prefix"></i>
                                    <input  name="id" type="text" disabled="disabled" class="validate" value="{{ $record->id }}">
                                    <label for="id">شماره</label>
                                </div>

                                <div class="row">
                                    <div class="input-field col s6">
                                        <i class="mdi-social-person prefix"></i>
                                        <input name="CourseTitle" type="text" data-parsley-required="true" value="{{ $record->CourseTitle }}">
                                        <label for="CourseTitle">عنوان کورس</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-person prefix"></i>
                                        <input name="Duration" type="text" data-parsley-required="true" value="{{ $record->Duration }}">
                                        <label for="Duration">مدت</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-person prefix"></i>
                                        <input name="StartDate" type="text" class="datepicker" data-parsley-required="true" value="{{ $record->StartDate }}">
                                        <label for="StartDate">تاریخ آغاز</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-person prefix"></i>
                                        <input name="EndDate" type="text" class="datepicker" data-parsley-required="true" value="{{ $record->EndDate }}">
                                        <label for="EndDate">تاریخ ختم</label>
                                    </div>

                            <div class="modal-footer">
                                <button type="submit" class=" waves-effect waves-light btn">Update</button> &nbsp;&nbsp;&nbsp;&nbsp;
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
@stop
</body>
