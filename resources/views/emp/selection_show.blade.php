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
                                            <input placeholder="117" name="id" type="text" data-parsley-required="true" value="{{ $records->id }}">
                                            <label for="id">نمبر ID</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <input placeholder="117" name="Date" type="text" data-parsley-required="true" value="{{ $records->Date }}">
                                            <label for="Date">تاریخ</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <input placeholder="Manager" name="Position" type="text" data-parsley-required="true" value="{{ $records->Position }}">
                                            <label for="Position">بست</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <input placeholder="Designer" name="JobTitle" type="text" data-parsley-required="true" value="{{ $records->JobTitle }}">
                                            <label for="JobTitle">وظیفه</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <input placeholder="89" name="Reyasat" type="text" data-parsley-required="true" value="{{ $records->Reyasat }}">
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
                                            <input placeholder="89" name="Question1" type="text" data-parsley-required="true" value="{{ $records->Question1 }}">
                                            <label for="Question1"> سوال اول</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <input placeholder="89" name="Question1Comments" type="text" data-parsley-required="true" value="{{ $records->Question1Comments }}">
                                            <label for="Question1Comments">ملاحضات</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <input placeholder="89" name="Question2" type="text" data-parsley-required="true" value="{{ $records->Question2 }}">
                                            <label for="Question2"> سوال دوم</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <input placeholder="89" name="Question2Comments" type="text" data-parsley-required="true" value="{{ $records->Question2Comments }}">
                                            <label for="Question2Comments">ملاحضات</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <input placeholder="89" name="Question3" type="text" data-parsley-required="true" value="{{ $records->Question3 }}">
                                            <label for="Question3"> سوال سوم</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <input placeholder="89" name="Question3Comments" type="text"  data-parsley-required="true" value="{{ $records->Question3Comments }}">
                                            <label for="Question3Comments">ملاحضات</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <input placeholder="89" name="Question4" type="text" data-parsley-required="true" value="{{ $records->Question4 }}">
                                            <label for="Question4">سوال چهارم</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <input placeholder="89" name="Question4Comments" data-parsley-required="true" type="text" value="{{ $records->Question4Comments }}">
                                            <label for="Question4Comments">ملاحضات</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <input placeholder="89" name="Question5" type="text" data-parsley-required="true" value="{{ $records->Question5 }}">
                                            <label for="Question5"> سوال پنجم</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <input placeholder="89" name="Question5Comments" type="text" data-parsley-required="true" value="{{ $records->Question5Comments }}">
                                            <label for="Question5Comments">ملاحضات</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <input placeholder="89" name="Question6" type="text" data-parsley-required="true" value="{{ $records->Question6 }}">
                                            <label for="Question6"> سوال ششم</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <input placeholder="89" name="Question6Comments" data-parsley-required="true" type="text" value="{{ $records->Question6Comments }}">
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
                                            <input placeholder="89" name="RealScore" type="text" data-parsley-required="true" value="{{ $records->RealScore }}">
                                            <label for="RealScore">حقیقی</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <input placeholder="100" name="PossibleScore" type="text" data-parsley-required="true" value="{{ $records->PossibleScore }}">
                                            <label for="PossibleScore">ممکن</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <input placeholder="89" name="Comments" type="text" data-parsley-required="true" value="{{ $records->Comments }}">
                                            <label for="Comments">ملاحظات</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <input placeholder="89" name="TotleScore" type="text" data-parsley-required="true" value="{{ $records->TotleScore }}">
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
                                            <input placeholder="#Name" name="CommiteeBossName" type="text" data-parsley-required="true" value="{{ $records->CommiteeBossName }}">
                                            <label for="CommiteeBossName">رئیس کمیته</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <input placeholder="#Organization" name="OrgRepresentativeName" type="text" data-parsley-required="true" value="{{ $records->OrgRepresentativeName }}">
                                            <label for="OrgRepresentativeName">نماینده وزارت/اداره</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <input placeholder="#Name" name="GenderRepresentativeName" type="text" data-parsley-required="true" value="{{ $records->GenderRepresentativeName }}">
                                            <label for="GenderRepresentativeName">نماینده جندر</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <input placeholder="#Name" name="CriticName" type="text" data-parsley-required="true" value="{{ $records->CriticName }}">
                                            <label for="CriticName">کارشناس نظارتی</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <input placeholder="#Name" name="ClerckName" type="text" data-parsley-required="true" value="{{ $records->ClerckName }}">
                                            <label for="ClerckName">منشی کمیته</label>
                                        </div>


                                        <div class="row">
                                            <div class="input-field col s12">
                                                <div>
                                                    <a onclick="moreInfo({{ $records->id }});" class="modal-trigger" href="#modal2" value="{{ $records->id }}"> <i class="mdi-editor-border-color prefix"></i></a>                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
    </div>

    <div id="modal2" class="col s8 m8 l12 modal" style="border-radius:25px">
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
                            <div class="col s12 m12 l12">
                                    <h1 align="center" class="logo-wrapper"><a class="brand-logo darken-1"><img src="{{ URL::asset('assets/images/AF2.png') }}" height="100" width="100" alt="materialize logo" sizes></a></h1>
                                    <h5 align="center" class="header">جمهوری اسلامی افغانستان</h5>
                                    <h5 align="center" class="header">وزارت تحصیلات عالی افغانستان</h5>
                                    <h5 align="center" class="header">ریاست منابع بشری</h5>
                                    <hr>
                                    <div class="row">

                            <form method="POST" action="{{ route('selection.update',['id'=>$records]) }}" accept-charset="utf-8" class="col s11 right" data-parsley-validate>
                                {!! csrf_field() !!}
                                <input name="_method" type="hidden" value="PATCH">

                                <div class="input-field col s6">
                                    <input placeholder="117" name="id" type="text" data-parsley-required="true" value="{{ $records->id }}">
                                    <label for="id">نمبر ID</label>
                                </div>

                                <div class="input-field col s6">
                                    <input placeholder="117" name="Date" type="text" data-parsley-required="true" value="{{ $records->Date }}">
                                    <label for="Date">تاریخ</label>
                                </div>

                                <div class="input-field col s6">
                                    <input placeholder="Manager" name="Position" type="text" data-parsley-required="true" value="{{ $records->Position }}">
                                    <label for="Position">بست</label>
                                </div>

                                <div class="input-field col s6">
                                    <input placeholder="Designer" name="JobTitle" type="text" data-parsley-required="true" value="{{ $records->JobTitle }}">
                                    <label for="JobTitle">وظیفه</label>
                                </div>

                                <div class="input-field col s6">
                                    <input placeholder="89" name="Reyasat" type="text" data-parsley-required="true" value="{{ $records->Reyasat }}">
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
                                    <input placeholder="89" name="Question1" type="text" data-parsley-required="true" value="{{ $records->Question1 }}">
                                    <label for="Question1"> سوال اول</label>
                                </div>

                                <div class="input-field col s6">
                                    <input placeholder="89" name="Question1Comments" type="text" data-parsley-required="true" value="{{ $records->Question1Comments }}">
                                    <label for="Question1Comments">ملاحضات</label>
                                </div>

                                <div class="input-field col s6">
                                    <input placeholder="89" name="Question2" type="text" data-parsley-required="true" value="{{ $records->Question2 }}">
                                    <label for="Question2"> سوال دوم</label>
                                </div>

                                <div class="input-field col s6">
                                    <input placeholder="89" name="Question2Comments" type="text" data-parsley-required="true" value="{{ $records->Question2Comments }}">
                                    <label for="Question2Comments">ملاحضات</label>
                                </div>

                                <div class="input-field col s6">
                                    <input placeholder="89" name="Question3" type="text" data-parsley-required="true" value="{{ $records->Question3 }}">
                                    <label for="Question3"> سوال سوم</label>
                                </div>

                                <div class="input-field col s6">
                                    <input placeholder="89" name="Question3Comments" type="text"  data-parsley-required="true" value="{{ $records->Question3Comments }}">
                                    <label for="Question3Comments">ملاحضات</label>
                                </div>

                                <div class="input-field col s6">
                                    <input placeholder="89" name="Question4" type="text" data-parsley-required="true" value="{{ $records->Question4 }}">
                                    <label for="Question4">سوال چهارم</label>
                                </div>

                                <div class="input-field col s6">
                                    <input placeholder="89" name="Question4Comments" data-parsley-required="true" type="text" value="{{ $records->Question4Comments }}">
                                    <label for="Question4Comments">ملاحضات</label>
                                </div>

                                <div class="input-field col s6">
                                    <input placeholder="89" name="Question5" type="text" data-parsley-required="true" value="{{ $records->Question5 }}">
                                    <label for="Question5"> سوال پنجم</label>
                                </div>

                                <div class="input-field col s6">
                                    <input placeholder="89" name="Question5Comments" type="text" data-parsley-required="true" value="{{ $records->Question5Comments }}">
                                    <label for="Question5Comments">ملاحضات</label>
                                </div>

                                <div class="input-field col s6">
                                    <input placeholder="89" name="Question6" type="text" data-parsley-required="true" value="{{ $records->Question6 }}">
                                    <label for="Question6"> سوال ششم</label>
                                </div>

                                <div class="input-field col s6">
                                    <input placeholder="89" name="Question6Comments" data-parsley-required="true" type="text" value="{{ $records->Question6Comments }}">
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
                                    <input placeholder="89" name="RealScore" type="text" data-parsley-required="true" value="{{ $records->RealScore }}">
                                    <label for="RealScore">حقیقی</label>
                                </div>

                                <div class="input-field col s6">
                                    <input placeholder="100" name="PossibleScore" type="text" data-parsley-required="true" value="{{ $records->PossibleScore }}">
                                    <label for="PossibleScore">ممکن</label>
                                </div>

                                <div class="input-field col s6">
                                    <input placeholder="89" name="Comments" type="text" data-parsley-required="true" value="{{ $records->Comments }}">
                                    <label for="Comments">ملاحظات</label>
                                </div>

                                <div class="input-field col s6">
                                    <input placeholder="89" name="TotleScore" type="text" data-parsley-required="true" value="{{ $records->TotleScore }}">
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
                                    <input placeholder="#Name" name="CommiteeBossName" type="text" data-parsley-required="true" value="{{ $records->CommiteeBossName }}">
                                    <label for="CommiteeBossName">رئیس کمیته</label>
                                </div>

                                <div class="input-field col s6">
                                    <input placeholder="#Organization" name="OrgRepresentativeName" type="text" data-parsley-required="true" value="{{ $records->OrgRepresentativeName }}">
                                    <label for="OrgRepresentativeName">نماینده وزارت/اداره</label>
                                </div>

                                <div class="input-field col s6">
                                    <input placeholder="#Name" name="GenderRepresentativeName" type="text" data-parsley-required="true" value="{{ $records->GenderRepresentativeName }}">
                                    <label for="GenderRepresentativeName">نماینده جندر</label>
                                </div>

                                <div class="input-field col s6">
                                    <input placeholder="#Name" name="CriticName" type="text" data-parsley-required="true" value="{{ $records->CriticName }}">
                                    <label for="CriticName">کارشناس نظارتی</label>
                                </div>

                                <div class="input-field col s6">
                                    <input placeholder="#Name" name="ClerckName" type="text" data-parsley-required="true" value="{{ $records->ClerckName }}">
                                    <label for="ClerckName">منشی کمیته</label>
                                </div>


                                    <div class="modal-footer">
                                        <button type="submit" class=" waves-effect waves-light btn">Update</button> &nbsp;&nbsp;&nbsp;&nbsp;
                                    </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </section>
    @stop

</div>
</div>

</body>

