@extends('layouts.EmpLayout')

@section('title')
    HR | فورم در خواستی

@stop
<link rel="icon" bref="{{ URL::asset('assets/images/favicon/favicon-32x32.png') }}" sizes="32x32">

<!-- Favicons-->
<link rel="apple-touch-icon-precomposed" bref="{{ URL::asset('assets/images/favicon/apple-touch-icon-152x152.png') }}">
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
                    <li><a bref="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
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
                            <h5 class="breadcrumbs-title">کاندید</h5>
                            <ol class="breadcrumb">
                                <li><a bref="employment">دشبورد</a>
                                </li>
                                <li class="active">فورم در خواستی</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!--breadcrumbs end-->

            @section('content')
                <h1 class="header" align="right">فورم در خواستی</h1>
                <a class=" modal-action modal-close waves-effect waves-light btn right modal-trigger" bref="{{URL::to('alldarkhasti')}}">AllMember</a> <br /> <br />

                <!--Input fields-->
                <!--Form Advance-->
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="card-panel">
                            <h1 align="center" class="logo-wrapper"><a class="brand-logo darken-1"><img src="{{ URL::asset('assets/images/AF2.png') }}" height="100" width="100" alt="materialize logo" sizes></a></h1>
                            <h5 align="center" class="header">جمهوری اسلامی افغانستان</h5>
                            <h5 align="center" class="header">کمیسون مستقل اصلاحات اداری</h5>
                            <h5 align="center" class="header">فورم درخواستی</h5>
                            <h5 align="center" class="header">برای استخدام کارکنان خدمات ملکی</h5>
                            <hr />
                            <div class="row">

                                <form method="POST" action="{{ url('darkhasti') }}" class="col s12" data-parsley-validate>
                                    {!! csrf_field() !!}

                                    <div class="input-field col s12">
                                        <ul id="task-card" class="collection with-header">
                                            <li class="collection-header cyan">
                                                <h5 class="task-card-title" align="right">:این بخش توسط بورد تعینات خدمات ملکی ویا کمیته های استخدام مرکزی و محلی تکمیل میگردد</h5>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="input-field col s6">
                                        <input  name="RegNo" type="text" data-parsley-required="true" >
                                        <label name="RegNo">نمبر ثبت</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input  name="ReceivedDate" type="text" class="datepicker" data-parsley-required="true">
                                        <label name="ReceivedDate">تاریخ دریافت</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input  name="EvaluationDate" type="text" class="datepicker" data-parsley-required="true">
                                        <label name="EvaluationDate">تاریخ ارزیابی</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input  name="ShortlistDate" type="text" class="datepicker" data-parsley-required="true">
                                        <label name="ShortlistDate">تاریخ شارت لیست</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input  name="InterviewDate" type="text" class="datepicker" data-parsley-required="true">
                                        <label name="InterviewDate">تاریخ مصاحبه</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input  name="RequestNumber" type="text" data-parsley-required="true">
                                        <label name="RequestNumber">نمبر درخواست</label>
                                    </div>

                                    <div class="input-field col s12">
                                        <ul id="task-card" class="collection with-header">
                                            <li >
                                                <h5 align="center">تمام بخش های این فورمه درخواستی را باید تکمیل و معلومات دقیق را اریه نماید در غیر آن در خواستی شما پزیرفته نمیشود </h5>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="input-field col s12">
                                        <input  name="Photo" type="text" data-parsley-required="true">
                                        <label name="Photo">عکس در خواست کننده</label>
                                    </div>

                                    <div class="input-field col s12">
                                        <ul id="task-card" class="collection with-header">
                                            <li >
                                                <h5 align="right">بخش اول</h5>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="input-field col s6">
                                        <input  name="BastRequest" type="text" data-parsley-required="true">
                                        <label name="BastRequest">درخواست برای بست</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input  name="Organization" type="text" data-parsley-required="true">
                                        <label name="Organization">وزارت/اداره</label>
                                    </div>

                                    <div class="input-field col s12">
                                        <input  name="DirectorateOffice" type="text" data-parsley-required="true">
                                        <label name="DirectorateOffice">ریاست/مدیریت</label>
                                    </div>

                                    <div class="input-field col s12">
                                        <ul id="task-card" class="collection with-header">
                                            <li >
                                                <h5 align="right">شهرت و آدرس</h5>
                                            </li>
                                        </ul>
                                    </div>


                                    <div class="input-field col s6">
                                        <i class="mdi-maps-location-history prefix"></i>
                                        <input name="Name" type="text" data-parsley-required="true">
                                        <label name="Name">اسم</label>
                                    </div>



                                    <div class="input-field col s6">
                                        <input name="FatherName" type="text" data-parsley-required="true">
                                        <label name="FatherName">اسم پدر</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input name="CurrentAddress" type="text" data-parsley-required="true">
                                        <label name="CurrentAddress">آدرس فعلی</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class=" mdi-communication-email prefix"></i>
                                        <input name="Email" type="text" data-parsley-required="true">
                                        <label name="Email">آدرس ایمیل</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input name="BirthDate" type="text" class="datepicker" data-parsley-required="true">
                                        <label name="BirthDate">تاریخ تولد</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-communication-call prefix"></i>
                                        <input name="Phone" type="text" data-parsley-required="true">
                                        <label name="Phone">نمبر تیلیفون</label>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col s12">
                                            <label for="Gender"> جنس</label>
                                            <br />
                                            <p>
                                                <input name="Gender" checked value="Male" type="radio" id="Male" />
                                                <label for="Male">مرد</label>
                                                <input name="Gender" value="Female" type="radio" id="Female" />
                                                <label for="Female">زن</label>
                                            </p>
                                        </div> </div>

                                    <div class="input-field col s12">
                                        <ul id="task-card" class="collection with-header">
                                            <li >
                                                <h5 align="right">بخش دوم تحصیلات </h5>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="input-field col s6">
                                        <input name="UniversityName" type="text" data-parsley-required="true">
                                        <label name="UniversityName">نام پوهنتون که شما از آن فارغ شده اید</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input name="StartUniversityFrom" type="text" class="datepicker" data-parsley-required="true">
                                        <label name="StartUniversityFrom">از تاریخ</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input name="EndUniversityAt" type="text" class="datepicker" data-parsley-required="true">
                                        <label name="EndUniversityAt">الی تاریخ</label>
                                    </div>


                                    <div class="input-field col s6">
                                        <input name="Faculty" type="text" data-parsley-required="true">
                                        <label name="Faculty">نام پوهنحی</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input name="Department" type="text" data-parsley-required="true">
                                        <label name="Department">رشته تحصیلی</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <select name="UniversityGrade" data-parsley-required="true">
                                            <option value="" disabled selected>درجه اعطا شده</option>
                                            <option value="خوب">خوب</option>
                                            <option value="عالی">عالی</option>
                                            <option value="اعلی">اعلی</option>

                                        </select>
                                    </div>

                                    <div class="input-field col s12">
                                        <input name="SchoolName" type="text" data-parsley-required="true">
                                        <label name="SchoolName">لیسه</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input name="StartSchoolFrom" type="text" class="datepicker" data-parsley-required="true">
                                        <label name="StartSchoolFrom">از تاریخ</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input name="EndSchoolAt" type="text" class="datepicker" data-parsley-required="true">
                                        <label name="EndSchoolAt">الی تاریخ</label>
                                    </div>

                                    <div class="input-field col s12">
                                        <input name="OtherTraining" type="text">
                                        <label name="OtherTraining">وضاحت راجع به سایر مشخصات مسلکی ویا برنامه های آموزیشی عمده که اضافه تر از یک ماه قرار گرفته اید</label>
                                    </div>

                                    <div class="input-field col s12">
                                        <ul id="task-card" class="collection with-header">
                                            <li >
                                                <h5 align="right">سابقه کار</h5>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="input-field col s12">
                                        <input name="Experience" type="text" data-parsley-required="true">
                                        <label name="Experience">در صورت ضرورت معلومات اضافی را درج ورق جداگانه نموده و آنرا با فورمه درخواستی ضمیمه نماید</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input name="JobTitle" type="text" data-parsley-required="true">
                                        <label name="JobTitle">عنوان وظیفه فعلی</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input name="Bast" type="text" data-parsley-required="true">
                                        <label name="Bast">بست</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input name="Address" type="text" data-parsley-required="true">
                                        <label name="Address">آدرس استخدام کننده</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input name="Date" type="text" class="datepicker" data-parsley-required="true">
                                        <label name="Date">تاریخ آغاز کار دروظیفه فعلی</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input name="Responsiblities" type="text" data-parsley-required="true">
                                        <label name="Responsiblities">مسولیت های عمده طبق لایحه وظایف</label>
                                    </div>

                                    <div class="input-field col s12">
                                        <ul id="task-card" class="collection with-header">
                                            <li >
                                                <h5 align="right">6.شایستگی برای وظیفه شامل ارایه معلومات واضح در باره</h5>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="input-field col s6" >

                                            <div>1. معروض نبودن به تقاعد</div>
                                            <div>2.نداشتن محکومیت</div>
                                            <div> 3.آمادگی برای اجرای وظایف در شرایت و محلات مختل</div>
                                            <div> 4.موافق بودن بامقرره طرز سلوک وانضباط مامورین خدمات ملکی</div>
                                            <div> 5. درجه آمادگی به کار تحت فشار بلند می باشد که درخواست دهنده درورق جداگانه ضم ورق درخواستی به مرجع گیرنده فورم تقدیم نماید</div>
                                        <br />
                                    </div>

                                    <div class="input-field col s12">
                                        <ul id="task-card" class="collection with-header">
                                            <li >
                                                <h5 align="right">بخش دوم</h5>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="input-field col s12">
                                        <label for="Crime">آیا به کدام جرم در افغانستان ویا ممالک دیگر محکوم شده اید؟ به صورت مناسب علامه صحت بگذارید</label>
                                        <br />
                                        <p>
                                            <input name="Crime" value="Yes" type="radio" id="CrimeYes" />
                                            <label for="CrimeYes">بلی</label>
                                            <input name="Crime" checked value="No" type="radio" id="CrimeNo" />
                                            <label for="CrimeNo">نخیر</label>
                                        </p>
                                    </div>
                                 <br />

                                <div class="input-field col s12">
                                    <i class="mdi-alert-error prefix"></i>
                                    <textarea name="CrimeDetails" class="materialize-textarea" length="200"></textarea>
                                    <label name="CrimeDetails">درصورتیکه جواب مثبت باشد جزیات احرایه دارید</label>
                                </div>

                                <div class="input-field col s12">
                                    <ul id="task-card" class="collection with-header">
                                        <li >
                                            <h5 align="right">2.مرجع تصدیق</h5>
                                        </li>
                                    </ul>
                                </div>

                                <div class="input-field col s12">
                                    <ul id="task-card" class="collection with-header">
                                        <li >
                                            <h6 align="right">بورد مستق تعینات کمیته تعیینات مرکزی یا اداره محلی جهت حصول اطمینان از تطبیق موثر پروسه تقرر تصدیق کتبی از کارکرد ها درصورت صرورت درباره شخصیت کاندید منتخب را از مرجع استخدام کننده / اخیر آنها تقاضا می نماید.
                                                لطفا شهرت شخص با رسوخ که از شما شناسایی کامل داشته و از شخصیت تان بصورت کتبی تصدیق نماید ذیلا فراهم نماید. </h6>
                                        </li>
                                    </ul>
                                </div>


                                <div class="input-field col s6">
                                    <input name="ReferenceName" type="text" data-parsley-required="true">
                                    <label name="ReferenceName">اسم</label>
                                </div>

                                <div class="input-field col s6">
                                    <input name="ReferenceAdds" type="text" data-parsley-required="true">
                                    <label name="ReferenceAdds">آدرس</label>
                                </div>

                                <div class="input-field col s12">
                                    <input name="ReferencePhone" type="text" data-parsley-required="true">
                                    <label name="ReferencePhone">نمبر تیلیفون</label>
                                </div> <br />

                                <div class="input-field col s6">
                                    <input name="secondReferenceName" type="text" data-parsley-required="true">
                                    <label name="secondReferenceName">اسم</label>
                                </div>

                                <div class="input-field col s6">
                                    <input name="secondReferenceAdds" type="text" data-parsley-required="true">
                                    <label name="secondReferenceAdds">آدرس</label>
                                </div>

                                <div class="input-field col s12">
                                    <input name="secondReferencePhone" type="text" data-parsley-required="true">
                                    <label name="secondReferencePhone">نمبر تیلیفون</label>
                                </div>

                                <div class="input-field col s12">
                                    <ul id="task-card" class="collection with-header">
                                        <li >
                                            <h6 align="right">در صورتیکه سابقه کاری ندارید: نام و آدرس نمره تیلیفون دوشخص بارسوخ جامعه که شخصیت شما را کتبا تصدیق نماید در دو شماره فوق تحریر نمایید.</h6>
                                        </li>
                                    </ul>
                                </div>
                                <br/>

                                <div class="input-field col s12">
                                    <input name="RelativesName" type="text" data-parsley-required="true">
                                    <label name="RelativesName">آیا اقرب شما در کمیسون مستل اصلا حات اداری وخدمات ملکی
                                        در وزارت ویا اداره دولتی که شما درخواست وظیفه مینماید کارمیکند؟لطفا نا</label>
                                </div>

                                <div class="input-field col s12">
                                    <ul id="task-card" class="collection with-header">
                                        <li >
                                            <h6 align="right">:تعهد</h6>
                                        </li>
                                    </ul>
                                </div>

                                <div class="input-field col s12">
                                    <input name="CurrentDate" type="text" class="datepicker" data-parsley-required="true">
                                    <label name="CurrentDate">اقرار میدارم بر اینکه معلومات مندرج این در خواست حقیقت دارد. اگر کدام معلومات ارایه شده غلت ثابت گردد درخواستی ام باطل و حق شزکت درپروسه ووظیفه جدید را از دست میدهم.</label>
                                </div>

                                <div class="input-field col s12">
                                    <input name="PastJobDate" type="text" class="datepicker" data-parsley-required="true">
                                    <label name="PastJobDate">از تاریخ</label>
                                </div>
                                <div class="input-field col s12">
                                    <input name="EndPastJobDate" type="text" class="datepicker" data-parsley-required="true">
                                    <label name="EndPastJobDate">الی تاریخ</label>
                                </div>

                                <div class="input-field col s6">
                                    <input name="EmployerName" type="text" data-parsley-required="true" data-parsley-required="true">
                                    <label name="EmployerName">اسم و آدرس استخدام کننده</label>
                                </div>

                                <div class="input-field col s6">
                                    <input name="PastJobRes" type="text" data-parsley-required="true" data-parsley-required="true">
                                    <label name="PastJobRes">مسعولیت های عمده طبق لایحه وظایف</label>
                                </div>

                                <div class="input-field col s12">
                                    <input name="PastJobDateFrom" type="text" class="datepicker" data-parsley-required="true">
                                    <label name="PastJobDateFrom">از تاریخ</label>
                                </div>
                                <div class="input-field col s12">
                                    <input name="PastJobDateEnd" type="text" class="datepicker" data-parsley-required="true">
                                    <label name="PastJobDateEnd">الی تاریخ</label>
                                </div>

                                <div class="input-field col s6">
                                    <input name="SecEmployerName" type="text" data-parsley-required="true" data-parsley-required="true">
                                    <label name="SecEmployerName">اسم و آدرس استخدام کننده</label>
                                </div>

                                <div class="input-field col s6">
                                    <input name="EmployerResponsibility" type="text" data-parsley-required="true" data-parsley-required="true">
                                    <label name="EmployerResponsibility">مسعولیت های عمده طبق لایحه وظایف</label>
                                </div>


                                <div class="row">
                                    <div class="col s12 m4 l12" align="right">

                                        <ul id="task-card" class="collection with-header">
                                            <li class="collection-header cyan">
                                                <h4 class="task-card-title">لسان ها</h4>
                                            </li>

                                            <table>
                                                <tr>
                                                    <td>
                                                        <li class="collection-item dismissable">
                                                            <input type="checkbox" name="Dari" data-parsley-required="true"  data-parsley-required-message="Select Dari Language" value="True" id="Dari" checked="checked"/>
                                                            <label for="Dari">دری
                                                            </label>
                                                            <span class="task-cat teal">تحریر    </span>
                                                            <select name="DariWrittingLevel" data-parsley-required="true">
                                                                <option value="" disabled selected>سطح</option>
                                                                <option value="خوب">خوب</option>
                                                                <option value="عالی">عالی</option>
                                                                <option value="بسیار خوب">بسیار خوب</option>
                                                            </select>

                                                            <span class="task-cat pink">خواندن   </span>
                                                            <select name="DariReadingLevel" data-parsley-required="true">
                                                                <option value="" disabled selected>سطح</option>
                                                                <option value="خوب">خوب</option>
                                                                <option value="عالی">عالی</option>
                                                                <option value="بسیار خوب">بسیار خوب</option>
                                                            </select>

                                                            <span class="task-cat cyan">تکلم   </span>
                                                            <select name="DariSpeakingLevel" data-parsley-required="true">
                                                                <option value="" disabled selected style="position: z-20">سطح</option>
                                                                <option value="خوب">خوب</option>
                                                                <option value="عالی">عالی</option>
                                                                <option value="بسیار خوب">بسیار خوب</option>
                                                            </select>
                                                        </li>
                                                    </td>   <br /> <br />

                                                    <td>
                                                        <li class="collection-item dismissable">
                                                            <input type="checkbox" name="Pashto" data-parsley-required="true"  data-parsley-required-message="Select Pashto Language" value="True" id="Pashto" checked="checked"/>
                                                            <label for="Pashto">پشتو
                                                            </label>
                                                            <span class="task-cat teal">تحریر    </span>
                                                            <select name="PashtoWrittingLevel" data-parsley-required="true">
                                                                <option value="" disabled selected>سطح </option>
                                                                <option value="خوب">خوب</option>
                                                                <option value="عالی">عالی</option>
                                                                <option value="بسیار خوب">بسیار خوب</option>
                                                            </select>

                                                            <span class="task-cat pink">خواندن </span>
                                                            <select name="PashtoReadingLevel" data-parsley-required="true">
                                                                <option value="" disabled selected>سطح </option>
                                                                <option value="خوب">خوب</option>
                                                                <option value="عالی">عالی</option>
                                                                <option value="بسیار خوب">بسیار خوب</option>
                                                            </select>

                                                            <span class="task-cat cyan">تکلم   </span>
                                                            <select name="PashtoSpeakingLevel" data-parsley-required="true">
                                                                <option value="" disabled selected>سطح </option>
                                                                <option value="خوب">خوب</option>
                                                                <option value="عالی">عالی</option>
                                                                <option value="بسیار خوب">بسیار خوب</option>
                                                            </select>
                                                        </li>
                                                    </td>

                                                    <td>
                                                        <li class="collection-item dismissable">
                                                            <input type="checkbox" name="English" value="True" id="English"/>
                                                            <label for="English">انگلیسی
                                                            </label>
                                                            <span class="task-cat teal">تحریر    </span>
                                                            <select name="EnglishWrittingLevel">
                                                                <option value="" disabled selected>سطح </option>
                                                                <option value="خوب">خوب</option>
                                                                <option value="عالی">عالی</option>
                                                                <option value="بسیار خوب">بسیار خوب</option>
                                                            </select>

                                                            <span class="task-cat pink">خواندن   </span>
                                                            <select name="EnglishReadingLevel">
                                                                <option value="" disabled selected>سطح </option>
                                                                <option value="خوب">خوب</option>
                                                                <option value="عالی">عالی</option>
                                                                <option value="بسیار خوب">بسیار خوب</option>
                                                            </select>

                                                            <span class="task-cat cyan">تکلم   </span>
                                                            <select name="EnglishSpeakingLevel">
                                                                <option value="" disabled selected>سطح </option>
                                                                <option value="خوب">خوب</option>
                                                                <option value="عالی">عالی</option>
                                                                <option value="بسیار خوب">بسیار خوب</option>
                                                            </select>
                                                        </li>
                                                    </td>

                                                </tr>
                                            </table>
                                            <br /><br /><br /><br /><br /><br />
                                        </ul>
                                        <div class="input-field col s12" align="right">
                                            <input name="MoreLanguage" type="text" data-parsley-required="true">
                                            <label name="MoreLanguage">سایر زبان ها</label>
                                        </div>

                                    </div>
                                </div>




                                <div class="input-field col s12" align="right">
                                    <input name="ComputerSkills" type="text" data-parsley-required="true">
                                    <label name="ComputerSkills">مهارت های کمپیوتر مشخصا بنوسید</label>
                                </div>



                                <!--  <div class="input-field col s6"> -->
                                <button class="btn cyan waves-effect waves-light right" type="submit" name="submit">تایید
                                    <i class="mdi-content-send right"></i>
                                </button>

                            </div>

                        </div>
                    </div>
                </div>

    </form>
</div></div>


@stop

</body>
