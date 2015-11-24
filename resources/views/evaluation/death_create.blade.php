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
                    <form method="POST" action="{{ url('death') }}" class="col s12" data-parsley-validate>
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
                                    <i class="mdi-action-perm-identity prefix"></i>
                                    <input name="AutoNumber" type="text" data-parsley-required="true">
                                    <label for="AutoNumber">نمبر مسلسل</label>
                                </div>

                                <div class="input-field col s12" align="right">
                                    <ul id="task-card" class="collection with-header">
                                        <li >
                                            <h6 >این فورمه حینیکه درخواست تقاعد بنابر معلو لیت فوت ویا مفقودیت ترتیب میشود ضمیمه می گردد. این فورمه در دونقل تهیه گردیده که نقل اصلی آن ضمیمه دوسیه به ریاست عمومی خزینه تقاعد ارسال و کاپی ان در ریاست کدر پرسونل و منابع بشری ثبت و نگهداری می شود. لطفا تمام اسناد مورد ضرورت را ضمیمه نمایید.</h6>
                                        </li>
                                    </ul>
                                </div>


                                <div class="input-field col s12">
                                    <i class="mdi-action-schedule prefix"></i>
                                    <input name="RegistrationDate" type="text" class="datepicker" data-parsley-required="true">
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
                                    <input name="CardNo" type="text" data-parsley-required="true">
                                    <label for="CardNo">نمبر کارت هویت</label>
                                </div>

                                <div class="input-field col s6">
                                    <i class="mdi-social-person prefix"></i>
                                    <input name="Name" type="text" data-parsley-required="true">
                                    <label for="Name">اسم</label>
                                </div>

                                <div class="input-field col s6">
                                    <i class="mdi-social-person prefix"></i>
                                    <input name="LastName" type="text" data-parsley-required="true">
                                    <label for="LastName">تخلص</label>
                                </div>

                                <div class="input-field col s6">
                                    <i class="mdi-social-person prefix"></i>
                                    <input name="FatherName" type="text" data-parsley-required="true">
                                    <label for="FatherName">ولد</label>
                                </div>

                                <div class="input-field col s6">
                                    <i class="mdi-social-person prefix"></i>
                                    <input name="GrandfatherName" type="text" data-parsley-required="true">
                                    <label for="GrandfatherName">ولدیت</label>
                                </div>


                                <div class="input-field col s6">
                                    <i class="mdi-action-perm-identity prefix"></i>
                                    <input name="TazkeraNumber" type="text" data-parsley-required="true">
                                    <label for="TazkeraNumber">نمبر تذکره</label>
                                </div>

                                <div class="input-field col s6">
                                    <i class="mdi-social-person prefix"></i>
                                    <input name="TazkeraPage" type="text" data-parsley-required="true">
                                    <label for="TazkeraPage">صفحه</label>
                                </div>

                                <div class="input-field col s6">
                                    <i class="mdi-social-person prefix"></i>
                                    <input name="TazkeraJuld" type="text" data-parsley-required="true">
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
                                    <i class="mdi-action-work prefix"></i>
                                    <label for="ReasonType">خانه خالی مربوط را نشانی نمایید</label>
                                    <br>
                                    <input name="ReasonType" checked value="فوت" type="radio" id="test2"/>
                                    <label for="test2">فوت</label>

                                        <input name="ReasonType"  value="معلولیت" type="radio" id="test1"/>
                                        <label for="test1">معلولیت</label>

                                        <input name="ReasonType" value="مفقودیت" type="radio" id="test3"/>
                                        <label for="test3">مفقودیت</label>
                                </div>


                                <div class="input-field col s6">
                                    <i class="mdi-action-work prefix"></i>
                                    <label for="InjuredLevel">در صورت معلولیت درجه معلولیت را نشان دهید</label>
                                    <br>
                                        <input name="InjuredLevel" value="60%" type="radio" id="test4" />
                                        <label for="test4">معلولیت کلی 60% وبالا تر از آن</label>


                                        <input name="InjuredLevel" value="30% الی 60%" type="radio" id="test5" />
                                        <label for="test5">معلولیت قسمی 30 % الی 60%</label>
                                </div>

                                <div class="input-field col s12" align="right">
                                    <ul id="task-card" class="collection with-header">
                                        <li class="collection-header cyan">
                                            <h5 class="task-card-title">بخش 3: حالات چگونگی وقوع فوت مفقودیت معلولیت</h5>
                                        </li>
                                    </ul>
                                </div>

                                <div class="input-field col s6">
                                    <i class="mdi-action-work prefix"></i>
                                    <label for="CausedAccordingTo">وقوع بنابر</label>
                                    <br>
                                        <input name="CausedAccordingTo" value="حادثه/سانحه" type="radio" id="test6" />
                                        <label for="test6">حادثه/سانحه</label>
                                        <input name="CausedAccordingTo" value="محاربه تعرض مدافعه" type="radio" id="test7" />
                                        <label for="test7">محاربه تعرض مدافعه</label>
                                        <input name="CausedAccordingTo" value="حالات پیچیده" type="radio" id="test8" />
                                        <label for="test8">حالات پیچیده</label>
                                        <input name="CausedAccordingTo" value="حالات دیگر" type="radio" id="test9" />
                                        <label for="test9">حالات دیگر</label>

                                </div>

                                <div class="input-field col s6">
                                    <i class="mdi-action-work prefix"></i>
                                    <label for="CausedForFistTime">برای نخستین بار در کجا واقع گردید؟</label>
                                    <br><br>
                                    <form action="#">

                                        <input name="CausedForFistTime" value="درمحل/جریان کار" type="radio" id="test10" />
                                        <label for="test10">درمحل/جریان کار</label>
                                        <input name="CausedForFistTime" value="درمسیر راه به کار ویا برگشت از محل کار" type="radio" id="test11" />
                                        <label for="test11">درمسیر راه به کار ویا برگشت از محل کار</label>
                                        <input name="CausedForFistTime" value="در خانه" type="radio" id="test12" />
                                        <label for="test12">در خانه</label>
                                        <input name="CausedForFistTime" value="وغیره" type="radio" id="test13" />
                                        <label for="test13">وغیره</label>

                                    </form>
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
                                    <input name="DeathDate" type="text" class="datepicker" data-parsley-required="true">
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
                                    <input name="InjuredDetails" type="text" data-parsley-required="true">
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
                                    <input name="ProveFormInfoNo" type="text" data-parsley-required="true">
                                    <label for="ProveFormInfoNo">نمبر فورمه تثبیت معلولیت</label>
                                </div>

                                <div class="input-field col s6">
                                    <i class="mdi-action-perm-identity prefix"></i>
                                    <input name="WaseqeFawtiNo" type="text" data-parsley-required="true">
                                    <label for="WaseqeFawtiNo">نمبر وثیقه فوتی</label>
                                </div>

                                <div class="input-field col s6">
                                    <i class="mdi-action-schedule prefix"></i>
                                    <input name="WaseqaKhatDate" type="text" data-parsley-required="true" class="datepicker">
                                    <label for="WaseqaKhatDate">تاریخ وثیقه خط</label>
                                </div>

                                <div class="input-field col s6">
                                    <i class="mdi-action-perm-identity prefix"></i>
                                    <input name="WasyatKhatNo" type="text" data-parsley-required="true">
                                    <label for="WasyatKhatNo">نمبر وصایت خط شرعی</label>
                                </div>

                                <div class="input-field col s12">
                                    <i class="mdi-action-schedule prefix"></i>
                                    <input name="WasyatKhatDate" type="text" data-parsley-required="true" class="datepicker">
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


                                <div class="input-field col s12">
                                    <i class="mdi-action-schedule prefix"></i>
                                    <input name="MyProveDate" type="text" data-parsley-required="true" class="datepicker">
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
                                    <i class="mdi-action-work prefix"></i>
                                    <label for="RelatedworkInjured">معلولیت فوت مفقودیت مرتبط به کار می باشد</label>
                                    <br>
                                        <input name="RelatedworkInjured" checked value="بله" type="radio" id="test14" />
                                        <label for="test14">بلی</label>
                                        <input name="RelatedworkInjured" value="نخیر" type="radio" id="test15" />
                                        <label for="test15">نخیر</label>
                                </div>

                                <div class="input-field col s6">
                                    <i class="mdi-action-schedule prefix"></i>
                                    <input name="RelatedInjuredDate" type="text" data-parsley-required="true" class="datepicker">
                                    <label for="RelatedInjuredDate">به تاریخ این موضوع را بر رسی نموده وتصدیق میداریم که توضیحات فوق الذکر صحت میباشد</label>
                                </div>

                                <div class="input-field col s6">
                                    <i class="mdi-action-perm-identity prefix"></i>
                                    <input name="EmpNameOfHR" type="text" data-parsley-required="true">
                                    <label for="EmpNameOfHR">اسم کارکن کادر و پرسونل و منابع بشری</label>
                                </div>

                                <div class="input-field col s6">
                                    <i class="mdi-action-perm-identity prefix"></i>
                                    <input name="BossNameOfHR" type="text" data-parsley-required="true">
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
                                    <input name="CurrentDate" type="text" class="datepicker" data-parsley-required="true">
                                    <label for="CurrentDate">تاریخ</label>
                                </div>

                                <div class="input-field col s6">
                                    <i class="mdi-action-perm-identity prefix"></i>
                                    <input name="RegNumber" type="text" data-parsley-required="true" >
                                    <label for="RegNumber">نمبر ثبت</label>
                                </div>

                                <div class="input-field col s6">
                                    <i class="mdi-action-perm-identity prefix"></i>
                                    <input name="ExportNumber" type="text" data-parsley-required="true">
                                    <label for="ExportNumber">شماره صدور</label>
                                </div>

                                <div class="input-field col s6">
                                    <i class="mdi-action-perm-identity prefix"></i>
                                    <input name="FormNumber" type="text" data-parsley-required="true">
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
                                    <input name="RecieveDocumentation" type="text" data-parsley-required="true">
                                    <label for="RecieveDocumentation">دریافت/تسلیم گیری دوسیه/اسناد</label>
                                </div>

                                <div class="input-field col s6">
                                    <i class="mdi-action-perm-identity prefix"></i>
                                    <input name="Justification" type="text" data-parsley-required="true">
                                    <label for="Justification">تایید</label>
                                </div>

                                <div class="input-field col s12">
                                    <button class="btn cyan waves-effect waves-light right" type="submit" name="submit">تایید
                                        <i class="mdi-content-send right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
    </form>
</div>
</div>
@stop
</div>
</div>
</section>
</div>
</div>
</body>

