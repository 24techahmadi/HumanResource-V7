@extends('layouts.EvaluationLayout')

@section('title')
    HR | فورمه تقاعد

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
                        <input type="text" value="{{$record->id}}" class="search-out-text">
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
                            <h5 class="breadcrumbs-title">فورم ها</h5>
                            <ol class="breadcrumb">
                                <li><a href="index-2.html">دشبورد</a>
                                </li>
                                <li><a href="#">فورم ها</a>
                                </li>
                                <li class="active">فورمه تقاعد</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!--breadcrumbs end-->
            @section('content')
                <h1 class="header" align="right">فورمه تقاعد</h1>

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
                                        <input name="id" type="text" value="{{$record->id}}" data-parsley-required="true">
                                        <label for="id">نمبر مسلسل</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-perm-identity prefix"></i>
                                        <input name="AutoNumber" type="text" value="{{$record->AutoNumber}}" data-parsley-required="true">
                                        <label for="AutoNumber">نمبر مسلسل</label>
                                    </div>

                                    <div class="input-field col s12" align="right">
                                        <ul id="task-card" class="collection with-header">
                                            <li >
                                                <h6 >این فورمه توسط کارکن سوق به تقاعد ویا وکیل شرعی به همکاری کارکن ریاست کادروپرسونل ومنابع بشری در دو نسخه تهیه می گردد.
                                                    کاپی اصلی آن به ریاست عمومی خزاینه تقاعد ارسال ویک کاپی آن توسط ریاست عمومی خزینه تقاعد مهر شده و دربخش منابع بشری صم بقیه اسناد حفط و نهگداری میگردد.
                                                    درصورت موجودیت تسهیلات لازم این فورمه به شکل الکترونیکی ارایه میگردد و نمبر مخصوص ثبت برایش داده می شود.
                                                    لطفا فورمه های HRF-05,HRF-04,HRF-06 را بر اساس ضرورت ضمیمه نمایید.</h6>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="input-field col s12">
                                        <input name="Validate" checked value="True" type="checkbox" id="test5" />
                                        <label for="test5">درصور تیکه این فورمه تصحیح باشد لطفا اینجا را نشانی نموده</label>
                                    </div> <br />

                                    <div class="input-field col s6">
                                        <i class="mdi-action-schedule prefix"></i>
                                        <input name="OrignalNo" type="text" data-parsley-required="false">
                                        <label for="OrignalNo">نمبر مسلسل فورمه اصلی را اریه دارید HRF-03</label>
                                    </div>


                                    <div class="input-field col s6">
                                        <i class="mdi-action-schedule prefix"></i>
                                        <input name="Date" type="text" value="{{$record->Date}}" class="datepicker" data-parsley-required="true">
                                        <label for="Date">تاریخ</label>
                                    </div>

                                    <div class="input-field col s12" align="right">
                                        <ul id="task-card" class="collection with-header">
                                            <li class="collection-header cyan">
                                                <h5 class="task-card-title">بخش 1: معلومات در مورد اداره</h5>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-perm-identity prefix"></i>
                                        <input name="OrgCode" type="text" value="{{$record->OrgCode}}" data-parsley-required="true">
                                        <label for="OrgCode">کود اداره</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-person prefix"></i>
                                        <input name="OrgName" type="text" value="{{$record->OrgName}}" data-parsley-required="true">
                                        <label for="OrgName">اداره</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-person prefix"></i>
                                        <input name="Reyasat" type="text" value="{{$record->Reyasat}}" data-parsley-required="true">
                                        <label for="Reyasat">ریاست/آمریت</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-person prefix"></i>
                                        <input name="Province" type="text" value="{{$record->Province}}" data-parsley-required="true">
                                        <label for="Province">ولایت</label>
                                    </div>

                                    <div class="input-field col s12" align="right">
                                        <ul id="task-card" class="collection with-header">
                                            <li class="collection-header cyan">
                                                <h5 class="task-card-title">بخش 2: معلومات در مورد کارکن</h5>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-perm-identity prefix"></i>
                                        <input name="Photo" type="text" value="{{$record->Photo}}" data-parsley-required="true">
                                        <label for="Photo">عکس کارکن</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-perm-identity prefix"></i>
                                        <input name="EmpCardNo" type="text" value="{{$record->EmpCardNo}}" data-parsley-required="true">
                                        <label for="EmpCardNo">نمبر کارت کارکن</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-perm-identity prefix"></i>
                                        <input name="Rutba" type="text" value="{{$record->Rutba}}" data-parsley-required="true">
                                        <label for="Rutba">رتبه/درجه</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-person prefix"></i>
                                        <input name="EmpName" type="text" value="{{$record->EmpName}}" data-parsley-required="true">
                                        <label for="EmpName">اسم</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-person prefix"></i>
                                        <input name="LastName" type="text" value="{{$record->LastName}}" data-parsley-required="true">
                                        <label for="LastName">تخلص</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-person prefix"></i>
                                        <input name="FatherName" type="text" value="{{$record->FatherName}}" data-parsley-required="true">
                                        <label for="FatherName">ولد</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-person prefix"></i>
                                        <input name="GrandfatherName" type="text" value="{{$record->GrandfatherName}}" data-parsley-required="true">
                                        <label for="GrandfatherName">ولدیت</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-perm-identity prefix"></i>
                                        <input name="TazkeraNo" type="text" value="{{$record->TazkeraNo}}" data-parsley-required="true">
                                        <label for="TazkeraNo">نمبر تذکره</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-person prefix"></i>
                                        <input name="Juld" type="text" value="{{$record->Juld}}" data-parsley-required="true">
                                        <label for="Juld">جلد</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-person prefix"></i>
                                        <input name="Page" type="text" value="{{$record->Page}}" data-parsley-required="true">
                                        <label for="Page">صفحه</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-schedule prefix"></i>
                                        <input name="BirthDate" type="text" value="{{$record->BirthDate}}" class="datepicker" data-parsley-required="true">
                                        <label for="BirthDate">تاریخ تولد</label>
                                    </div>

                                    {{--<div class="input-field col s6">--}}
                                        {{--<i class="mdi-action-work prefix"></i>--}}
                                        {{--<label for="Gender" name="Gender">جنس</label>&nbsp;&nbsp;&nbsp;--}}
                                        {{--<input name="Gender" checked value="مرد" type="radio" id="test1" />--}}
                                        {{--<label for="test1">مرد</label>--}}
                                        {{--<input name="Gender" value="زن" type="radio" id="test2" />--}}
                                        {{--<label for="test2">زن</label>--}}
                                    {{--</div>--}}


                                    <div class="input-field col s6">
                                        <i class="mdi-action-schedule prefix"></i>
                                        <input name="Gender" type="text" value="" class="datepicker" data-parsley-required="true">
                                        <label for="Gender">جنسیت: {{$record->Gender}}</label>
                                    </div>

                                    <div class="input-field col s12" align="right">
                                        <ul id="task-card" class="collection with-header">
                                            <li class="collection-header cyan">
                                                <h5 class="task-card-title">بخش 3: معلومات در مورد وکیل شرعی/نماینده قانونی در صورت عدم موجودیت از این بخش انصراف نمایید</h5>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-perm-identity prefix"></i>
                                        <input name="RepresentiativePhoto" type="text" value="{{$record->RepresentiativePhoto}}" data-parsley-required="true">
                                        <label for="RepresentiativePhoto">عکس وکیل/نماینده</label>
                                    </div>


                                    <div class="input-field col s6">
                                        <i class="mdi-action-perm-identity prefix"></i>
                                        <input name="RepRelation" type="text" value="{{$record->RepRelation}}" data-parsley-required="true">
                                        <label for="RepRelation">رابطه با کارکن:</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-person prefix"></i>
                                        <input name="RepName" type="text" value="{{$record->RepName}}" data-parsley-required="true">
                                        <label for="RepName">اسم</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-person prefix"></i>
                                        <input name="RepLastName" type="text" value="{{$record->RepLastName}}" data-parsley-required="true">
                                        <label for="RepLastName">تخلص</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-person prefix"></i>
                                        <input name="RepFatherName" type="text" value="{{$record->RepFatherName}}" data-parsley-required="true">
                                        <label for="RepFatherName">ولد</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-person prefix"></i>
                                        <input name="RepGrandfatherName" type="text" value="{{$record->RepGrandfatherName}}" data-parsley-required="true">
                                        <label for="RepGrandfatherName">ولدیت</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-perm-identity prefix"></i>
                                        <input name="RepTazkeraNumber" type="text" value="{{$record->RepTazkeraNumber}}" data-parsley-required="true">
                                        <label for="RepTazkeraNumber">نمبر تذکره</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-person prefix"></i>
                                        <input name="RepTazkeraJuld" type="text" value="{{$record->RepTazkeraJuld}}" data-parsley-required="true">
                                        <label for="RepTazkeraJuld">جلد</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-person prefix"></i>
                                        <input name="RepTazkeraPage" type="text" value="{{$record->RepTazkeraPage}}" data-parsley-required="true">
                                        <label for="RepTazkeraPage">صفحه</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-schedule prefix"></i>
                                        <input name="RepBirthDate" type="text" value="{{$record->RepBirthDate}}" class="datepicker" data-parsley-required="true">
                                        <label for="RepBirthDate">تاریخ تولد</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-person prefix"></i>
                                        <input name="RepKhatNo" type="text" value="{{$record->RepKhatNo}}" data-parsley-required="true">
                                        <label for="RepKhatNo">نمبر وکالت خط</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-schedule prefix"></i>
                                        <input name="RepGender" type="text" value="" class="datepicker" data-parsley-required="true">
                                        <label for="RepGender">جنسیت: {{$record->RepGender}}</label>
                                    </div>


                                    <div class="input-field col s12" align="right">
                                        <ul id="task-card" class="collection with-header">
                                            <li class="collection-header cyan">
                                                <h5 class="task-card-title">بخش 4: معلومات درمورد تماس با درخواست کننده کارکن یابازماندگان وکیل شرعی/نماینده قانونی در مطابقت بادرخواست تقاعد</h5>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-schedule prefix"></i>
                                        <input name="RequesterCurrentAddress" type="text" value="{{$record->RequesterCurrentAddress}}" class="datepicker" data-parsley-required="true">
                                        <label for="RequesterCurrentAddress">آدرس فعلی</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-content-archive prefix"></i>
                                        <input name="ReqDestrict" type="text" value="{{$record->ReqDestrict}}" data-parsley-required="true">
                                        <label for="ReqDestrict">ناحیه/ولسوالی</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-content-archive prefix"></i>
                                        <input name="ReqProvince" type="text" value="{{$record->ReqProvince}}" data-parsley-required="true">
                                        <label for="ReqProvince">ولایت</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-content-archive prefix"></i>
                                        <input name="ReqPhone" type="text" value="{{$record->ReqPhone}}" data-parsley-required="true">
                                        <label for="ReqPhone">نمبر تیلیفون</label>
                                    </div>

                                    <div class="input-field col s12" align="right">
                                        <ul id="task-card" class="collection with-header">
                                            <li class="collection-header cyan">
                                                <h5 class="task-card-title">بخش 5: زبان مورد نظر جهت مکاتبه رسمی باریاست عمومی خزینه تقاعد</h5>
                                            </li>
                                        </ul>
                                    </div> <br />

                                    <div class="input-field col s6">
                                        <i class="mdi-action-schedule prefix"></i>
                                        <input name="SimpleLanguage" type="text" value="" data-parsley-required="true">
                                        <label for="SimpleLanguage">زبان : {{$record->SimpleLanguage}}</label>
                                    </div>


                                    <div class="input-field col s12" align="right">
                                        <ul id="task-card" class="collection with-header">
                                            <li class="collection-header cyan">
                                                <h5 class="task-card-title">بخش 6: مقرره ونوع تقاعد</h5>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="input-field col s6">

                                        <form action="#" name="Moqarara">
                                            <input name="group1" type="radio" id="test7" />
                                            <label for="test7">1378/791 مقرره تنظیم حقوق تقاعد کارکنان خدمات ملکی امارت اسلامی افغانستان شماره </label>
                                            <input name="group1" type="radio" id="test8" />
                                            <label for="test8">1388/992 مقرره تنظیم حقوق تقاعد کارکنان خدمات ملکی شماره</label>
                                            <input name="group1" type="radio" id="test9" />
                                            <label for="test9">1389/1016 مقرره تنظیم حقوق تقاعد افسران بریدملان وساتنمنان شماره</label>
                                        </form>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-content-archive prefix"></i>
                                        <input name="OtherDocumentation" type="text" value="{{$record->OtherDocumentation}}" data-parsley-required="true">
                                        <label for="OtherDocumentation">سایر اسنادتقنینی لطفا مشخص نماید</label>
                                    </div>



                                    <div class="input-field col s6">

                                        <form action="#" name="RetiredType">
                                            <input name="group1" type="radio" id="test10" />
                                            <label for="test10">1: تقاعد عادی</label>
                                            <input name="group1" type="radio" id="test11" />
                                            <label for="test11">2:تقاعدقبل از وقت</label>
                                            <input name="group1" type="radio" id="test12" />
                                            <label for="test12">3:تقاعد موجل</label>
                                            <input name="group1" type="radio" id="test13" />
                                            <label for="test13">4:انفصال/تنقیص تشکیلاتی</label>
                                            <input name="group1" type="radio" id="test14" />
                                            <label for="test14">5:معلولیت عادی</label>
                                            <input name="group1" type="radio" id="test15" />
                                            <label for="test15">6:معلولیت مرتبط به کار</label>
                                            <input name="group1" type="radio" id="test16" />
                                            <label for="test16">7:فوت عادی</label>
                                            <input name="group1" type="radio" id="test17" />
                                            <label for="test17">8:فوت مرتبط به کار/درجریان وظیفه</label>
                                            <input name="group1" type="radio" id="test18" />
                                            <label for="test18">9:مفقودیت</label>

                                        </form>
                                    </div>


                                    <div class="input-field col s12" align="right">
                                        <ul id="task-card" class="collection with-header">
                                            <li class="collection-header cyan">
                                                <h5 class="task-card-title">بخش 7:تاریخ تقاعد</h5>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-schedule prefix"></i>
                                        <input name="RetiredDate" type="text" value="{{$record->RetiredDate}}" class="datepicker" data-parsley-required="true">
                                        <label for="RetiredDate">تاریخ تقاعد</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-schedule prefix"></i>
                                        <input name="RetiredNumber" type="text" value="{{$record->RetiredNumber}}" data-parsley-required="true">
                                        <label for="RetiredNumber">نمبر امریه تقاعد/انفصال</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-work prefix"></i>
                                        <label name="LikeToRetired">آیا میخواهید حقوق تقاعد خویش را به تعویق اندازید؟</label>
                                        <br>
                                        <form action="#">
                                            <input name="group1" type="radio" id="test19" />
                                            <label for="test19">نخیر</label>
                                            <input name="group1" type="radio" id="test20" />
                                            <label for="test20">بلی اجباری</label>
                                            <input name="group1" type="radio" id="test21" />
                                            <label for="test21">بلی داواطلبانه</label>

                                        </form>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-schedule prefix"></i>
                                        <input name="IfyesdDate" type="text" value="{{$record->IfyesdDate}}" class="datepicker" data-parsley-required="true">
                                        <label for="IfyesdDate">درصورت تعویق تاریخ درخواست</label>
                                    </div>

                                    <div class="input-field col s12" align="right">
                                        <ul id="task-card" class="collection with-header">
                                            <li class="collection-header cyan">
                                                <h5 class="task-card-title">بخش 8: باز ماندگان فهرست 5 نفر از بازماندگان کارکن </h5>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="input-field col s6">
                                        <i class="mdi-social-person prefix"></i>
                                        <input name="SurviverName" type="text" value="{{$record->SurviverName}}" data-parsley-required="true">
                                        <label for="SurviverName">اسم</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-person prefix"></i>
                                        <input name="SurLastName" type="text" value="{{$record->SurLastName}}" data-parsley-required="true">
                                        <label for="SurLastName">تخلص</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-person prefix"></i>
                                        <input name="SurFatherName" type="text" value="{{$record->SurFatherName}}" data-parsley-required="true">
                                        <label for="SurFatherName">ولد</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-person prefix"></i>
                                        <input name="SurRelation" type="text" value="{{$record->SurRelation}}" data-parsley-required="true">
                                        <label for="SurRelation">رابطه</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-person prefix"></i>
                                        <input name="SurAge" type="text" value="{{$record->SurAge}}" data-parsley-required="true">
                                        <label for="SurAge">سن</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-person prefix"></i>
                                        <input name="SurStatues" type="text" value="{{$record->SurStatues}}" data-parsley-required="true" data-parsley-required="true">
                                        <label for="SurStatues">حالت مدنی</label>
                                    </div>

                                    <div class="input-field col s12" align="right">
                                        <ul id="task-card" class="collection with-header">
                                            <li class="collection-header cyan">
                                                <h5 class="task-card-title">بخش 9: تایید و تصدیق</h5>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="input-field col s12" align="right">
                                        <ul id="task-card" class="collection with-header">
                                            <li >
                                                <h5 >بحیث قناعت</h5>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-perm-identity prefix"></i>
                                        <input name="JusName" type="text" value="{{$record->JusName}}" data-parsley-required="true">
                                        <label for="JusName">اسم</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-perm-identity prefix"></i>
                                        <input name="JusWorkName" type="text" value="{{$record->JusWorkName}}" data-parsley-required="true">
                                        <label for="JusWorkName">کارکن/وکیل شرعی</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-perm-identity prefix"></i>
                                        <input name="JusprofisionalName" type="text" value="{{$record->JusprofisionalName}}" data-parsley-required="true">
                                        <label for="JusprofisionalkName">کارکن کدر پرسونل/منابع بشری</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-perm-identity prefix"></i>
                                        <input name="JusheadkName" type="text" value="{{$record->JusheadkName}}" data-parsley-required="true">
                                        <label for="JusheadkName">ریس/آمرکدر وپرسونل/منابع بشری</label>
                                    </div>

                                    <div class="input-field col s12" align="right">
                                        <ul id="task-card" class="collection with-header">
                                            <li class="collection-header cyan">
                                                <h5 class="task-card-title">بخش 10: تسلیم دهی/واگذاری اسناد درخواست تقاعد</h5>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-schedule prefix"></i>
                                        <input name="DocDate" type="text" value="{{$record->DocDate}}" class="datepicker" data-parsley-required="true">
                                        <label for="DocDate">تاریخ تسلیم دهی</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-perm-identity prefix"></i>
                                        <input name="DocCodeNumber" type="text" value="{{$record->DocCodeNumber}}" data-parsley-required="true">
                                        <label for="DocCodeNumber">نمبر تثبیت</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-perm-identity prefix"></i>
                                        <input name="DocExportNumber" type="text" value="{{$record->DocExportNumber}}" data-parsley-required="true">
                                        <label for="DocExportNumber">نمبر صدور</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-perm-identity prefix"></i>
                                        <input name="HRF04Number" type="text" value="{{$record->HRF04Number}}" data-parsley-required="true">
                                        <label for="HRF04Number">نمبر فورم مربوط به HRF-04</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-perm-identity prefix"></i>
                                        <input name="HRF05Number" type="text" value="{{$record->HRF05Number}}" data-parsley-required="true">
                                        <label for="HRF05Number">نمبر فورم مربوط به HRF-05</label>
                                    </div>


                                    <div class="input-field col s12">
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

        <form method="POST" action="{{ route('retired.update',['id'=>$record]) }}" accept-charset="utf-8" class="col s11 right" data-parsley-validate>
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
                            <input name="id" type="text" value="{{$record->id}}" data-parsley-required="true">
                            <label for="id">نمبر مسلسل</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-action-perm-identity prefix"></i>
                            <input name="AutoNumber" type="text" value="{{$record->AutoNumber}}" data-parsley-required="true">
                            <label for="AutoNumber">نمبر مسلسل</label>
                        </div>

                        <div class="input-field col s12" align="right">
                            <ul id="task-card" class="collection with-header">
                                <li >
                                    <h6 >این فورمه توسط کارکن سوق به تقاعد ویا وکیل شرعی به همکاری کارکن ریاست کادروپرسونل ومنابع بشری در دو نسخه تهیه می گردد.
                                        کاپی اصلی آن به ریاست عمومی خزاینه تقاعد ارسال ویک کاپی آن توسط ریاست عمومی خزینه تقاعد مهر شده و دربخش منابع بشری صم بقیه اسناد حفط و نهگداری میگردد.
                                        درصورت موجودیت تسهیلات لازم این فورمه به شکل الکترونیکی ارایه میگردد و نمبر مخصوص ثبت برایش داده می شود.
                                        لطفا فورمه های HRF-05,HRF-04,HRF-06 را بر اساس ضرورت ضمیمه نمایید.</h6>
                                </li>
                            </ul>
                        </div>

                        <div class="input-field col s12">
                            <p> درصور تیکه این فورمه تصحیح باشد لطفا اینجا را نشانی نموده
                                <input name="group1" type="checkbox" id="test6" />
                                <label for="Validate"></label>نمبر مسلسل فورمه اصلی را اریه دارید HRF-03</p>
                            <input name="OrignalNo" type="text" value="{{$record->OrignalNo}}" data-parsley-required="true">
                            <label for="OrignalNo"></label>
                        </div>


                        <div class="input-field col s6">
                            <i class="mdi-action-schedule prefix"></i>
                            <input name="Date" type="text" value="{{$record->Date}}" class="datepicker" data-parsley-required="true">
                            <label for="Date">تاریخ</label>
                        </div>

                        <div class="input-field col s12" align="right">
                            <ul id="task-card" class="collection with-header">
                                <li class="collection-header cyan">
                                    <h5 class="task-card-title">بخش 1: معلومات در مورد اداره</h5>
                                </li>
                            </ul>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-action-perm-identity prefix"></i>
                            <input name="OrgCode" type="text" value="{{$record->OrgCode}}" data-parsley-required="true">
                            <label for="OrgCode">کود اداره</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-social-person prefix"></i>
                            <input name="OrgName" type="text" value="{{$record->OrgName}}" data-parsley-required="true">
                            <label for="OrgName">اداره</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-social-person prefix"></i>
                            <input name="Reyasat" type="text" value="{{$record->Reyasat}}" data-parsley-required="true">
                            <label for="Reyasat">ریاست/آمریت</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-social-person prefix"></i>
                            <input name="Province" type="text" value="{{$record->Province}}" data-parsley-required="true">
                            <label for="Province">ولایت</label>
                        </div>

                        <div class="input-field col s12" align="right">
                            <ul id="task-card" class="collection with-header">
                                <li class="collection-header cyan">
                                    <h5 class="task-card-title">بخش 2: معلومات در مورد کارکن</h5>
                                </li>
                            </ul>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-action-perm-identity prefix"></i>
                            <input name="Photo" type="text" value="{{$record->Photo}}" data-parsley-required="true">
                            <label for="Photo">عکس کارکن</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-action-perm-identity prefix"></i>
                            <input name="EmpCardNo" type="text" value="{{$record->EmpCardNo}}" data-parsley-required="true">
                            <label for="EmpCardNo">نمبر کارت کارکن</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-action-perm-identity prefix"></i>
                            <input name="Rutba" type="text" value="{{$record->Rutba}}" data-parsley-required="true">
                            <label for="Rutba">رتبه/درجه</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-social-person prefix"></i>
                            <input name="EmpName" type="text" value="{{$record->EmpName}}" data-parsley-required="true">
                            <label for="EmpName">اسم</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-social-person prefix"></i>
                            <input name="LastName" type="text" value="{{$record->LastName}}" data-parsley-required="true">
                            <label for="LastName">تخلص</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-social-person prefix"></i>
                            <input name="FatherName" type="text" value="{{$record->FatherName}}" data-parsley-required="true">
                            <label for="FatherName">ولد</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-social-person prefix"></i>
                            <input name="GrandfatherName" type="text" value="{{$record->GrandfatherName}}" data-parsley-required="true">
                            <label for="GrandfatherName">ولدیت</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-action-perm-identity prefix"></i>
                            <input name="TazkeraNo" type="text" value="{{$record->TazkeraNo}}" data-parsley-required="true">
                            <label for="TazkeraNo">نمبر تذکره</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-social-person prefix"></i>
                            <input name="Juld" type="text" value="{{$record->Juld}}" data-parsley-required="true">
                            <label for="Juld">جلد</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-social-person prefix"></i>
                            <input name="Page" type="text" value="{{$record->Page}}" data-parsley-required="true">
                            <label for="Page">صفحه</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-action-schedule prefix"></i>
                            <input name="BirthDate" type="text" value="{{$record->BirthDate}}" class="datepicker" data-parsley-required="true">
                            <label for="BirthDate">تاریخ تولد</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-action-work prefix"></i>
                            <label for="Gender" name="Gender">جنس</label>
                            <br>
                            <form action="#">

                                <input name="group1" type="radio" id="test1" />
                                <label for="test1">مرد</label>


                                <input name="group1" type="radio" id="test2" />
                                <label for="test2">زن</label>

                            </form>
                        </div>


                        <div class="input-field col s12" align="right">
                            <ul id="task-card" class="collection with-header">
                                <li class="collection-header cyan">
                                    <h5 class="task-card-title">بخش 3: معلومات در مورد وکیل شرعی/نماینده قانونی در صورت عدم موجودیت از این بخش انصراف نمایید</h5>
                                </li>
                            </ul>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-action-perm-identity prefix"></i>
                            <input name="RepresentiativePhoto" type="text" value="{{$record->RepresentiativePhoto}}" data-parsley-required="true">
                            <label for="RepresentiativePhoto">عکس وکیل/نماینده</label>
                        </div>


                        <div class="input-field col s6">
                            <i class="mdi-action-perm-identity prefix"></i>
                            <input name="RepRelation" type="text" value="{{$record->RepRelation}}" data-parsley-required="true">
                            <label for="RepRelation">رابطه با کارکن:</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-social-person prefix"></i>
                            <input name="RepName" type="text" value="{{$record->RepName}}" data-parsley-required="true">
                            <label for="RepName">اسم</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-social-person prefix"></i>
                            <input name="RepLastName" type="text" value="{{$record->RepLastName}}" data-parsley-required="true">
                            <label for="RepLastName">تخلص</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-social-person prefix"></i>
                            <input name="RepFatherName" type="text" value="{{$record->RepFatherName}}" data-parsley-required="true">
                            <label for="RepFatherName">ولد</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-social-person prefix"></i>
                            <input name="RepGrandfatherName" type="text" value="{{$record->RepGrandfatherName}}" data-parsley-required="true">
                            <label for="RepGrandfatherName">ولدیت</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-action-perm-identity prefix"></i>
                            <input name="RepTazkeraNumber" type="text" value="{{$record->RepTazkeraNumber}}" data-parsley-required="true">
                            <label for="RepTazkeraNumber">نمبر تذکره</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-social-person prefix"></i>
                            <input name="RepTazkeraJuld" type="text" value="{{$record->RepTazkeraJuld}}" data-parsley-required="true">
                            <label for="RepTazkeraJuld">جلد</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-social-person prefix"></i>
                            <input name="RepTazkeraPage" type="text" value="{{$record->RepTazkeraPage}}" data-parsley-required="true">
                            <label for="RepTazkeraPage">صفحه</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-action-schedule prefix"></i>
                            <input name="RepBirthDate" type="text" value="{{$record->RepBirthDate}}" class="datepicker" data-parsley-required="true">
                            <label for="RepBirthDate">تاریخ تولد</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-social-person prefix"></i>
                            <input name="RepKhatNo" type="text" value="{{$record->RepKhatNo}}" data-parsley-required="true">
                            <label for="RepKhatNo">نمبر وکالت خط</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-action-work prefix"></i>
                            <label for="RepGender">جنس</label>
                            <br>
                            <form action="#">

                                <input name="group1" type="radio" id="test3" />
                                <label for="test3">مرد</label>


                                <input name="group1" type="radio" id="test4" />
                                <label for="test4">زن</label>

                            </form>
                        </div>


                        <div class="input-field col s12" align="right">
                            <ul id="task-card" class="collection with-header">
                                <li class="collection-header cyan">
                                    <h5 class="task-card-title">بخش 4: معلومات درمورد تماس با درخواست کننده کارکن یابازماندگان وکیل شرعی/نماینده قانونی در مطابقت بادرخواست تقاعد</h5>
                                </li>
                            </ul>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-action-schedule prefix"></i>
                            <input name="RequesterCurrentAddress" type="text" value="{{$record->RequesterCurrentAddress}}" class="datepicker" data-parsley-required="true">
                            <label for="RequesterCurrentAddress">آدرس فعلی</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-content-archive prefix"></i>
                            <input name="ReqDestrict" type="text" value="{{$record->ReqDestrict}}" data-parsley-required="true">
                            <label for="ReqDestrict">ناحیه/ولسوالی</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-content-archive prefix"></i>
                            <input name="ReqProvince" type="text" value="{{$record->ReqProvince}}" data-parsley-required="true">
                            <label for="ReqProvince">ولایت</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-content-archive prefix"></i>
                            <input name="ReqPhone" type="text" value="{{$record->ReqPhone}}" data-parsley-required="true">
                            <label for="ReqPhone">نمبر تیلیفون</label>
                        </div>

                        <div class="input-field col s12" align="right">
                            <ul id="task-card" class="collection with-header">
                                <li class="collection-header cyan">
                                    <h5 class="task-card-title">بخش 5: زبان مورد نظر جهت مکاتبه رسمی باریاست عمومی خزینه تقاعد</h5>
                                </li>
                            </ul>
                        </div> <br />

                        <div class="input-field col s6">
                            <form action="#" name="SimpleLanguage">

                                <input name="group2" type="radio" id="dari" />
                                <label for="dari">دری</label>


                                <input name="group2" type="radio" id="pashto" />
                                <label for="pashto">پشتو</label>

                            </form>
                        </div>


                        <div class="input-field col s12" align="right">
                            <ul id="task-card" class="collection with-header">
                                <li class="collection-header cyan">
                                    <h5 class="task-card-title">بخش 6: مقرره ونوع تقاعد</h5>
                                </li>
                            </ul>
                        </div>

                        <div class="input-field col s6">

                            <form action="#" name="Moqarara">
                                <input name="group1" type="radio" id="test7" />
                                <label for="test7">1378/791 مقرره تنظیم حقوق تقاعد کارکنان خدمات ملکی امارت اسلامی افغانستان شماره </label>
                                <input name="group1" type="radio" id="test8" />
                                <label for="test8">1388/992 مقرره تنظیم حقوق تقاعد کارکنان خدمات ملکی شماره</label>
                                <input name="group1" type="radio" id="test9" />
                                <label for="test9">1389/1016 مقرره تنظیم حقوق تقاعد افسران بریدملان وساتنمنان شماره</label>
                            </form>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-content-archive prefix"></i>
                            <input name="OtherDocumentation" type="text" value="{{$record->OtherDocumentation}}" data-parsley-required="true">
                            <label for="OtherDocumentation">سایر اسنادتقنینی لطفا مشخص نماید</label>
                        </div>



                        <div class="input-field col s6">

                            <form action="#" name="RetiredType">
                                <input name="group1" type="radio" id="test10" />
                                <label for="test10">1: تقاعد عادی</label>
                                <input name="group1" type="radio" id="test11" />
                                <label for="test11">2:تقاعدقبل از وقت</label>
                                <input name="group1" type="radio" id="test12" />
                                <label for="test12">3:تقاعد موجل</label>
                                <input name="group1" type="radio" id="test13" />
                                <label for="test13">4:انفصال/تنقیص تشکیلاتی</label>
                                <input name="group1" type="radio" id="test14" />
                                <label for="test14">5:معلولیت عادی</label>
                                <input name="group1" type="radio" id="test15" />
                                <label for="test15">6:معلولیت مرتبط به کار</label>
                                <input name="group1" type="radio" id="test16" />
                                <label for="test16">7:فوت عادی</label>
                                <input name="group1" type="radio" id="test17" />
                                <label for="test17">8:فوت مرتبط به کار/درجریان وظیفه</label>
                                <input name="group1" type="radio" id="test18" />
                                <label for="test18">9:مفقودیت</label>

                            </form>
                        </div>


                        <div class="input-field col s12" align="right">
                            <ul id="task-card" class="collection with-header">
                                <li class="collection-header cyan">
                                    <h5 class="task-card-title">بخش 7:تاریخ تقاعد</h5>
                                </li>
                            </ul>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-action-schedule prefix"></i>
                            <input name="RetiredDate" type="text" value="{{$record->RetiredDate}}" class="datepicker" data-parsley-required="true">
                            <label for="RetiredDate">تاریخ تقاعد</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-action-schedule prefix"></i>
                            <input name="RetiredNumber" type="text" value="{{$record->RetiredNumber}}" data-parsley-required="true">
                            <label for="RetiredNumber">نمبر امریه تقاعد/انفصال</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-action-work prefix"></i>
                            <label name="LikeToRetired">آیا میخواهید حقوق تقاعد خویش را به تعویق اندازید؟</label>
                            <br>
                            <form action="#">
                                <input name="group1" type="radio" id="test19" />
                                <label for="test19">نخیر</label>
                                <input name="group1" type="radio" id="test20" />
                                <label for="test20">بلی اجباری</label>
                                <input name="group1" type="radio" id="test21" />
                                <label for="test21">بلی داواطلبانه</label>

                            </form>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-action-schedule prefix"></i>
                            <input name="IfyesdDate" type="text" value="{{$record->IfyesdDate}}" class="datepicker" data-parsley-required="true">
                            <label for="IfyesdDate">درصورت تعویق تاریخ درخواست</label>
                        </div>

                        <div class="input-field col s12" align="right">
                            <ul id="task-card" class="collection with-header">
                                <li class="collection-header cyan">
                                    <h5 class="task-card-title">بخش 8: باز ماندگان فهرست 5 نفر از بازماندگان کارکن </h5>
                                </li>
                            </ul>
                        </div>
                        <div class="input-field col s6">
                            <i class="mdi-social-person prefix"></i>
                            <input name="SurviverName" type="text" value="{{$record->SurviverName}}" data-parsley-required="true">
                            <label for="SurviverName">اسم</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-social-person prefix"></i>
                            <input name="SurLastName" type="text" value="{{$record->SurLastName}}" data-parsley-required="true">
                            <label for="SurLastName">تخلص</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-social-person prefix"></i>
                            <input name="SurFatherName" type="text" value="{{$record->SurFatherName}}" data-parsley-required="true">
                            <label for="SurFatherName">ولد</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-social-person prefix"></i>
                            <input name="SurRelation" type="text" value="{{$record->SurRelation}}" data-parsley-required="true">
                            <label for="SurRelation">رابطه</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-social-person prefix"></i>
                            <input name="SurAge" type="text" value="{{$record->SurAge}}" data-parsley-required="true">
                            <label for="SurAge">سن</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-social-person prefix"></i>
                            <input name="SurStatues" type="text" value="{{$record->SurStatues}}" data-parsley-required="true" data-parsley-required="true">
                            <label for="SurStatues">حالت مدنی</label>
                        </div>

                        <div class="input-field col s12" align="right">
                            <ul id="task-card" class="collection with-header">
                                <li class="collection-header cyan">
                                    <h5 class="task-card-title">بخش 9: تایید و تصدیق</h5>
                                </li>
                            </ul>
                        </div>

                        <div class="input-field col s12" align="right">
                            <ul id="task-card" class="collection with-header">
                                <li >
                                    <h5 >بحیث قناعت</h5>
                                </li>
                            </ul>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-action-perm-identity prefix"></i>
                            <input name="JusName" type="text" value="{{$record->JusName}}" data-parsley-required="true">
                            <label for="JusName">اسم</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-action-perm-identity prefix"></i>
                            <input name="JusWorkName" type="text" value="{{$record->JusWorkName}}" data-parsley-required="true">
                            <label for="JusWorkName">کارکن/وکیل شرعی</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-action-perm-identity prefix"></i>
                            <input name="JusprofisionalName" type="text" value="{{$record->JusprofisionalName}}" data-parsley-required="true">
                            <label for="JusprofisionalkName">کارکن کدر پرسونل/منابع بشری</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-action-perm-identity prefix"></i>
                            <input name="JusheadkName" type="text" value="{{$record->JusheadkName}}" data-parsley-required="true">
                            <label for="JusheadkName">ریس/آمرکدر وپرسونل/منابع بشری</label>
                        </div>

                        <div class="input-field col s12" align="right">
                            <ul id="task-card" class="collection with-header">
                                <li class="collection-header cyan">
                                    <h5 class="task-card-title">بخش 10: تسلیم دهی/واگذاری اسناد درخواست تقاعد</h5>
                                </li>
                            </ul>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-action-schedule prefix"></i>
                            <input name="DocDate" type="text" value="{{$record->DocDate}}" class="datepicker" data-parsley-required="true">
                            <label for="DocDate">تاریخ تسلیم دهی</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-action-perm-identity prefix"></i>
                            <input name="DocCodeNumber" type="text" value="{{$record->DocCodeNumber}}" data-parsley-required="true">
                            <label for="DocCodeNumber">نمبر تثبیت</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-action-perm-identity prefix"></i>
                            <input name="DocExportNumber" type="text" value="{{$record->DocExportNumber}}" data-parsley-required="true">
                            <label for="DocExportNumber">نمبر صدور</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-action-perm-identity prefix"></i>
                            <input name="HRF04Number" type="text" value="{{$record->HRF04Number}}" data-parsley-required="true">
                            <label for="HRF04Number">نمبر فورم مربوط به HRF-04</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="mdi-action-perm-identity prefix"></i>
                            <input name="HRF05Number" type="text" value="{{$record->HRF05Number}}" data-parsley-required="true">
                            <label for="HRF05Number">نمبر فورم مربوط به HRF-05</label>
                        </div>


                        <div class="modal-footer">
                            <button type="submit" class=" waves-effect waves-light btn">Update</button> &nbsp;&nbsp;&nbsp;&nbsp;
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>

</form>


</div>
</div>

</section>





</div>
@stop
</body>

