@extends('layouts.DevLayout')

@section('title')
    HR نمایش معلو مات
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

                            <li class="active">نمایش معلو مات</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!--breadcrumbs end-->
        @section('content')
            <h1 class="header" align="right">نمایش معلو مات</h1>

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
                            <form method="POST" action="{{ url('userdocumentation') }}" class="col s12" >
                                {!! csrf_field() !!}

                                <div class="row" >
                                    <div class="input-field col s6">
                                        <i class="mdi-action-perm-identity prefix"></i>
                                        <input name="id" type="text" data-parsley-required="true" value="{{ $record->id }}">
                                        <label for="id">شماره</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-schedule prefix"></i>
                                        <input name="Date" type="text" data-parsley-required="true" value="{{ $record->Date }}">
                                        <label for="Date">تاریخ</label>
                                    </div>

                                    <div class="input-field col s12">
                                        <br>
                                        <ul id="task-card" class="collection with-header">
                                            <li class="collection-header cyan">
                                                <h6 class="task-card-title" align="right">فورم خلص سوانح کارکنان خدمات ملکی جهت تکمیل نمودن سوابق غرض تقرر در وظایف جدید تبدیلی انتصابی و تقرر مجدد</h6>
                                            </li>
                                        </ul>
                                        <hr>
                                        <ul id="task-card" class="collection with-header">
                                            <li class="collection-header cyan">
                                                <h5 class="task-card-title" align="right">دکاندید مکمل شهرت/شهرت مکمل دارنده خلص سوانح که کتندید بست ... تحت عنواند ..........</h5>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="input-field col s6">
                                        <i class="mdi-social-person prefix"></i>
                                        <input name="name" type="text" data-parsley-required="true" value="{{ $record->name }}">
                                        <label for="name">نام</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-person prefix"></i>
                                        <input name="LastName" type="text" data-parsley-required="true" value="{{ $record->LastName }}">
                                        <label for="LastName">تخلص</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-person prefix"></i>
                                        <input name="FatherName" type="text" data-parsley-required="true" value="{{ $record->FatherName }}">
                                        <label for="FatherName">نام پدر</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-person prefix"></i>
                                        <input name="GrandFatherName" type="text" data-parsley-required="true" value="{{ $record->GrandFatherName }}">
                                        <label for="GrandFatherName">نامد پدرکلان</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-schedule prefix"></i>
                                        <input name="DateOfBirth" type="text" data-parsley-required="true" value="{{ $record->DateOfBirth }}">
                                        <label for="DateOfBirth">تاریخ تولد</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-maps-place prefix"></i>
                                        <input name="PlaceOfBirth" type="text" data-parsley-required="true" value="{{ $record->PlaceOfBirth }}">
                                        <label for="PlaceOfBirth">محل تولد</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-perm-identity prefix"></i>
                                        <input name="TazkiraNumber" type="text" data-parsley-required="true" value="{{ $record->TazkiraNumber }}">
                                        <label for="TazkiraNumber">نمبرتذکره</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-schedule prefix"></i>
                                        <input name="FirstJobDate" type="text" data-parsley-required="true" value="{{ $record->FirstJobDate }}">
                                        <label for="FirstJobDate">تاریخ تقرر ابتدایی</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-perm-identity prefix"></i>
                                        <input name="StatisticsCode" type="text" data-parsley-required="true" value="{{ $record->StatisticsCode }}">
                                        <label for="StatisticsCode">کود احسایوی</label>
                                    </div>

                                    <div class="input-field col s12" align="right">
                                        <ul id="task-card" class="collection with-header">
                                            <li class="collection-header cyan">
                                                <h5 class="task-card-title">معلومات وظیفه فعلی</h5>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-maps-place prefix"></i>
                                        <input name="Organization" type="text" data-parsley-required="true" value="{{ $record->Organization }}">
                                        <label for="Organization">وزارت/اداره</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-maps-place prefix"></i>
                                        <input name="Reyasat" type="text" data-parsley-required="true" value="{{ $record->Reyasat }}">
                                        <label for="Reyasat">ریاست</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-editor-merge-type prefix"></i>
                                        <input name="JobTitle" type="text" data-parsley-required="true" value="{{ $record->JobTitle }}">
                                        <label for="JobTitle">عنوان وظیفه</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-editor-merge-type prefix"></i>
                                        <input name="Bast" type="text" data-parsley-required="true" value="{{ $record->Bast }}">
                                        <label for="Bast">بست</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-editor-merge-type prefix"></i>
                                        <input name="Qadam" type="text" data-parsley-required="true" value="{{ $record->Qadam }}">
                                        <label for="Qadam">قدم</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-schedule prefix"></i>
                                        <input name="RegistrationDate" type="text" data-parsley-required="true" value="{{ $record->RegistrationDate }}">
                                        <label for="RegistrationDate">تاریخ شمولیت</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-content-archive prefix"></i>
                                        <input name="Position" type="text" data-parsley-required="true" value="{{ $record->Position }}">
                                        <label for="Position">موقف وظیفوی</label>
                                    </div>

                                    <div class="input-field col s12" align="right">
                                        <ul id="task-card" class="collection with-header">
                                            <li class="collection-header cyan">
                                                <h5 class="task-card-title">معلومات تحصیلی و تعلیمی</h5>
                                            </li>
                                        </ul>
                                    </div>


                                    <div class="input-field col s6">
                                        <i class="mdi-maps-place prefix"></i>
                                        <input name="EducationPlace" type="text" data-parsley-required="true" value="{{ $record->EducationPlace }}">
                                        <label for="EducationPlace">محل تحصیل/کشور</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-maps-place prefix"></i>
                                        <input name="UniversityName" type="text" data-parsley-required="true" value="{{ $record->UniversityName }}">
                                        <label for="UniversityName">نام موسسه تحصیلی/تعلیمی</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-maps-place prefix"></i>
                                        <input name="EducationLevel" type="text" data-parsley-required="true" value="{{ $record->EducationLevel }}">
                                        <label for="EducationLevel">درجه تحصیلی/تعلیمی</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-maps-place prefix"></i>
                                        <input name="EducationField" type="text" data-parsley-required="true" value="{{ $record->EducationField }}">
                                        <label for="EducationField">رشته تحصیلی/تعلیمی</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-schedule prefix"></i>
                                        <input name="StartDate" type="text" data-parsley-required="true" value="{{ $record->StartDate }}">
                                        <label for="StartDate">تاریخ شروع</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-schedule prefix"></i>
                                        <input name="EndDate" type="text" data-parsley-required="true" value="{{ $record->EndDate }}">
                                        <label for="EndDate">تاریخ ختم</label>
                                    </div>

                                    <div class="input-field col s12" align="right">
                                        <ul id="task-card" class="collection with-header">
                                            <li class="collection-header cyan">
                                                <h5 class="task-card-title">آموزش های مسلکی مرتبط به وظیفه</h5>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-schedule prefix"></i>
                                        <input name="VocationalStartDate" type="text" data-parsley-required="true" value="{{ $record->VocationalStartDate }}">
                                        <label for="VocationalStartDate">تاریخ شروع</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-schedule prefix"></i>
                                        <input name="VocationalEndDate" type="text" data-parsley-required="true" value="{{ $record->VocationalEndDate }}">
                                        <label for="VocationalEndDate">تاریخ ختم</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-maps-place prefix"></i>
                                        <input name="OrgName" type="text" data-parsley-required="true" value="{{ $record->OrgName }}">
                                        <label for="OrgName">نام موسسه آموزیشی</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-maps-place prefix"></i>
                                        <input name="Country" type="text" data-parsley-required="true" value="{{ $record->Country }}">
                                        <label for="Country">کشور</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-maps-place prefix"></i>
                                        <input name="VocationalEduField" type="text" data-parsley-required="true" value="{{ $record->VocationalEduField }}">
                                        <label for="VocationalEduField">رشته آموزیشی</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-maps-place prefix"></i>
                                        <input name="Result" type="text" data-parsley-required="true" value="{{ $record->Result }}">
                                        <label for="Result">نتیجه</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-content-archive prefix"></i>
                                        <input name="BookNumber" type="text" data-parsley-required="true" value="{{ $record->BookNumber }}">
                                        <label for="BookNumber">درج دفتر سوانح</label>
                                    </div>

                                    <div class="row">
                                        <div class="col s12 m4 l12" align="right">
                                            <ul id="LanguagesSkills" class="collection with-header">
                                                <li class="collection-header cyan">
                                                    <h4 class="task-card-title">مهارت در زبان های بین المللی</h4>
                                                </li>
                                                <table>
                                                    <tr>
                                                        <td>
                                                            < class="collection-item dismissable">
                                                            <input type="checkbox" id="Persion" />
                                                            <label for="Persion">دری
                                                            </label>
                                                            <span class="task-cat teal">خواندن    </span>
                                                            <select>
                                                                <option value="" disabled selected>سطح </option>
                                                                <option value="7">خوب</option>
                                                                <option value="8">عالی</option>
                                                                <option value="9">بسیار خوب</option>
                                                            </select>
                                                            <span class="task-cat pink">نوشتن   </span>
                                                            <select>
                                                                <option value="" disabled selected>سطح </option>
                                                                <option value="10">خوب</option>
                                                                <option value="11">عالی</option>
                                                                <option value="12">بسیار خوب</option>
                                                            </select>
                                                            <span class="task-cat cyan">حرف زدن   </span>
                                                            <select>
                                                                <option value="" disabled selected>سطح </option>
                                                                <option value="13">خوب</option>
                                                                <option value="14">عالی</option>
                                                                <option value="15">بسیار خوب</option>
                                                            </select>
                                                        </td>
                                                        <br/>
                                                        <br/>
                                                        <td>
                                                            <li class="collection-item dismissable">
                                                                <input type="checkbox" id="Pashto" />
                                                                <label for="Pashto">پشتو
                                                                </label>
                                                                <span class="task-cat teal">خواندن</span>
                                                                <select>
                                                                    <option value="" disabled selected>سطح </option>
                                                                    <option value="16">خوب</option>
                                                                    <option value="17">عالی</option>
                                                                    <option value="18">بسیار خوب</option>
                                                                </select>
                                                                <span class="task-cat pink">نوشتن   </span>
                                                                <select>
                                                                    <option value="" disabled selected>سطح </option>
                                                                    <option value="19">خوب</option>
                                                                    <option value="20">عالی</option>
                                                                    <option value="21">بسیار خوب</option>
                                                                </select>
                                                                <span class="task-cat cyan">حرف زدن   </span>
                                                                <select>
                                                                    <option value="" disabled selected>سطح</option>
                                                                    <option value="22">خوب</option>
                                                                    <option value="23">عالی</option>
                                                                    <option value="24">بسیار خوب</option>
                                                                </select>
                                                            </li>
                                                        </td>
                                                        <td>
                                                            <li class="collection-item dismissable">
                                                                <input type="checkbox" id="english" checked="checked" />
                                                                <label for="english">اینگلیسی
                                                                </label>
                                                                <span class="task-cat teal">خواندن    </span>
                                                                <select>
                                                                    <option value="" disabled selected>سطح </option>
                                                                    <option value="25">خوب</option>
                                                                    <option value="26">عالی</option>
                                                                    <option value="27">بسیار خوب</option>
                                                                </select>
                                                                <span class="task-cat pink">نوشتن   </span>
                                                                <select>
                                                                    <option value="" disabled selected>سطح </option>
                                                                    <option value="28">خوب</option>
                                                                    <option value="29">عالی</option>
                                                                    <option value="30">بسیارخوب</option>
                                                                </select>
                                                                <span class="task-cat cyan">حرف زدن   </span>
                                                                <select>
                                                                    <option value="" disabled selected>سطح </option>
                                                                    <option value="31">خوب</option>
                                                                    <option value="32">عالی</option>
                                                                    <option value="33">بسیار خوب</option>
                                                                </select>
                                                            </li>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                            </ul>
                                        </div>

                                        <div class="input-field col s12" align="right">
                                            <ul id="task-card" class="collection with-header">
                                                <li class="collection-header cyan">
                                                    <h5 class="task-card-title">مهارت های مرتبط به وظیفه</h5>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-editor-merge-type prefix"></i>
                                            <input name="JobSkills" type="text" data-parsley-required="true" value="{{ $record->JobSkills }}">
                                            <label for="JobSkills">نوع مهارت های علمی تخنیکی و افزاری</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-editor-merge-type prefix"></i>
                                            <input name="JobSkillLevel" type="text" data-parsley-required="true" value="{{ $record->JobSkillLevel }}">
                                            <label for="JobSkillLevel">سطح مهارت</label>
                                        </div>


                                        <div class="input-field col s12" align="right">
                                            <ul name="task-card" class="collection with-header">
                                                <li class="collection-header cyan">
                                                    <h5 class="task-card-title">تجارب کاری مرتبط به وظیفه</h5>
                                                </li>
                                            </ul>
                                        </div>


                                        <div class="input-field col s6">
                                            <i class="mdi-maps-place prefix"></i>
                                            <input name="ExpOrgName" type="text" data-parsley-required="true" value="{{ $record->ExpOrgName }}">
                                            <label for="ExpOrgName">وزارت/اداره</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-editor-merge-type prefix"></i>
                                            <input name="ExpJobTitle" type="text" data-parsley-required="true" value="{{ $record->ExpJobTitle }}">
                                            <label for="ExpJobTitle">عنوان وظیفه</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-editor-merge-type prefix"></i>
                                            <input name="ExpBast" type="text" data-parsley-required="true" value="{{ $record->ExpBast }}">
                                            <label for="ExpBast">بست</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-editor-merge-type prefix"></i>
                                            <input name="ExpQadam" type="text" data-parsley-required="true" value="{{ $record->ExpQadam }}">
                                            <label for="ExpQadam">قدم</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-maps-place prefix"></i>
                                            <input name="ExpJobPlace" type="text" data-parsley-required="true" value="{{ $record->ExpJobPlace }}">
                                            <label for="ExpJobPlace">موقیعت وظیفه</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-schedule prefix"></i>
                                            <input name="ExpStartDate" type="text" data-parsley-required="true" value="{{ $record->ExpStartDate }}">
                                            <label for="ExpStartDate">تارییخ شروع</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-schedule prefix"></i>
                                            <input name="ExpEndDate" type="text" data-parsley-required="true" value="{{ $record->ExpEndDate }}">
                                            <label for="ExpEndDate">تاریخ ختم</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-editor-merge-type prefix"></i>
                                            <input name="JobSummary" type="text" data-parsley-required="true" value="{{ $record->JobSummary }}">
                                            <label for="JobSummary">خلاصه وظایف</label>
                                        </div>

                                        <div class="input-field col s12" align="right">
                                            <ul id="task-card" class="collection with-header">
                                                <li class="collection-header cyan">
                                                    <h5 class="task-card-title">معلومات ارزیابی اجراات</h5>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-schedule prefix"></i>
                                            <input name="EvlauationDate" type="text" data-parsley-required="true" value="{{ $record->EvlauationDate }}">
                                            <label for="EvlauationDate">تاریخ ارزیابی</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-editor-merge-type prefix"></i>
                                            <input name="EvaluationType" type="text" data-parsley-required="true" value="{{ $record->EvaluationType }}">
                                            <label for="EvaluationType">نوع ارزیابی</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-editor-merge-type prefix"></i>
                                            <input name="MainEvaluationScore" type="text" data-parsley-required="true" value="{{ $record->MainEvaluationScore }}">
                                            <label for="MainEvaluationScore">نمبر معیاری ارزیابی</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-editor-merge-type prefix"></i>
                                            <input name="EvaluationResult" type="text" data-parsley-required="true" value="{{ $record->EvaluationResult }}">
                                            <label for="EvaluationResult">نتیجه ارزیابی</label>
                                        </div>

                                        <div class="input-field col s12" align="right">
                                            <ul id="task-card" class="collection with-header">
                                                <li class="collection-header cyan">
                                                    <h5 class="task-card-title">ترفیعات</h5>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-perm-identity prefix"></i>
                                            <input name="OrderNumber" type="text" data-parsley-required="true" value="{{ $record->OrderNumber }}">
                                            <label for="OrderNumber">نمبر حکم</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-schedule prefix"></i>
                                            <input name="OrderDate" type="text" data-parsley-required="true" value="{{ $record->OrderDate }}">
                                            <label for="OrderDate">تاریخ</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-editor-merge-type prefix"></i>
                                            <input name="Grade" type="text" data-parsley-required="true" value="{{ $record->Grade }}">
                                            <label for="Grade">رتبه اعطا شده</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-editor-merge-type prefix"></i>
                                            <input name="Assignment" type="text" data-parsley-required="true" value="{{ $record->Assignment }}">
                                            <label for="Assignment">ملا حضات</label>
                                        </div>

                                        <div class="input-field col s12" align="right">
                                            <ul id="task-card" class="collection with-header">
                                                <li class="collection-header cyan">
                                                    <h5 class="task-card-title">مکافات</h5>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-perm-identity prefix"></i>
                                            <input name="MakafatIteam" type="text" data-parsley-required="true" value="{{ $record->MakafatIteam }}">
                                            <label for="MakafatIteam">لیست مکافات</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-perm-identity prefix"></i>
                                            <input name="Reason" type="text" data-parsley-required="true" value="{{ $record->Reason }}">
                                            <label for="Reason">دلیل</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-perm-identity prefix"></i>
                                            <input name="RelatedOfficial" type="text" data-parsley-required="true">
                                            <label for="RelatedOfficial">مقامذیصلاح مربوطه</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-schedule prefix"></i>
                                            <input name="OrderPublishDate" type="text" data-parsley-required="true" value="{{ $record->OrderPublishDate }}">
                                            <label for="OrderPublishDate">تاریخ صدور حکم</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-perm-identity prefix"></i>
                                            <input name="OrderCodeNumber" type="text" data-parsley-required="true" value="{{ $record->OrderCodeNumber }}">
                                            <label for="OrderCodeNumber">نمبر حکم</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-perm-identity prefix"></i>
                                            <input name="MakafatTypes" type="text" data-parsley-required="true" value="{{ $record->MakafatTypes }}">
                                            <label for="MakafatTypes">لیست نوع مکافات</label>
                                        </div>


                                        <div class="input-field col s12" align="right">
                                            <ul id="task-card" class="collection with-header">
                                                <li class="collection-header cyan">
                                                    <h5 class="task-card-title">مجازات</h5>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-perm-identity prefix"></i>
                                            <input name="PanishmentList" type="text" data-parsley-required="true" value="{{ $record->PanishmentList }}">
                                            <label for="PanishmentList">لیست مجازات</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-perm-identity prefix"></i>
                                            <input name="PanishmentResone" type="text" data-parsley-required="true" value="{{ $record->PanishmentResone }}">
                                            <label for="PanishmentResone">دلیل</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-perm-identity prefix"></i>
                                            <input name="PanishmentRelatedOfficial" type="text" data-parsley-required="true" value="{{ $record->PanishmentRelatedOfficial }}">
                                            <label for="PanishmentRelatedOfficial">مقام ذیصلاح</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-schedule prefix"></i>
                                            <input name="PanishmentOrderDate" type="text" data-parsley-required="true" value="{{ $record->PanishmentOrderDate }}">
                                            <label for="PanishmentOrderDate">تاریخ صدور حکم</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-perm-identity prefix"></i>
                                            <input name="PanishmentOrderCode" type="text" data-parsley-required="true" value="{{ $record->PanishmentOrderCode }}">
                                            <label for="PanishmentOrderCode">نمبر حکم</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-perm-identity prefix"></i>
                                            <input name="PanishmentType" type="text" data-parsley-required="true" value="{{ $record->PanishmentType }}">
                                            <label for="PanishmentType">لیست نوع مجازات</label>
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
                                <h5 class="card-content white-text">تغیر سطر ها</h5>
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
                                            <form method="POST" action="{{ route('userdocumentation.update',['id'=>$record]) }}" accept-charset="utf-8" class="col s11 right" data-parsley-validate>
                                                {!! csrf_field() !!}
                                                <input name="_method" type="hidden" value="PATCH">

                                                <div class="row" >
                                                    <div class="input-field col s6">
                                                        <i class="mdi-action-perm-identity prefix"></i>
                                                        <input name="id" type="text" data-parsley-required="true" value="{{ $record->id }}">
                                                        <label for="id">شماره</label>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-action-schedule prefix"></i>
                                                        <input name="Date" type="text" data-parsley-required="true" value="{{ $record->Date }}">
                                                        <label for="Date">تاریخ</label>
                                                    </div>

                                                    <div class="input-field col s12">
                                                        <br>
                                                        <ul id="task-card" class="collection with-header">
                                                            <li class="collection-header cyan">
                                                                <h6 class="task-card-title" align="right">فورم خلص سوانح کارکنان خدمات ملکی جهت تکمیل نمودن سوابق غرض تقرر در وظایف جدید تبدیلی انتصابی و تقرر مجدد</h6>
                                                            </li>
                                                        </ul>
                                                        <hr>
                                                        <ul id="task-card" class="collection with-header">
                                                            <li class="collection-header cyan">
                                                                <h5 class="task-card-title" align="right">دکاندید مکمل شهرت/شهرت مکمل دارنده خلص سوانح که کتندید بست ... تحت عنواند ..........</h5>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="input-field col s6">
                                                        <i class="mdi-social-person prefix"></i>
                                                        <input name="name" type="text" data-parsley-required="true" value="{{ $record->name }}">
                                                        <label for="name">نام</label>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-social-person prefix"></i>
                                                        <input name="LastName" type="text" data-parsley-required="true" value="{{ $record->LastName }}">
                                                        <label for="LastName">تخلص</label>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-social-person prefix"></i>
                                                        <input name="FatherName" type="text" data-parsley-required="true" value="{{ $record->FatherName }}">
                                                        <label for="FatherName">نام پدر</label>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-social-person prefix"></i>
                                                        <input name="GrandFatherName" type="text" data-parsley-required="true" value="{{ $record->GrandFatherName }}">
                                                        <label for="GrandFatherName">نامد پدرکلان</label>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-action-schedule prefix"></i>
                                                        <input name="DateOfBirth" type="text" data-parsley-required="true" value="{{ $record->DateOfBirth }}">
                                                        <label for="DateOfBirth">تاریخ تولد</label>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-maps-place prefix"></i>
                                                        <input name="PlaceOfBirth" type="text" data-parsley-required="true" value="{{ $record->PlaceOfBirth }}">
                                                        <label for="PlaceOfBirth">محل تولد</label>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-action-perm-identity prefix"></i>
                                                        <input name="TazkiraNumber" type="text" data-parsley-required="true" value="{{ $record->TazkiraNumber }}">
                                                        <label for="TazkiraNumber">نمبرتذکره</label>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-action-schedule prefix"></i>
                                                        <input name="FirstJobDate" type="text" data-parsley-required="true" value="{{ $record->FirstJobDate }}">
                                                        <label for="FirstJobDate">تاریخ تقرر ابتدایی</label>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-action-perm-identity prefix"></i>
                                                        <input name="StatisticsCode" type="text" data-parsley-required="true" value="{{ $record->StatisticsCode }}">
                                                        <label for="StatisticsCode">کود احسایوی</label>
                                                    </div>

                                                    <div class="input-field col s12" align="right">
                                                        <ul id="task-card" class="collection with-header">
                                                            <li class="collection-header cyan">
                                                                <h5 class="task-card-title">معلومات وظیفه فعلی</h5>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-maps-place prefix"></i>
                                                        <input name="Organization" type="text" data-parsley-required="true" value="{{ $record->Organization }}">
                                                        <label for="Organization">وزارت/اداره</label>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-maps-place prefix"></i>
                                                        <input name="Reyasat" type="text" data-parsley-required="true" value="{{ $record->Reyasat }}">
                                                        <label for="Reyasat">ریاست</label>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-editor-merge-type prefix"></i>
                                                        <input name="JobTitle" type="text" data-parsley-required="true" value="{{ $record->JobTitle }}">
                                                        <label for="JobTitle">عنوان وظیفه</label>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-editor-merge-type prefix"></i>
                                                        <input name="Bast" type="text" data-parsley-required="true" value="{{ $record->Bast }}">
                                                        <label for="Bast">بست</label>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-editor-merge-type prefix"></i>
                                                        <input name="Qadam" type="text" data-parsley-required="true" value="{{ $record->Qadam }}">
                                                        <label for="Qadam">قدم</label>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-action-schedule prefix"></i>
                                                        <input name="RegistrationDate" type="text" data-parsley-required="true" value="{{ $record->RegistrationDate }}">
                                                        <label for="RegistrationDate">تاریخ شمولیت</label>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-content-archive prefix"></i>
                                                        <input name="Position" type="text" data-parsley-required="true" value="{{ $record->Position }}">
                                                        <label for="Position">موقف وظیفوی</label>
                                                    </div>

                                                    <div class="input-field col s12" align="right">
                                                        <ul id="task-card" class="collection with-header">
                                                            <li class="collection-header cyan">
                                                                <h5 class="task-card-title">معلومات تحصیلی و تعلیمی</h5>
                                                            </li>
                                                        </ul>
                                                    </div>


                                                    <div class="input-field col s6">
                                                        <i class="mdi-maps-place prefix"></i>
                                                        <input name="EducationPlace" type="text" data-parsley-required="true" value="{{ $record->EducationPlace }}">
                                                        <label for="EducationPlace">محل تحصیل/کشور</label>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-maps-place prefix"></i>
                                                        <input name="UniversityName" type="text" data-parsley-required="true" value="{{ $record->UniversityName }}">
                                                        <label for="UniversityName">نام موسسه تحصیلی/تعلیمی</label>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-maps-place prefix"></i>
                                                        <input name="EducationLevel" type="text" data-parsley-required="true" value="{{ $record->EducationLevel }}">
                                                        <label for="EducationLevel">درجه تحصیلی/تعلیمی</label>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-maps-place prefix"></i>
                                                        <input name="EducationField" type="text" data-parsley-required="true" value="{{ $record->EducationField }}">
                                                        <label for="EducationField">رشته تحصیلی/تعلیمی</label>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-action-schedule prefix"></i>
                                                        <input name="StartDate" type="text" data-parsley-required="true" value="{{ $record->StartDate }}">
                                                        <label for="StartDate">تاریخ شروع</label>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-action-schedule prefix"></i>
                                                        <input name="EndDate" type="text" data-parsley-required="true" value="{{ $record->EndDate }}">
                                                        <label for="EndDate">تاریخ ختم</label>
                                                    </div>

                                                    <div class="input-field col s12" align="right">
                                                        <ul id="task-card" class="collection with-header">
                                                            <li class="collection-header cyan">
                                                                <h5 class="task-card-title">آموزش های مسلکی مرتبط به وظیفه</h5>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-action-schedule prefix"></i>
                                                        <input name="VocationalStartDate" type="text" data-parsley-required="true" value="{{ $record->VocationalStartDate }}">
                                                        <label for="VocationalStartDate">تاریخ شروع</label>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-action-schedule prefix"></i>
                                                        <input name="VocationalEndDate" type="text" data-parsley-required="true" value="{{ $record->VocationalEndDate }}">
                                                        <label for="VocationalEndDate">تاریخ ختم</label>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-maps-place prefix"></i>
                                                        <input name="OrgName" type="text" data-parsley-required="true" value="{{ $record->OrgName }}">
                                                        <label for="OrgName">نام موسسه آموزیشی</label>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-maps-place prefix"></i>
                                                        <input name="Country" type="text" data-parsley-required="true" value="{{ $record->Country }}">
                                                        <label for="Country">کشور</label>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-maps-place prefix"></i>
                                                        <input name="VocationalEduField" type="text" data-parsley-required="true" value="{{ $record->VocationalEduField }}">
                                                        <label for="VocationalEduField">رشته آموزیشی</label>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-maps-place prefix"></i>
                                                        <input name="Result" type="text" data-parsley-required="true" value="{{ $record->Result }}">
                                                        <label for="Result">نتیجه</label>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-content-archive prefix"></i>
                                                        <input name="BookNumber" type="text" data-parsley-required="true" value="{{ $record->BookNumber }}">
                                                        <label for="BookNumber">درج دفتر سوانح</label>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col s12 m4 l12" align="right">
                                                            <ul id="LanguagesSkills" class="collection with-header">
                                                                <li class="collection-header cyan">
                                                                    <h4 class="task-card-title">مهارت در زبان های بین المللی</h4>
                                                                </li>
                                                                <table>
                                                                    <tr>
                                                                        <td>
                                                                            < class="collection-item dismissable">
                                                                            <input type="checkbox" id="Persion" />
                                                                            <label for="Persion">دری
                                                                            </label>
                                                                            <span class="task-cat teal">خواندن    </span>
                                                                            <select>
                                                                                <option value="" disabled selected>سطح </option>
                                                                                <option value="7">خوب</option>
                                                                                <option value="8">عالی</option>
                                                                                <option value="9">بسیار خوب</option>
                                                                            </select>
                                                                            <span class="task-cat pink">نوشتن   </span>
                                                                            <select>
                                                                                <option value="" disabled selected>سطح </option>
                                                                                <option value="10">خوب</option>
                                                                                <option value="11">عالی</option>
                                                                                <option value="12">بسیار خوب</option>
                                                                            </select>
                                                                            <span class="task-cat cyan">حرف زدن   </span>
                                                                            <select>
                                                                                <option value="" disabled selected>سطح </option>
                                                                                <option value="13">خوب</option>
                                                                                <option value="14">عالی</option>
                                                                                <option value="15">بسیار خوب</option>
                                                                            </select>
                                                                        </td>
                                                                        <br/>
                                                                        <br/>
                                                                        <td>
                                                                            <li class="collection-item dismissable">
                                                                                <input type="checkbox" id="Pashto" />
                                                                                <label for="Pashto">پشتو
                                                                                </label>
                                                                                <span class="task-cat teal">خواندن</span>
                                                                                <select>
                                                                                    <option value="" disabled selected>سطح </option>
                                                                                    <option value="16">خوب</option>
                                                                                    <option value="17">عالی</option>
                                                                                    <option value="18">بسیار خوب</option>
                                                                                </select>
                                                                                <span class="task-cat pink">نوشتن   </span>
                                                                                <select>
                                                                                    <option value="" disabled selected>سطح </option>
                                                                                    <option value="19">خوب</option>
                                                                                    <option value="20">عالی</option>
                                                                                    <option value="21">بسیار خوب</option>
                                                                                </select>
                                                                                <span class="task-cat cyan">حرف زدن   </span>
                                                                                <select>
                                                                                    <option value="" disabled selected>سطح</option>
                                                                                    <option value="22">خوب</option>
                                                                                    <option value="23">عالی</option>
                                                                                    <option value="24">بسیار خوب</option>
                                                                                </select>
                                                                            </li>
                                                                        </td>
                                                                        <td>
                                                                            <li class="collection-item dismissable">
                                                                                <input type="checkbox" id="english" checked="checked" />
                                                                                <label for="english">اینگلیسی
                                                                                </label>
                                                                                <span class="task-cat teal">خواندن    </span>
                                                                                <select>
                                                                                    <option value="" disabled selected>سطح </option>
                                                                                    <option value="25">خوب</option>
                                                                                    <option value="26">عالی</option>
                                                                                    <option value="27">بسیار خوب</option>
                                                                                </select>
                                                                                <span class="task-cat pink">نوشتن   </span>
                                                                                <select>
                                                                                    <option value="" disabled selected>سطح </option>
                                                                                    <option value="28">خوب</option>
                                                                                    <option value="29">عالی</option>
                                                                                    <option value="30">بسیارخوب</option>
                                                                                </select>
                                                                                <span class="task-cat cyan">حرف زدن   </span>
                                                                                <select>
                                                                                    <option value="" disabled selected>سطح </option>
                                                                                    <option value="31">خوب</option>
                                                                                    <option value="32">عالی</option>
                                                                                    <option value="33">بسیار خوب</option>
                                                                                </select>
                                                                            </li>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                                <br>
                                                                <br>
                                                                <br>
                                                                <br>
                                                                <br>
                                                            </ul>
                                                        </div>

                                                        <div class="input-field col s12" align="right">
                                                            <ul id="task-card" class="collection with-header">
                                                                <li class="collection-header cyan">
                                                                    <h5 class="task-card-title">مهارت های مرتبط به وظیفه</h5>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <div class="input-field col s6">
                                                            <i class="mdi-editor-merge-type prefix"></i>
                                                            <input name="JobSkills" type="text" data-parsley-required="true" value="{{ $record->JobSkills }}">
                                                            <label for="JobSkills">نوع مهارت های علمی تخنیکی و افزاری</label>
                                                        </div>

                                                        <div class="input-field col s6">
                                                            <i class="mdi-editor-merge-type prefix"></i>
                                                            <input name="JobSkillLevel" type="text" data-parsley-required="true" value="{{ $record->JobSkillLevel }}">
                                                            <label for="JobSkillLevel">سطح مهارت</label>
                                                        </div>


                                                        <div class="input-field col s12" align="right">
                                                            <ul name="task-card" class="collection with-header">
                                                                <li class="collection-header cyan">
                                                                    <h5 class="task-card-title">تجارب کاری مرتبط به وظیفه</h5>
                                                                </li>
                                                            </ul>
                                                        </div>


                                                        <div class="input-field col s6">
                                                            <i class="mdi-maps-place prefix"></i>
                                                            <input name="ExpOrgName" type="text" data-parsley-required="true" value="{{ $record->ExpOrgName }}">
                                                            <label for="ExpOrgName">وزارت/اداره</label>
                                                        </div>

                                                        <div class="input-field col s6">
                                                            <i class="mdi-editor-merge-type prefix"></i>
                                                            <input name="ExpJobTitle" type="text" data-parsley-required="true" value="{{ $record->ExpJobTitle }}">
                                                            <label for="ExpJobTitle">عنوان وظیفه</label>
                                                        </div>

                                                        <div class="input-field col s6">
                                                            <i class="mdi-editor-merge-type prefix"></i>
                                                            <input name="ExpBast" type="text" data-parsley-required="true" value="{{ $record->ExpBast }}">
                                                            <label for="ExpBast">بست</label>
                                                        </div>

                                                        <div class="input-field col s6">
                                                            <i class="mdi-editor-merge-type prefix"></i>
                                                            <input name="ExpQadam" type="text" data-parsley-required="true" value="{{ $record->ExpQadam }}">
                                                            <label for="ExpQadam">قدم</label>
                                                        </div>

                                                        <div class="input-field col s6">
                                                            <i class="mdi-maps-place prefix"></i>
                                                            <input name="ExpJobPlace" type="text" data-parsley-required="true" value="{{ $record->ExpJobPlace }}">
                                                            <label for="ExpJobPlace">موقیعت وظیفه</label>
                                                        </div>

                                                        <div class="input-field col s6">
                                                            <i class="mdi-action-schedule prefix"></i>
                                                            <input name="ExpStartDate" type="text" data-parsley-required="true" value="{{ $record->ExpStartDate }}">
                                                            <label for="ExpStartDate">تارییخ شروع</label>
                                                        </div>

                                                        <div class="input-field col s6">
                                                            <i class="mdi-action-schedule prefix"></i>
                                                            <input name="ExpEndDate" type="text" data-parsley-required="true" value="{{ $record->ExpEndDate }}">
                                                            <label for="ExpEndDate">تاریخ ختم</label>
                                                        </div>

                                                        <div class="input-field col s6">
                                                            <i class="mdi-editor-merge-type prefix"></i>
                                                            <input name="JobSummary" type="text" data-parsley-required="true" value="{{ $record->JobSummary }}">
                                                            <label for="JobSummary">خلاصه وظایف</label>
                                                        </div>

                                                        <div class="input-field col s12" align="right">
                                                            <ul id="task-card" class="collection with-header">
                                                                <li class="collection-header cyan">
                                                                    <h5 class="task-card-title">معلومات ارزیابی اجراات</h5>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <div class="input-field col s6">
                                                            <i class="mdi-action-schedule prefix"></i>
                                                            <input name="EvlauationDate" type="text" data-parsley-required="true" value="{{ $record->EvlauationDate }}">
                                                            <label for="EvlauationDate">تاریخ ارزیابی</label>
                                                        </div>

                                                        <div class="input-field col s6">
                                                            <i class="mdi-editor-merge-type prefix"></i>
                                                            <input name="EvaluationType" type="text" data-parsley-required="true" value="{{ $record->EvaluationType }}">
                                                            <label for="EvaluationType">نوع ارزیابی</label>
                                                        </div>

                                                        <div class="input-field col s6">
                                                            <i class="mdi-editor-merge-type prefix"></i>
                                                            <input name="MainEvaluationScore" type="text" data-parsley-required="true" value="{{ $record->MainEvaluationScore }}">
                                                            <label for="MainEvaluationScore">نمبر معیاری ارزیابی</label>
                                                        </div>

                                                        <div class="input-field col s6">
                                                            <i class="mdi-editor-merge-type prefix"></i>
                                                            <input name="EvaluationResult" type="text" data-parsley-required="true" value="{{ $record->EvaluationResult }}">
                                                            <label for="EvaluationResult">نتیجه ارزیابی</label>
                                                        </div>

                                                        <div class="input-field col s12" align="right">
                                                            <ul id="task-card" class="collection with-header">
                                                                <li class="collection-header cyan">
                                                                    <h5 class="task-card-title">ترفیعات</h5>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <div class="input-field col s6">
                                                            <i class="mdi-action-perm-identity prefix"></i>
                                                            <input name="OrderNumber" type="text" data-parsley-required="true" value="{{ $record->OrderNumber }}">
                                                            <label for="OrderNumber">نمبر حکم</label>
                                                        </div>

                                                        <div class="input-field col s6">
                                                            <i class="mdi-action-schedule prefix"></i>
                                                            <input name="OrderDate" type="text" data-parsley-required="true" value="{{ $record->OrderDate }}">
                                                            <label for="OrderDate">تاریخ</label>
                                                        </div>

                                                        <div class="input-field col s6">
                                                            <i class="mdi-editor-merge-type prefix"></i>
                                                            <input name="Grade" type="text" data-parsley-required="true" value="{{ $record->Grade }}">
                                                            <label for="Grade">رتبه اعطا شده</label>
                                                        </div>

                                                        <div class="input-field col s6">
                                                            <i class="mdi-editor-merge-type prefix"></i>
                                                            <input name="Assignment" type="text" data-parsley-required="true" value="{{ $record->Assignment }}">
                                                            <label for="Assignment">ملا حضات</label>
                                                        </div>

                                                        <div class="input-field col s12" align="right">
                                                            <ul id="task-card" class="collection with-header">
                                                                <li class="collection-header cyan">
                                                                    <h5 class="task-card-title">مکافات</h5>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <div class="input-field col s6">
                                                            <i class="mdi-action-perm-identity prefix"></i>
                                                            <input name="MakafatIteam" type="text" data-parsley-required="true" value="{{ $record->MakafatIteam }}">
                                                            <label for="MakafatIteam">لیست مکافات</label>
                                                        </div>

                                                        <div class="input-field col s6">
                                                            <i class="mdi-action-perm-identity prefix"></i>
                                                            <input name="Reason" type="text" data-parsley-required="true" value="{{ $record->Reason }}">
                                                            <label for="Reason">دلیل</label>
                                                        </div>

                                                        <div class="input-field col s6">
                                                            <i class="mdi-action-perm-identity prefix"></i>
                                                            <input name="RelatedOfficial" type="text" data-parsley-required="true">
                                                            <label for="RelatedOfficial">مقامذیصلاح مربوطه</label>
                                                        </div>

                                                        <div class="input-field col s6">
                                                            <i class="mdi-action-schedule prefix"></i>
                                                            <input name="OrderPublishDate" type="text" data-parsley-required="true" value="{{ $record->OrderPublishDate }}">
                                                            <label for="OrderPublishDate">تاریخ صدور حکم</label>
                                                        </div>

                                                        <div class="input-field col s6">
                                                            <i class="mdi-action-perm-identity prefix"></i>
                                                            <input name="OrderCodeNumber" type="text" data-parsley-required="true" value="{{ $record->OrderCodeNumber }}">
                                                            <label for="OrderCodeNumber">نمبر حکم</label>
                                                        </div>

                                                        <div class="input-field col s6">
                                                            <i class="mdi-action-perm-identity prefix"></i>
                                                            <input name="MakafatTypes" type="text" data-parsley-required="true" value="{{ $record->MakafatTypes }}">
                                                            <label for="MakafatTypes">لیست نوع مکافات</label>
                                                        </div>


                                                        <div class="input-field col s12" align="right">
                                                            <ul id="task-card" class="collection with-header">
                                                                <li class="collection-header cyan">
                                                                    <h5 class="task-card-title">مجازات</h5>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <div class="input-field col s6">
                                                            <i class="mdi-action-perm-identity prefix"></i>
                                                            <input name="PanishmentList" type="text" data-parsley-required="true" value="{{ $record->PanishmentList }}">
                                                            <label for="PanishmentList">لیست مجازات</label>
                                                        </div>

                                                        <div class="input-field col s6">
                                                            <i class="mdi-action-perm-identity prefix"></i>
                                                            <input name="PanishmentResone" type="text" data-parsley-required="true" value="{{ $record->PanishmentResone }}">
                                                            <label for="PanishmentResone">دلیل</label>
                                                        </div>

                                                        <div class="input-field col s6">
                                                            <i class="mdi-action-perm-identity prefix"></i>
                                                            <input name="PanishmentRelatedOfficial" type="text" data-parsley-required="true" value="{{ $record->PanishmentRelatedOfficial }}">
                                                            <label for="PanishmentRelatedOfficial">مقام ذیصلاح</label>
                                                        </div>

                                                        <div class="input-field col s6">
                                                            <i class="mdi-action-schedule prefix"></i>
                                                            <input name="PanishmentOrderDate" type="text" data-parsley-required="true" value="{{ $record->PanishmentOrderDate }}">
                                                            <label for="PanishmentOrderDate">تاریخ صدور حکم</label>
                                                        </div>

                                                        <div class="input-field col s6">
                                                            <i class="mdi-action-perm-identity prefix"></i>
                                                            <input name="PanishmentOrderCode" type="text" data-parsley-required="true" value="{{ $record->PanishmentOrderCode }}">
                                                            <label for="PanishmentOrderCode">نمبر حکم</label>
                                                        </div>

                                                        <div class="input-field col s6">
                                                            <i class="mdi-action-perm-identity prefix"></i>
                                                            <input name="PanishmentType" type="text" data-parsley-required="true" value="{{ $record->PanishmentType }}">
                                                            <label for="PanishmentType">لیست نوع مجازات</label>
                                                        </div>
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


