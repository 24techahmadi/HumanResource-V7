@extends('layouts.CapacityLayout')

@section('title')
    HR |گزارش سالانه
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
                    <div class="col s12 m12 l12" align="right">
                        <h5 class="breadcrumbs-title">مدیریت کارمندان</h5>
                        <ol class="breadcrumb">
                            <li><a href="development">دشبورد</a>
                            </li>

                            <li class="active">گزارش سالانه</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!--breadcrumbs end-->
        @section('content')
            <h1 class="header" align="right">گزارش سالانه</h1>

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
                            <form method="POST" action="{{ url('capacityreport') }}" class="col s12" >
                                {!! csrf_field() !!}

                                <div class="row">
                                    <div class="input-field col s6">
                                        <input placeholder="id" name="id" disabled="disabled" type="text" data-parsley-required="true" value="{{ $record->id }}">
                                        <label for="id">آی دی</label>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col s12">
                                            <ul id="task-card" class="collection with-header">
                                                <li class="collection-header cyan">
                                                    <h5 class="task-card-title">گزارش سالانه</h5>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-alarm-add prefix"></i>
                                            <input name="Date" type="date" class="datepicker" value="{{ $record->Date }}" data-parsley-required="true">
                                            <label for="Date">از تاریخ</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-alarm-add prefix"></i>
                                            <input name="To" type="date" class="datepicker" value="{{ $record->To }}" data-parsley-required="true">
                                            <label for="To">الی</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-social-person prefix"></i>
                                            <input name="Reporter" type="text" value="{{ $record->Reporter }}" data-parsley-required="true">
                                            <label for="Reporter">گزارش دهنده</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-maps-location-history prefix"></i>
                                            <input name="Purpouses" type="text" value="{{ $record->Purpouses }}" data-parsley-required="true">
                                            <label for="Purpouses">اهداف بر آورده شده وظیفوی</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-editor-merge-type prefix"></i>
                                            <input name="ManagementField" type="text" value="{{ $record->ManagementField }}" data-parsley-required="true">
                                            <label for="ManagementField">دربخش مدیریت</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-editor-merge-type prefix"></i>
                                            <input name="FinanceField" type="text" value="{{ $record->FinanceField }}" data-parsley-required="true">
                                            <label for="FinanceField">دربخش مالی وبودجه</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-editor-merge-type prefix"></i>
                                            <input name="EnglishLanguageField" type="text" value="{{ $record->EnglishLanguageField }}" data-parsley-required="true">
                                            <label for="EnglishLanguageField">دربخش زبان اینگلیسی</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-editor-merge-type prefix"></i>
                                            <input name="leadershipDevelopmentField" type="text" value="{{ $record->leadershipDevelopmentField }}" data-parsley-required="true">
                                            <label for="leadershipDevelopmentField">دربخش انکشاف رهبری</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-editor-merge-type prefix"></i>
                                            <input name="TypsOfActivitiesDone" type="text" value="{{ $record->TypsOfActivitiesDone }}" data-parsley-required="true">
                                            <label for="TypsOfActivitiesDone">انواع فعالیت های وظیفوی اجراشده</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-editor-merge-type prefix"></i>
                                            <input name="LearningActivitiesField" type="text" value="{{ $record->LearningActivitiesField }}" data-parsley-required="true">
                                            <label for="LearningActivitiesField">دربخش فعالیت های آموزیشی</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-editor-merge-type prefix"></i>
                                            <input name="ITField" type="text" value="{{ $record->ITField }}" data-parsley-required="true">
                                            <label for="ITField">دربخش IT</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-editor-merge-type prefix"></i>
                                            <input name="OrganizationField" type="text" value="{{ $record->OrganizationField }}" data-parsley-required="true">
                                            <label for="OrganizationField">دربخش اداری</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-editor-merge-type prefix"></i>
                                            <input name="Acheavments" type="text" value="{{ $record->Acheavments }}" data-parsley-required="true">
                                            <label for="Acheavments">دست آورد ها ونتایج حاصل شده ازاجراات</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-editor-merge-type prefix"></i>
                                            <input name="ErrorsInActivities" type="text" value="{{ $record->ErrorsInActivities }}" data-parsley-required="true">
                                            <label for="ErrorsInActivities">نواقص موجود دراجراات انجام شده</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-editor-merge-type prefix"></i>
                                            <input name="ProblemsOfActitvities" type="text" value="{{ $record->ProblemsOfActitvities }}" data-parsley-required="true">
                                            <label for="ProblemsOfActitvities">مشکلات موجود درجریان فعالیت های وظیفوی</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-editor-merge-type prefix"></i>
                                            <input name="ProventersOfJobDone" type="text" value="{{ $record->ProventersOfJobDone }}" data-parsley-required="true">
                                            <label for="ProventersOfJobDone">موانه کاری درجریان فعالیت های وظیفوی</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-editor-merge-type prefix"></i>
                                            <input name="ReportPrapretioner" type="text" value="{{ $record->ReportPrapretioner }}" data-parsley-required="true">
                                            <label for="ReportPrapretioner">ترتیب کننده گزارش</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-alarm-add prefix"></i>
                                            <input name="PreparDate" type="date" class="datepicker" value="{{ $record->PreparDate }}" data-parsley-required="true">
                                            <label for="PreparDate">تاریخ</label>
                                        </div>


                                        <div class="input-field col s6">
                                            <i class="mdi-editor-merge-type prefix"></i>
                                            <input name="ReportJustfiers" type="text" value="{{ $record->ReportJustfiers }}" data-parsley-required="true">
                                            <label for="ReportJustfiers">تصدیق کننده گزارش</label>
                                        </div>


                                        <div class="input-field col s6">
                                            <i class="mdi-action-alarm-add prefix"></i>
                                            <input name="JustifierDate" type="date" class="datepicker" value="{{ $record->JustifierDate }}" data-parsley-required="true">
                                            <label for="JustifierDate">تاریخ</label>
                                        </div>
                                        <div class="input-field col s6">
                                            {{--<button class="btn cyan waves-effect waves-light left" type="submit" name="submit">Update--}}

                                            {{--</button>--}}

                                            <td><a onclick="moreInfo({{ $record->id }});" class="modal-trigger" href="#modal2" value="{{ $record->id }}"> <i class="mdi-editor-border-color prefix"></i></a> </td>


                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>



                    <!-- Modal2- View Records Information-->

                    <div id="modal2" class="modal" style="border-radius:25px">
                        <div class="modal-content">
                            <div class="card-panel cyan darken-1">
                                <h5 class="card-content white-text">تغیر در سطر</h5>
                            </div>
                            <!-- strat Content of Modal2 -->

                            <!--Show Specific Record-->
                            <div class="row">
                                <div class="col s12 m12 l12">
                                    <div class="card-panel">
                                        <h4 class="header2"><b>معلو مات سطر</b></h4>
                                        <div class="divider"> </div>
                                        <h1 align="center" class="logo-wrapper"><a class="brand-logo darken-1"><img src="{{ URL::asset('assets/images/AF2.png') }}" height="100" width="100" alt="materialize logo" sizes></a></h1>
                                        <h5 align="center" class="header">جمهوری اسلامی افغانستان</h5>
                                        <h5 align="center" class="header">وزارت تحصیلات عالی افغانستان</h5>
                                        <h5 align="center" class="header">ریاست منابع بشری</h5>
                                        <hr>
                                        <div class="row">
                                            <form method="POST" action="{{ route('capacityreport.update',['id'=>$record]) }}" accept-charset="utf-8" class="col s11 right" data-parsley-validate>
                                                {!! csrf_field() !!}
                                                <input name="_method" type="hidden" value="PATCH">

                                                <div class="row">
                                                    <div class="row">
                                                        <div class="input-field col s6">
                                                            <input placeholder="id" name="id" disabled="disabled" type="text" data-parsley-required="true" value="{{ $record->id }}">
                                                            <label for="id">آی دی</label>
                                                        </div>

                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <ul id="task-card" class="collection with-header">
                                                                    <li class="collection-header cyan">
                                                                        <h5 class="task-card-title">گزارش سالانه</h5>
                                                                    </li>
                                                                </ul>
                                                            </div>

                                                            <div class="input-field col s6">
                                                                <i class="mdi-action-alarm-add prefix"></i>
                                                                <input name="Date" type="date" class="datepicker" value="{{ $record->Date }}" data-parsley-required="true">
                                                                <label for="Date">از تاریخ</label>
                                                            </div>

                                                            <div class="input-field col s6">
                                                                <i class="mdi-action-alarm-add prefix"></i>
                                                                <input name="To" type="date" class="datepicker" value="{{ $record->To }}" data-parsley-required="true">
                                                                <label for="To">الی</label>
                                                            </div>

                                                            <div class="input-field col s6">
                                                                <i class="mdi-social-person prefix"></i>
                                                                <input name="Reporter" type="text" value="{{ $record->Reporter }}" data-parsley-required="true">
                                                                <label for="Reporter">گزارش دهنده</label>
                                                            </div>

                                                            <div class="input-field col s6">
                                                                <i class="mdi-maps-location-history prefix"></i>
                                                                <input name="Purpouses" type="text" value="{{ $record->Purpouses }}" data-parsley-required="true">
                                                                <label for="Purpouses">اهداف بر آورده شده وظیفوی</label>
                                                            </div>

                                                            <div class="input-field col s6">
                                                                <i class="mdi-editor-merge-type prefix"></i>
                                                                <input name="ManagementField" type="text" value="{{ $record->ManagementField }}" data-parsley-required="true">
                                                                <label for="ManagementField">دربخش مدیریت</label>
                                                            </div>

                                                            <div class="input-field col s6">
                                                                <i class="mdi-editor-merge-type prefix"></i>
                                                                <input name="FinanceField" type="text" value="{{ $record->FinanceField }}" data-parsley-required="true">
                                                                <label for="FinanceField">دربخش مالی وبودجه</label>
                                                            </div>

                                                            <div class="input-field col s6">
                                                                <i class="mdi-editor-merge-type prefix"></i>
                                                                <input name="EnglishLanguageField" type="text" value="{{ $record->EnglishLanguageField }}" data-parsley-required="true">
                                                                <label for="EnglishLanguageField">دربخش زبان اینگلیسی</label>
                                                            </div>

                                                            <div class="input-field col s6">
                                                                <i class="mdi-editor-merge-type prefix"></i>
                                                                <input name="leadershipDevelopmentField" type="text" value="{{ $record->leadershipDevelopmentField }}" data-parsley-required="true">
                                                                <label for="leadershipDevelopmentField">دربخش انکشاف رهبری</label>
                                                            </div>

                                                            <div class="input-field col s6">
                                                                <i class="mdi-editor-merge-type prefix"></i>
                                                                <input name="TypsOfActivitiesDone" type="text" value="{{ $record->TypsOfActivitiesDone }}" data-parsley-required="true">
                                                                <label for="TypsOfActivitiesDone">انواع فعالیت های وظیفوی اجراشده</label>
                                                            </div>

                                                            <div class="input-field col s6">
                                                                <i class="mdi-editor-merge-type prefix"></i>
                                                                <input name="LearningActivitiesField" type="text" value="{{ $record->LearningActivitiesField }}" data-parsley-required="true">
                                                                <label for="LearningActivitiesField">دربخش فعالیت های آموزیشی</label>
                                                            </div>

                                                            <div class="input-field col s6">
                                                                <i class="mdi-editor-merge-type prefix"></i>
                                                                <input name="ITField" type="text" value="{{ $record->ITField }}" data-parsley-required="true">
                                                                <label for="ITField">دربخش IT</label>
                                                            </div>

                                                            <div class="input-field col s6">
                                                                <i class="mdi-editor-merge-type prefix"></i>
                                                                <input name="OrganizationField" type="text" value="{{ $record->OrganizationField }}" data-parsley-required="true">
                                                                <label for="OrganizationField">دربخش اداری</label>
                                                            </div>

                                                            <div class="input-field col s6">
                                                                <i class="mdi-editor-merge-type prefix"></i>
                                                                <input name="Acheavments" type="text" value="{{ $record->Acheavments }}" data-parsley-required="true">
                                                                <label for="Acheavments">دست آورد ها ونتایج حاصل شده ازاجراات</label>
                                                            </div>

                                                            <div class="input-field col s6">
                                                                <i class="mdi-editor-merge-type prefix"></i>
                                                                <input name="ErrorsInActivities" type="text" value="{{ $record->ErrorsInActivities }}" data-parsley-required="true">
                                                                <label for="ErrorsInActivities">نواقص موجود دراجراات انجام شده</label>
                                                            </div>

                                                            <div class="input-field col s6">
                                                                <i class="mdi-editor-merge-type prefix"></i>
                                                                <input name="ProblemsOfActitvities" type="text" value="{{ $record->ProblemsOfActitvities }}" data-parsley-required="true">
                                                                <label for="ProblemsOfActitvities">مشکلات موجود درجریان فعالیت های وظیفوی</label>
                                                            </div>

                                                            <div class="input-field col s6">
                                                                <i class="mdi-editor-merge-type prefix"></i>
                                                                <input name="ProventersOfJobDone" type="text" value="{{ $record->ProventersOfJobDone }}" data-parsley-required="true">
                                                                <label for="ProventersOfJobDone">موانه کاری درجریان فعالیت های وظیفوی</label>
                                                            </div>

                                                            <div class="input-field col s6">
                                                                <i class="mdi-editor-merge-type prefix"></i>
                                                                <input name="ReportPrapretioner" type="text" value="{{ $record->ReportPrapretioner }}" data-parsley-required="true">
                                                                <label for="ReportPrapretioner">ترتیب کننده گزارش</label>
                                                            </div>

                                                            <div class="input-field col s6">
                                                                <i class="mdi-action-alarm-add prefix"></i>
                                                                <input name="PreparDate" type="date" class="datepicker" value="{{ $record->PreparDate }}" data-parsley-required="true">
                                                                <label for="PreparDate">تاریخ</label>
                                                            </div>


                                                            <div class="input-field col s6">
                                                                <i class="mdi-editor-merge-type prefix"></i>
                                                                <input name="ReportJustfiers" type="text" value="{{ $record->ReportJustfiers }}" data-parsley-required="true">
                                                                <label for="ReportJustfiers">تصدیق کننده گزارش</label>
                                                            </div>


                                                            <div class="input-field col s6">
                                                                <i class="mdi-action-alarm-add prefix"></i>
                                                                <input name="JustifierDate" type="date" class="datepicker" value="{{ $record->JustifierDate }}" data-parsley-required="true">
                                                                <label for="JustifierDate">تاریخ</label>
                                                            </div>
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
                    @stop
                </div>
            </div>
            </section>
    </div>
</div>
</body>


