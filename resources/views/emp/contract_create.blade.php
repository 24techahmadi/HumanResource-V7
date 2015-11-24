@extends('layouts.EmpLayout')

@section('title')
    HR | ایجاد قرارداد کار

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
                            <h5 class="breadcrumbs-title">مدیریت کاکنان</h5>
                            <ol class="breadcrumb">
                                <li><a href="employment">دشبورد</a>
                                </li>

                                <li class="active">فورمه قرارداد کار</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!--breadcrumbs end-->


            <!--start container-->


            @section('content')
                <h1 class="header" align="right">فورمه قرارداد کار</h1>
                        <h4>اضافه نمودن عضو جدید</h4>
                        <!-- Form with validation -->
                        <div class="row">
                            <form method="POST" action="{{ url('contract') }}" class="col s12" data-parsley-validate>
                                {!! csrf_field() !!}

                            <div class="col s12 m12 l12">
                                <div class="card-panel">
                                    <h1 align="center" class="logo-wrapper"><a class="brand-logo darken-1"><img src="{{ URL::asset('assets/images/AF2.png') }}" height="100" width="100" alt="materialize logo" sizes></a></h1>
                                    <h5 align="center" class="header">جمهوری اسلامی افغانستان</h5>
                                    <h5 align="center" class="header">وزارت تحصیلات عالی افغانستان</h5>
                                    <h5 align="center" class="header">ریاست منابع بشری</h5>
                                    <h5 align="center" class="header">مدیریت عمومی استخدام</h5>
                                    <hr>
                                    <div class="row">

                                        <div class="row">
                                            <div class="input-field col s6">
                                                <i class="mdi-hardware-security prefix"></i>
                                                <input name="IDNumber" type="text" class="validate" data-parsley-required="true">
                                                <label for="IDNumber">شماره مسلسل</label>
                                            </div>

                                            <div class="input-field col s6">
                                                <i class="mdi-hardware-security prefix"></i>
                                                <input name="TaeenatRegNo" type="text" class="validate" data-parsley-required="true">
                                                <label for="TaeenatRegNo">شماره ثبت دفتر تعینات</label>
                                            </div>

                                            <div class="input-field col s12">
                                                <i class="mdi-hardware-security prefix"></i>
                                                <input name="CardNo" type="text" class="validate" data-parsley-required="true">
                                                <label for="CardNo">شماره کارت</label>
                                            </div>
                                        </div>

                                        <div class="input-field col s12">
                                            <ul id="task-card" class="collection with-header">
                                                <li class="collection-header cyan">
                                                    <h5 class="task-card-title" align="right">مشخصات اداره</h5>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-account-box prefix"></i>
                                            <input name="OfficeName" type="text" class="validate" data-parsley-required="true">
                                            <label for="OfficeName">اسم اداره</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-account-box prefix"></i>
                                            <input name="Lawshep" type="text" class="validate" data-parsley-required="true">
                                            <label for="Lawshep">شکل حقوقی</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-account-box prefix"></i>
                                            <input name="WorkHead" type="text" class="validate" data-parsley-required="true">
                                            <label for="WorkHead">آمر صلا حیت کار</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-account-box prefix"></i>
                                            <input name="Officephone" type="text" class="validate" data-parsley-required="true">
                                            <label for="Officephone">شماره تلیفون</label>
                                        </div>

                                        <div class="input-field col s12">
                                            <i class="mdi-action-account-box prefix"></i>
                                            <input name="photo" type="text" class="validate" data-parsley-required="true">
                                            <label for="photo">عکس</label>
                                        </div>


                                        <div class="input-field col s12">
                                            <ul id="task-card" class="collection with-header">
                                                <li class="collection-header cyan">
                                                    <h5 class="task-card-title" align="right">شهرت کارکن</h5>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-account-box prefix"></i>
                                            <input name="Name" type="text" class="validate" data-parsley-required="true">
                                            <label for="Name">اسم</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-account-box prefix"></i>
                                            <input name="FatherName" type="text" data-parsley-required="true" data-parsley-required="true">
                                            <label for="FatherName">ولد</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <input  name="BirthDate" type="text" class="datepicker" data-parsley-required="true">
                                            <label for="BirthDate">تاریخ تولد</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-accessibility prefix"></i>
                                            <input name="TazkiraNo" type="text" data-parsley-required="true">
                                            <label for="TazkiraNo">نمبر تذکره تابیت</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-accessibility prefix"></i>
                                            <input name="Gender" type="text" data-parsley-required="true">
                                            <label for="Gender">جنس</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-accessibility prefix"></i>
                                            <input name="MarritalStatuse" type="text" data-parsley-required="true">
                                            <label for="MarritalStatuse">حالت مدنی</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-accessibility prefix"></i>
                                            <input name="Radef" type="text" data-parsley-required="true">
                                            <label for="Radef">ردیف</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-accessibility prefix"></i>
                                            <input name="Proffisinal" type="text" data-parsley-required="true">
                                            <label for="Proffisinal">شغل یا حرفه</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-accessibility prefix"></i>
                                            <input name="EducationLevel" type="text" data-parsley-required="true">
                                            <label for="EducationLevel">سطح تحصیل</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-accessibility prefix"></i>
                                            <input name="EducationField" type="text" data-parsley-required="true">
                                            <label for="EducationField">رشته تحصیل</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-accessibility prefix"></i>
                                            <input name="Educationplace" type="text" data-parsley-required="true">
                                            <label for="Educationplace">محل تحصیل</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-accessibility prefix"></i>
                                            <input name="Healthinfo" type="text" data-parsley-required="true">
                                            <label for="Healthinfo">وضع صیحی</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-accessibility prefix"></i>
                                            <input name="Pastworkjustfi" type="text" data-parsley-required="true">
                                            <label for="Pastworkjustfi">تصدیق کار به مرجع قبلی</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-accessibility prefix"></i>
                                            <input name="PermenantAdd" type="text" data-parsley-required="true">
                                            <label for="PermenantAdd">سکونت اصلی</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-accessibility prefix"></i>
                                            <input name="CurrentAdd" type="text" data-parsley-required="true">
                                            <label for="CurrentAdd">سکونت فعلی</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-accessibility prefix"></i>
                                            <input name="WorkType" type="text" data-parsley-required="true">
                                            <label for="WorkType">نوع کار</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-accessibility prefix"></i>
                                            <input name="Workplace" type="text" data-parsley-required="true">
                                            <label for="Workplace">محل کار</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-accessibility prefix"></i>
                                            <input name="Position" type="text" data-parsley-required="true">
                                            <label for="Position">رتبه</label>
                                        </div>


                                        <div class="input-field col s12">
                                            <ul id="task-card" class="collection with-header">
                                                <li class="collection-header cyan">
                                                    <h5 class="task-card-title" align="right">نوع قرارداد ومدت</h5>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="input-field col s12">
                                            <i class="mdi-action-accessibility prefix"></i>
                                            <input name="SpasificContract" type="text" data-parsley-required="true">
                                            <label for="SpasificContract">معین</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-account-box prefix"></i>
                                            <input name="UnSpasificContract" type="text" data-parsley-required="true">
                                            <label for="UnSpasificContract">غیر معین</label>
                                        </div>

                                        <div class="input-field col s3">
                                            <i class="mdi-hardware-keyboard-alt prefix"></i>
                                            <input name="UnSpasificContractFrom" type="text" class="datepicker" data-parsley-required="true">
                                            <label for="UnSpasificContractFrom">از تاریخ</label>
                                        </div>

                                        <div class="input-field col s3">
                                            <i class="mdi-hardware-keyboard-alt prefix"></i>
                                            <input name="UnSpasificContractTo" type="text" class="datepicker" data-parsley-required="true">
                                            <label for="UnSpasificContractTo">الی تاریخ</label>
                                        </div>

                                        <div class="input-field col s12">
                                            <ul id="task-card" class="collection with-header">
                                                <li class="collection-header cyan">
                                                    <h5 class="task-card-title" align="right">برای انجام کار معین</h5>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="input-field col s12">
                                            <i class="mdi-action-account-box prefix"></i>
                                            <input name="SpecificWorks" type="text" data-parsley-required="true">
                                            <label for="SpecificWorks">انجام کار معین</label>
                                        </div>

                                        <div class="input-field col s12">
                                            <i class="mdi-action-account-box prefix"></i>
                                            <input name="TestPeriod" type="text" data-parsley-required="true">
                                            <label for="TestPeriod">دوره امتحانی</label>
                                        </div>

                                        <div class="input-field col s3">
                                            <i class="mdi-hardware-keyboard-alt prefix"></i>
                                            <input name="TestPeriodFrom" type="text" class="datepicker" data-parsley-required="true">
                                            <label for="TestPeriodFrom">از تاریخ</label>
                                        </div>

                                        <div class="input-field col s3">
                                            <i class="mdi-hardware-keyboard-alt prefix"></i>
                                            <input name="TestPeriodFromTo" type="text" class="datepicker" data-parsley-required="true">
                                            <label for="TestPeriodFromTo">الی تاریخ</label>
                                        </div>
                                        <div class="input-field col s6">
                                            <select name="Perhour">
                                                <option value="" disabled selected>فی ساعت</option>
                                                <option value="فی روز">فی روز</option>
                                                <option value="فی ماه">فی ماه</option>
                                                <option value="فی واحد">فی واحد</option>
                                                <option value="اجاره">اجاره</option>
                                                <option value="دوکتورا">دوکتورا</option>
                                            </select>
                                        </div>

                                        <div class="input-field col s12">
                                            <ul id="task-card" class="collection with-header">
                                                <li class="collection-header cyan">
                                                    <h5 class="task-card-title" align="right">تامینات</h5>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-account-box prefix"></i>
                                            <input name="Makol" type="text" data-parsley-required="true" >
                                            <label for="Makol">ماکول</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-account-box prefix"></i>
                                            <input name="Copon" type="text" data-parsley-required="true">
                                            <label for="Copon">کوپون</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-account-box prefix"></i>
                                            <input name="Clothworkequp" type="text" data-parsley-required="true">
                                            <label for="Clothworkequp">لباس وسایل کار</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-account-box prefix"></i>
                                            <input name="TrnspTashelat" type="text" data-parsley-required="true">
                                            <label for="TrnspTashelat">تسهیلات ترانسپورتی</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-account-box prefix"></i>
                                            <input name="healthInsurrence" type="text" data-parsley-required="true" >
                                            <label for="healthInsurrence">بیمه صیحی</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-account-box prefix"></i>
                                            <input name="OtherTadiat" type="text" class="validate" data-parsley-required="true">
                                            <label for="OtherTadiat">سایر تادیات</label>
                                        </div>

                                        <div class="input-field col s12">
                                            <ul id="task-card" class="collection with-header">
                                                <li class="collection-header cyan">
                                                    <h5 class="task-card-title" align="right">شهرت ممثل قانونی کار</h5>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-account-box prefix"></i>
                                            <input name="RepName" type="text" class="validate" data-parsley-required="true">
                                            <label for="RepName">اسم</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-account-box prefix"></i>
                                            <input name="RepLastName" type="text" class="validate" data-parsley-required="true">
                                            <label for="RepLastName">تخلص</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-account-box prefix"></i>
                                            <input name="RepfName" type="text" class="validate" data-parsley-required="true">
                                            <label for="RefpName">ولد</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-account-box prefix"></i>
                                            <input name="RepRelatio" type="text" class="validate" data-parsley-required="true">
                                            <label for="RepRelatio">رابطه با کارکن</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-account-box prefix"></i>
                                            <input name="Sokoknumber" type="text" class="validate" data-parsley-required="true">
                                            <label for="Sokoknumber">نمبرسوکوک</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-account-box prefix"></i>
                                            <input name="RegNumber" type="text" class="validate" data-parsley-required="true">
                                            <label for="RegNumber">نمبر ثبت</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-account-box prefix"></i>
                                            <input name="PageNo" type="text" class="validate" data-parsley-required="true">
                                            <label for="PageNo">صفحه</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-account-box prefix"></i>
                                            <input name="JuldNo" type="text" class="validate" data-parsley-required="true">
                                            <label for="JuldNo">جلد</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-account-box prefix"></i>
                                            <input name="Sudorplace" type="text" class="validate" data-parsley-required="true">
                                            <label for="Sudorplace">محل صدور</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-account-box prefix"></i>
                                            <input name="PermenantAddress" type="text" class="validate" data-parsley-required="true">
                                            <label for="PermenantAddress">سکونت اصلی</label>
                                        </div>

                                        <div class="input-field col s12">
                                            <i class="mdi-action-account-box prefix"></i>
                                            <input name="CurrentAddress" type="text" class="validate" data-parsley-required="true">
                                            <label for="CurrentAddress">سکو نت فعلی</label>
                                        </div>

                                        <div class="input-field col s12">
                                            <ul id="task-card" class="collection with-header">
                                                <li class="collection-header cyan">
                                                    <h6 class="task-card-title" align="right">درحالت خاص درصورت که سن کارکن از سن معینه شمول به کار کمتر باشد
                                                        طبق حکم ماده (17) قانون کار به موافقه ممثل فانونی وتایید شورای نماینده گی های صنفی به کار شامل شده میتواند.</h6>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="input-field col s12">
                                            <button class="btn cyan waves-effect waves-light right" type="submit" name="submit">Create
                                                <i class="mdi-content-send right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </form>
                            </div>


                                <!-- End- Add New Member -->
                                <!-- end- Modal2- All Member -->



@stop

</section>
</div>
</div>

</body>

