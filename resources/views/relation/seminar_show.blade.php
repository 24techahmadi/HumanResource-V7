
@extends('layouts.RelationLayout')

@section('title')
    HR | نمایش سیمینار

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
                                <li><a href="relation">دشبورد</a>
                                </li>
                                <li class="active" >فورم کنترول سیمنار ها</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!--breadcrumbs end-->
            @section('content')
                <h1 class="header" align="right">فورم کنترول سیمنار ها</h1>

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
                                <form class="col s12">
                                    <div class="input-field col s12" align="right">
                                        <ul id="task-card" class="collection with-header">
                                            <li class="collection-header cyan">
                                                <h5 class="task-card-title">لیست کارمندان برای ورکشاپ ارزیابی</h5>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="input-field col s12">
                                        <i class="mdi-social-person prefix"></i>
                                        <input  name="id" type="text" data-parsley-required="true" value="{{ $record->id }}">
                                        <label for="id">ID</label>
                                    </div>

                                    <div class="input-field col s12">
                                        <i class="mdi-social-person prefix"></i>
                                        <input  name="ReyastName" type="text" data-parsley-required="true" value="{{ $record->ReyastName }}">
                                        <label for="ReyastName">ریاست</label>
                                    </div>


                                    <div class="input-field col s12" align="right">
                                        <ul id="task-card" >
                                            <li >
                                                <h5 >شهرت</h5>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-perm-identity prefix"></i>
                                        <input name="idnumber" type="text"data-parsley-required="true"  value="{{ $record->idnumber }}">
                                        <label for="idnumber">شماره</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-person prefix"></i>
                                        <input  name="Name" type="text" data-parsley-required="true"  value="{{ $record->Name }}">
                                        <label for="Name">اسم</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-person prefix"></i>
                                        <input  name="FatherName" type="text" data-parsley-required="true"  value="{{ $record->FatherName }}">
                                        <label for="FatherName">ولد</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-perm-identity prefix"></i>
                                        <input name="Bast" type="text"data-parsley-required="true"  value="{{ $record->Bast }}">
                                        <label for="Bast">بست</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-perm-identity prefix"></i>
                                        <input name="Score" type="text"data-parsley-required="true"  value="{{ $record->Score }}">
                                        <label for="Score">نمره</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-perm-identity prefix"></i>
                                        <input name="BastTitle" type="text"data-parsley-required="true"  value="{{ $record->BastTitle }}">
                                        <label for="BastTitle">عنوان بست</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-perm-identity prefix"></i>
                                        <input name="Estehzari" type="text"data-parsley-required="true"  value="{{ $record->Estehzari }}">
                                        <label for="Estehzari">استحضاری</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-perm-identity prefix"></i>
                                        <input name="WorkshopDays" disabled type="text"data-parsley-required="true"  value="{{ $record->WorkshopDays }}">
                                        <label for="WorkshopDays">ایام ورکشاپ</label>
                                    </div>


                                    <div class="input-field col s6">
                                        <i class="mdi-action-perm-identity prefix"></i>
                                        <input name="Comment" type="text"data-parsley-required="true"  value="{{ $record->Comment }}">
                                        <label for="Comment">ملا حظات</label>
                                    </div>


                                <div class="input-field col s12">
                                    <a onclick="moreInfo({{ $record->id }});" class="modal-trigger" href="#modal2" value="{{ $record->id }}"> <i class="mdi-editor-border-color prefix"></i></a>
                                </div>

                                </form>
                            </div>

                        </div>
                    </div>
                </div>
    </div>

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
                        <form method="POST" action="{{ route('seminar.update',['id'=>$record]) }}" accept-charset="utf-8" class="col s11 right" data-parsley-validate>
                            {!! csrf_field() !!}
                            <input name="_method" type="hidden" value="PATCH">


                            <div class="input-field col s12" align="right">
                                <ul id="task-card" class="collection with-header">
                                    <li class="collection-header cyan">
                                        <h5 class="task-card-title">لیست کارمندان برای ورکشاپ ارزیابی</h5>
                                    </li>
                                </ul>
                            </div>

                            <div class="input-field col s12">
                                <i class="mdi-social-person prefix"></i>
                                <input  name="id" type="text" data-parsley-required="true" value="{{ $record->id }}">
                                <label for="id">ID</label>
                            </div>

                            <div class="input-field col s12">
                                <i class="mdi-social-person prefix"></i>
                                <input  name="ReyastName" type="text" data-parsley-required="true" value="{{ $record->ReyastName }}">
                                <label for="ReyastName">ریاست</label>
                            </div>


                            <div class="input-field col s12" align="right">
                                <ul id="task-card" >
                                    <li >
                                        <h5 >شهرت</h5>
                                    </li>
                                </ul>
                            </div>

                            <div class="input-field col s6">
                                <i class="mdi-action-perm-identity prefix"></i>
                                <input name="idnumber" type="text"data-parsley-required="true"  value="{{ $record->idnumber }}">
                                <label for="idnumber">شماره</label>
                            </div>

                            <div class="input-field col s6">
                                <i class="mdi-social-person prefix"></i>
                                <input  name="Name" type="text" data-parsley-required="true"  value="{{ $record->Name }}">
                                <label for="Name">اسم</label>
                            </div>

                            <div class="input-field col s6">
                                <i class="mdi-social-person prefix"></i>
                                <input  name="FatherName" type="text" data-parsley-required="true"  value="{{ $record->FatherName }}">
                                <label for="FatherName">ولد</label>
                            </div>

                            <div class="input-field col s6">
                                <i class="mdi-action-perm-identity prefix"></i>
                                <input name="Bast" type="text"data-parsley-required="true"  value="{{ $record->Bast }}">
                                <label for="Bast">بست</label>
                            </div>

                            <div class="input-field col s6">
                                <i class="mdi-action-perm-identity prefix"></i>
                                <input name="Score" type="text"data-parsley-required="true"  value="{{ $record->Score }}">
                                <label for="Score">نمره</label>
                            </div>

                            <div class="input-field col s6">
                                <i class="mdi-action-perm-identity prefix"></i>
                                <input name="BastTitle" type="text"data-parsley-required="true"  value="{{ $record->BastTitle }}">
                                <label for="BastTitle">عنوان بست</label>
                            </div>

                            <div class="input-field col s6">
                                <i class="mdi-action-perm-identity prefix"></i>
                                <input name="Estehzari" type="text"data-parsley-required="true"  value="{{ $record->Estehzari }}">
                                <label for="Estehzari">استحضاری</label>
                            </div>

                            <div class="input-field col s6">
                                <i class="mdi-action-perm-identity prefix"></i>
                                <input name="WorkshopDays" disabled type="text"data-parsley-required="true"  value="{{ $record->WorkshopDays }}">
                                <label for="WorkshopDays">ایام ورکشاپ</label>
                            </div>


                            <div class="input-field col s6">
                                <i class="mdi-action-perm-identity prefix"></i>
                                <input name="Comment" type="text"data-parsley-required="true"  value="{{ $record->Comment }}">
                                <label for="Comment">ملا حظات</label>
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
</div></div></section></div></div>
</body>

