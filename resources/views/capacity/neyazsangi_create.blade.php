@extends('layouts.CapacityLayout')

@section('title')
  HR | فورم پرسشنامه نیاز سنجی

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

                        <!-- Dropdown Trigger -->                        

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
                  <li><a href="capacitybuilding">دشبورد</a>
                  </li>
                  <li class="active">فورم پرسشنامه نیاز سنجی</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->
          @section('content')
         <h1 class="header" align="right">فورم پرسشنامه نیاز سنجی آموزیشی کارمندان</h1>

            <!--Input fields-->
          <form method="POST" action="{{ url('neyazsangi') }}" class="col s12" data-parsley-validate>
                  {!! csrf_field() !!}
            <div class="row">
            <div class="col s12 m12 l12">
              <div class="card-panel">
                <h1 align="center" class="logo-wrapper"><a class="brand-logo darken-1"><img src="{{ URL::asset('assets/images/AF2.png') }}" height="100" width="100" alt="materialize logo" sizes></a></h1>
                <h5 align="center" class="header">جمهوری اسلامی افغانستان</h5>
                <h5 align="center" class="header">وزارت تحصیلات عالی افغانستان</h5>
                <h5 align="center" class="header">ریاست منابع بشری</h5>
                <hr>
                <div class="row">

                <div class="input-field col s12" align="right">
                          <ul id="task-card" class="collection with-header">
                          <li class="collection-header cyan">
                          <h5 class="task-card-title">مرکز وزارت تحصیلات عالی</h5>
                          </li>
                          </ul>
                        </div>

                        <div class="input-field col s12" align="right">
                          <ul id="task-card" class="collection with-header">
                          <li class="collection-header cyan">
                          <h4 class="task-card-title">شهرت کارمند</h4>
                          </li>
                          </ul>
                        </div>

                        
						<div class="input-field col s6">
            <i class="mdi-social-person prefix"></i>
                          <input name="Name" type="text" data-parsley-required="true">
                          <label for="Name">اسم</label>
						  </div>
                    <div class="input-field col s6">
                        <i class="mdi-social-person prefix"></i>
                        <input name="FatherName" type="text" data-parsley-required="true">
                        <label for="FatherName">نام پدر</label>
                    </div>

              
						<div class="input-field col s6">
            <i class="mdi-social-school prefix"></i>
            <br/>
                           <select name="EducationLevel" data-parsley-required="true">
                                <option value=""  disabled selected>درجه تحصیل</option>
                                  <option value="فارغ 12">فارغ 12</option>
                                  <option value="14 پاس">14 پاس</option>
                                  <option value="لسانس">لسانس</option>
                                  <option value="ماستر">ماستر</option>
                                  <option value="دکتورا">دکتورا</option>
                          </select>
                        </div>

                        <div class="input-field col s6">
            <i class="mdi-social-school prefix"></i>
                          <input name="University" type="text" data-parsley-required="true">
                          <label for="University">موسسه تحصیلی</label>
              </div>

                        <div class="input-field col s6">
            <i class="mdi-action-work prefix"></i>
                          <input name="CurrentJob" type="text" data-parsley-required="true">
                          <label for="CurrentJob">وظیفه فعلی</label>
                        </div>
            
						
						<div class="input-field col s6">
            <i class="mdi-communication-messenger prefix"></i>
                          <input name="Experience" type="text" data-parsley-required="true">
                          <label for="Experience">تجربه کاری</label>
                        </div>
						
						<div class="input-field col s6">
             <i class="mdi-communication-location-on prefix"></i>
                          <input name="Reyasat" type="text" data-parsley-required="true">
                          <label for="Reyasat">ریاست/آمریت</label>
                        </div>

						<div class="input-field col s6">
             <i class="mdi-action-home prefix"></i>
                          <input name="Province" type="text" data-parsley-required="true">
                          <label for="Province">ولایت</label>
                        </div>
						<div class="input-field col s6">
              <i class="mdi-communication-call Large prefix"></i>
                          <input name="Phone" type="text" data-parsley-required="true">
                          <label for="Phone">شماره تماس</label>
                        </div>

                        <div class="input-field col s12" align="right">
                          <ul id="task-card" class="collection with-header">
                          <li class="collection-header cyan">
                          <h4 class="task-card-title">:پرسش ها برای آمرین</h4>
                          </li>
                          </ul>
                        </div>

                        <div class="input-field col s12">
              <i class="mdi-communication-call Large prefix"></i>
                          <input name="q1" type="text" data-parsley-required="true">
                          <label for="q1">1. وظایف و فعالیت های عمده ایکه دیپارتمنت شما انجام میدهد کدام ها اند؟</label>
                        </div>
                        <div class="input-field col s12">
              <i class="mdi-communication-call Large prefix"></i>
                          <input name="q2" type="text" data-parsley-required="true">
                          <label for="q2">2. به مشکلاتی که مامورین شما در جریان وظیفه تا حال برخورده اند نام ببرید؟</label>
                        </div>
                        <div class="input-field col s12">
              <i class="mdi-communication-call Large prefix"></i>
                          <input name="q3" type="text" data-parsley-required="true">
                          <label for="q3">3. بنظر شما راه بیرون رفت از ین مشکلات چه خواهد بود؟</label>
                        </div>
                        <div class="input-field col s12">
              <i class="mdi-communication-call Large prefix"></i>
                          <input name="q4" type="text" data-parsley-required="true" >
                          <label for="q4">4. جهت رفع مشکلات ویا بهبود کار کدام برنامه های آموزیشی راکه مرتبط به وظیفه مامورین تان باشد پیشنهاد مینمایید؟</label>
                        </div>
  
						

                         <div class="input-field col s12">
                          <button class="btn cyan waves-effect waves-light right" type="submit" name="submit">Create
                            <i class="mdi-content-send right"></i>
                          </button>
                        </div>
            
            
                        </div>
          
                        </div>
                        </div>
                        </div>
          </form>
    </div>
  </div>

          @stop
</body>

