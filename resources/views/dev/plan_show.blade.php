@extends('layouts.DevLayout')

@section('title')
    HR | فورم پلان بخش کارمندان
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

                            <li class="active">فورم پلان بخش کارمندان</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!--breadcrumbs end-->
        @section('content')
            <h1 class="header" align="right">فورم پلان بخش کارمندان</h1>

            <!--Input fields-->
            <div class="row">
                <form data-parsley-validate>
                <div class="col s12 m12 l12">
                    <div class="card-panel">
                        <h1 align="center" class="logo-wrapper"><a class="brand-logo darken-1"><img src="{{ URL::asset('assets/images/AF2.png') }}" height="100" width="100" alt="materialize logo" sizes></a></h1>
                        <h5 align="center" class="header">جمهوری اسلامی افغانستان</h5>
                        <h5 align="center" class="header">وزارت تحصیلات عالی افغانستان</h5>
                        <h5 align="center" class="header">ریاست منابع بشری</h5>
                        <hr>
                        <div class="row">

                            <div class="input-field col s6">
                                <i class="mdi-action-alarm-add prefix"></i>
                                <input name="DateOfPlan" type="text" data-parsley-required="true" value="{{ $record->DateOfPlan }}">
                                <label for="DateOfPlan">تاریخ پلان</label>
                            </div>
                            <div class="input-field col s6">
                                <i class="mdi-social-person prefix"></i>
                                <input name="RelatedTo" type="text" data-parsley-required="true" value="{{ $record->RelatedTo }}">
                                <label for="RelatedTo">مربوط</label>
                            </div>

                            <div class="input-field col s6">
                                <i class="mdi-maps-pin-drop prefix"></i>
                                <input name="Ameryat" type="text" data-parsley-required="true" value="{{ $record->Ameryat }}">
                                <label for="Ameryat">آمریت</label>
                            </div>

                            <div class="input-field col s6">
                                <i class="mdi-social-person prefix"></i>
                                <input name="JustfierName" type="text" data-parsley-required="true" value="{{ $record->JustfierName }}">
                                <label for="JustfierName">اسم منضور کننده</label>
                            </div>


                            <div class="input-field col s12" align="right">
                                <ul id="task-card" class="collection with-header">
                                    <li class="collection-header cyan">
                                        <h5 class="task-card-title">نقش مامور تطبیق کننده این پلان در جهت تطبیق</h5>
                                    </li>
                                </ul>
                            </div>

                            <div class="input-field col s6">
                                <i class="mdi-maps-location-history prefix"></i>
                                <input name="Nationalstrategy" type="text" data-parsley-required="true" value="{{ $record->Nationalstrategy }}">
                                <label for="Nationalstrategy">ستراتیژی ملی</label>
                            </div>

                            <div class="input-field col s6">
                                <i class="mdi-maps-location-history prefix"></i>
                                <input name="DepartmentStrategy" type="text" data-parsley-required="true" value="{{ $record->DepartmentStrategy }}">
                                <label for="DepartmentStrategy">ستراتیژی اداره مربوط</label>
                            </div>

                            <div class="input-field col s6">
                                <i class="mdi-editor-merge-type prefix"></i>
                                <input name="PlanPurpose" type="text" data-parsley-required="true" value="{{ $record->PlanPurpose }}">
                                <label for="PlanPurpose">اهداف اساسی برای تطبیق این پلان</label>
                            </div>

                            <div class="input-field col s6">
                                <i class="mdi-editor-merge-type prefix"></i>
                                <input name="NeededActivities" type="text" data-parsley-required="true" value="{{ $record->NeededActivities }}">
                                <label for="NeededActivities">فعالیت های ضروری قابل اجرا توسط مامور تطبیق کننده این پلان</label>
                            </div>

                            <div class="input-field col s6">
                                <i class="mdi-social-person prefix"></i>
                                <input name="Accomplisher" type="text" data-parsley-required="true" value="{{ $record->Accomplisher }}">
                                <label for="Accomplisher">اجرا کننده</label>
                            </div>

                            <div class="input-field col s6">
                                <i class="mdi-editor-merge-type prefix"></i>
                                <input name="Resources" type="text" data-parsley-required="true" value="{{ $record->Resources }}">
                                <label for="Resources">منابع</label>
                            </div>

                            <div class="input-field col s6">
                                <i class="mdi-maps-pin-drop prefix"></i>
                                <input name="AccomplishmentPlace" type="text" data-parsley-required="true" value="{{ $record->AccomplishmentPlace }}">
                                <label for="AccomplishmentPlace">محل اجرا</label>
                            </div>

                            <div class="input-field col s6">
                                <i class="mdi-action-alarm-add prefix"></i>
                                <input name="AcomplishmentDate" type="text" data-parsley-required="true"value="{{ $record->AcomplishmentDate }}">
                                <label for="AcomplishmentDate">تاریخ اجرا</label>
                            </div>
                            <div class="input-field col s6">
                                <i class="mdi-editor-merge-type prefix"></i>
                                <input name="Results" type="text" data-parsley-required="true" value="{{ $record->Results }}">
                                <label for="Results">نتایج موقعه از تطبیق این پلان برای اداره</label>
                            </div>


                            <div class="input-field col s6">
                                <a onclick="moreInfo({{ $record->id }});" class="modal-trigger" href="#modal2" value="{{ $record->id }}"> <i class="mdi-editor-border-color prefix"></i></a>


                                </button>
                            </div>

                            </form>

                        </div>





    <div id="modal2" class="modal" style="border-radius:25px">
        <div class="modal-content">

                <div class="col s12 m12 l12">
                        <div class="row">
                            <form method="POST" action="{{ route('plan.update',['id'=>$record]) }}" accept-charset="utf-8" class="col s11 right" data-parsley-validate>
                                {!! csrf_field() !!}
                                <input name="_method" type="hidden" value="PATCH">
                                        <div class="col s12 m12 l12">
                                            <div class="card-panel cyan darken-1">
                                                <h5 class="card-content white-text"> Update Records</h5>
                                            </div>
                                            <div class="card-panel">

                                                <h1 align="center" class="logo-wrapper"><a class="brand-logo darken-1"><img src="{{ URL::asset('assets/images/AF2.png') }}" height="100" width="100" alt="materialize logo" sizes></a></h1>
                                                <h5 align="center" class="header">جمهوری اسلامی افغانستان</h5>
                                                <h5 align="center" class="header">وزارت تحصیلات عالی افغانستان</h5>
                                                <h5 align="center" class="header">ریاست منابع بشری</h5>
                                                <hr>
                                                <div class="row">

                                                    <div class="input-field col s6">
                                                        <i class="mdi-action-alarm-add prefix"></i>
                                                        <input name="DateOfPlan" type="text" data-parsley-required="true"value="{{ $record->DateOfPlan }}">
                                                        <label for="DateOfPlan">تاریخ پلان</label>
                                                    </div>
                                                    <div class="input-field col s6">
                                                        <i class="mdi-social-person prefix"></i>
                                                        <input name="RelatedTo" type="text" data-parsley-required="true" value="{{ $record->RelatedTo }}">
                                                        <label for="RelatedTo">مربوط</label>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-maps-pin-drop prefix"></i>
                                                        <input name="Ameryat" type="text" data-parsley-required="true" value="{{ $record->Ameryat }}">
                                                        <label for="Ameryat">آمریت</label>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-social-person prefix"></i>
                                                        <input name="JustfierName" type="text" data-parsley-required="true" value="{{ $record->JustfierName }}">
                                                        <label for="JustfierName">اسم منضور کننده</label>
                                                    </div>


                                                    <div class="input-field col s12" align="right">
                                                        <ul id="task-card" class="collection with-header">
                                                            <li class="collection-header cyan">
                                                                <h5 class="task-card-title">نقش مامور تطبیق کننده این پلان در جهت تطبیق</h5>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-maps-location-history prefix"></i>
                                                        <input name="Nationalstrategy" type="text" data-parsley-required="true" value="{{ $record->Nationalstrategy }}">
                                                        <label for="Nationalstrategy">ستراتیژی ملی</label>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-maps-location-history prefix"></i>
                                                        <input name="DepartmentStrategy" data-parsley-required="true" type="text" value="{{ $record->DepartmentStrategy }}">
                                                        <label for="DepartmentStrategy">ستراتیژی اداره مربوط</label>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-editor-merge-type prefix"></i>
                                                        <input name="PlanPurpose" type="text" data-parsley-required="true" value="{{ $record->PlanPurpose }}">
                                                        <label for="PlanPurpose">اهداف اساسی برای تطبیق این پلان</label>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-editor-merge-type prefix"></i>
                                                        <input name="NeededActivities" type="text" data-parsley-required="true" value="{{ $record->NeededActivities }}">
                                                        <label for="NeededActivities">فعالیت های ضروری قابل اجرا توسط مامور تطبیق کننده این پلان</label>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-social-person prefix"></i>
                                                        <input name="Accomplisher" type="text" data-parsley-required="true" value="{{ $record->Accomplisher }}">
                                                        <label for="Accomplisher">اجرا کننده</label>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-editor-merge-type prefix"></i>
                                                        <input name="Resources" type="text" data-parsley-required="true" value="{{ $record->Resources }}">
                                                        <label for="Resources">منابع</label>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-maps-pin-drop prefix"></i>
                                                        <input name="AccomplishmentPlace" type="text" data-parsley-required="true" value="{{ $record->AccomplishmentPlace }}">
                                                        <label for="AccomplishmentPlace">محل اجرا</label>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-action-alarm-add prefix"></i>
                                                        <input name="AcomplishmentDate" type="text" data-parsley-required="true"value="{{ $record->AcomplishmentDate }}">
                                                        <label for="AcomplishmentDate">تاریخ اجرا</label>
                                                    </div>
                                                    <div class="input-field col s6">
                                                        <i class="mdi-editor-merge-type prefix"></i>
                                                        <input name="Results" type="text" data-parsley-required="true" value="{{ $record->Results }}">
                                                        <label for="Results">نتایج موقعه از تطبیق این پلان برای اداره</label>
                                                    </div>


                                                    <div class="input-field col s6">
                                                        <button class="btn cyan waves-effect waves-light left" type="submit" name="action">تایید

                                                        </button>
                                                    </div>
                                                    </div> </div> </div>


                                    </form>
                                </div>

                        </div>

                    </div>
                </div>
            </div>



    @stop
</div> </div></div> </div>
</body>
