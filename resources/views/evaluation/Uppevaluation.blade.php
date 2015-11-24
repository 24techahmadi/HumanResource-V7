@extends('layouts.EvaluationLayout')

@section('title')
  HR | فورم ارزیابی مامور خدمات ملکی

@stop
  <link rel="icon" href="{{ URL::asset('assets/images/favicon/favicon-32x32.png') }}" sizes="32x32">

  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="{{ URL::asset('assets/images/favicon/apple-touch-icon-152x152.png') }}">
<meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">


<body>


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
                <h5 class="breadcrumbs-title" align="right">فورم ها</h5>
                <ol class="breadcrumb"  >
                  <li><a href="evaluation">دشبورد</a>
                  </li>
                 
                  <li class="active" >فورم ارزیابی مامور خدمات ملکی</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->
          @section('content')
         <h1 class="header" align="right">فورم ارزیابی مامور خدمات ملکی</h1>

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
                           <input id="Name" type="text" class="validate">
                          <label for="Name">نام</label>
                        </div>
            
            <div class="input-field col s6" align="right">
            <i class="mdi-social-person prefix"></i>
                          <input id="FatherName" type="text" class="validate">
                          <label for="FatherName">نام پدر</label>
                        </div>
            
                        <div class="input-field col s6" align="right">
                        <i class="mdi-social-person prefix"></i>
                          <input id="GrandFatherName" type="text" class="validate">
                          <label for="GrandFatherName">نام پدر کلان</label>
                        </div>
            
            <div class="input-field col s6" align="right">
            <i class="mdi-action-schedule prefix"></i>
                          <input id="BirthDate" type="date" class="datepicker">
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
                          <input id="EucationField" type="text" class="validate">
                          <label for="EucationField">رشته تحصیلی</label>

                        </div>
            
            <div class="input-field col s6">
            <i class="mdi-action-schedule prefix"></i>
                          <input id="PrimaryRegDate" type="date" class="datepicker">
                          <label for="PrimaryRegDate">تاریخ تقرر ابتدایی</label>
                        </div>
            
            <div class="input-field col s6">
            <i class="mdi-action-schedule prefix"></i>
                          <input id="CompetitionRegDate" type="date" class="datepicker">
                          <label for="CompetitionRegDate">تاریخ تقرر از طریق رقابت</label>
                        </div>

            <div class="input-field col s6">
        <i class="mdi-maps-directions-walk prefix"></i>
                          <input id="Jobrelatedtranings" type="text" class="validate">
                          <label for="Jobrelatedtranings">آموزش های وظیفوی</label>
                        </div>
            
      
        <div class="input-field col s6">
        <i class="mdi-maps-directions-walk prefix"></i>
                          <input id="Qadam" type="text" class="validate">
                          <label for="Qadam">قدم</label>
                        </div>
            
            <div class="input-field col s6">
              <i class="mdi-editor-merge-type prefix"></i>
              <label for="Bast">بست</label>
              
                          <select>
                                <option value="" disabled selected></option>
                                  <option value="1">8</option>
                                  <option value="2">7</option>
                                  <option value="2">6</option>
                                  <option value="3">5</option>
                                  <option value="4">4</option>
                                  <option value="5">3</option>
                                  <option value="4">2</option>
                                  <option value="5">1</option>
                          </select>
              </div>
            
            <div class="input-field col s6">
            <i class="mdi-editor-merge-type prefix"></i>
                          <input id="BastTitle" type="text" class="validate">
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
                          <input id="Ministry" type="text" class="validate">
                          <label for="Ministry">وزارت</label>
                        </div>

                        <div class="input-field col s6">
              <i class="mdi-maps-place prefix"></i>
                          <input id="Reysat" type="text" class="validate">
                          <label for="Reysat">ریاست</label>
                        </div>

                        <div class="input-field col s6">
              <i class="mdi-maps-place prefix"></i>
                          <input id="Moderiat" type="text" class="validate">
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
                          <input id="QadamPayment" type="text" class="validate">
                          <label for="QadamPayment">مزد قدم بست به افغانی</label>
                        </div>

                        <div class="input-field col s6">
            <i class="mdi-action-info-outline prefix"></i>
                          <input id="OtherPayment" type="text" class="validate">
                          <label for="OtherPayment">سایر امتیازات وظیفوی به افغانی</label>
                        </div>


                        <div class="input-field col s6">
            <i class="mdi-action-info-outline prefix"></i>
                          <input id="SalaryTotal" type="text" class="validate">
                          <label for="SalaryTotal">مجموع مزد و امتیازات به افغانی</label>
                        </div>
            
            <div class="input-field col s6">
            <i class="mdi-action-info-outline prefix"></i>
                          <input id="Responsibility" type="text" class="validate">
                          <label for="Responsibility">وظایف بست طبق لایحه</label>
                        </div>
            
            <div class="input-field col s6">
            <i class="mdi-editor-merge-type prefix"></i>
                          <input id="AccomplishmentType" type="text" class="validate">
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
                          <input id="WorkPlane" type="text" class="validate">
                          <label for="WorkPlane">پلان کار</label>
                        </div>

                        <div class="input-field col s6">
            <i class="mdi-action-receipt prefix"></i>
                          <input id="AccomplishmentType" type="text" class="validate">
                          <label for="AccomplishmentType">چگونگی اجرات</label>
                        </div>

            
            <div class="input-field col s6">
            <i class="mdi-action-receipt prefix"></i>
                          <input id="AnnualAccomplishmentType" type="text" class="validate">
                          <label for="AnnualAccomplishmentType">چگونگی اجرات انجام شده طبق راپور سالانه</label>
                        </div>

                        <div class="input-field col s6">
            <i class="mdi-action-receipt prefix"></i>
                          <input id="AnAccomplishmentResons" type="text" class="validate">
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
                          <input id="TotalOfScore" type="text" class="validate">
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
                          <input id="OfficialName" type="text" class="validate">
                          <label for="OfficialName">اسم</label>
                        </div>
                        <div class="input-field col s6">
                        <i class="mdi-action-schedule prefix"></i>
                          <input id="OfficialDate" type="date" class="datepicker">
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
                          <input id="HeadManagerName" type="text" class="validate">
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
                          <input id="OfficialName2" type="text" class="validate">
                          <label for="OfficialName2">نمره پلان کار سالانه</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-social-person prefix"></i>
                          <input id="OfficialName3" type="text" class="validate">
                          <label for="OfficialName3">نمره معیارهای اضافی</label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-social-person prefix"></i>
                          <input id="OfficialName4" type="text" class="validate">
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
                          <input id="HeadManagerName1" type="text" class="validate">
                          <label for="HeadManagerName1">اسم آمر مستقیم</label>
                        </div>

                        <div class="input-field col s6">
            <i class="mdi-social-person prefix"></i>
                          <input id="HeadManagerName2" type="text" class="validate">
                          <label for="HeadManagerName2">اسم آمر مافوق</label>
                        </div>
                          </li>
                          </ul>
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
          </div></div></section></div></div>
</body>

