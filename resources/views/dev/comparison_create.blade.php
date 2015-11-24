@extends('layouts.DevLayout')

@section('title')
    HR | فورم ساختار تشکیلاتی مقایسوی
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
                    <div class="col s12 m12 l12" align="right">
                        <h5 class="breadcrumbs-title">مدیریت ارتقاع ظرفیت</h5>
                        <ol class="breadcrumb">
                            <li><a href="development">دشبورد</a>
                            </li>

                            <li class="active">فورمه (1) مجموعی بست های وزارت/اداره وزارت تحصیلات عالی</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!--breadcrumbs end-->
        @section('content')
            <h1 class="header" align="right">فورم ساختار تشکیلاتی مقایسوی</h1>

            <!--Input fields-->


            <div class="row">
                <form method="POST" action="{{ url('comparison') }}" accept-charset="utf-8" class="col s12" data-parsley-validate>
                    {!! csrf_field() !!}

                <div class="col s12 m12 l12">
                    <div class="card-panel">
                        <h1 align="center" class="logo-wrapper"><a class="brand-logo darken-1"><img src="{{ URL::asset('assets/images/AF2.png') }}" height="100" width="100" alt="materialize logo" sizes></a></h1>
                        <h5 align="center" class="header">جمهوری اسلامی افغانستان</h5>
                        <h5 align="center" class="header">وزارت تحصیلات عالی افغانستان</h5>
                        <h5 align="center" class="header">ریاست منابع بشری</h5>
                        <hr>
                        <div class="row">

                            <div class="input-field col s12">
                                <ul id="task-card" class="collection with-header">
                                    <li class="collection-header cyan">
                                        <h5 class="task-card-title" align="center">فورم شماره 1</h5><hr>
                                        <h5 class="task-card-title" align="center">تشکیلاتی-1</h5><hr>
                                        <h5 class="task-card-title" align="center">وزارت/اداره مستقل ........... ریاست های مرکزی - وزارت تحصیلات عالی</h5>
                                    </li>
                                </ul>
                            </div>


                            <div class="input-field col s6">
                                <i class="mdi-editor-merge-type prefix"></i>
                                <input name="Title" type="text" data-parsley-required="true">
                                <label for="Title">عنوان</label>
                            </div>

                            <div class="input-field col s6">
                                <i class="mdi-action-schedule prefix"></i>
                                <input name="Year" type="text" data-parsley-required="true">
                                <label for="Year">سال</label>
                            </div>

                            <div class="input-field col s6">
                                <i class="mdi-editor-merge-type prefix"></i>
                                <input name="Bast" type="text" data-parsley-required="true">
                                <label for="Bast">بست</label>
                            </div>

                            <div class="input-field col s6">
                                <i class="mdi-editor-merge-type prefix"></i>
                                <input name="Amount" type="text" data-parsley-required="true">
                                <label for="Amount">تعداد</label>
                            </div>

                            <div class="input-field col s6">
                                <i class="mdi-editor-merge-type prefix"></i>
                                <input name="BastIncrease" type="text" data-parsley-required="true">
                                <label for="BastIncrease">تزیید</label>
                            </div>

                            <div class="input-field col s6">
                                <i class="mdi-editor-merge-type prefix"></i>
                                <input name="BastDecrease" type="text" data-parsley-required="true">
                                <label for="BastDecrease">تنقیص</label>
                            </div>

                            <div class="input-field col s6">
                                <i class="mdi-action-schedule prefix"></i>
                                <input name="RoleForYearOf" type="text" class="datepicker" data-parsley-required="true">
                                <label for="RoleForYearOf">طرح پیشنهادی سال</label>
                            </div>

                            <div class="input-field col s6">
                                <i class="mdi-editor-merge-type prefix"></i>
                                <input name="ToBast" type="text" data-parsley-required="true">
                                <label for="ToBast">بست</label>
                            </div>

                            <div class="input-field col s6">
                                <i class="mdi-editor-merge-type prefix"></i>
                                <input name="NewAmount" type="text" data-parsley-required="true">
                                <label for="NewAmount">تعداد</label>
                            </div>

                            <div class="input-field col s6">
                                <i class="mdi-editor-merge-type prefix"></i>
                                <input name="NewCode" type="text" data-parsley-required="true">
                                <label for="NewCode">کود</label>
                            </div>

                            <div class="input-field col s6">
                                <i class="mdi-editor-merge-type prefix"></i>
                                <input name="Comment" type="text" data-parsley-required="true">
                                <label for="Comment">ملا حظات</label>
                            </div>

                            <div class="input-field col s6">
                                <button class="btn cyan waves-effect waves-light left" type="submit" name="submit">Create

                                </button>
                            </div>
                        </div>



                    </div>
                </div>
                    </form>
            </div>


        @stop
    </div></div>
</body>
