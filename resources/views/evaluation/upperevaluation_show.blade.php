@extends('layouts.Evaluationlayout')

@section('title')
    HR |نمایش معلومات
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
                        <h5 class="breadcrumbs-title">مدیریت ارزیابی</h5>
                        <ol class="breadcrumb">
                            <li><a href="development">دشبورد</a>
                            </li>

                            <li class="active">فورم ها</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!--breadcrumbs end-->
        @section('content')
            <h1 class="header" align="right">نمایش معلومات</h1>

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
                            <form method="POST" action="{{ url('upperevaluation') }}" class="col s12" >
                                {!! csrf_field() !!}

                                <div class="row">
                                    <div class="input-field col s12">
                                        <ul id="task-card" class="collection with-header">
                                            <li class="collection-header cyan">
                                                <h5 class="task-card-title" align="right">شماره (3) قانون کارکنان خدمات ملکی(فورم ارزیابی مامور خدمات ملکی) صفحه اول</h5>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="input-field col s6"  align="right">
                                        <i class="mdi-social-person prefix" ></i>
                                        <input name="Name" type="text" value="{{ $record->Name }}" data-parsley-required="true">
                                        <label for="Name">نام</label>
                                    </div>

                                    <div class="input-field col s6" align="right">
                                        <i class="mdi-social-person prefix"></i>
                                        <input name="FatherName" type="text" value="{{ $record->FatherName }}" data-parsley-required="true">
                                        <label for="FatherName">نام پدر</label>
                                    </div>

                                    <div class="input-field col s6" align="right">
                                        <i class="mdi-social-person prefix"></i>
                                        <input name="GrandFatherName" type="text" value="{{ $record->GrandFatherName }}" data-parsley-required="true">
                                        <label for="GrandFatherName">نام پدر کلان</label>
                                    </div>

                                    <div class="input-field col s6" align="right">
                                        <i class="mdi-action-schedule prefix"></i>
                                        <input name="BirthDate" type="text" value="{{ $record->BirthDate }}" class="datepicker">
                                        <label for="BirthDate">تاریخ تولد</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-school prefix"></i>
                                        <label for="EducationLevel">درجه تحصیل</label>
                                        <br/>
                                        <select>
                                            <option value="" disabled selected></option>
                                            <option value="1">پاین تر از صنف 12</option>
                                            <option value="2">بکلوریا</option>
                                            <option value="2">فوق بکلوریا</option>
                                            <option value="3">لسانس</option>
                                            <option value="4">ماستری</option>
                                            <option value="5">دوکتورا</option>
                                        </select>
                                    </div>


                                    <div class="input-field col s6">
                                        <br />
                                        <i class="mdi-editor-merge-type prefix"></i>
                                        <input name="EucationField" type="text" value="{{ $record->EucationField }}" data-parsley-required="true">
                                        <label for="EucationField">رشته تحصیلی</label>

                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-schedule prefix"></i>
                                        <input name="PrimaryRegDate" type="text" value="{{ $record->PrimaryRegDate }}" class="datepicker">
                                        <label for="PrimaryRegDate">تاریخ تقرر ابتدایی</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-schedule prefix"></i>
                                        <input name="CompetitionRegDate" type="text" value="{{ $record->CompetitionRegDate }}" class="datepicker">
                                        <label for="CompetitionRegDate">تاریخ تقرر از طریق رقابت</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-maps-directions-walk prefix"></i>
                                        <input name="Jobrelatedtranings" type="text" value="{{ $record->Jobrelatedtranings }}" data-parsley-required="true">
                                        <label for="Jobrelatedtranings">آموزش های وظیفوی</label>
                                    </div>


                                    <div class="input-field col s6">
                                        <i class="mdi-maps-directions-walk prefix"></i>
                                        <input name="Qadam" type="text" value="{{ $record->Qadam }}" data-parsley-required="true">
                                        <label for="Qadam">قدم</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-maps-directions-walk prefix"></i>
                                        <input name="Bast" type="text" value="{{ $record->Bast }}" data-parsley-required="true">
                                        <label for="Bast">بست</label>
                                    </div>


                                    <div class="input-field col s6">
                                        <i class="mdi-editor-merge-type prefix"></i>
                                        <input name="BastTitle" type="text" value="{{ $record->BastTitle }}" data-parsley-required="true">
                                        <label for="BastTitle">عنوان بست</label>
                                    </div>

                                    <div class="input-field col s12" align="right">
                                        <ul id="task-card" class="collection with-header">
                                            <li class="collection-header cyan">
                                                <h5 class="task-card-title">محل وظیفه</h5>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-maps-place prefix"></i>
                                        <input name="Ministry" type="text" value="{{ $record->Ministry }}" data-parsley-required="true">
                                        <label for="Ministry">وزارت</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-maps-place prefix"></i>
                                        <input name="Reysat" type="text" value="{{ $record->Reysat }}" data-parsley-required="true">
                                        <label for="Reysat">ریاست</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-maps-place prefix"></i>
                                        <input name="Moderiat" type="text" value="{{ $record->Moderiat }}" data-parsley-required="true">
                                        <label for="Moderiat">مدیریت</label>
                                    </div>

                                    <div class="input-field col s12" align="right">
                                        <ul id="task-card" class="collection with-header">
                                            <li class="collection-header cyan">
                                                <h5 class="task-card-title">اندازه مزد و امتیازات</h5>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-info-outline prefix"></i>
                                        <input name="QadamPayment" type="text" value="{{ $record->QadamPayment }}" data-parsley-required="true">
                                        <label for="QadamPayment">مزد قدم بست به افغانی</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-info-outline prefix"></i>
                                        <input name="OtherPayment" type="text" value="{{ $record->OtherPayment }}" data-parsley-required="true">
                                        <label for="OtherPayment">سایر امتیازات وظیفوی به افغانی</label>
                                    </div>


                                    <div class="input-field col s6">
                                        <i class="mdi-action-info-outline prefix"></i>
                                        <input name="SalaryTotal" type="text" value="{{ $record->SalaryTotal }}" data-parsley-required="true">
                                        <label for="SalaryTotal">مجموع مزد و امتیازات به افغانی</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-info-outline prefix"></i>
                                        <input name="Responsibility" type="text" value="{{ $record->Responsibility }}" data-parsley-required="true">
                                        <label for="Responsibility">وظایف بست طبق لایحه</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-editor-merge-type prefix"></i>
                                        <input name="AccomplishmentType" type="text" value="{{ $record->AccomplishmentType }}" data-parsley-required="true">
                                        <label for="AccomplishmentType">چگونگی اجرات</label>
                                    </div>

                                    <div class="input-field col s12" align="right">
                                        <ul id="task-card" class="collection with-header">
                                            <li class="collection-header cyan">
                                                <h5 class="task-card-title">صفحه دوم</h5>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-info-outline prefix"></i>
                                        <input name="WorkPlane" type="text" value="{{ $record->WorkPlane }}" data-parsley-required="true">
                                        <label for="WorkPlane">پلان کار</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-receipt prefix"></i>
                                        <input name="AccomplishmentType" type="text" value="{{ $record->AccomplishmentType }}" data-parsley-required="true">
                                        <label for="AccomplishmentType">چگونگی اجرات</label>
                                    </div>


                                    <div class="input-field col s6">
                                        <i class="mdi-action-receipt prefix"></i>
                                        <input name="AnnualAccomplishmentType" type="text" value="{{ $record->AnnualAccomplishmentType }}" data-parsley-required="true">
                                        <label for="AnnualAccomplishmentType">چگونگی اجرات انجام شده طبق راپور سالانه</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-receipt prefix"></i>
                                        <input name="AnAccomplishmentResons" type="text" value="{{ $record->AnAccomplishmentResons }}" data-parsley-required="true">
                                        <label for="AnAccomplishmentResons">دلایل عدم اجرا</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-group prefix"></i>
                                        <label for="OfficialEvaluationResult">نتایج ارزیابی توسط مامور ارزیابی شوند</label>
                                        <br>
                                        <form action="#">

                                            <input name="group1" type="radio" id="test1" />
                                            <label for="test1">1</label>

                                            <input name="group1" type="radio" id="test2" />
                                            <label for="test2">2</label>

                                            <input name="group1" type="radio" id="test3" />
                                            <label for="test3">3</label>

                                            <input name="group1" type="radio" id="test4" />
                                            <label for="test4">4</label>

                                            <input name="group1" type="radio" id="test5" />
                                            <label for="test5">5</label>

                                        </form>

                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-group prefix"></i>
                                        <label for="DirectManagerEvaluationResult">نتایج ارزیابی توسط آمر مستقیم</label>
                                        <br>
                                        <form action="#">

                                            <input name="group1" type="radio" id="test6" />
                                            <label for="test6">1</label>

                                            <input name="group1" type="radio" id="test7" />
                                            <label for="test7">2</label>

                                            <input name="group1" type="radio" id="test8" />
                                            <label for="test8">3</label>

                                            <input name="group1" type="radio" id="test9" />
                                            <label for="test9">4</label>

                                            <input name="group1" type="radio" id="test10" />
                                            <label for="test10">5</label>

                                        </form>

                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-group prefix"></i>
                                        <label for="HeadManagerEvaluationResult">نتایج ارزیابی توسط آمر مافوق</label>
                                        <br>
                                        <form action="#">

                                            <input name="group1" type="radio" id="test11" />
                                            <label for="test11">1</label>

                                            <input name="group1" type="radio" id="test12" />
                                            <label for="test12">2</label>

                                            <input name="group1" type="radio" id="test13" />
                                            <label for="test13">3</label>

                                            <input name="group1" type="radio" id="test14" />
                                            <label for="test14">4</label>

                                            <input name="group1" type="radio" id="test15" />
                                            <label for="test15">5</label>

                                        </form>

                                    </div>



                                    <div class="input-field col s6">
                                        <i class="mdi-hardware-keyboard prefix"></i>
                                        <input name="TotalOfScore" type="text" value="{{ $record->TotalOfScore }}" data-parsley-required="true">
                                        <label for="TotalOfScore">مجموع نمرات</label>
                                    </div>

                                    <div class="input-field col s12" align="right">
                                        <ul id="task-card" class="collection with-header" align="right">
                                            <li class="collection-header cyan">
                                                <h5 class="task-card-title" align="right">:رهنمود نمره دهی پلان کار سالانه</h5>
                                                <p >.هرگاه اجراآت مامور بالاتر از شصت فیصد تطبیق پلان باشد (از 17-25 نمره) در این صورت ارتقا به قدم مزد بالاتر</p>
                                                <p >.هرگاه اجراآت مامور بالاتر از پنجاه الی شصت فیصد تطبیق پلان باشد (از 13-17 نمره) در این صورت دوام وظیفه درقدم موجود با آموزش های مرتبط به وظیفه</p>
                                                <p >.هرگاه اجراآت مامور پاین تر از پنجاه فیصد تطبیق پلان باشد (از 12نمره و پاینتر از ان) در این صورت اعلان بست (در مطابقت باقانون کارکنان)</p>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="input-field col s12" align="right">
                                        <ul id="task-card" class="collection with-header">
                                            <li class="collection-header cyan">
                                                <h5 class="task-card-title">نتیجه نهایی ارزیابی توسط امر ذیصلاح</h5>
                                            </li>

                                            <form action="#">
                                                <p>
                                                    <input name="group1" type="radio" id="test42" />
                                                    <label for="test42">ارتقاع به قدم (مزد) بالاتر.</label>
                                                </p>
                                                <p>
                                                    <input name="group1" type="radio" id="test43" />
                                                    <label for="test43">دوام وظیفه درقدم موجود همرا با آموزش.</label>
                                                </p>
                                                <p>
                                                    <input name="group1" type="radio" id="test44" />
                                                    <label for="test44">اعلان بست.</label>
                                                </p>
                                            </form>
                                            <br>
                                            <div class="input-field col s6">
                                                <i class="mdi-social-person prefix"></i>
                                                <input name="OfficialName" type="text" value="{{ $record->OfficialName }}" data-parsley-required="true">
                                                <label for="OfficialName">اسم</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <i class="mdi-action-schedule prefix"></i>
                                                <input name="OfficialDate" type="text" value="{{ $record->OfficialDate }}" class="datepicker">
                                                <label for="OfficialDate">تاریخ</label>
                                            </div>

                                        </ul>

                                    </div>

                                    <div class="input-field col s12" align="right">
                                        <ul id="OfficialSatisfaction" class="collection with-header">
                                            <li class="collection-header cyan">
                                                <h5 class="task-card-title">قناعت یا عدم قناعت مامور ارزیابی شونده</h5>
                                            </li>
                                            <li>

                                                <div class="col s12 m8 l9">
                                                    <form action="#">
                                                        <p>
                                                            <input name="group2" type="radio" id="test41" />
                                                            <label for="test41">قناعت دارم</label>
                                                        </p>
                                                        <p>
                                                            <input name="group2" type="radio" id="test36" />
                                                            <label for="test36">قناعت ندارم</label>
                                                        </p>
                                                    </form>

                                                </div>

                                            </li>
                                        </ul>
                                    </div>

                                    <div class="input-field col s12" align="right">
                                        <ul id="DirecteManagerAcceptance" class="collection with-header">
                                            <li class="collection-header cyan">
                                                <h5 class="task-card-title">تایید یا رد توسط آمر مستقیم</h5>
                                            </li>
                                            <li>

                                                <div class="col s12 m8 l9">
                                                    <form action="#">
                                                        <p>
                                                            <input name="group2" type="radio" id="test37" />
                                                            <label for="test37">تایید</label>
                                                        </p>
                                                        <p>
                                                            <input name="group2" type="radio" id="test38" />
                                                            <label for="test38">رد</label>
                                                        </p>
                                                    </form>

                                                </div>


                                                <div class="input-field col s6">
                                                    <i class="mdi-social-person prefix"></i>
                                                    <input name="HeadManagerName" type="text" value="{{ $record->HeadManagerName }}" data-parsley-required="true">
                                                    <label for="HeadManagerName">اسم آمر مستقیم</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="input-field col s12" align="right">
                                        <ul id="task-card" class="collection with-header">
                                            <li class="collection-header cyan">
                                                <h5 class="task-card-title">صفحه سوم: معیار های اضافی برای ارزیابی اجراآت سالانه مامورین بست های اول و دوم</h5>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="input-field col s12" align="center">
                                        <ul id="task-card" class="collection with-header">
                                            <li class="collection-header cyan">
                                                <h5 class="task-card-title">معیار های اضافی</h5>
                                                <p >.توانایی اداره ورهبری (مهارت کار در اداره تجزیه و تحلیل موضوعات مربوط به وظیفه</p>
                                                <p >.مراقبت و نظارت از اجراآت کار کنان تحت اثر</p>
                                                <p >.توانایی های تخنیکی (اداره پروژه های تخنیکی وعرضه خدمات مسلکی مربوط به وظیفه</p>
                                                <p>مهارت ارتقاع بخشیدن ظرقیت کار کنان تحت اثر</p>
                                                <p>شفافیت و حساب دهی در اجراآت</p>
                                                <p>قدرت تصمیم گیری (بشکل فردی ویا جمعی + مفهمه با تاثیر)</p>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-group prefix"></i>
                                        <label for="OfficialEvaluationResult">نتایج ارزیابی توسط مامور ارزیابی شوند</label>
                                        <br>
                                        <form action="#">

                                            <input name="group1" type="radio" id="test16" />
                                            <label for="test16">1</label>

                                            <input name="group1" type="radio" id="test17" />
                                            <label for="test17">2</label>

                                            <input name="group1" type="radio" id="test18" />
                                            <label for="test18">3</label>

                                            <input name="group1" type="radio" id="test19" />
                                            <label for="test19">4</label>

                                            <input name="group1" type="radio" id="test20" />
                                            <label for="test20">5</label>

                                        </form>

                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-group prefix"></i>
                                        <label for="DirectManagerEvaluationResult">نتایج ارزیابی توسط آمر مستقیم</label>
                                        <br>
                                        <form action="#">

                                            <input name="group1" type="radio" id="test21" />
                                            <label for="test21">1</label>

                                            <input name="group1" type="radio" id="test22" />
                                            <label for="test22">2</label>

                                            <input name="group1" type="radio" id="test23" />
                                            <label for="test23">3</label>

                                            <input name="group1" type="radio" id="test24" />
                                            <label for="test24">4</label>

                                            <input name="group1" type="radio" id="test25" />
                                            <label for="test25">5</label>

                                        </form>

                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-group prefix"></i>
                                        <label for="HeadManagerEvaluationResult">نتایج ارزیابی توسط آمر مافوق</label>
                                        <br>
                                        <form action="#">

                                            <input name="group1" type="radio" id="test26" />
                                            <label for="test26">1</label>

                                            <input name="group1" type="radio" id="test27" />
                                            <label for="test27">2</label>

                                            <input name="group1" type="radio" id="test28" />
                                            <label for="test28">3</label>

                                            <input name="group1" type="radio" id="test29" />
                                            <label for="test29">4</label>

                                            <input name="group1" type="radio" id="test30" />
                                            <label for="test30">5</label>

                                        </form>

                                    </div>

                                    <div class="input-field col s12" align="right">
                                        <ul id="task-card" class="collection with-header" align="right">
                                            <li class="collection-header cyan">
                                                <h5 class="task-card-title" align="right">:رهنمود نمره دهی معیار های اضافی مامورین</h5>
                                                <p >.هرگاه اجراآت مامور بالاتر از شصت فیصد تطبیق پلان باشد (از 40 الی 55 نمره) در این صورت ارتقا به قدم مزد بالاتر</p>
                                                <p >.هرگاه اجراآت مامور بالاتر از پنجاه الی شصت فیصد تطبیق پلان باشد (از 28 الی 39 نمره) در این صورت دوام وظیفه درقدم موجود با آموزش های مرتبط به وظیفه</p>
                                                <p >.هرگاه اجراآت مامور پاین تر از پنجاه فیصد تطبیق پلان باشد (از 27 نمره و پاینتر از ان) در این صورت اعلان بست</p>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="input-field col s12" align="right">
                                        <ul id="task-card" class="collection with-header">
                                            <li class="collection-header cyan">
                                                <h5 class="task-card-title">خلاصه نتایج ارزیابی اجراات مامورین بست های اول و دوم توسطه آمر ذیصلاح</h5>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-person prefix"></i>
                                        <input name="OfficialName2" type="text" value="{{ $record->OfficialName2 }}" data-parsley-required="true">
                                        <label for="OfficialName2">نمره پلان کار سالانه</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-person prefix"></i>
                                        <input name="OfficialName3" type="text" value="{{ $record->OfficialName3 }}" data-parsley-required="true">
                                        <label for="OfficialName3">نمره معیارهای اضافی</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-person prefix"></i>
                                        <input name="OfficialName4" type="text" value="{{ $record->OfficialName4 }}" data-parsley-required="true">
                                        <label for="OfficialName4">مجموع نمرات هردو بخش</label>
                                    </div>

                                    <div class="input-field col s12" align="right">
                                        <ul id="task-card" class="collection with-header">
                                            <li class="collection-header cyan">
                                                <h5 class="task-card-title">نتیجه نهایی ارزیابی</h5>
                                            </li>

                                            <form action="#">
                                                <p>
                                                    <input name="group1" type="radio" id="test42" />
                                                    <label for="test42">ارتقاع به قدم (مزد) بالاتر.</label>
                                                </p>
                                                <p>
                                                    <input name="group1" type="radio" id="test43" />
                                                    <label for="test43">دوام وظیفه درقدم موجود همرا با آموزش.</label>
                                                </p>
                                                <p>
                                                    <input name="group1" type="radio" id="test44" />
                                                    <label for="test44">اعلان بست.</label>
                                                </p>
                                            </form>
                                        </ul>
                                    </div>

                                    <div class="input-field col s12" align="right">
                                        <ul id="OfficialSatisfaction" class="collection with-header">
                                            <li class="collection-header cyan">
                                                <h5 class="task-card-title">قناعت یا عدم قناعت مامور ارزیابی شونده</h5>
                                            </li>
                                            <li>

                                                <div class="col s12 m8 l9">
                                                    <form action="#">
                                                        <p>
                                                            <input name="group2" type="radio" id="test31" />
                                                            <label for="test31">قناعت دارم</label>
                                                        </p>
                                                        <p>
                                                            <input name="group2" type="radio" id="test32" />
                                                            <label for="test32">قناعت ندارم</label>
                                                        </p>
                                                    </form>

                                                </div>

                                            </li>
                                        </ul>
                                    </div>

                                    <div class="input-field col s12" align="right">
                                        <ul id="DirecteManagerAcceptance" class="collection with-header">
                                            <li class="collection-header cyan">
                                                <h5 class="task-card-title">تایید یا رد توسط آمر مستقیم</h5>
                                            </li>
                                            <li>

                                                <div class="col s12 m8 l9">
                                                    <form action="#">
                                                        <p>
                                                            <input name="group2" type="radio" id="test33" />
                                                            <label for="test33">تایید</label>
                                                        </p>
                                                        <p>
                                                            <input name="group2" type="radio" id="test34" />
                                                            <label for="test34">رد</label>
                                                        </p>
                                                    </form>

                                                </div>
                                                </li>
                                            </ul>
                                        </div>


                                                <div class="input-field col s6">
                                                    <i class="mdi-social-person prefix"></i>
                                                    <input name="HeadManagerName1" type="text" value="{{ $record->HeadManagerName1 }}" data-parsley-required="true">
                                                    <label for="HeadManagerName1">اسم آمر مستقیم</label>
                                                </div>

                                                <div class="input-field col s6">
                                                    <i class="mdi-social-person prefix"></i>
                                                    <input name="HeadManagerName2" type="text" value="{{ $record->HeadManagerName2 }}" data-parsley-required="true">
                                                    <label for="HeadManagerName2">اسم آمر مافوق</label>
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
                                <h5 class="card-content white-text">تغیر سطر</h5>
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
                                            <form method="POST" action="{{ route('upperevaluation.update',['id'=>$record]) }}" accept-charset="utf-8" class="col s11 right" data-parsley-validate>
                                                {!! csrf_field() !!}
                                                <input name="_method" type="hidden" value="PATCH">

                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <ul id="task-card" class="collection with-header">
                                                            <li class="collection-header cyan">
                                                                <h5 class="task-card-title" align="right">شماره (3) قانون کارکنان خدمات ملکی(فورم ارزیابی مامور خدمات ملکی) صفحه اول</h5>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="input-field col s6"  align="right">
                                                        <i class="mdi-social-person prefix" ></i>
                                                        <input name="Name" type="text" value="{{ $record->Name }}" data-parsley-required="true">
                                                        <label for="Name">نام</label>
                                                    </div>

                                                    <div class="input-field col s6" align="right">
                                                        <i class="mdi-social-person prefix"></i>
                                                        <input name="FatherName" type="text" value="{{ $record->FatherName }}" data-parsley-required="true">
                                                        <label for="FatherName">نام پدر</label>
                                                    </div>

                                                    <div class="input-field col s6" align="right">
                                                        <i class="mdi-social-person prefix"></i>
                                                        <input name="GrandFatherName" type="text" value="{{ $record->GrandFatherName }}" data-parsley-required="true">
                                                        <label for="GrandFatherName">نام پدر کلان</label>
                                                    </div>

                                                    <div class="input-field col s6" align="right">
                                                        <i class="mdi-action-schedule prefix"></i>
                                                        <input name="BirthDate" type="text" value="{{ $record->BirthDate }}" class="datepicker">
                                                        <label for="BirthDate">تاریخ تولد</label>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-social-school prefix"></i>
                                                        <label for="EducationLevel">درجه تحصیل</label>
                                                        <br/>
                                                        <select>
                                                            <option value="" disabled selected></option>
                                                            <option value="1">پاین تر از صنف 12</option>
                                                            <option value="2">بکلوریا</option>
                                                            <option value="2">فوق بکلوریا</option>
                                                            <option value="3">لسانس</option>
                                                            <option value="4">ماستری</option>
                                                            <option value="5">دوکتورا</option>
                                                        </select>
                                                    </div>


                                                    <div class="input-field col s6">
                                                        <br />
                                                        <i class="mdi-editor-merge-type prefix"></i>
                                                        <input name="EucationField" type="text" value="{{ $record->EucationField }}" data-parsley-required="true">
                                                        <label for="EucationField">رشته تحصیلی</label>

                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-action-schedule prefix"></i>
                                                        <input name="PrimaryRegDate" type="text" value="{{ $record->PrimaryRegDate }}" class="datepicker">
                                                        <label for="PrimaryRegDate">تاریخ تقرر ابتدایی</label>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-action-schedule prefix"></i>
                                                        <input name="CompetitionRegDate" type="text" value="{{ $record->CompetitionRegDate }}" class="datepicker">
                                                        <label for="CompetitionRegDate">تاریخ تقرر از طریق رقابت</label>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-maps-directions-walk prefix"></i>
                                                        <input name="Jobrelatedtranings" type="text" value="{{ $record->Jobrelatedtranings }}" data-parsley-required="true">
                                                        <label for="Jobrelatedtranings">آموزش های وظیفوی</label>
                                                    </div>


                                                    <div class="input-field col s6">
                                                        <i class="mdi-maps-directions-walk prefix"></i>
                                                        <input name="Qadam" type="text" value="{{ $record->Qadam }}" data-parsley-required="true">
                                                        <label for="Qadam">قدم</label>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-maps-directions-walk prefix"></i>
                                                        <input name="Bast" type="text" value="{{ $record->Bast }}" data-parsley-required="true">
                                                        <label for="Bast">بست</label>
                                                    </div>


                                                    <div class="input-field col s6">
                                                        <i class="mdi-editor-merge-type prefix"></i>
                                                        <input name="BastTitle" type="text" value="{{ $record->BastTitle }}" data-parsley-required="true">
                                                        <label for="BastTitle">عنوان بست</label>
                                                    </div>

                                                    <div class="input-field col s12" align="right">
                                                        <ul id="task-card" class="collection with-header">
                                                            <li class="collection-header cyan">
                                                                <h5 class="task-card-title">محل وظیفه</h5>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-maps-place prefix"></i>
                                                        <input name="Ministry" type="text" value="{{ $record->Ministry }}" data-parsley-required="true">
                                                        <label for="Ministry">وزارت</label>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-maps-place prefix"></i>
                                                        <input name="Reysat" type="text" value="{{ $record->Reysat }}" data-parsley-required="true">
                                                        <label for="Reysat">ریاست</label>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-maps-place prefix"></i>
                                                        <input name="Moderiat" type="text" value="{{ $record->Moderiat }}" data-parsley-required="true">
                                                        <label for="Moderiat">مدیریت</label>
                                                    </div>

                                                    <div class="input-field col s12" align="right">
                                                        <ul id="task-card" class="collection with-header">
                                                            <li class="collection-header cyan">
                                                                <h5 class="task-card-title">اندازه مزد و امتیازات</h5>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-action-info-outline prefix"></i>
                                                        <input name="QadamPayment" type="text" value="{{ $record->QadamPayment }}" data-parsley-required="true">
                                                        <label for="QadamPayment">مزد قدم بست به افغانی</label>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-action-info-outline prefix"></i>
                                                        <input name="OtherPayment" type="text" value="{{ $record->OtherPayment }}" data-parsley-required="true">
                                                        <label for="OtherPayment">سایر امتیازات وظیفوی به افغانی</label>
                                                    </div>


                                                    <div class="input-field col s6">
                                                        <i class="mdi-action-info-outline prefix"></i>
                                                        <input name="SalaryTotal" type="text" value="{{ $record->SalaryTotal }}" data-parsley-required="true">
                                                        <label for="SalaryTotal">مجموع مزد و امتیازات به افغانی</label>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-action-info-outline prefix"></i>
                                                        <input name="Responsibility" type="text" value="{{ $record->Responsibility }}" data-parsley-required="true">
                                                        <label for="Responsibility">وظایف بست طبق لایحه</label>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-editor-merge-type prefix"></i>
                                                        <input name="AccomplishmentType" type="text" value="{{ $record->AccomplishmentType }}" data-parsley-required="true">
                                                        <label for="AccomplishmentType">چگونگی اجرات</label>
                                                    </div>

                                                    <div class="input-field col s12" align="right">
                                                        <ul id="task-card" class="collection with-header">
                                                            <li class="collection-header cyan">
                                                                <h5 class="task-card-title">صفحه دوم</h5>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-action-info-outline prefix"></i>
                                                        <input name="WorkPlane" type="text" value="{{ $record->WorkPlane }}" data-parsley-required="true">
                                                        <label for="WorkPlane">پلان کار</label>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-action-receipt prefix"></i>
                                                        <input name="AccomplishmentType" type="text" value="{{ $record->AccomplishmentType }}" data-parsley-required="true">
                                                        <label for="AccomplishmentType">چگونگی اجرات</label>
                                                    </div>


                                                    <div class="input-field col s6">
                                                        <i class="mdi-action-receipt prefix"></i>
                                                        <input name="AnnualAccomplishmentType" type="text" value="{{ $record->AnnualAccomplishmentType }}" data-parsley-required="true">
                                                        <label for="AnnualAccomplishmentType">چگونگی اجرات انجام شده طبق راپور سالانه</label>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-action-receipt prefix"></i>
                                                        <input name="AnAccomplishmentResons" type="text" value="{{ $record->AnAccomplishmentResons }}" data-parsley-required="true">
                                                        <label for="AnAccomplishmentResons">دلایل عدم اجرا</label>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-social-group prefix"></i>
                                                        <label for="OfficialEvaluationResult">نتایج ارزیابی توسط مامور ارزیابی شوند</label>
                                                        <br>
                                                        <form action="#">

                                                            <input name="group1" type="radio" id="test1" />
                                                            <label for="test1">1</label>

                                                            <input name="group1" type="radio" id="test2" />
                                                            <label for="test2">2</label>

                                                            <input name="group1" type="radio" id="test3" />
                                                            <label for="test3">3</label>

                                                            <input name="group1" type="radio" id="test4" />
                                                            <label for="test4">4</label>

                                                            <input name="group1" type="radio" id="test5" />
                                                            <label for="test5">5</label>

                                                        </form>

                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-social-group prefix"></i>
                                                        <label for="DirectManagerEvaluationResult">نتایج ارزیابی توسط آمر مستقیم</label>
                                                        <br>
                                                        <form action="#">

                                                            <input name="group1" type="radio" id="test6" />
                                                            <label for="test6">1</label>

                                                            <input name="group1" type="radio" id="test7" />
                                                            <label for="test7">2</label>

                                                            <input name="group1" type="radio" id="test8" />
                                                            <label for="test8">3</label>

                                                            <input name="group1" type="radio" id="test9" />
                                                            <label for="test9">4</label>

                                                            <input name="group1" type="radio" id="test10" />
                                                            <label for="test10">5</label>

                                                        </form>

                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-social-group prefix"></i>
                                                        <label for="HeadManagerEvaluationResult">نتایج ارزیابی توسط آمر مافوق</label>
                                                        <br>
                                                        <form action="#">

                                                            <input name="group1" type="radio" id="test11" />
                                                            <label for="test11">1</label>

                                                            <input name="group1" type="radio" id="test12" />
                                                            <label for="test12">2</label>

                                                            <input name="group1" type="radio" id="test13" />
                                                            <label for="test13">3</label>

                                                            <input name="group1" type="radio" id="test14" />
                                                            <label for="test14">4</label>

                                                            <input name="group1" type="radio" id="test15" />
                                                            <label for="test15">5</label>

                                                        </form>

                                                    </div>



                                                    <div class="input-field col s6">
                                                        <i class="mdi-hardware-keyboard prefix"></i>
                                                        <input name="TotalOfScore" type="text" value="{{ $record->TotalOfScore }}" data-parsley-required="true">
                                                        <label for="TotalOfScore">مجموع نمرات</label>
                                                    </div>

                                                    <div class="input-field col s12" align="right">
                                                        <ul id="task-card" class="collection with-header" align="right">
                                                            <li class="collection-header cyan">
                                                                <h5 class="task-card-title" align="right">:رهنمود نمره دهی پلان کار سالانه</h5>
                                                                <p >.هرگاه اجراآت مامور بالاتر از شصت فیصد تطبیق پلان باشد (از 17-25 نمره) در این صورت ارتقا به قدم مزد بالاتر</p>
                                                                <p >.هرگاه اجراآت مامور بالاتر از پنجاه الی شصت فیصد تطبیق پلان باشد (از 13-17 نمره) در این صورت دوام وظیفه درقدم موجود با آموزش های مرتبط به وظیفه</p>
                                                                <p >.هرگاه اجراآت مامور پاین تر از پنجاه فیصد تطبیق پلان باشد (از 12نمره و پاینتر از ان) در این صورت اعلان بست (در مطابقت باقانون کارکنان)</p>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="input-field col s12" align="right">
                                                        <ul id="task-card" class="collection with-header">
                                                            <li class="collection-header cyan">
                                                                <h5 class="task-card-title">نتیجه نهایی ارزیابی توسط امر ذیصلاح</h5>
                                                            </li>

                                                            <form action="#">
                                                                <p>
                                                                    <input name="group1" type="radio" id="test42" />
                                                                    <label for="test42">ارتقاع به قدم (مزد) بالاتر.</label>
                                                                </p>
                                                                <p>
                                                                    <input name="group1" type="radio" id="test43" />
                                                                    <label for="test43">دوام وظیفه درقدم موجود همرا با آموزش.</label>
                                                                </p>
                                                                <p>
                                                                    <input name="group1" type="radio" id="test44" />
                                                                    <label for="test44">اعلان بست.</label>
                                                                </p>
                                                            </form>
                                                            <br>
                                                            <div class="input-field col s6">
                                                                <i class="mdi-social-person prefix"></i>
                                                                <input name="OfficialName" type="text" value="{{ $record->OfficialName }}" data-parsley-required="true">
                                                                <label for="OfficialName">اسم</label>
                                                            </div>
                                                            <div class="input-field col s6">
                                                                <i class="mdi-action-schedule prefix"></i>
                                                                <input name="OfficialDate" type="text" value="{{ $record->OfficialDate }}" class="datepicker">
                                                                <label for="OfficialDate">تاریخ</label>
                                                            </div>

                                                        </ul>

                                                    </div>

                                                    <div class="input-field col s12" align="right">
                                                        <ul id="OfficialSatisfaction" class="collection with-header">
                                                            <li class="collection-header cyan">
                                                                <h5 class="task-card-title">قناعت یا عدم قناعت مامور ارزیابی شونده</h5>
                                                            </li>
                                                            <li>

                                                                <div class="col s12 m8 l9">
                                                                    <form action="#">
                                                                        <p>
                                                                            <input name="group2" type="radio" id="test41" />
                                                                            <label for="test41">قناعت دارم</label>
                                                                        </p>
                                                                        <p>
                                                                            <input name="group2" type="radio" id="test36" />
                                                                            <label for="test36">قناعت ندارم</label>
                                                                        </p>
                                                                    </form>

                                                                </div>

                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="input-field col s12" align="right">
                                                        <ul id="DirecteManagerAcceptance" class="collection with-header">
                                                            <li class="collection-header cyan">
                                                                <h5 class="task-card-title">تایید یا رد توسط آمر مستقیم</h5>
                                                            </li>
                                                            <li>

                                                                <div class="col s12 m8 l9">
                                                                    <form action="#">
                                                                        <p>
                                                                            <input name="group2" type="radio" id="test37" />
                                                                            <label for="test37">تایید</label>
                                                                        </p>
                                                                        <p>
                                                                            <input name="group2" type="radio" id="test38" />
                                                                            <label for="test38">رد</label>
                                                                        </p>
                                                                    </form>

                                                                </div>


                                                                <div class="input-field col s6">
                                                                    <i class="mdi-social-person prefix"></i>
                                                                    <input name="HeadManagerName" type="text" value="{{ $record->HeadManagerName }}" data-parsley-required="true">
                                                                    <label for="HeadManagerName">اسم آمر مستقیم</label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="input-field col s12" align="right">
                                                        <ul id="task-card" class="collection with-header">
                                                            <li class="collection-header cyan">
                                                                <h5 class="task-card-title">صفحه سوم: معیار های اضافی برای ارزیابی اجراآت سالانه مامورین بست های اول و دوم</h5>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="input-field col s12" align="center">
                                                        <ul id="task-card" class="collection with-header">
                                                            <li class="collection-header cyan">
                                                                <h5 class="task-card-title">معیار های اضافی</h5>
                                                                <p >.توانایی اداره ورهبری (مهارت کار در اداره تجزیه و تحلیل موضوعات مربوط به وظیفه</p>
                                                                <p >.مراقبت و نظارت از اجراآت کار کنان تحت اثر</p>
                                                                <p >.توانایی های تخنیکی (اداره پروژه های تخنیکی وعرضه خدمات مسلکی مربوط به وظیفه</p>
                                                                <p>مهارت ارتقاع بخشیدن ظرقیت کار کنان تحت اثر</p>
                                                                <p>شفافیت و حساب دهی در اجراآت</p>
                                                                <p>قدرت تصمیم گیری (بشکل فردی ویا جمعی + مفهمه با تاثیر)</p>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-social-group prefix"></i>
                                                        <label for="OfficialEvaluationResult">نتایج ارزیابی توسط مامور ارزیابی شوند</label>
                                                        <br>
                                                        <form action="#">

                                                            <input name="group1" type="radio" id="test16" />
                                                            <label for="test16">1</label>

                                                            <input name="group1" type="radio" id="test17" />
                                                            <label for="test17">2</label>

                                                            <input name="group1" type="radio" id="test18" />
                                                            <label for="test18">3</label>

                                                            <input name="group1" type="radio" id="test19" />
                                                            <label for="test19">4</label>

                                                            <input name="group1" type="radio" id="test20" />
                                                            <label for="test20">5</label>

                                                        </form>

                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-social-group prefix"></i>
                                                        <label for="DirectManagerEvaluationResult">نتایج ارزیابی توسط آمر مستقیم</label>
                                                        <br>
                                                        <form action="#">

                                                            <input name="group1" type="radio" id="test21" />
                                                            <label for="test21">1</label>

                                                            <input name="group1" type="radio" id="test22" />
                                                            <label for="test22">2</label>

                                                            <input name="group1" type="radio" id="test23" />
                                                            <label for="test23">3</label>

                                                            <input name="group1" type="radio" id="test24" />
                                                            <label for="test24">4</label>

                                                            <input name="group1" type="radio" id="test25" />
                                                            <label for="test25">5</label>

                                                        </form>

                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-social-group prefix"></i>
                                                        <label for="HeadManagerEvaluationResult">نتایج ارزیابی توسط آمر مافوق</label>
                                                        <br>
                                                        <form action="#">

                                                            <input name="group1" type="radio" id="test26" />
                                                            <label for="test26">1</label>

                                                            <input name="group1" type="radio" id="test27" />
                                                            <label for="test27">2</label>

                                                            <input name="group1" type="radio" id="test28" />
                                                            <label for="test28">3</label>

                                                            <input name="group1" type="radio" id="test29" />
                                                            <label for="test29">4</label>

                                                            <input name="group1" type="radio" id="test30" />
                                                            <label for="test30">5</label>

                                                        </form>

                                                    </div>

                                                    <div class="input-field col s12" align="right">
                                                        <ul id="task-card" class="collection with-header" align="right">
                                                            <li class="collection-header cyan">
                                                                <h5 class="task-card-title" align="right">:رهنمود نمره دهی معیار های اضافی مامورین</h5>
                                                                <p >.هرگاه اجراآت مامور بالاتر از شصت فیصد تطبیق پلان باشد (از 40 الی 55 نمره) در این صورت ارتقا به قدم مزد بالاتر</p>
                                                                <p >.هرگاه اجراآت مامور بالاتر از پنجاه الی شصت فیصد تطبیق پلان باشد (از 28 الی 39 نمره) در این صورت دوام وظیفه درقدم موجود با آموزش های مرتبط به وظیفه</p>
                                                                <p >.هرگاه اجراآت مامور پاین تر از پنجاه فیصد تطبیق پلان باشد (از 27 نمره و پاینتر از ان) در این صورت اعلان بست</p>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="input-field col s12" align="right">
                                                        <ul id="task-card" class="collection with-header">
                                                            <li class="collection-header cyan">
                                                                <h5 class="task-card-title">خلاصه نتایج ارزیابی اجراات مامورین بست های اول و دوم توسطه آمر ذیصلاح</h5>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-social-person prefix"></i>
                                                        <input name="OfficialName2" type="text" value="{{ $record->OfficialName2 }}" data-parsley-required="true">
                                                        <label for="OfficialName2">نمره پلان کار سالانه</label>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-social-person prefix"></i>
                                                        <input name="OfficialName3" type="text" value="{{ $record->OfficialName3 }}" data-parsley-required="true">
                                                        <label for="OfficialName3">نمره معیارهای اضافی</label>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-social-person prefix"></i>
                                                        <input name="OfficialName4" type="text" value="{{ $record->OfficialName4 }}" data-parsley-required="true">
                                                        <label for="OfficialName4">مجموع نمرات هردو بخش</label>
                                                    </div>

                                                    <div class="input-field col s12" align="right">
                                                        <ul id="task-card" class="collection with-header">
                                                            <li class="collection-header cyan">
                                                                <h5 class="task-card-title">نتیجه نهایی ارزیابی</h5>
                                                            </li>

                                                            <form action="#">
                                                                <p>
                                                                    <input name="group1" type="radio" id="test42" />
                                                                    <label for="test42">ارتقاع به قدم (مزد) بالاتر.</label>
                                                                </p>
                                                                <p>
                                                                    <input name="group1" type="radio" id="test43" />
                                                                    <label for="test43">دوام وظیفه درقدم موجود همرا با آموزش.</label>
                                                                </p>
                                                                <p>
                                                                    <input name="group1" type="radio" id="test44" />
                                                                    <label for="test44">اعلان بست.</label>
                                                                </p>
                                                            </form>
                                                        </ul>
                                                    </div>

                                                    <div class="input-field col s12" align="right">
                                                        <ul id="OfficialSatisfaction" class="collection with-header">
                                                            <li class="collection-header cyan">
                                                                <h5 class="task-card-title">قناعت یا عدم قناعت مامور ارزیابی شونده</h5>
                                                            </li>
                                                            <li>

                                                                <div class="col s12 m8 l9">
                                                                    <form action="#">
                                                                        <p>
                                                                            <input name="group2" type="radio" id="test31" />
                                                                            <label for="test31">قناعت دارم</label>
                                                                        </p>
                                                                        <p>
                                                                            <input name="group2" type="radio" id="test32" />
                                                                            <label for="test32">قناعت ندارم</label>
                                                                        </p>
                                                                    </form>

                                                                </div>

                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="input-field col s12" align="right">
                                                        <ul id="DirecteManagerAcceptance" class="collection with-header">
                                                            <li class="collection-header cyan">
                                                                <h5 class="task-card-title">تایید یا رد توسط آمر مستقیم</h5>
                                                            </li>
                                                            <li>

                                                                <div class="col s12 m8 l9">
                                                                    <form action="#">
                                                                        <p>
                                                                            <input name="group2" type="radio" id="test33" />
                                                                            <label for="test33">تایید</label>
                                                                        </p>
                                                                        <p>
                                                                            <input name="group2" type="radio" id="test34" />
                                                                            <label for="test34">رد</label>
                                                                        </p>
                                                                    </form>

                                                                </div>


                                                                <div class="input-field col s6">
                                                                    <i class="mdi-social-person prefix"></i>
                                                                    <input name="HeadManagerName1" type="text" value="{{ $record->HeadManagerName1 }}" data-parsley-required="true">
                                                                    <label for="HeadManagerName1">اسم آمر مستقیم</label>
                                                                </div>

                                                                <div class="input-field col s6">
                                                                    <i class="mdi-social-person prefix"></i>
                                                                    <input name="HeadManagerName2" type="text" value="{{ $record->HeadManagerName2 }}" data-parsley-required="true">
                                                                    <label for="HeadManagerName2">اسم آمر مافوق</label>
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


