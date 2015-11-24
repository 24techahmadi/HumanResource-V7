@extends('layouts.EmpLayout')

@section('title')
    HR | فورم P2

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

                                <li class="active">ایجاد فورم پی دو</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!--breadcrumbs end-->

            @section('content')

                <h2 class="header" align="right">کنترول فورم P2
                    <a class="btn-floating btn-large waves-effect waves-light right" href="{{url('p2form/create')}}"><i class="mdi-content-add"></i></a>

                </h2>
                        <h4 align="right">اضافه نمودن یک ریکارد جدید</h4>
                        <!-- strat Content of Modal2 -->

                        <!--Form Advance-->
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="card-panel">
                                    <h4 align="right">فورمه پ 2</h4>
                                    <h1 align="center" class="logo-wrapper"><a class="brand-logo darken-1"><img src="{{ URL::asset('assets/images/AF2.png') }}" height="100" width="100" alt="materialize logo" sizes></a></h1>

                                    <div class="row">
                                            <div class="row">
                                                <form method="POST" action="{{ url('p2form') }}" class="col s12" data-parsley-validate>
                                                    {!! csrf_field() !!}

                                                    <div class="row">
                                                        <div class="input-field col s12">
                                                            <ul id="task-card" class="collection with-header">
                                                                <li class="collection-header cyan">
                                                                    <h5 class="task-card-title" align="center">دمامورینو دارونده اجرااتو سند</h5>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="input-field col s6">
                                                            <i class="mdi-action-find-in-page prefix"></i>
                                                            <input name="ExecutionNumber" type="text" data-parsley-required="true">
                                                            <label for="ExecutionNumber">داجرااتو سند</label>
                                                        </div>
                                                        <div class="input-field col s6">
                                                            <i class="mdi-action-account-circle prefix"></i>
                                                            <input name="Name" type="text" data-parsley-required="true">
                                                            <label for="Name">اسم مامور</label>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="input-field col s6">
                                                            <input name="FatherName" type="text" data-parsley-required="true">
                                                            <label for="FatherName">اسم پدر</label>
                                                        </div>
                                                        <div class="input-field col s6">
                                                            <input name="EmployeeNumber" type="text" data-parsley-required="true">
                                                            <label for="EmployeeNumber">نمبر مامور</label>
                                                        </div>
                                                    </div>

                                                    <div class="row">

                                                        <div class="input-field col s6">
                                                            <input name="ImplementationDate" type="text" class="datepicker" data-parsley-required="true">
                                                            <label for="ImplementationDate">تاریخ اجراآت</label>
                                                        </div>

                                                        <div class="input-field col s6">
                                                            <input name="ImplementationType" type="text" data-parsley-required="true">
                                                            <label for="ImplementationType">داجراآت دول</label>
                                                        </div>

                                                        {{--<div class="input-field col s6">--}}
                                                            {{--<label for="StanderdScore"></label>--}}
                                                            {{--<form action="#">--}}
                                                                {{--<input name="group1" type="radio" id="test23" />--}}
                                                                {{--<label for="test23">تقرر</label>--}}
                                                            {{--</form>--}}
                                                            {{--<HR>--}}
                                                        {{--</div>--}}

                                                        {{--<div class="input-field col s6">--}}
                                                            {{--<label for="StanderdScore"></label>--}}
                                                            {{--<form action="#">--}}
                                                                {{--<input name="group1" type="radio" id="test24" />--}}
                                                                {{--<label for="test24">تبدیل</label>--}}
                                                            {{--</form>--}}
                                                            {{--<HR>--}}
                                                        {{--</div>--}}

                                                        {{--<div class="input-field col s6">--}}
                                                            {{--<label for="StanderdScore"></label>--}}
                                                            {{--<form action="#">--}}
                                                                {{--<input name="group1" type="radio" id="test25" />--}}
                                                                {{--<label for="test25">توضیح</label>--}}
                                                            {{--</form>--}}
                                                            {{--<HR>--}}
                                                        {{--</div>--}}

                                                        {{--<div class="input-field col s6">--}}
                                                            {{--<label for="StanderdScore"></label>--}}
                                                            {{--<form action="#">--}}
                                                                {{--<input name="group1" type="radio" id="test26" />--}}
                                                                {{--<label for="test26">اضافه رخصت</label>--}}
                                                            {{--</form>--}}
                                                            {{--<HR>--}}
                                                        {{--</div>--}}

                                                        {{--<div class="input-field col s6">--}}
                                                            {{--<label for="StanderdScore"></label>--}}
                                                            {{--<form action="#">--}}
                                                                {{--<input name="group1" type="radio" id="test27" />--}}
                                                                {{--<label for="test27">تعدیل در معاش</label>--}}
                                                            {{--</form>--}}
                                                            {{--<HR>--}}
                                                        {{--</div>--}}

                                                        {{--<div class="input-field col s6">--}}
                                                            {{--<label for="StanderdScore"></label>--}}
                                                            {{--<form action="#">--}}
                                                                {{--<input name="group1" type="radio" id="test28" />--}}
                                                                {{--<label for="test28">مجازات</label>--}}
                                                            {{--</form>--}}
                                                            {{--<HR>--}}
                                                        {{--</div>--}}

                                                        {{--<div class="input-field col s6">--}}
                                                            {{--<label for="StanderdScore"></label>--}}
                                                            {{--<form action="#">--}}
                                                                {{--<input name="group1" type="radio" id="test29" />--}}
                                                                {{--<label for="test29">انفصال</label>--}}
                                                            {{--</form>--}}
                                                            {{--<HR>--}}
                                                        {{--</div>--}}

                                                        {{--<div class="input-field col s6">--}}
                                                            {{--<label for="StanderdScore"></label>--}}
                                                            {{--<form action="#">--}}
                                                                {{--<input name="group1" type="radio" id="test30" />--}}
                                                                {{--<label for="test30">مکافات</label>--}}
                                                            {{--</form>--}}
                                                            {{--<HR>--}}
                                                        {{--</div>--}}

                                                        {{--<div class="input-field col s6">--}}
                                                            {{--<label for="StanderdScore"></label>--}}
                                                            {{--<form action="#">--}}
                                                                {{--<input name="group1" type="radio" id="test31" />--}}
                                                                {{--<label for="test31">تقاعد</label>--}}
                                                            {{--</form>--}}
                                                            {{--<HR>--}}
                                                        {{--</div>--}}


                                                        <div class="input-field col s6">
                                                            <input name="AnotherExecutionType" type="text" data-parsley-required="true">
                                                            <label for="Duty">وغیره</label>
                                                        </div>

                                                        <div class="input-field col s12">
                                                            <ul id="task-card" class="collection with-header">
                                                                <li class="collection-header cyan">
                                                                    <h5 class="task-card-title" align="center">7 - به</h5>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <div class="input-field col s6">
                                                            <input name="Duty" type="text" data-parsley-required="true">
                                                            <label for="Duty">ماموریت</label>
                                                        </div>
                                                        <div class="input-field col s6">
                                                            <input name="Bast" type="text" data-parsley-required="true">
                                                            <label for="Bast">بست</label>
                                                        </div>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <input name="DutySalaryPosition" type="text" data-parsley-required="true">
                                                        <label for="DutySalaryPosition">درتبوی معاش وجه</label>
                                                    </div>
                                                    <div class="input-field col s6">
                                                        <input name="DutyOffice" type="text" data-parsley-required="true">
                                                        <label for="DutyOffice">اداره</label>
                                                    </div>
                                            </div>


                                            <div class="row">
                                                <div class="input-field col s6">
                                                    <input name="DutyDepartment" type="text" data-parsley-required="true">
                                                    <label for="DutyDepartment">بخش</label>
                                                </div>
                                                <div class="input-field col s6">
                                                    <input name="DutyAddress" type="text" data-parsley-required="true">
                                                    <label for="DutyAddress">دماموریت حای</label>
                                                </div>
                                            </div>



                                            <div class="input-field col s12">
                                                <i class=" mdi-maps-beenhere prefix"></i>
                                                <textarea name="Comment" class="materialize-textarea" length="200" data-parsley-required="true"></textarea>
                                                <label for="Comment">ملا حظات</label>
                                            </div>

                                    </div> <br />
                                    <div class="divider"></div>
                                    <div>
                                        <button type="submit" name="submit" class="waves-effect waves-light btn right">Insert</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>

    <!-- End Content of Modal1 -->
    <!-- End1 Modal- Add Records -->




    @stop

    </section>
</div>
</div></body>
