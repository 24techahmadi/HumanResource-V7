@extends('layouts.EmpLayout')

@section('title')
    HR | فورم ارزیابی جهت انتخاب

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
                            <h5 class="breadcrumbs-title">کاندید</h5>
                            <ol class="breadcrumb">
                                <li><a href="employment">دشبورد</a>
                                </li>

                                <li class="active">فورم ارزیابی جهت انتخاب</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!--breadcrumbs end-->
            @section('content')
                <h1 class="header" align="right">فورم ارزیابی جهت انتخاب</h1>

                <!--Input fields-->
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="card-panel">
                            <h1 align="center" class="logo-wrapper"><a class="brand-logo darken-1"><img src="{{ URL::asset('assets/images/AF2.png') }}" height="100" width="100" alt="materialize logo" sizes></a></h1>
                            <h5 align="center" class="header">جمهوری اسلامی افغانستان</h5>
                            <h5 align="center" class="header">وزارت تحصیلات عالی افغانستان</h5>
                            <h5 align="center" class="header">ریاست منابع بشری</h5>
                            <hr>
                            <div class="row">
                                <form method="POST" action="{{ url('selection') }}" class="col s12" data-parsley-validate>
                                    {!! csrf_field() !!}
                                <div class="row">

                                    <div class="input-field col s6">
                                        <input placeholder="117" name="Date" type="text" class="validate" data-parsley-required="true">
                                        <label for="Date">تاریخ</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input placeholder="Manager" name="Position" type="text" class="validate" data-parsley-required="true">
                                        <label for="Position">بست</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input placeholder="Designer" name="JobTitle" type="text" class="validate" data-parsley-required="true">
                                        <label for="JobTitle">وظیفه</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input placeholder="89" name="Reyasat" type="text" class="validate" data-parsley-required="true">
                                        <label for="Reyasat">ریاست</label>
                                    </div>

                                    <div class="input-field col s12">
                                        <ul id="task-card" class="collection with-header">
                                            <li class="collection-header cyan">
                                                <h5 class="task-card-title" align="right">سوالات و ملاحضات</h5>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="input-field col s6">
                                        <input placeholder="89" name="Question" type="text" class="validate" data-parsley-required="true">
                                        <label for="Question1"> سوال اول</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input placeholder="89" name="Question" type="text" class="validate" data-parsley-required="true">
                                        <label for="Question1Comments">ملاحضات</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input placeholder="89" name="Question" type="text" class="validate" data-parsley-required="true">
                                        <label for="Question2"> سوال دوم</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input placeholder="89" name="Question" type="text" class="validate" data-parsley-required="true">
                                        <label for="Question2Comments">ملاحضات</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input placeholder="89" name="Question" type="text" class="validate" data-parsley-required="true">
                                        <label for="Question3"> سوال سوم</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input placeholder="89" name="Question" type="text" class="validate" data-parsley-required="true">
                                        <label for="Question3Comments">ملاحضات</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input placeholder="89" name="Question" type="text" class="validate" data-parsley-required="true">
                                        <label for="Question4">سوال چهارم</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input placeholder="89" name="Question" type="text" class="validate" data-parsley-required="true">
                                        <label for="Question4Comments">ملاحضات</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input placeholder="89" name="Question" type="text" class="validate" data-parsley-required="true">
                                        <label for="Question5"> سوال پنجم</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input placeholder="89" name="Question" type="text" class="validate" data-parsley-required="true">
                                        <label for="Question5Comments">ملاحضات</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input placeholder="89" name="Question" type="text" class="validate" data-parsley-required="true">
                                        <label for="Question6"> سوال ششم</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input placeholder="89" name="Question" type="text" class="validate" data-parsley-required="true">
                                        <label for="Question6Comments">ملاحضات</label>
                                    </div>

                                    <div class="input-field col s12">
                                        <ul id="task-card" class="collection with-header">
                                            <li class="collection-header cyan">
                                                <h5 class="task-card-title" align="right">نمرات مصاحبه</h5>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="input-field col s6">
                                        <input placeholder="89" name="RealScore" type="text" class="validate" data-parsley-required="true">
                                        <label for="RealScore">حقیقی</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input placeholder="100" name="PossibleScore" type="text" class="validate" data-parsley-required="true">
                                        <label for="PossibleScore">ممکن</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input placeholder="89" name="Comments" type="text" class="validate" data-parsley-required="true">
                                        <label for="Comments">ملاحظات</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input placeholder="89" name="TotleScore" type="text" class="validate" data-parsley-required="true">
                                        <label for="TotleScore">مجموع نمرات</label>
                                    </div>

                                    <div class="input-field col s12">
                                        <ul id="task-card" class="collection with-header">
                                            <li class="collection-header cyan">
                                                <h5 class="task-card-title" align="right">ارزیابی و ملاحظه </h5>
                                            </li>
                                        </ul>
                                    </div>


                                    <div class="input-field col s6">
                                        <input placeholder="#Name" name="CommiteeBossName" type="text" class="validate" data-parsley-required="true">
                                        <label for="CommiteeBossName">رئیس کمیته</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input placeholder="#Organization" name="OrgRepresentativeName" type="text" class="validate" data-parsley-required="true">
                                        <label for="OrgRepresentativeName">نماینده وزارت/اداره</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input placeholder="#Name" name="GenderRepresentativeName" type="text" class="validate" data-parsley-required="true">
                                        <label for="GenderRepresentativeName">نماینده جندر</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input placeholder="#Name" name="CriticName" type="text" class="validate" data-parsley-required="true">
                                        <label for="CriticName">کارشناس نظارتی</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input placeholder="#Name" name="ClerckName" type="text" class="validate" data-parsley-required="true">
                                        <label for="ClerckName">منشی کمیته</label>
                                    </div>


                                    <div class="row">
                                        <div class="input-field col s12">
                                            <button class="btn cyan waves-effect waves-light right" type="submit" name="action">تایید
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

