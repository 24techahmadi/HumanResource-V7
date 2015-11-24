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
                <form method="POST" action="{{ url('retired') }}" class="col s12" data-parsley-validate>
                    {!! csrf_field() !!}

            <div class="col s12 m12 l12">
              <div class="card-panel">
                <h1 align="center" class="logo-wrapper"><a class="brand-logo darken-1"><img src="{{ URL::asset('assets/images/AF2.png') }}" height="100" width="100" alt="materialize logo" sizes></a></h1>
                <h5 align="center" class="header">جمهوری اسلامی افغانستان</h5>
                <h5 align="center" class="header">وزارت تحصیلات عالی افغانستان</h5>
                <h5 align="center" class="header">ریاست منابع بشری</h5>
                <div class="row">
 
                <div class="input-field col s6">
                          <i class="mdi-action-perm-identity prefix"></i>
                          <input name="AutoNumber" type="text" data-parsley-required="false">
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
                          <input name="Date" type="text" class="datepicker" data-parsley-required="false">
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
                          <input name="OrgCode" type="text" data-parsley-required="false">
                          <label for="OrgCode">کود اداره</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-social-person prefix"></i>
                          <input name="OrgName" type="text" data-parsley-required="false">
                          <label for="OrgName">اداره</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-social-person prefix"></i>
                          <input name="Reyasat" type="text" data-parsley-required="false">
                          <label for="Reyasat">ریاست/آمریت</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-social-person prefix"></i>
                          <input name="Province" type="text" data-parsley-required="false">
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
                          <input name="Photo" type="text" data-parsley-required="false">
                          <label for="Photo">عکس کارکن</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-action-perm-identity prefix"></i>
                          <input name="EmpCardNo" type="text" data-parsley-required="false">
                          <label for="EmpCardNo">نمبر کارت کارکن</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-action-perm-identity prefix"></i>
                          <input name="Rutba" type="text" data-parsley-required="false">
                          <label for="Rutba">رتبه/درجه</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-social-person prefix"></i>
                          <input name="EmpName" type="text" data-parsley-required="false">
                          <label for="EmpName">اسم</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-social-person prefix"></i>
                          <input name="LastName" type="text" data-parsley-required="false">
                          <label for="LastName">تخلص</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-social-person prefix"></i>
                          <input name="FatherName" type="text" data-parsley-required="false">
                          <label for="FatherName">ولد</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-social-person prefix"></i>
                          <input name="GrandfatherName" type="text" data-parsley-required="false">
                          <label for="GrandfatherName">ولدیت</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-action-perm-identity prefix"></i>
                          <input name="TazkeraNo" type="text" data-parsley-required="false">
                          <label for="TazkeraNo">نمبر تذکره</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-social-person prefix"></i>
                          <input name="Juld" type="text" data-parsley-required="false">
                          <label for="Juld">جلد</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-social-person prefix"></i>
                          <input name="Page" type="text" data-parsley-required="false">
                          <label for="Page">صفحه</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-action-schedule prefix"></i>
                          <input name="BirthDate" type="text" class="datepicker" data-parsley-required="false">
                          <label for="BirthDate">تاریخ تولد</label>
                        </div>

                        <div class="input-field col s6">
            <i class="mdi-action-work prefix"></i>
            <label for="Gender" name="Gender">جنس</label>&nbsp;&nbsp;&nbsp;
                      <input name="Gender" checked value="مرد" type="radio" id="test1" />
                      <label for="test1">مرد</label>
                      <input name="Gender" value="زن" type="radio" id="test2" />
                      <label for="test2">زن</label>
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
                          <input name="RepresentiativePhoto" type="text" data-parsley-required="false">
                          <label for="RepresentiativePhoto">عکس وکیل/نماینده</label>
                        </div>


                        <div class="input-field col s6">
                          <i class="mdi-action-perm-identity prefix"></i>
                          <input name="RepRelation" type="text" data-parsley-required="false">
                          <label for="RepRelation">رابطه با کارکن:</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-social-person prefix"></i>
                          <input name="RepName" type="text" data-parsley-required="false">
                          <label for="RepName">اسم</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-social-person prefix"></i>
                          <input name="RepLastName" type="text" data-parsley-required="false">
                          <label for="RepLastName">تخلص</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-social-person prefix"></i>
                          <input name="RepFatherName" type="text" data-parsley-required="false">
                          <label for="RepFatherName">ولد</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-social-person prefix"></i>
                          <input name="RepGrandfatherName" type="text" data-parsley-required="false">
                          <label for="RepGrandfatherName">ولدیت</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-action-perm-identity prefix"></i>
                          <input name="RepTazkeraNumber" type="text" data-parsley-required="false">
                          <label for="RepTazkeraNumber">نمبر تذکره</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-social-person prefix"></i>
                          <input name="RepTazkeraJuld" type="text" data-parsley-required="false">
                          <label for="RepTazkeraJuld">جلد</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-social-person prefix"></i>
                          <input name="RepTazkeraPage" type="text" data-parsley-required="false">
                          <label for="RepTazkeraPage">صفحه</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-action-schedule prefix"></i>
                          <input name="RepBirthDate" type="text" class="datepicker" data-parsley-required="false">
                          <label for="RepBirthDate">تاریخ تولد</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-social-person prefix"></i>
                          <input name="RepKhatNo" type="text" data-parsley-required="false">
                          <label for="RepKhatNo">نمبر وکالت خط</label>
                        </div>

                    <div class="input-field col s6">
                        <i class="mdi-action-work prefix"></i>
                        <label for="RepGender" name="Gender">جنس</label>&nbsp;&nbsp;&nbsp;

                        <input name="RepGender" checked value="مرد" type="radio" id="test3" />
                        <label for="test3">مرد</label>

                        <input name="RepGender" value="زن" type="radio" id="test4" />
                        <label for="test4">زن</label>

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
                          <input name="RequesterCurrentAddress" type="text" class="datepicker" data-parsley-required="false">
                          <label for="RequesterCurrentAddress">آدرس فعلی</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-content-archive prefix"></i>
                          <input name="ReqDestrict" type="text" data-parsley-required="false">
                          <label for="ReqDestrict">ناحیه/ولسوالی</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-content-archive prefix"></i>
                          <input name="ReqProvince" type="text" data-parsley-required="false">
                          <label for="ReqProvince">ولایت</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-content-archive prefix"></i>
                          <input name="ReqPhone" type="text" data-parsley-required="false">
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
                        <i class="mdi-action-work prefix"></i>
                        <label for="SimpleLanguage" name="Gender">زبان مورد نظر</label>
                        <br>
                        <input name="SimpleLanguage" checked value="دری" type="radio" id="dari" />
                        <label for="dari">دری</label>

                        <input name="SimpleLanguage" value="پشتو" type="radio" id="pashto" />
                        <label for="pashto">پشتو</label>

                    </div>

                        <div class="input-field col s12" align="right">
                          <ul id="task-card" class="collection with-header">
                          <li class="collection-header cyan">
                          <h5 class="task-card-title">بخش 6: مقرره ونوع تقاعد</h5>
                          </li>
                          </ul>
                        </div>

                        <div class="input-field col s12">
                            <b > نوع مقرره: </b> <br />
                          <input name="Moqarara" checked value="1378/791" type="radio" id="test7" />
                          <label for="test7">1378/791 مقرره تنظیم حقوق تقاعد کارکنان خدمات ملکی امارت اسلامی افغانستان شماره </label> <br />
                          <input name="Moqarara" value="1388/992" type="radio" id="test8" />
                          <label for="test8">1388/992 مقرره تنظیم حقوق تقاعد کارکنان خدمات ملکی شماره</label><br />
                          <input name="Moqarara" value="1389/1016" type="radio" id="test9" />
                          <label for="test9">1389/1016 مقرره تنظیم حقوق تقاعد افسران بریدملان وساتنمنان شماره</label><br />
                        </div> <br />

                        <div class="input-field col s12">
                            <b ><br />سایر اسنادتقنینی لطفا مشخص نماید</b>
                          <i class="mdi-content-archive prefix"></i>
                          <input name="OtherDocumentation" type="text" data-parsley-required="false">
                          <label for="OtherDocumentation"></label>

                        </div>

                      

                        <div class="input-field col s12">
                            <b > نوع تقاعد: </b> <br />

                          <input name="RetiredType" value="تقاعد عادی" type="radio" id="test10" />
                          <label for="test10">1: تقاعد عادی</label>
                          <input name="RetiredType" value="تقاعد قبل از وقت" type="radio" id="test11" />
                          <label for="test11">2:تقاعدقبل از وقت</label>
                          <input name="RetiredType" value="تقاعد موجل" type="radio" id="test12" />
                          <label for="test12">3:تقاعد موجل</label>
                          <input name="RetiredType" value="انفصال/تنقیص تشکیلاتی" type="radio" id="test13" />
                          <label for="test13">4:انفصال/تنقیص تشکیلاتی</label>
                          <input name="RetiredType" value="معلولیت عادی" type="radio" id="test14" />
                          <label for="test14">5:معلولیت عادی</label>
                          <input name="RetiredType" value="معلولیت مرتبط به کار" type="radio" id="test15" />
                          <label for="test15">6:معلولیت مرتبط به کار</label>
                          <input name="RetiredType" value="فوت عادی" checked type="radio" id="test16" />
                          <label for="test16">7:فوت عادی</label>
                          <input name="RetiredType" value="فوت مرتبط به کار/درجریان کار" type="radio" id="test17" />
                          <label for="test17">8:فوت مرتبط به کار/درجریان وظیفه</label>
                          <input name="RetiredType" value="مفقودیت" type="radio" id="test18" />
                          <label for="test18">9:مفقودیت</label>

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
                          <input name="RetiredDate" type="text" class="datepicker" data-parsley-required="false">
                          <label for="RetiredDate">تاریخ تقاعد</label>
                        </div>

                         <div class="input-field col s6">
                          <i class="mdi-action-schedule prefix"></i>
                          <input name="RetiredNumber" type="text" data-parsley-required="false">
                          <label for="RetiredNumber">نمبر امریه تقاعد/انفصال</label>
                        </div>

                        <div class="input-field col s6">
                        <i class="mdi-action-work prefix"></i>
                        <label name="LikeToRetired">آیا میخواهید حقوق تقاعد خویش را به تعویق اندازید؟</label>
                                    <br>
                          <input name="LikeToRetired" checked value="نخیر" type="radio" id="test19" />
                          <label for="test19">نخیر</label>
                          <input name="LikeToRetired" value="بلی اجباری" type="radio" id="test20" />
                          <label for="test20">بلی اجباری</label>
                          <input name="LikeToRetired" value="بلی داواطلبانه" type="radio" id="test21" />
                          <label for="test21">بلی داواطلبانه</label>

                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-action-schedule prefix"></i>
                          <input name="IfyesdDate" type="text" class="datepicker" data-parsley-required="false">
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
                          <input name="SurviverName" type="text" data-parsley-required="false">
                          <label for="SurviverName">اسم</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-social-person prefix"></i>
                          <input name="SurLastName" type="text" data-parsley-required="false">
                          <label for="SurLastName">تخلص</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-social-person prefix"></i>
                          <input name="SurFatherName" type="text" data-parsley-required="false">
                          <label for="SurFatherName">ولد</label>
                        </div>

                    <div class="input-field col s6">
                        <i class="mdi-social-person prefix"></i>
                        <input name="SurRelation" type="text" data-parsley-required="false">
                        <label for="SurRelation">رابطه</label>
                    </div>

                        <div class="input-field col s6">
                          <i class="mdi-social-person prefix"></i>
                          <input name="SurAge" type="text" data-parsley-required="false">
                          <label for="SurAge">سن</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-social-person prefix"></i>
                          <input name="SurStatues" type="text" data-parsley-required="false" data-parsley-required="false">
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
                          <input name="JusName" type="text" data-parsley-required="false">
                          <label for="JusName">اسم</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-action-perm-identity prefix"></i>
                          <input name="JusWorkName" type="text" data-parsley-required="false">
                          <label for="JusWorkName">کارکن/وکیل شرعی</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-action-perm-identity prefix"></i>
                          <input name="JusprofisionalName" type="text" data-parsley-required="false">
                          <label for="JusprofisionalkName">کارکن کدر پرسونل/منابع بشری</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-action-perm-identity prefix"></i>
                          <input name="JusheadkName" type="text" data-parsley-required="false">
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
                          <input name="DocDate" type="text" class="datepicker" data-parsley-required="false">
                          <label for="DocDate">تاریخ تسلیم دهی</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-action-perm-identity prefix"></i>
                          <input name="DocCodeNumber" type="text" data-parsley-required="false">
                          <label for="DocCodeNumber">نمبر تثبیت</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-action-perm-identity prefix"></i>
                          <input name="DocExportNumber" type="text" data-parsley-required="false">
                          <label for="DocExportNumber">نمبر صدور</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-action-perm-identity prefix"></i>
                          <input name="HRF04Number" type="text" data-parsley-required="false">
                          <label for="HRF04Number">نمبر فورم مربوط به HRF-04</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-action-perm-identity prefix"></i>
                          <input name="HRF05Number" type="text" data-parsley-required="false">
                          <label for="HRF05Number">نمبر فورم مربوط به HRF-05</label>
                        </div>


                        <div class="input-field col s12">
                          <button class="btn cyan waves-effect waves-light right" type="submit" name="submit">Create                          <i class="mdi-content-send right"></i>
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
              </section>





  </div>
  @stop
</body>

