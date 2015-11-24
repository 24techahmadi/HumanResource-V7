@extends('layouts.EvaluationLayout')

@section('title')
  HR | فورم ارزیابی اجراات بست های (7و8) کار کنان خدمات ملکی

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
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title" align="right">فورم ها</h5>
                <ol class="breadcrumb" align="right">
                  <li><a href="evaluation" >دشبورد</a>
                  </li>
                  
                  <li class="active" align="right">فورم ارزیابی اجراات بست های (7و8) کار کنان خدمات ملکی</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->
          @section('content')
         <h2 class="header" align="right">فورم ارزیابی اجراات بست های (7و8) کار کنان خدمات ملکی</h2>
 
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
                  <form class="col s12">
                      <div class="row">

                      <div class="input-field col s12">
                          <ul id="task-card" class="collection with-header">
                          <li class="collection-header cyan">
                          <h5 class="task-card-title" align="center">فورم ارزیابی اجراات بست های (7و8) کار کنان خدمات ملکی</h5>
                          </li>
                          </ul>
                        </div>

                        <div class="input-field col s6">
                        <i class="mdi-social-location-city prefix"></i>
                          <input id="Ministry" type="text" class="validate">
                          <label for="Ministry">وزارت/اداره/ولایت</label>
                        </div>
            
            <div class="input-field col s6">
            <i class="mdi-social-location-city prefix"></i>
                          <input id="Reyasat" type="text" class="validate">
                          <label for="Reyasat">ریاست</label>
                        </div>
            
                        <div class="input-field col s6">
                        <i class="mdi-social-location-city prefix"></i>
                          <input id="Moderyat" type="text" class="validate">
                          <label for="Moderyat">مدیریت</label>
                        </div>

                        <div class="input-field col s12">
                          <ul id="task-card" class="collection with-header">
                          <li class="collection-header cyan">
                          <h5 class="task-card-title" align="right">بخش اول: شهرت کارکنان ارزیابی شونده توسط منابع بشری خانه پری میگردد</h5>
                          </li>
                          </ul>
                        </div>
            
            <div class="input-field col s6">
            <i class="mdi-social-person prefix"></i>
                          <input id="Name" type="text" class="validate">
                          <label for="Name">نام</label>
                        </div>

                        <div class="input-field col s6">
              <i class="mdi-social-person prefix"></i>
                          <input id="FatherName" type="text" class="validate">
                          <label for="FatherName">نام پدر</label>
                        </div>
              
              <div class="input-field col s6">
              <i class="mdi-social-person prefix"></i>
                          <input id="LastName" type="text" class="validate">
                          <label for="LastName">تخلص</label>
              </div>
              
              
            
            <div class="input-field col s6">
            <i class="mdi-social-person prefix"></i>
                          <input id="CurrentPositionDuration" type="text" class="validate">
                          <label for="CurrentPositionDuration">مدت اجرای وظیفه زیر دست آمر فعلی</label>
                        </div>

            
            <div class="input-field col s6">
            <i class="mdi-editor-merge-type prefix"></i>
                          <input id="EvaluationType" type="text" class="validate">
                          <label for="EvaluationType">نوع ارزیابی</label>
                        </div>

                        <div class="input-field col s6">
            <i class="mdi-action-schedule prefix"></i>
                          <input id="LastEvaluationDate" type="date" class="datepicker">
                          <label for="LastEvaluationDate">تاریخ ارزیابی قبلی</label>
                        </div>

            <div class="input-field col s6">
            <i class="mdi-action-info-outline prefix"></i>
                          <input id="LastEvaluationResult" type="text" class="validate">
                          <label for="LastEvaluationResult">نتیجه ارزیابی قبلی</label>
              </div>

              
                            <div class="input-field col s6">
            <i class="mdi-editor-merge-type prefix"></i>
            <label for="EmployeeType">نوع کامند</label>
            <br>
                            <div class="col s12 m8 l9">
                  <form action="#">
                    <p>
                      <input name="group2" type="radio" id="test37" />
                      <label for="test37">کارکن فنی</label>
                    </p>
                    <p>
                      <input name="group2" type="radio" id="test38" />
                      <label for="test38">کاکن غیر فنی</label>
                    </p> 
                  </form>
                </div>
                </div>

                        <div class="input-field col s6">
              <i class="mdi-editor-merge-type prefix"></i>
              <label for="CurrentBast">بست فعلی</label>
              <br>
                          <select>
                                <option value="" disabled selected></option>
                                  <option value="1">8</option>
                                  <option value="2">7</option>
                                  <option value="3">6</option>
                                  <option value="4">5</option>
                                  <option value="5">4</option>
                                  <option value="6">3</option>
                                  <option value="7">2</option>
                                  <option value="8">1</option>
                          </select>
              </div>

                        <div class="input-field col s6">
              <i class="mdi-editor-merge-type prefix"></i>
              <label for="CurrentStep">قدم فعلی</label>
              <br>
                          <select>
                                <option value="" disabled selected></option>
                                  <option value="1">8</option>
                                  <option value="2">7</option>
                                  <option value="3">6</option>
                                  <option value="4">5</option>
                                  <option value="5">4</option>
                                  <option value="6">3</option>
                                  <option value="7">2</option>
                                  <option value="8">1</option>
                          </select>
              </div>
                  
                  <div class="input-field col s12">
                          <ul id="task-card" class="collection with-header">
                          <li class="collection-header cyan">
                          <h5 class="task-card-title" align="right">بخش دوم: ارزیابی اجراات و مهارت های کارکنان بست های 7 و 8 توسط آمر مستقیم کارکن ارزیابی شوند</h5>
                          </li>
                          </ul>
                        </div>

                       
                          <div class="input-field col s6">
                          <p>1. توانایی انجام کار گروپی: چگونگی روش کارکن نسبت به کارکنان واحد مربوط و انجام کار همرای دیگران یا برای دیگران</p>
                          </div>

                          <div class="input-field col s6">
            <i class="mdi-social-person prefix"></i>
                          <input id="GroupWork" type="text" class="validate">
                          <label for="GroupWork">نمره دهی از 1 الی 10 نمره</label>
                        </div>
  
                          <div class="input-field col s6">
                          <p>2. سطح رضایتمندی دریافت کننده گان خدمات: اریه خدمات یکسان و با کیفیت برای همه تطبیق هدا یات و اوامر قانونی کار کنان واحد مربوط</p>
                          </div>

                          <div class="input-field col s6">
            <i class="mdi-social-person prefix"></i>
                          <input id="RecieverSatisification" type="text" class="validate">
                          <label for="RecieverSatisification">نمره دهی از 1 الی 10 نمره</label>
                        </div>

                          <div class="input-field col s6">
                          <p>3. داشتن معلومات تخنیکی: درک طرزالعمل ها تخنیک ها و رهنمود های مرتبط به اجرای وظیفه</p>
                          </div>

                          <div class="input-field col s6">
            <i class="mdi-social-person prefix"></i>
                          <input id="TechnicalInformation" type="text" class="validate">
                          <label for="TechnicalInformation">نمره دهی از 1 الی 10 نمره</label>
                        </div>
                          
                          <div class="input-field col s6">
                          <p>4. داشتن مهارت های تخنیکی: توا نایی استفاده از وسایل و تجهیزات و مبذول داشتن توجه درست به آنها و استفاده از تخنیک</p>
                          </div>

                          <div class="input-field col s6">
            <i class="mdi-social-person prefix"></i>
                          <input id="TechnicalExperts" type="text" class="validate">
                          <label for="TechnicalExperts">نمره دهی از 1 الی 10 نمره</label>
                        </div>
                         
                          <div class="input-field col s6">
                          <p>5. کیفیت کار و اجرا آت: توانایی انجام کار بموقع و قابل اطمینان با مصرف کم منابع و اشتبا هات کم</p>
                          </div>

                          <div class="input-field col s6">
            <i class="mdi-social-person prefix"></i>
                          <input id="AcomplishmentQuality" type="text" class="validate">
                          <label for="AcomplishmentQuality">نمره دهی از 1 الی 10 نمره</label>
                        </div>
                          
                          <div class="input-field col s6">
                          <p>6. قابلیت کار تحت فشار: توانایی کار در اوقات ضروری موفقیت در اجرای کار و تاریخ های تعین شده</p>
                          </div>

                          <div class="input-field col s6">
            <i class="mdi-social-person prefix"></i>
                          <input id="WorkingWithPresure" type="text" class="validate">
                          <label for="WorkingWithPresure">نمره دهی از 1 الی 10 نمره</label>
                        </div>
                          
                          <div class="input-field col s6">
                          <p>7. حفظ مصونیت فردی: پیروی از مقررات و رهنمود های مصونیت و کاربرد آنها در جلو گیری از آسیب ها به خود </p>
                          </div>

                          <div class="input-field col s6">
            <i class="mdi-social-person prefix"></i>
                          <input id="SelfSecurity" type="text" class="validate">
                          <label for="SelfSecurity">نمره دهی از 1 الی 10 نمره</label>
                        </div>
              
                          <div class="input-field col s6">
                          <p>8. حفظ مصونیت دیگران: پیروی از مقررات و رهنمود های مصونیت و کاربرد آنها در جلو گیری از آسیب ها به دیگران</p>
                          </div>
                          
                          <div class="input-field col s6">
            <i class="mdi-social-person prefix"></i>
                          <input id="SavingOthersSecurity" type="text" class="validate">
                          <label for="SavingOthersSecurity">نمره دهی از 1 الی 10 نمره</label>
                        </div>

                          <div class="input-field col s6">
                          <p>9. حاضری و پابندی به وظیفه: پیروی از ساعت کاری اوقات صرف غذا و استراحت و انجام کار به موقع</p>
                          </div>

                          <div class="input-field col s6">
            <i class="mdi-social-person prefix"></i>
                          <input id="JobAvalibility" type="text" class="validate">
                          <label for="JobAvalibility">نمره دهی از 1 الی 10 نمره</label>
                        </div>
                          
                          <div class="input-field col s6">
                          <p>10. رعایت مقره طرز سلوک: پیروی از احکام مقرره طرز سلوک و سایر قوانین نافذه و تابعیت از احکام آن</p>
                          </div>

                          <div class="input-field col s6">
            <i class="mdi-social-person prefix"></i>
                          <input id="BehaviorRole" type="text" class="validate">
                          <label for="BehaviorRole">نمره دهی از 1 الی 10 نمره</label>
                        </div>
                            
            <div class="input-field col s6">
            <i class="mdi-action-info-outline prefix"></i>
                          <input id="TotalOfScore" type="text" class="validate">
                          <label for="TotalOfScore">مجموع نمرات</label>
                        </div>

                        <div class="input-field col s12">
                          <ul id="task-card" class="collection with-header">
                          <li class="collection-header cyan">
                          <h5 class="task-card-title" align="right">بخش سوم: نمره دهی توسط آمر مستقیم کارکنان ارزیابی شونده تکمیل میگردد</h5>
                          </li>
                          </ul>
                        </div>
            
            <div class="input-field col s6">
            <i class="mdi-social-group prefix"></i>
            <label for="StanderdScore">نمره معیاری</label>
                  <br>
                  <form action="#">
                    
                      <input name="group1" type="radio" id="test23" />
                      <label for="test23">65 الی 100 نمره</label>
                      <input name="group1" type="radio" id="test24" />
                      <label for="test24">55 الی 64 نمره</label>

                      <input name="group1" type="radio" id="test25" />
                      <label for="test25">0 الی 54 نمره</label>
                    
                  </form>
                  
                  <HR>
                </div>
            
            <div class="input-field col s6">
            <i class="mdi-social-group prefix"></i>
            <label for="Categories">کتگوری ها</label>
                  <br>
                  <form action="#">
                    
                      <input name="group1" type="radio" id="test26" />
                      <label for="test26">کتگوری اول</label>
                      <input name="group1" type="radio" id="test27" />
                      <label for="test27">کتگوری دوم</label>

                      <input name="group1" type="radio" id="test28" />
                      <label for="test28">کتگوری سوم</label>
                    
                  </form>
                  
                  <HR>
                </div>
            
            <div class="input-field col s6">
            <i class="mdi-social-group prefix"></i>
            <label for="EvaluationResult">پیامد یا نتیجه ارزیابی</label>
                  <br>
                  <form action="#">
                    
                      <input name="group1" type="radio" id="test29" />
                      <label for="test29">ارتقا به مزد بالاتر</label>
                      <input name="group1" type="radio" id="test30" />
                      <label for="test30">دوام وظیفه در قدم موجود</label>

                      <input name="group1" type="radio" id="test31" />
                      <label for="test31">اعلان بست: منضوری توسط وزیر یا ریس اداره مستقل</label>
                    
                  </form>
                  
                  <HR>
                </div>

                <div class="input-field col s6">
            <i class="mdi-social-group prefix"></i>
            <input id="DirectManagerScore" type="text" class="validate">
            <label for="DirectManagerScore">نمره داده شده توسط آمر مستقیم</label>
            </div>

                <div class="input-field col s6">
            <i class="mdi-social-group prefix"></i>
            <label for="DirectManagerDesision">تصمیم گیری آمر مستقیم</label>
                  <br>
                  <form action="#">
                    
                      <input name="group1" type="radio" id="test32" />
                      <label for="test32">ارتقا به قدم مزد بالاتر</label>
                      <input name="group1" type="radio" id="test33" />
                      <label for="test33">دوام وظیفه در قدم موجود</label>

                      <input name="group1" type="radio" id="test34" />
                      <label for="test34">اعلان بست</label>
                    
                  </form>
                  
                  <HR>
                </div>
            
                        <div class="input-field col s12">
                          <ul id="task-card" class="collection with-header">
                          <li class="collection-header cyan">
                          <h5 class="task-card-title">بخش چهارم:</h5>
                          </li>
                          </ul>
                        </div>

                        <div class="input-field col s6">
            <i class="mdi-action-info-outline prefix"></i>
                          <input id="EvaluatoreComment" type="text" class="validate">
                          <label for="EvaluatoreComment">نظر نظارت کننده ریاست منابع بشری</label>
                        </div>

                        <div class="input-field col s12">
                          <ul id="task-card" class="collection with-header">
                          <li class="collection-header cyan">
                          <h5 class="task-card-title" align="right">بخش پنجم: رهنمود نمره دهی</h5>
                          <p>درمجموع 10 خانه نمره دهی برای کارکنان ارزیابی شونده وجود دارد که هر خانه دارای (1 الی ) نمره میباشد و مجموع نمرات (100) میباشد</p>
                          <p> 1. در صورت کارکن مستحق 65 الی 100 نمره شناخته شود ارتقا به قدم مزد بالاتر مینماید</p>
                          <p> 2. هرگاه کارکن مستحق 55 الی 64 نمره شناخته شود دوام وظیفه وی در قدم موجود تایید بوده و ارتقا قدم نمی باشد</p>
                          <p> 3. هرگاه کارکن مستحق 0 الی 54 نمره شناخته شود بست وی تایید وزیر یاریس اداره مستقل به اعلان سپرده شده وشخص کارکن در حالات انتظار بامعاش قرار میگیرد</p>
                          <p> 4. هرگاه کارکن دربخش رعایت مقرره طرز سلوک از 10 نمره (5) اخذ نماید مستند به دلایل موجه بدون در نظر داشت سایر اجرا آت وی بست موصوف به اعلان سپرده میشود</p>
                          </li>
                          </ul>
                        </div>

                        <div class="input-field col s12">
                          <ul id="task-card" class="collection with-header">
                          <li class="collection-header cyan">
                          <h5 class="task-card-title" align="right">بخش ششم: </h5>
                          <p>زمانیکه ارزیابی خاتمه یافت وقناعت طرفین ارزیابی حاصل گردید اصل فورم ارزیابی به ریاست منابع بشری رسما ارسال میگردد</p>
                          <p>ریاست منابع بشری یک کاپی فورم ارزیابی را به ارگان ارزیابی شده و یک کاپی دیگر ان به امر مستقیم کارکن ارسال مینماید.</p>
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
