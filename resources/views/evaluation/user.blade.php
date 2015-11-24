@extends('layouts.EvaluationLayout')

@section('title')
  HR | فورم خلص سوانح کارکنان خدمات ملکی
 
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

      

      <!-- //////////////////////////////////////////////////////////////////////////// -->

      <!-- START CONTENT -->
      <section id="content">

        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper" class=" grey lighten-3">
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12" align="right">
                <h5 class="breadcrumbs-title">فورماه</h5>
                <ol class="breadcrumb">
                  <li><a href="evaluation">دشبورد</a>
                  </li>
                  <li><a href="#">فورم ها</a>
                  </li>
                  <li class="active">فورم خلص سوانح کارکنان خدمات ملکی</li>
                </ol>
              </div>
            </div> 
          </div>
        </div>
        <!--breadcrumbs end-->
          @section('content')
         <h1 class="header" align="right">فورم خلص سوانح کارکنان خدمات ملکی</h1>

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
                      <div class="row">
                         <div class="input-field col s6">
                        <i class="mdi-action-perm-identity prefix"></i>
                          <input id="id" type="text" class="validate">
                          <label for="id">شماره</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-action-schedule prefix"></i>
                          <input id="Date" type="date" class="datepicker">
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
                          <input id="name" type="text" class="validate">
                          <label for="name">نام</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-social-person prefix"></i>
                          <input id="LastName" type="text" class="validate">
                          <label for="LastName">تخلص</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-social-person prefix"></i>
                          <input id="FatherName" type="text" class="validate">
                          <label for="FatherName">نام پدر</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-social-person prefix"></i>
                          <input id="GrandFatherName" type="text" class="validate">
                          <label for="GrandFatherName">نامد پدرکلان</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-action-schedule prefix"></i>
                          <input id="DateOfBirth" type="date" class="datepicker">
                          <label for="DateOfBirth">تاریخ تولد</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-maps-place prefix"></i>
                          <input id="PlaceOfBirth" type="text" class="validate">
                          <label for="PlaceOfBirth">محل تولد</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-action-perm-identity prefix"></i>
                          <input id="TazkiraNumber" type="text" class="validate">
                          <label for="TazkiraNumber">نمبرتذکره</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-action-schedule prefix"></i>
                          <input id="FirstJobDate" type="text" class="datepicker">
                          <label for="FirstJobDate">تاریخ تقرر ابتدایی</label>
                        </div>
            
                        <div class="input-field col s6">
                          <i class="mdi-action-perm-identity prefix"></i>
                          <input id="StatisticsCode" type="text">
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
                          <input id="Organization" type="text" class="validate">
                          <label for="Organization">وزارت/اداره</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-maps-place prefix"></i>
                          <input id="Reyasat" type="text" class="validate">
                          <label for="Reyasat">ریاست</label>
                        </div>
            
                        <div class="input-field col s6">
                          <i class="mdi-editor-merge-type prefix"></i>
                          <input id="JobTitle" type="text" class="validate">
                          <label for="JobTitle">عنوان وظیفه</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-editor-merge-type prefix"></i>
                          <input id="Bast" type="text" class="validate">
                          <label for="Bast">بست</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-editor-merge-type prefix"></i>
                          <input id="Qadam" type="text" class="validate">
                          <label for="Qadam">قدم</label>
                        </div>
  
                        <div class="input-field col s6">
                          <i class="mdi-action-schedule prefix"></i>
                          <input id="RegistrationDate" type="text" class="datepicker">
                          <label for="RegistrationDate">تاریخ شمولیت</label>
                        </div>
            
                        <div class="input-field col s6">
                          <i class="mdi-content-archive prefix"></i>
                          <input id="Position" type="text" class="validate">
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
                          <input id="EducationPlace" type="text" class="validate">
                          <label for="EducationPlace">محل تحصیل/کشور</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-maps-place prefix"></i>
                          <input id="UniversityName" type="text" class="validate">
                          <label for="UniversityName">نام موسسه تحصیلی/تعلیمی</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-maps-place prefix"></i>
                          <input id="EducationLevel" type="text" class="validate">
                          <label for="EducationLevel">درجه تحصیلی/تعلیمی</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-maps-place prefix"></i>
                          <input id="EducationField" type="text" class="validate">
                          <label for="EducationField">رشته تحصیلی/تعلیمی</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-action-schedule prefix"></i>
                          <input id="StartDate" type="date" class="datepicker">
                          <label for="StartDate">تاریخ شروع</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-action-schedule prefix"></i>
                          <input id="EndDate" type="date" class="datepicker">
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
                          <input id="VocationalStartDate" type="date" class="datepicker">
                          <label for="VocationalStartDate">تاریخ شروع</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-action-schedule prefix"></i>
                          <input id="VocationalEndDate" type="date" class="datepicker">
                          <label for="VocationalEndDate">تاریخ ختم</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-maps-place prefix"></i>
                          <input id="OrgName" type="text" class="validate">
                          <label for="OrgName">نام موسسه آموزیشی</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-maps-place prefix"></i>
                          <input id="Country" type="text" class="validate">
                          <label for="Country">کشور</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-maps-place prefix"></i>
                          <input id="VocationalEduField" type="text" class="validate">
                          <label for="VocationalEduField">رشته آموزیشی</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-maps-place prefix"></i>
                          <input id="Result" type="text" class="validate">
                          <label for="Result">نتیجه</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-content-archive prefix"></i>
                          <input id="BookNumber" type="text" class="validate">
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
                          <li class="collection-item dismissable">
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
                          <option value="" disabled selected style="position: z-20">سطح </option>
                          <option value="13">خوب</option>
                          <option value="14">عالی</option>
                          <option value="15">بسیار خوب</option>
                          </select>
                          </li> 
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
                          <input id="JobSkills" type="text" class="validate">
                          <label for="JobSkills">نوع مهارت های علمی تخنیکی و افزاری</label>
                        </div>
            
                        <div class="input-field col s6">
                          <i class="mdi-editor-merge-type prefix"></i>
                          <input id="JobSkillLevel" type="text" class="validate">
                          <label for="JobSkillLevel">سطح مهارت</label>
                        </div>
            

                        <div class="input-field col s12" align="right">
                          <ul id="task-card" class="collection with-header">
                          <li class="collection-header cyan">
                          <h5 class="task-card-title">تجارب کاری مرتبط به وظیفه</h5>
                          </li>
                          </ul>
                        </div>
            

                        <div class="input-field col s6">
                          <i class="mdi-maps-place prefix"></i>
                          <input id="ExpOrgName" type="text" class="validate">
                          <label for="ExpOrgName">وزارت/اداره</label>
                        </div>
            
                        <div class="input-field col s6">
                          <i class="mdi-editor-merge-type prefix"></i>
                          <input id="ExpJobTitle" type="text" class="validate">
                          <label for="ExpJobTitle">عنوان وظیفه</label>
                        </div>
            
                        <div class="input-field col s6">
                          <i class="mdi-editor-merge-type prefix"></i>
                          <input id="ExpBast" type="text" class="validate">
                          <label for="ExpBast">بست</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-editor-merge-type prefix"></i>
                          <input id="ExpQadam" type="text" class="validate">
                          <label for="ExpQadam">قدم</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-maps-place prefix"></i>
                          <input id="ExpJobPlace" type="text" class="validate">
                          <label for="ExpJobPlace">موقیعت وظیفه</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-action-schedule prefix"></i>
                          <input id="ExpStartDate" type="date" class="datepicker">
                          <label for="ExpStartDate">تارییخ شروع</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-action-schedule prefix"></i>
                          <input id="ExpEndDate" type="date" class="datepicker">
                          <label for="ExpEndDate">تاریخ ختم</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-editor-merge-type prefix"></i>
                          <input id="JobSummary" type="text" class="validate">
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
                          <input id="EvlauationDate" type="date" class="datepicker">
                          <label for="EvlauationDate">تاریخ ارزیابی</label>
                        </div>
            
                        <div class="input-field col s6">
                          <i class="mdi-editor-merge-type prefix"></i>
                          <input id="EvaluationType" type="text" class="validate">
                          <label for="EvaluationType">نوع ارزیابی</label>
                        </div>
            
                        <div class="input-field col s6">
                          <i class="mdi-editor-merge-type prefix"></i>
                          <input id="MainEvaluationScore" type="text" class="validate">
                          <label for="MainEvaluationScore">نمبر معیاری ارزیابی</label>
                        </div>
            
                        <div class="input-field col s6">
                          <i class="mdi-editor-merge-type prefix"></i>
                          <input id="EvaluationResult" type="text" class="validate">
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
                          <input id="OrderNumber" type="text" class="validate">
                          <label for="OrderNumber">نمبر حکم</label>
                        </div>
            
                        <div class="input-field col s6">
                          <i class="mdi-action-schedule prefix"></i>
                          <input id="OrderDate" type="date" class="datepicker">
                          <label for="OrderDate">تاریخ</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-editor-merge-type prefix"></i>
                          <input id="Grade" type="text" class="validate">
                          <label for="Grade">رتبه اعطا شده</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-editor-merge-type prefix"></i>
                          <input id="Assignment" type="text" class="validate">
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
                          <input id="MakafatIteam" type="text" class="validate">
                          <label for="MakafatIteam">لیست مکافات</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-action-perm-identity prefix"></i>
                          <input id="Reason" type="text" class="validate">
                          <label for="Reason">دلیل</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-action-perm-identity prefix"></i>
                          <input id="RelatedOfficial" type="text" class="validate">
                          <label for="RelatedOfficial">مقامذیصلاح مربوطه</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-action-schedule prefix"></i>
                          <input id="OrderPublishDate" type="date" class="datepicker">
                          <label for="OrderPublishDate">تاریخ صدور حکم</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-action-perm-identity prefix"></i>
                          <input id="OrderCodeNumber" type="text" class="validate">
                          <label for="OrderCodeNumber">نمبر حکم</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-action-perm-identity prefix"></i>
                          <input id="MakafatTypes" type="text" class="validate">
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
                          <input id="PanishmentList" type="text" class="validate">
                          <label for="PanishmentList">لیست مجازات</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-action-perm-identity prefix"></i>
                          <input id="PanishmentResone" type="text" class="validate">
                          <label for="PanishmentResone">دلیل</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-action-perm-identity prefix"></i>
                          <input id="PanishmentRelatedOfficial" type="text" class="validate">
                          <label for="PanishmentRelatedOfficial">مقام ذیصلاح</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-action-schedule prefix"></i>
                          <input id="PanishmentOrderDate" type="date" class="datepicker">
                          <label for="PanishmentOrderDate">تاریخ صدور حکم</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-action-perm-identity prefix"></i>
                          <input id="PanishmentOrderCode" type="text" class="validate">
                          <label for="PanishmentOrderCode">نمبر حکم</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-action-perm-identity prefix"></i>
                          <input id="PanishmentType" type="text" class="validate">
                          <label for="PanishmentType">لیس نوع مجازات</label>
                        </div>
            
                        <div class="input-field col s12">
                          <button class="btn cyan waves-effect waves-light right" type="submit" name="action">تایید
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

