@extends('layouts.EvaluationLayout')

@section('title')
    HR | فورمه اطلاعیه معلو لیت فوت یا مفقودیت

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
                    <li>
                        <a href="javascript:void(0);" class="waves-effect waves-block waves-light show-search"><i class="mdi-action-search"></i></a>
                    </li>
                    <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                    </li>
                    <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light"><i class="mdi-social-notifications"></i></a>
                    </li>
                    <!-- Dropdown Trigger -->
                    <li><a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse"><i class="mdi-communication-chat"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- end header nav-->
</header>

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
                                <li><a href="index-2.html">دشبورد</a>
                                </li>

                                <li class="active">فورمه اطلاعیه معلو لیت فوت یا مفقودیت</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!--breadcrumbs end-->
            @section('content')
                <h1 class="header" align="right">فورمه اطلاعیه معلو لیت فوت یا مفقودیت</h1>

                <!--Input fields-->
                <div class="row">
                    <form class="col s12" data-parsley-validate>
                        {!! csrf_field() !!}

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
                                        <input name="id" type="text" data-parsley-required="true" value="{{ $record->id }}">
                                        <label for="id">ID</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-perm-identity prefix"></i>
                                        <input name="AutoNumber" type="text" data-parsley-required="true" value="{{ $record->AutoNumber }}">
                                        <label for="AutoNumber">نمبر مسلسل</label>
                                    </div>

                                    <div class="input-field col s12" align="right">
                                        <ul id="task-card" class="collection with-header">
                                            <li >
                                                <h6 >این فورمه حینیکه درخواست تقاعد بنابر معلو لیت فوت ویا مفقودیت ترتیب میشود ضمیمه می گردد. این فورمه در دونقل تهیه گردیده که نقل اصلی آن ضمیمه دوسیه به ریاست عمومی خزینه تقاعد ارسال و کاپی ان در ریاست کدر پرسونل و منابع بشری ثبت و نگهداری می شود. لطفا تمام اسناد مورد ضرورت را ضمیمه نمایید.</h6>
                                            </li>
                                        </ul>
                                    </div>


                                    <div class="input-field col s6">
                                        <i class="mdi-action-schedule prefix"></i>
                                        <input name="RegistrationDate" type="text" class="datepicker" data-parsley-required="true" value="{{ $record->RegistrationDate }}">
                                        <label for="RegistrationDate">تاریخ</label>
                                    </div>

                                    <div class="input-field col s12" align="right">
                                        <ul id="task-card" class="collection with-header">
                                            <li class="collection-header cyan">
                                                <h5 class="task-card-title">بخش 1: معلومات در مورد کارکن</h5>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-perm-identity prefix"></i>
                                        <input name="CardNo" type="text" data-parsley-required="true" value="{{ $record->CardNo }}">
                                        <label for="CardNo">نمبر کارت هویت</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-person prefix"></i>
                                        <input name="Name" type="text" data-parsley-required="true" value="{{ $record->Name }}">
                                        <label for="Name">اسم</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-person prefix"></i>
                                        <input name="LastName" type="text" data-parsley-required="true" value="{{ $record->LastName }}">
                                        <label for="LastName">تخلص</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-person prefix"></i>
                                        <input name="FatherName" type="text" data-parsley-required="true" value="{{ $record->FatherName }}">
                                        <label for="FatherName">ولد</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-person prefix"></i>
                                        <input name="GrandfatherName" type="text" data-parsley-required="true" value="{{ $record->GrandfatherName }}">
                                        <label for="GrandfatherName">ولدیت</label>
                                    </div>


                                    <div class="input-field col s6">
                                        <i class="mdi-action-perm-identity prefix"></i>
                                        <input name="TazkeraNumber" type="text" data-parsley-required="true" value="{{ $record->TazkeraNumber }}">
                                        <label for="TazkeraNumber">نمبر تذکره</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-person prefix"></i>
                                        <input name="TazkeraPage" type="text" data-parsley-required="true" value="{{ $record->TazkeraPage }}">
                                        <label for="TazkeraPage">صفحه</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-person prefix"></i>
                                        <input name="TazkeraJuld" type="text" data-parsley-required="true" value="{{ $record->TazkeraJuld }}">
                                        <label for="TazkeraJuld">جلد</label>
                                    </div>

                                    <div class="input-field col s12" align="right">
                                        <ul id="task-card" class="collection with-header">
                                            <li class="collection-header cyan">
                                                <h5 class="task-card-title">بخش 2: نوعیت</h5>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="input-field col s6">

                                        <i class="mdi-action-perm-identity prefix"></i>
                                        <input name="ReasonType" disabled type="text" data-parsley-required="true" value="">
                                        <label for="ReasonType">نوعیت :   {{ $record->ReasonType}}</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-perm-identity prefix"></i>
                                        <input name="InjuredLevel" disabled type="text" data-parsley-required="true" value="">
                                        <label for="InjuredLevel">درجه معلولیت: {{ $record->InjuredLevel }}</label>
                                    </div>

                                    <div class="input-field col s12" align="right">
                                        <ul id="task-card" class="collection with-header">
                                            <li class="collection-header cyan">
                                                <h5 class="task-card-title">بخش 3: حالات چگونگی وقوع فوت مفقودیت معلولیت</h5>
                                            </li>
                                        </ul>
                                    </div>


                                    <div class="input-field col s6">
                                        <i class="mdi-action-perm-identity prefix"></i>
                                        <input name="CausedAccordingTo" disabled type="text" data-parsley-required="true" value="">
                                        <label for="CausedAccordingTo">وقوع بنابر: {{ $record->CausedAccordingTo }}</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-perm-identity prefix"></i>
                                        <input name="CausedForFistTime" disabled type="text" data-parsley-required="true" value="">
                                        <label for="CausedForFistTime">نخستین بار در کجا واقع گردیده؟   {{$record->CausedForFistTime}}</label>
                                    </div>

                                    <div class="input-field col s12" align="right">
                                        <ul id="task-card" class="collection with-header">
                                            <li class="collection-header cyan">
                                                <h5 class="task-card-title">بخش 4: تاریخ وقوع</h5>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="input-field col s12">
                                        <i class="mdi-action-schedule prefix"></i>
                                        <input name="DeathDate" type="text" class="datepicker" data-parsley-required="true" value="{{ $record->DeathDate }}">
                                        <label for="DeathDate">معلوم نماید که چه وقت معلولیت ازطرف کمیسون صحی تثبیت معلولیت تثبیت گردیده بود چه وقت فوت واقع گردید چه وقت مفقودیت صورت گرفته</label>
                                    </div>

                                    <div class="input-field col s12" align="right">
                                        <ul id="task-card" class="collection with-header">
                                            <li class="collection-header cyan">
                                                <h5 class="task-card-title">بخش 5: معلولیت/فوت مرنبط به کار</h5>
                                            </li>
                                        </ul>
                                    </div>


                                    <div class="input-field col s12">
                                        <i class="mdi-content-archive prefix"></i>
                                        <input name="InjuredDetails" type="text" data-parsley-required="true" value="{{ $record->InjuredDetails }}">
                                        <label for="InjuredDetails">اگر معلولیت یا فوت مرتبط به کار باشد لطفا حالاتی را که فوت یا معلولیت در ان واقع گردیده را توضیح نمایید که چطور و چگونه معلولیت/فوت رخ داده است؟</label>
                                    </div>


                                    <div class="input-field col s12" align="right">
                                        <ul id="task-card" class="collection with-header">
                                            <li class="collection-header cyan">
                                                <h5 class="task-card-title">بخش 6: اسناد حامی</h5>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-perm-identity prefix"></i>
                                        <input name="ProveFormInfoNo" type="text" data-parsley-required="true" value="{{ $record->ProveFormInfoNo }}">
                                        <label for="ProveFormInfoNo">نمبر فورمه تثبیت معلولیت</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-perm-identity prefix"></i>
                                        <input name="WaseqeFawtiNo" type="text" data-parsley-required="true" value="{{ $record->WaseqeFawtiNo }}">
                                        <label for="WaseqeFawtiNo">نمبر وثیقه فوتی</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-schedule prefix"></i>
                                        <input name="WaseqaKhatDate" type="text" data-parsley-required="true" value="{{ $record->WaseqaKhatDate }}" class="datepicker">
                                        <label for="WaseqaKhatDate">تاریخ وثیقه خط</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-perm-identity prefix"></i>
                                        <input name="WasyatKhatNo" type="text" data-parsley-required="true" value="{{ $record->WasyatKhatNo }}">
                                        <label for="WasyatKhatNo">نمبر وصایت خط شرعی</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-schedule prefix"></i>
                                        <input name="WasyatKhatDate" type="text" data-parsley-required="true" value="{{ $record->WasyatKhatDate }}" class="datepicker">
                                        <label for="WasyatKhatDate">تاریخ وصایت خط شرعی</label>
                                    </div>

                                    <div class="input-field col s12" align="right">
                                        <ul id="task-card" class="collection with-header">
                                            <li class="collection-header cyan">
                                                <h5 class="task-card-title">بخش 7: منحیث قناعت امضا درخواست کننده</h5>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="input-field col s12" align="right">
                                        <ul id="task-card" class="collection with-header">
                                            <li >
                                                <h5 >تصدیق می نمایم که موارد فوق درست وصحت می باشد</h5>
                                            </li>
                                        </ul>
                                    </div>


                                    <div class="input-field col s6">
                                        <i class="mdi-action-schedule prefix"></i>
                                        <input name="MyProveDate" type="text" data-parsley-required="true" value="{{ $record->MyProveDate }}" class="datepicker">
                                        <label for="MyProveDate">تاریخ</label>
                                    </div>

                                    <div class="input-field col s12" align="right">
                                        <ul id="task-card" class="collection with-header">
                                            <li class="collection-header cyan">
                                                <h5 class="task-card-title">بخش 8: تایید و تصدیق ریاست کادر وپرسونل ومنابع بشری</h5>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-schedule prefix"></i>
                                        <input name="RelatedworkInjured" disabled type="text" data-parsley-required="true" value="" class="datepicker">
                                        <label for="RelatedworkInjured">معلولیت فوت مفقودیت مرتبط به کار می باشد؟ {{ $record->RelatedworkInjured }}</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-schedule prefix"></i>
                                        <input name="RelatedInjuredDate" type="text" data-parsley-required="true" value="{{ $record->RelatedInjuredDate }}" class="datepicker">
                                        <label for="RelatedInjuredDate">به تاریخ این موضوع را بر رسی نموده وتصدیق میداریم که توضیحات فوق الذکر صحت میباشد</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-perm-identity prefix"></i>
                                        <input name="EmpNameOfHR" type="text" data-parsley-required="true" value="{{ $record->EmpNameOfHR }}">
                                        <label for="EmpNameOfHR">اسم کارکن کادر و پرسونل و منابع بشری</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-perm-identity prefix"></i>
                                        <input name="BossNameOfHR" type="text" data-parsley-required="true" value="{{ $record->BossNameOfHR }}">
                                        <label for="BossNameOfHR">اسم آمر/ریس کادروپرسونل ومنابع بشری</label>
                                    </div>

                                    <div class="input-field col s12" align="right">
                                        <ul id="task-card" class="collection with-header">
                                            <li class="collection-header cyan">
                                                <h5 class="task-card-title">بخش 9: واگذاری وتسلیم دهی</h5>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-schedule prefix"></i>
                                        <input name="CurrentDate" type="text" class="datepicker" data-parsley-required="true" value="{{ $record->CurrentDate }}">
                                        <label for="CurrentDate">تاریخ</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-perm-identity prefix"></i>
                                        <input name="RegNumber" type="text" data-parsley-required="true" value="{{ $record->RegNumber }}" >
                                        <label for="RegNumber">نمبر ثبت</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-perm-identity prefix"></i>
                                        <input name="ExportNumber" type="text" data-parsley-required="true" value="{{ $record->ExportNumber }}">
                                        <label for="ExportNumber">شماره صدور</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-perm-identity prefix"></i>
                                        <input name="FormNumber" type="text" data-parsley-required="true" value="{{ $record->iFormNumberd }}">
                                        <label for="FormNumber">نمبر فورمه HRF-03</label>
                                    </div>

                                    <div class="input-field col s12" align="right">
                                        <ul id="task-card" class="collection with-header">
                                            <li class="collection-header cyan">
                                                <h5 class="task-card-title">بخش 10: در یافت فورم برای استفاده ریاست عمومی خزینه تقاعد</h5>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-perm-identity prefix"></i>
                                        <input name="RecieveDocumentation" type="text" data-parsley-required="true" value="{{ $record->RecieveDocumentation }}">
                                        <label for="RecieveDocumentation">دریافت/تسلیم گیری دوسیه/اسناد</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-perm-identity prefix"></i>
                                        <input name="Justification" type="text" data-parsley-required="true" value="{{ $record->Justification }}">
                                        <label for="Justification">تایید</label>
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
                    </form>
                </div>
                </section>
    </div>

</div>

<div id="modal2" class="modal" style="border-radius:25px">
    <div class="modal-content">
        <div class="card-panel cyan darken-1">
            <h5 class="card-content white-text"> Update Records</h5>
        </div>

        <form method="POST" action="{{ route('death.update',['id'=>$record]) }}" accept-charset="utf-8" class="col s11 right" data-parsley-validate>
            {!! csrf_field() !!}
            <input name="_method" type="hidden" value="PATCH">

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
                            <input name="id" type="text" data-parsley-required="true" value="{{ $record->id }}">
                            <label for="id">ID</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-action-perm-identity prefix"></i>
                            <input name="AutoNumber" type="text" data-parsley-required="true" value="{{ $record->AutoNumber }}">
                            <label for="AutoNumber">نمبر مسلسل</label>
                        </div>

                        <div class="input-field col s12" align="right">
                            <ul id="task-card" class="collection with-header">
                                <li >
                                    <h6 >این فورمه حینیکه درخواست تقاعد بنابر معلو لیت فوت ویا مفقودیت ترتیب میشود ضمیمه می گردد. این فورمه در دونقل تهیه گردیده که نقل اصلی آن ضمیمه دوسیه به ریاست عمومی خزینه تقاعد ارسال و کاپی ان در ریاست کدر پرسونل و منابع بشری ثبت و نگهداری می شود. لطفا تمام اسناد مورد ضرورت را ضمیمه نمایید.</h6>
                                </li>
                            </ul>
                        </div>


                        <div class="input-field col s6">
                            <i class="mdi-action-schedule prefix"></i>
                            <input name="RegistrationDate" type="text" class="datepicker" data-parsley-required="true" value="{{ $record->RegistrationDate }}">
                            <label for="RegistrationDate">تاریخ</label>
                        </div>

                        <div class="input-field col s12" align="right">
                            <ul id="task-card" class="collection with-header">
                                <li class="collection-header cyan">
                                    <h5 class="task-card-title">بخش 1: معلومات در مورد کارکن</h5>
                                </li>
                            </ul>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-action-perm-identity prefix"></i>
                            <input name="CardNo" type="text" data-parsley-required="true" value="{{ $record->CardNo }}">
                            <label for="CardNo">نمبر کارت هویت</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-social-person prefix"></i>
                            <input name="Name" type="text" data-parsley-required="true" value="{{ $record->Name }}">
                            <label for="Name">اسم</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-social-person prefix"></i>
                            <input name="LastName" type="text" data-parsley-required="true" value="{{ $record->LastName }}">
                            <label for="LastName">تخلص</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-social-person prefix"></i>
                            <input name="FatherName" type="text" data-parsley-required="true" value="{{ $record->FatherName }}">
                            <label for="FatherName">ولد</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-social-person prefix"></i>
                            <input name="GrandfatherName" type="text" data-parsley-required="true" value="{{ $record->GrandfatherName }}">
                            <label for="GrandfatherName">ولدیت</label>
                        </div>


                        <div class="input-field col s6">
                            <i class="mdi-action-perm-identity prefix"></i>
                            <input name="TazkeraNumber" type="text" data-parsley-required="true" value="{{ $record->TazkeraNumber }}">
                            <label for="TazkeraNumber">نمبر تذکره</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-social-person prefix"></i>
                            <input name="TazkeraPage" type="text" data-parsley-required="true" value="{{ $record->TazkeraPage }}">
                            <label for="TazkeraPage">صفحه</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-social-person prefix"></i>
                            <input name="TazkeraJuld" type="text" data-parsley-required="true" value="{{ $record->TazkeraJuld }}">
                            <label for="TazkeraJuld">جلد</label>
                        </div>

                        <div class="input-field col s12" align="right">
                            <ul id="task-card" class="collection with-header">
                                <li class="collection-header cyan">
                                    <h5 class="task-card-title">بخش 2: نوعیت</h5>
                                </li>
                            </ul>
                        </div>

                        <div class="input-field col s6">

                            <i class="mdi-action-perm-identity prefix"></i>
                            <input name="ReasonType" disabled type="text" data-parsley-required="true" value="">
                            <label for="ReasonType">نوعیت :   {{ $record->ReasonType}}</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-action-perm-identity prefix"></i>
                            <input name="InjuredLevel" disabled type="text" data-parsley-required="true" value="">
                            <label for="InjuredLevel">درجه معلولیت: {{ $record->InjuredLevel }}</label>
                        </div>

                        <div class="input-field col s12" align="right">
                            <ul id="task-card" class="collection with-header">
                                <li class="collection-header cyan">
                                    <h5 class="task-card-title">بخش 3: حالات چگونگی وقوع فوت مفقودیت معلولیت</h5>
                                </li>
                            </ul>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-action-perm-identity prefix"></i>
                            <input name="CausedAccordingTo" disabled type="text" data-parsley-required="true" value="">
                            <label for="CausedAccordingTo">وقوع بنابر: {{ $record->CausedAccordingTo }}</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-action-perm-identity prefix"></i>
                            <input name="CausedForFistTime" disabled type="text" data-parsley-required="true" value="">
                            <label for="CausedForFistTime">نخستین بار در کجا واقع گردیده؟   {{$record->CausedForFistTime}}</label>
                        </div>

                        <div class="input-field col s12" align="right">
                            <ul id="task-card" class="collection with-header">
                                <li class="collection-header cyan">
                                    <h5 class="task-card-title">بخش 4: تاریخ وقوع</h5>
                                </li>
                            </ul>
                        </div>

                        <div class="input-field col s12">
                            <i class="mdi-action-schedule prefix"></i>
                            <input name="DeathDate" type="text" class="datepicker" data-parsley-required="true" value="{{ $record->DeathDate }}">
                            <label for="DeathDate">معلوم نماید که چه وقت معلولیت ازطرف کمیسون صحی تثبیت معلولیت تثبیت گردیده بود چه وقت فوت واقع گردید چه وقت مفقودیت صورت گرفته</label>
                        </div>

                        <div class="input-field col s12" align="right">
                            <ul id="task-card" class="collection with-header">
                                <li class="collection-header cyan">
                                    <h5 class="task-card-title">بخش 5: معلولیت/فوت مرنبط به کار</h5>
                                </li>
                            </ul>
                        </div>


                        <div class="input-field col s12">
                            <i class="mdi-content-archive prefix"></i>
                            <input name="InjuredDetails" type="text" data-parsley-required="true" value="{{ $record->InjuredDetails }}">
                            <label for="InjuredDetails">اگر معلولیت یا فوت مرتبط به کار باشد لطفا حالاتی را که فوت یا معلولیت در ان واقع گردیده را توضیح نمایید که چطور و چگونه معلولیت/فوت رخ داده است؟</label>
                        </div>


                        <div class="input-field col s12" align="right">
                            <ul id="task-card" class="collection with-header">
                                <li class="collection-header cyan">
                                    <h5 class="task-card-title">بخش 6: اسناد حامی</h5>
                                </li>
                            </ul>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-action-perm-identity prefix"></i>
                            <input name="ProveFormInfoNo" type="text" data-parsley-required="true" value="{{ $record->ProveFormInfoNo }}">
                            <label for="ProveFormInfoNo">نمبر فورمه تثبیت معلولیت</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-action-perm-identity prefix"></i>
                            <input name="WaseqeFawtiNo" type="text" data-parsley-required="true" value="{{ $record->WaseqeFawtiNo }}">
                            <label for="WaseqeFawtiNo">نمبر وثیقه فوتی</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-action-schedule prefix"></i>
                            <input name="WaseqaKhatDate" type="text" data-parsley-required="true" value="{{ $record->WaseqaKhatDate }}" class="datepicker">
                            <label for="WaseqaKhatDate">تاریخ وثیقه خط</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-action-perm-identity prefix"></i>
                            <input name="WasyatKhatNo" type="text" data-parsley-required="true" value="{{ $record->WasyatKhatNo }}">
                            <label for="WasyatKhatNo">نمبر وصایت خط شرعی</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-action-schedule prefix"></i>
                            <input name="WasyatKhatDate" type="text" data-parsley-required="true" value="{{ $record->WasyatKhatDate }}" class="datepicker">
                            <label for="WasyatKhatDate">تاریخ وصایت خط شرعی</label>
                        </div>

                        <div class="input-field col s12" align="right">
                            <ul id="task-card" class="collection with-header">
                                <li class="collection-header cyan">
                                    <h5 class="task-card-title">بخش 7: منحیث قناعت امضا درخواست کننده</h5>
                                </li>
                            </ul>
                        </div>

                        <div class="input-field col s12" align="right">
                            <ul id="task-card" class="collection with-header">
                                <li >
                                    <h5 >تصدیق می نمایم که موارد فوق درست وصحت می باشد</h5>
                                </li>
                            </ul>
                        </div>


                        <div class="input-field col s6">
                            <i class="mdi-action-schedule prefix"></i>
                            <input name="MyProveDate" type="text" data-parsley-required="true" value="{{ $record->MyProveDate }}" class="datepicker">
                            <label for="MyProveDate">تاریخ</label>
                        </div>

                        <div class="input-field col s12" align="right">
                            <ul id="task-card" class="collection with-header">
                                <li class="collection-header cyan">
                                    <h5 class="task-card-title">بخش 8: تایید و تصدیق ریاست کادر وپرسونل ومنابع بشری</h5>
                                </li>
                            </ul>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-action-schedule prefix"></i>
                            <input name="RelatedworkInjured" disabled type="text" data-parsley-required="true" value="" class="datepicker">
                            <label for="RelatedworkInjured">معلولیت فوت مفقودیت مرتبط به کار می باشد؟ {{ $record->RelatedworkInjured }}</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-action-schedule prefix"></i>
                            <input name="RelatedInjuredDate" type="text" data-parsley-required="true" value="{{ $record->RelatedInjuredDate }}" class="datepicker">
                            <label for="RelatedInjuredDate">به تاریخ این موضوع را بر رسی نموده وتصدیق میداریم که توضیحات فوق الذکر صحت میباشد</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-action-perm-identity prefix"></i>
                            <input name="EmpNameOfHR" type="text" data-parsley-required="true" value="{{ $record->EmpNameOfHR }}">
                            <label for="EmpNameOfHR">اسم کارکن کادر و پرسونل و منابع بشری</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-action-perm-identity prefix"></i>
                            <input name="BossNameOfHR" type="text" data-parsley-required="true" value="{{ $record->BossNameOfHR }}">
                            <label for="BossNameOfHR">اسم آمر/ریس کادروپرسونل ومنابع بشری</label>
                        </div>

                        <div class="input-field col s12" align="right">
                            <ul id="task-card" class="collection with-header">
                                <li class="collection-header cyan">
                                    <h5 class="task-card-title">بخش 9: واگذاری وتسلیم دهی</h5>
                                </li>
                            </ul>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-action-schedule prefix"></i>
                            <input name="CurrentDate" type="text" class="datepicker" data-parsley-required="true" value="{{ $record->CurrentDate }}">
                            <label for="CurrentDate">تاریخ</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-action-perm-identity prefix"></i>
                            <input name="RegNumber" type="text" data-parsley-required="true" value="{{ $record->RegNumber }}" >
                            <label for="RegNumber">نمبر ثبت</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-action-perm-identity prefix"></i>
                            <input name="ExportNumber" type="text" data-parsley-required="true" value="{{ $record->ExportNumber }}">
                            <label for="ExportNumber">شماره صدور</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-action-perm-identity prefix"></i>
                            <input name="FormNumber" type="text" data-parsley-required="true" value="{{ $record->iFormNumberd }}">
                            <label for="FormNumber">نمبر فورمه HRF-03</label>
                        </div>

                        <div class="input-field col s12" align="right">
                            <ul id="task-card" class="collection with-header">
                                <li class="collection-header cyan">
                                    <h5 class="task-card-title">بخش 10: در یافت فورم برای استفاده ریاست عمومی خزینه تقاعد</h5>
                                </li>
                            </ul>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-action-perm-identity prefix"></i>
                            <input name="RecieveDocumentation" type="text" data-parsley-required="true" value="{{ $record->RecieveDocumentation }}">
                            <label for="RecieveDocumentation">دریافت/تسلیم گیری دوسیه/اسناد</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-action-perm-identity prefix"></i>
                            <input name="Justification" type="text" data-parsley-required="true" value="{{ $record->Justification }}">
                            <label for="Justification">تایید</label>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class=" waves-effect waves-light btn">Update</button> &nbsp;&nbsp;&nbsp;&nbsp;
                        </div>
                    </div>
                </div>
            </div>
        </form>


    </div>
</div>

@stop

</body>

