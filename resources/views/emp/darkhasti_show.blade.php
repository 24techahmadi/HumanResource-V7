@extends('layouts.EmpLayout')

@section('title')
    HR | نمایش فورم درخواستی

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
                            <h5 class="breadcrumbs-title">کاندید</h5>
                            <ol class="breadcrumb">
                                <li><a href="employment">دشبورد</a>
                                </li>
                                <li class="active">نمایش ریکاردها</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!--breadcrumbs end-->

            @section('content')
                <h1 class="header" align="right">نمایش اطلاعات</h1>
                <a class=" modal-action modal-close waves-effect waves-light btn right modal-trigger" href="{{URL::to('alldarkhasti')}}">AllMember</a> <br /> <br />

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
                            <hr>
                            <div class="row">

                                <form class="col s12" data-parsley-validate>
                                    {!! csrf_field() !!}

                                    <div class="input-field col s12">
                                        <ul id="task-card" class="collection with-header">
                                            <li class="collection-header cyan">
                                                <h5 class="task-card-title" align="right">:این بخش توسط بورد تعینات خدمات ملکی ویا کمیته های استخدام مرکزی و محلی تکمیل میگردد</h5>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="input-field col s6">
                                        <input  name="RegNo" type="text" data-parsley-required="true" value="{{ $record->RegNo }}">
                                        <label name="RegNo">نمبر ثبت</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input  name="ReceivedDate" type="text" class="datepicker" data-parsley-required="true" value="{{ $record->ReceivedDate }}">
                                        <label name="ReceivedDate">تاریخ دریافت</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input  name="EvaluationDate" type="text" class="datepicker" data-parsley-required="true" value="{{ $record->EvaluationDate }}">
                                        <label name="EvaluationDate">تاریخ ارزیابی</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input  name="ShortlistDate" type="text" class="datepicker" data-parsley-required="true" value="{{ $record->ShortlistDate }}">
                                        <label name="ShortlistDate">تاریخ شارت لیست</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input  name="InterviewDate" type="text" class="datepicker" data-parsley-required="true" value="{{ $record->InterviewDate }}">
                                        <label name="InterviewDate">تاریخ مصاحبه</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input  name="RequestNumber" type="text" class="datepicker" data-parsley-required="true" value="{{ $record->RequestNumber }}">
                                        <label name="RequestNumber">نمبر درخواست</label>
                                    </div>

                                    <div class="input-field col s12">
                                        <ul id="task-card" class="collection with-header">
                                            <li >
                                                <h5 align="center">تمام بخش های این فورمه درخواستی را باید تکمیل و معلومات دقیق را اریه نماید در غیر آن در خواستی شما پزیرفته نمیشود </h5>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="input-field col s6">
                                        <input  name="Photo" type="text" data-parsley-required="true" value="{{ $record->Photo }}">
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
                                        <input  name="BastRequest" type="text" data-parsley-required="true" value="{{ $record->BastRequest }}">
                                        <label name="BastRequest">درخواست برای بست</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input  name="Organization" type="text" data-parsley-required="true" value="{{ $record->Organization }}">
                                        <label name="Organization">وزارت/اداره</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input  name="DirectorateOffice" type="text" data-parsley-required="true" value="{{ $record->DirectorateOffice }}">
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
                                        <input name="Name" type="text" data-parsley-required="true" value="{{ $record->Name }}">
                                        <label name="Name">اسم</label>
                                    </div>



                                    <div class="input-field col s6">
                                        <input name="FatherName" type="text" data-parsley-required="true" value="{{ $record->FatherName }}">
                                        <label name="FatherName">اسم پدر</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input name="CurrentAddress" type="text" data-parsley-required="true" value="{{ $record->CurrentAddress }}">
                                        <label name="CurrentAddress">آدرس فعلی</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class=" mdi-communication-email prefix"></i>
                                        <input name="Email" type="text" data-parsley-required="true" value="{{ $record->Email }}">
                                        <label name="Email">آدرس ایمیل</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input name="BirthDate" type="text" class="datepicker" data-parsley-required="true" value="{{ $record->BirthDate }}">
                                        <label name="BirthDate">تاریخ تولد</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-communication-call prefix"></i>
                                        <input name="Phone" type="text" data-parsley-required="true" value="{{ $record->Phone }}">
                                        <label name="Phone">نمبر تیلیفون</label>
                                    </div>


                                    <div class="input-field col s12">
                                        <input name="Gender" type="text" disabled value="{{ $record->Gender }}">
                                        <label name="Gender">جنسیت</label>
                                    </div>

                                    <div class="input-field col s12">
                                        <ul id="task-card" class="collection with-header">
                                            <li >
                                                <h5 align="right">بخش دوم تحصیلات </h5>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="input-field col s6">
                                        <input name="UniversityName" type="text" data-parsley-required="true" value="{{ $record->UniversityName }}">
                                        <label name="UniversityName">نام پوهنتون که شما از آن فارغ شده اید</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input name="StartUniversityFrom" type="text" class="datepicker" data-parsley-required="true" value="{{ $record->StartUniversityFrom }}">
                                        <label name="StartUniversityFrom">از تاریخ</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input name="EndUniversityAt" type="text" class="datepicker" data-parsley-required="true" value="{{ $record->EndUniversityAt }}">
                                        <label name="EndUniversityAt">الی تاریخ</label>
                                    </div>


                                    <div class="input-field col s6">
                                        <input name="Faculty" type="text" data-parsley-required="true" value="{{ $record->Faculty }}">
                                        <label name="Faculty">نام پوهنحی</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input name="Department" type="text" data-parsley-required="true" value="{{ $record->Department }}">
                                        <label name="Department">رشته تحصیلی</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <select name="UniversityGrade">
                                            <option value="" disabled selected>{{ $record->UniversityGrade }}</option>
                                            <option value="خوب">خوب</option>
                                            <option value="عالی">عالی</option>
                                            <option value="اعلی">اعلی</option>

                                        </select>
                                    </div>

                                    <div class="input-field col s6">
                                        <input name="SchoolName" type="text" data-parsley-required="true" value="{{ $record->SchoolName }}">
                                        <label name="SchoolName">لیسه</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input name="StartSchoolFrom" type="text" class="datepicker" data-parsley-required="true" value="{{ $record->StartSchoolFrom }}">
                                        <label name="StartSchoolFrom">از تاریخ</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input name="EndSchoolAt" type="text" class="datepicker" data-parsley-required="true" value="{{ $record->EndSchoolAt }}">
                                        <label name="EndSchoolAt">الی تاریخ</label>
                                    </div>

                                    <div class="input-field col s12">
                                        <input name="OtherTraining" type="text" data-parsley-required="true" value="{{ $record->OtherTraining }}">
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
                                        <input name="Experience" type="text" data-parsley-required="true" value="{{ $record->Experience }}">
                                        <label name="Experience">در صورت ضرورت معلومات اضافی را درج ورق جداگانه نموده و آنرا با فورمه درخواستی ضمیمه نماید</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input name="JobTitle" type="text" data-parsley-required="true" value="{{ $record->JobTitle }}">
                                        <label name="JobTitle">عنوان وظیفه فعلی</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input name="Bast" type="text" data-parsley-required="true" value="{{ $record->Bast }}">
                                        <label name="Bast">بست</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input name="Address" type="text" data-parsley-required="true" value="{{ $record->Address }}">
                                        <label name="Address">آدرس استخدام کننده</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input name="Date" type="text" class="datepicker" data-parsley-required="true" value="{{ $record->Date }}">
                                        <label name="Date">تاریخ آغاز کار دروظیفه فعلی</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input name="Responsiblities" type="text" data-parsley-required="true" value="{{ $record->Responsiblities }}">
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
                                        <hr>
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
                                            <input name="Crime" disabled type="text" data-parsley-required="true" value="{{ $record->Crime }}">
                                    </div>
                             <br />

                            <div class="input-field col s12">
                                    <label for="CrimeDetails">درصورتیکه جواب مثبت باشد جزیات احرایه دارید</label>
                                    <input name="CrimeDetails" disabled type="text" data-parsley-required="true" value="{{ $record->CrimeDetails }}">
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
                                <input name="ReferenceName" type="text" data-parsley-required="true" value="{{ $record->ReferenceName }}">
                                <label name="ReferenceName">اسم</label>
                            </div>

                            <div class="input-field col s6">
                                <input name="ReferenceAdds" type="text" data-parsley-required="true" value="{{ $record->ReferenceAdds }}">
                                <label name="ReferenceAdds">آدرس</label>
                            </div>

                            <div class="input-field col s12">
                                <input name="ReferencePhone" type="text" data-parsley-required="true" value="{{ $record->ReferencePhone }}">
                                <label name="ReferencePhone">نمبر تیلیفون</label>
                            </div> <br />

                            <div class="input-field col s6">
                                <input name="secondReferenceName" type="text" data-parsley-required="true" value="{{ $record->secondReferenceName }}">
                                <label name="secondReferenceName">اسم</label>
                            </div>

                            <div class="input-field col s6">
                                <input name="secondReferenceAdds" type="text" data-parsley-required="true" value="{{ $record->secondReferenceAdds }}">
                                <label name="secondReferenceAdds">آدرس</label>
                            </div>

                            <div class="input-field col s12">
                                <input name="secondReferencePhone" type="text" data-parsley-required="true" value="{{ $record->secondReferencePhone }}">
                                <label name="secondReferencePhone">نمبر تیلیفون</label>
                            </div>

                            <div class="input-field col s12">
                                <ul id="task-card" class="collection with-header">
                                    <li >
                                        <h6 align="right">در صورتیکه سابقه کاری ندارید: نام و آدرس نمره تیلیفون دوشخص بارسوخ جامعه که شخصیت شما را کتبا تصدیق نماید در دو شماره فوق تحریر نمایید.</h6>
                                    </li>
                                </ul>
                            </div>
                            <hr/>

                            <div class="input-field col s12">
                                <input name="RelativesName" type="text" value="{{ $record->RelativesName }}">
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
                                <input name="CurrentDate" type="text" class="datepicker" value="{{ $record->CurrentDate }}">
                                <label name="CurrentDate">اقرار میدارم بر اینکه معلومات مندرج این در خواست حقیقت دارد. اگر کدام معلومات ارایه شده غلت ثابت گردد درخواستی ام باطل و حق شزکت درپروسه ووظیفه جدید را از دست میدهم.</label>
                            </div>

                            <div class="input-field col s12">
                                <input name="PastJobDate" type="text" class="datepicker" value="{{ $record->PastJobDate }}">
                                <label name="PastJobDate">از تاریخ</label>
                            </div>
                            <div class="input-field col s12">
                                <input name="EndPastJobDate" type="text" class="datepicker" value="{{ $record->EndPastJobDate }}">
                                <label name="EndPastJobDate">الی تاریخ</label>
                            </div>

                            <div class="input-field col s6">
                                <input name="EmployerName" type="text" data-parsley-required="true" value="{{ $record->EmployerName }}">
                                <label name="EmployerName">اسم و آدرس استخدام کننده</label>
                            </div>

                            <div class="input-field col s6">
                                <input name="PastJobRes" type="text" data-parsley-required="true" value="{{ $record->PastJobRes }}">
                                <label name="PastJobRes">مسعولیت های عمده طبق لایحه وظایف</label>
                            </div>

                            <div class="input-field col s12">
                                <input name="PastJobDateFrom" type="text" class="datepicker" value="{{ $record->PastJobDateFrom }}">
                                <label name="PastJobDateFrom">از تاریخ</label>
                            </div>
                            <div class="input-field col s12">
                                <input name="PastJobDateEnd" type="text" class="datepicker" value="{{ $record->PastJobDateEnd }}">
                                <label name="PastJobDateEnd">الی تاریخ</label>
                            </div>

                            <div class="input-field col s6">
                                <input name="SecEmployerName" type="text" data-parsley-required="true" value="{{ $record->SecEmployerName }}">
                                <label name="SecEmployerName">اسم و آدرس استخدام کننده</label>
                            </div>

                            <div class="input-field col s6">
                                <input name="EmployerResponsibility" type="text" data-parsley-required="true" value="{{ $record->EmployerResponsibility }}">
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
                                                    <div>
                                                    <li class="collection-item dismissable">
                                                        <p>
                                                        <label for="Dari"><b> دری :</b>
                                                        </label><span class="task-cat teal">{{ $record->Dari }}</span>
                                                        </p> <hr />
                                                        <p>

                                                        <label for="Dari">سطح تحریری :
                                                        </label><span class="task-cat pink">{{ $record->DariWrittingLevel }}</span>
                                                        </p><hr />
                                                        <p>

                                                        <label for="Dari">سطح خواندن :
                                                        </label><span class="task-cat cyan">{{ $record->DariReadingLevel }}</span>
                                                        </p><hr />
                                                        <p>

                                                        <label for="Dari">سطح تکلم :
                                                        </label><span class="task-cat red">{{ $record->DariSpeakingLevel }}</span>
                                                        </p><hr />
                                                    </li>
                                                        </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <li class="collection-item dismissable">
                                                            <p>
                                                                <label for="Pashto"><b> پشتو :</b>
                                                                </label><span class="task-cat teal">{{ $record->Pashto }}</span>
                                                            </p> <hr />
                                                            <p>

                                                                <label for="PashtoWrittingLevel">سطح تحریری :
                                                                </label><span class="task-cat pink">{{ $record->PashtoWrittingLevel }}</span>
                                                            </p><hr />
                                                            <p>

                                                                <label for="PashtoReadingLevel">سطح خواندن :
                                                                </label><span class="task-cat cyan">{{ $record->PashtoReadingLevel }}</span>
                                                            </p><hr />
                                                            <p>

                                                                <label for="PashtoSpeakingLevel">سطح تکلم :
                                                                </label><span class="task-cat red">{{ $record->PashtoSpeakingLevel }}</span>
                                                            </p><hr />
                                                        </li>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <li class="collection-item dismissable">
                                                            <p>
                                                                <label for="English"><b>انگلیسی :</b>
                                                                </label><span class="task-cat teal">{{ $record->English }}</span>
                                                            </p> <hr />
                                                            <p>

                                                                <label for="EnglishWrittingLevel">سطح تحریری :
                                                                </label><span class="task-cat pink">{{ $record->EnglishWrittingLevel }}</span>
                                                            </p><hr />
                                                            <p>

                                                                <label for="EnglishReadingLevel">سطح خواندن :
                                                                </label><span class="task-cat cyan">{{ $record->EnglishReadingLevel }}</span>
                                                            </p><hr />
                                                            <p>

                                                                <label for="EnglishSpeakingLevel">سطح تکلم :
                                                                </label><span class="task-cat red">{{ $record->EnglishSpeakingLevel }}</span>
                                                            </p><hr />
                                                        </li>
                                                    </div>
                                                </td>

                                            </tr>
                                        </table>
                                    </ul>
                                </div>
                            </div>




                            <div class="input-field col s12" align="right">
                                <input name="ComputerSkills" type="text" data-parsley-required="true" value="{{ $record->ComputerSkills }}">
                                <label name="ComputerSkills">مهارت های کمپیوتر مشخصا بنوسید</label>
                            </div>



                            <!--  <div class="input-field col s6"> -->
                            <a onclick="moreInfo({{ $record->id }});" class="modal-trigger" href="#modal2" value="{{ $record->id }}"> <i class="mdi-editor-border-color prefix"></i>

                        </div>
                        </form>
                    </div>
                </div>

    </div>
</div>
    </div>




<!-- Modal2- View Records Information-->

<div id="modal2" class="modal" style="border-radius:25px">
    <div class="modal-content">
        <div class="card-panel cyan darken-1">
            <h5 class="card-content white-text"> Update Records</h5>
        </div>


        <div class="row">
            <div class="col s12 m12 l12">
                <div class="card-panel">
                    <h1 align="center" class="logo-wrapper"><a class="brand-logo darken-1"><img src="{{ URL::asset('assets/images/AF2.png') }}" height="100" width="100" alt="materialize logo" sizes></a></h1>
                    <h5 align="center" class="header">جمهوری اسلامی افغانستان</h5>
                    <h5 align="center" class="header">کمیسون مستقل اصلاحات اداری</h5>
                    <h5 align="center" class="header">فورم درخواستی</h5>
                    <h5 align="center" class="header">برای استخدام کارکنان خدمات ملکی</h5>
                    <hr>
                    <div class="row">

                        <form method="POST" action="{{ route('darkhasti.update',['id'=>$record]) }}" accept-charset="utf-8" class="col s11 right" data-parsley-validate>
                            {!! csrf_field() !!}
                            <input name="_method" type="hidden" value="PATCH">

                            <div class="input-field col s12">
                                <ul id="task-card" class="collection with-header">
                                    <li class="collection-header cyan">
                                        <h5 class="task-card-title" align="right">:این بخش توسط بورد تعینات خدمات ملکی ویا کمیته های استخدام مرکزی و محلی تکمیل میگردد</h5>
                                    </li>
                                </ul>
                            </div>

                            <div class="input-field col s6">
                                <input  name="RegNo" type="text" data-parsley-required="true" value="{{ $record->RegNo }}">
                                <label name="RegNo">نمبر ثبت</label>
                            </div>

                            <div class="input-field col s6">
                                <input  name="ReceivedDate" type="text" class="datepicker" data-parsley-required="true" value="{{ $record->ReceivedDate }}">
                                <label name="ReceivedDate">تاریخ دریافت</label>
                            </div>

                            <div class="input-field col s6">
                                <input  name="EvaluationDate" type="text" class="datepicker" data-parsley-required="true" value="{{ $record->EvaluationDate }}">
                                <label name="EvaluationDate">تاریخ ارزیابی</label>
                            </div>

                            <div class="input-field col s6">
                                <input  name="ShortlistDate" type="text" class="datepicker" data-parsley-required="true" value="{{ $record->ShortlistDate }}">
                                <label name="ShortlistDate">تاریخ شارت لیست</label>
                            </div>

                            <div class="input-field col s6">
                                <input  name="InterviewDate" type="text" class="datepicker" data-parsley-required="true" value="{{ $record->InterviewDate }}">
                                <label name="InterviewDate">تاریخ مصاحبه</label>
                            </div>

                            <div class="input-field col s6">
                                <input  name="RequestNumber" type="text" class="datepicker" data-parsley-required="true" value="{{ $record->RequestNumber }}">
                                <label name="RequestNumber">نمبر درخواست</label>
                            </div>

                            <div class="input-field col s12">
                                <ul id="task-card" class="collection with-header">
                                    <li >
                                        <h5 align="center">تمام بخش های این فورمه درخواستی را باید تکمیل و معلومات دقیق را اریه نماید در غیر آن در خواستی شما پزیرفته نمیشود </h5>
                                    </li>
                                </ul>
                            </div>

                            <div class="input-field col s6">
                                <input  name="Photo" type="text" data-parsley-required="true" value="{{ $record->Photo }}">
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
                                <input  name="BastRequest" type="text" data-parsley-required="true" value="{{ $record->BastRequest }}">
                                <label name="BastRequest">درخواست برای بست</label>
                            </div>

                            <div class="input-field col s6">
                                <input  name="Organization" type="text" data-parsley-required="true" value="{{ $record->Organization }}">
                                <label name="Organization">وزارت/اداره</label>
                            </div>

                            <div class="input-field col s6">
                                <input  name="DirectorateOffice" type="text" data-parsley-required="true" value="{{ $record->DirectorateOffice }}">
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
                                <input name="Name" type="text" data-parsley-required="true" value="{{ $record->Name }}">
                                <label name="Name">اسم</label>
                            </div>



                            <div class="input-field col s6">
                                <input name="FatherName" type="text" data-parsley-required="true" value="{{ $record->FatherName }}">
                                <label name="FatherName">اسم پدر</label>
                            </div>

                            <div class="input-field col s6">
                                <input name="CurrentAddress" type="text" data-parsley-required="true" value="{{ $record->CurrentAddress }}">
                                <label name="CurrentAddress">آدرس فعلی</label>
                            </div>

                            <div class="input-field col s6">
                                <i class=" mdi-communication-email prefix"></i>
                                <input name="Email" type="text" data-parsley-required="true" value="{{ $record->Email }}">
                                <label name="Email">آدرس ایمیل</label>
                            </div>

                            <div class="input-field col s6">
                                <input name="BirthDate" type="text" class="datepicker" data-parsley-required="true" value="{{ $record->BirthDate }}">
                                <label name="BirthDate">تاریخ تولد</label>
                            </div>

                            <div class="input-field col s6">
                                <i class="mdi-communication-call prefix"></i>
                                <input name="Phone" type="text" data-parsley-required="true" value="{{ $record->Phone }}">
                                <label name="Phone">نمبر تیلیفون</label>
                            </div>

                            <div class="row">
                                <div class="input-field col s12">
                                    <input name="Gender" type="text" disabled value="{{ $record->Gender }}">
                                    <label name="Gender">جنسیت</label>
                                </div> </div>

                            <div class="input-field col s12">
                                <ul id="task-card" class="collection with-header">
                                    <li >
                                        <h5 align="right">بخش دوم تحصیلات </h5>
                                    </li>
                                </ul>
                            </div>

                            <div class="input-field col s6">
                                <input name="UniversityName" type="text" data-parsley-required="true" value="{{ $record->UniversityName }}">
                                <label name="UniversityName">نام پوهنتون که شما از آن فارغ شده اید</label>
                            </div>

                            <div class="input-field col s6">
                                <input name="StartUniversityFrom" type="text" class="datepicker" data-parsley-required="true" value="{{ $record->StartUniversityFrom }}">
                                <label name="StartUniversityFrom">از تاریخ</label>
                            </div>

                            <div class="input-field col s6">
                                <input name="EndUniversityAt" type="text" class="datepicker" data-parsley-required="true" value="{{ $record->EndUniversityAt }}">
                                <label name="EndUniversityAt">الی تاریخ</label>
                            </div>


                            <div class="input-field col s6">
                                <input name="Faculty" type="text" data-parsley-required="true" value="{{ $record->Faculty }}">
                                <label name="Faculty">نام پوهنحی</label>
                            </div>

                            <div class="input-field col s6">
                                <input name="Department" type="text" data-parsley-required="true" value="{{ $record->Department }}">
                                <label name="Department">رشته تحصیلی</label>
                            </div>

                            <div class="input-field col s6">
                                <select name="UniversityGrade">
                                    <option value="" disabled selected data-parsley-required="true">Selected: {{ $record->UniversityGrade }}</option>
                                    <option value="خوب">خوب</option>
                                    <option value="عالی">عالی</option>
                                    <option value="اعلی">اعلی</option>

                                </select>
                            </div>

                            <div class="input-field col s6">
                                <input name="SchoolName" type="text" data-parsley-required="true" value="{{ $record->SchoolName }}">
                                <label name="SchoolName">لیسه</label>
                            </div>

                            <div class="input-field col s6">
                                <input name="StartSchoolFrom" type="text" class="datepicker" data-parsley-required="true" value="{{ $record->StartSchoolFrom }}">
                                <label name="StartSchoolFrom">از تاریخ</label>
                            </div>

                            <div class="input-field col s6">
                                <input name="EndSchoolAt" type="text" class="datepicker" data-parsley-required="true" value="{{ $record->EndSchoolAt }}">
                                <label name="EndSchoolAt">الی تاریخ</label>
                            </div>

                            <div class="input-field col s12">
                                <input name="OtherTraining" type="text" value="{{ $record->OtherTraining }}">
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
                                <input name="Experience" type="text" data-parsley-required="true" value="{{ $record->Experience }}">
                                <label name="Experience">در صورت ضرورت معلومات اضافی را درج ورق جداگانه نموده و آنرا با فورمه درخواستی ضمیمه نماید</label>
                            </div>

                            <div class="input-field col s6">
                                <input name="JobTitle" type="text" data-parsley-required="true" value="{{ $record->JobTitle }}">
                                <label name="JobTitle">عنوان وظیفه فعلی</label>
                            </div>

                            <div class="input-field col s6">
                                <input name="Bast" type="text" data-parsley-required="true" value="{{ $record->Bast }}">
                                <label name="Bast">بست</label>
                            </div>

                            <div class="input-field col s6">
                                <input name="Address" type="text" data-parsley-required="true" value="{{ $record->Address }}">
                                <label name="Address">آدرس استخدام کننده</label>
                            </div>

                            <div class="input-field col s6">
                                <input name="Date" type="text" class="datepicker" data-parsley-required="true" value="{{ $record->Date }}">
                                <label name="Date">تاریخ آغاز کار دروظیفه فعلی</label>
                            </div>

                            <div class="input-field col s6">
                                <input name="Responsiblities" type="text" data-parsley-required="true" value="{{ $record->Responsiblities }}">
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
                                <hr>
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
                                <input name="Crime" disabled type="text" data-parsley-required="true" value="{{ $record->Crime }}">
                            </div>
                            <br />

                            <div class="input-field col s12">
                                <label for="CrimeDetails">درصورتیکه جواب مثبت باشد جزیات احرایه دارید</label>
                                <input name="CrimeDetails" disabled type="text" data-parsley-required="true" value="{{ $record->CrimeDetails }}">
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
                        <input name="ReferenceName" type="text" data-parsley-required="true" value="{{ $record->ReferenceName }}">
                        <label name="ReferenceName">اسم</label>
                    </div>

                    <div class="input-field col s6">
                        <input name="ReferenceAdds" type="text" data-parsley-required="true" value="{{ $record->ReferenceAdds }}">
                        <label name="ReferenceAdds">آدرس</label>
                    </div>

                    <div class="input-field col s12">
                        <input name="ReferencePhone" type="text" data-parsley-required="true" value="{{ $record->ReferencePhone }}">
                        <label name="ReferencePhone">نمبر تیلیفون</label>
                    </div> <br />

                    <div class="input-field col s6">
                        <input name="secondReferenceName" type="text" data-parsley-required="true" value="{{ $record->secondReferenceName }}">
                        <label name="secondReferenceName">اسم</label>
                    </div>

                    <div class="input-field col s6">
                        <input name="secondReferenceAdds" type="text" data-parsley-required="true" value="{{ $record->secondReferenceAdds }}">
                        <label name="secondReferenceAdds">آدرس</label>
                    </div>

                    <div class="input-field col s12">
                        <input name="secondReferencePhone" type="text" data-parsley-required="true" value="{{ $record->secondReferencePhone }}">
                        <label name="secondReferencePhone">نمبر تیلیفون</label>
                    </div>

                    <div class="input-field col s12">
                        <ul id="task-card" class="collection with-header">
                            <li >
                                <h6 align="right">در صورتیکه سابقه کاری ندارید: نام و آدرس نمره تیلیفون دوشخص بارسوخ جامعه که شخصیت شما را کتبا تصدیق نماید در دو شماره فوق تحریر نمایید.</h6>
                            </li>
                        </ul>
                    </div>
                    <hr/>

                    <div class="input-field col s12">
                        <input name="RelativesName" type="text"  value="{{ $record->RelativesName }}">
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
                        <input name="CurrentDate" type="text" data-parsley-required="true" class="datepicker" value="{{ $record->CurrentDate }}">
                        <label name="CurrentDate">اقرار میدارم بر اینکه معلومات مندرج این در خواست حقیقت دارد. اگر کدام معلومات ارایه شده غلت ثابت گردد درخواستی ام باطل و حق شزکت درپروسه ووظیفه جدید را از دست میدهم.</label>
                    </div>

                    <div class="input-field col s12">
                        <input name="PastJobDate" type="text" data-parsley-required="true" class="datepicker" value="{{ $record->PastJobDate }}">
                        <label name="PastJobDate">از تاریخ</label>
                    </div>
                    <div class="input-field col s12">
                        <input name="EndPastJobDate" type="text" data-parsley-required="true" class="datepicker" value="{{ $record->EndPastJobDate }}">
                        <label name="EndPastJobDate">الی تاریخ</label>
                    </div>

                    <div class="input-field col s6">
                        <input name="EmployerName" type="text" data-parsley-required="true" value="{{ $record->EmployerName }}">
                        <label name="EmployerName">اسم و آدرس استخدام کننده</label>
                    </div>

                    <div class="input-field col s6">
                        <input name="PastJobRes" type="text" data-parsley-required="true" value="{{ $record->PastJobRes }}">
                        <label name="PastJobRes">مسعولیت های عمده طبق لایحه وظایف</label>
                    </div>

                    <div class="input-field col s12">
                        <input name="PastJobDateFrom" type="text" data-parsley-required="true" class="datepicker" value="{{ $record->PastJobDateFrom }}">
                        <label name="PastJobDateFrom">از تاریخ</label>
                    </div>
                    <div class="input-field col s12">
                        <input name="PastJobDateEnd" type="text"  data-parsley-required="true" class="datepicker" value="{{ $record->PastJobDateEnd }}">
                        <label name="PastJobDateEnd">الی تاریخ</label>
                    </div>

                    <div class="input-field col s6">
                        <input name="SecEmployerName" type="text" data-parsley-required="true" value="{{ $record->SecEmployerName }}">
                        <label name="SecEmployerName">اسم و آدرس استخدام کننده</label>
                    </div>

                    <div class="input-field col s6">
                        <input name="EmployerResponsibility" type="text" data-parsley-required="true" value="{{ $record->EmployerResponsibility }}">
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
                                                        <input type="checkbox" name="Dari" data-parsley-required="true" data-parsley-required-message="Select Dari Language" value="True" id="Dari" checked="checked"/>
                                                        <label for="Dari">دری
                                                        </label>
                                                        <span class="task-cat teal">تحریری</span>
                                                        <select name="DariWrittingLevel">
                                                            <option value="" disabled selected data-parsley-required="true">Selected:  {{ $record->DariWrittingLevel }}</option>
                                                            <option value="خوب">خوب</option>
                                                            <option value="عالی">عالی</option>
                                                            <option value="بسیار خوب">بسیار خوب</option>
                                                        </select>

                                                        <span class="task-cat pink">خواندن   </span>
                                                        <select name="DariReadingLevel">
                                                            <option value="" disabled selected data-parsley-required="true">Selected:  {{ $record->DariReadingLevel }}</option>
                                                            <option value="خوب">خوب</option>
                                                            <option value="عالی">عالی</option>
                                                            <option value="بسیار خوب">بسیار خوب</option>
                                                        </select>

                                                        <span class="task-cat cyan">تکلم   </span>
                                                        <select name="DariSpeakingLevel">
                                                            <option value="" disabled selected style="position: z-20" data-parsley-required="true">Selected:  {{ $record->DariSpeakingLevel }}</option>
                                                            <option value="خوب">خوب</option>
                                                            <option value="عالی">عالی</option>
                                                            <option value="بسیار خوب">بسیار خوب</option>
                                                        </select>
                                                    </li>
                                                </td>   <br /> <br />

                                                <td>
                                                    <li class="collection-item dismissable">
                                                        <input type="checkbox" name="Pashto" data-parsley-required="true" data-parsley-required-message="Select Pashto Language" value="True" id="Pashto" checked="checked"/>
                                                        <label for="Pashto">پشتو
                                                        </label>
                                                        <span class="task-cat teal">تحریر    </span>
                                                        <select name="PashtoWrittingLevel">
                                                            <option value="" disabled selected data-parsley-required="true">Selected:  {{ $record->PashtoWrittingLevel }} </option>
                                                            <option value="خوب">خوب</option>
                                                            <option value="عالی">عالی</option>
                                                            <option value="بسیار خوب">بسیار خوب</option>
                                                        </select>

                                                        <span class="task-cat pink">خواندن </span>
                                                        <select name="PashtoReadingLevel">
                                                            <option value="" disabled selected data-parsley-required="true">Selected:  {{ $record->PashtoReadingLevel }} </option>
                                                            <option value="خوب">خوب</option>
                                                            <option value="عالی">عالی</option>
                                                            <option value="بسیار خوب">بسیار خوب</option>
                                                        </select>

                                                        <span class="task-cat cyan">تکلم   </span>
                                                        <select name="PashtoSpeakingLevel">
                                                            <option value="" disabled selected data-parsley-required="true">Selected:  {{ $record->PashtoSpeakingLevel }} </option>
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
                                                            <option value="" disabled selected>Selected:  {{ $record->EnglishWrittingLevel }} </option>
                                                            <option value="خوب">خوب</option>
                                                            <option value="عالی">عالی</option>
                                                            <option value="بسیار خوب">بسیار خوب</option>
                                                        </select>

                                                        <span class="task-cat pink">خواندن   </span>
                                                        <select name="EnglishReadingLevel">
                                                            <option value="" disabled selected>Selected:  {{ $record->EnglishReadingLevel }} </option>
                                                            <option value="خوب">خوب</option>
                                                            <option value="عالی">عالی</option>
                                                            <option value="بسیار خوب">بسیار خوب</option>
                                                        </select>

                                                        <span class="task-cat cyan">تکلم   </span>
                                                        <select name="EnglishSpeakingLevel">
                                                            <option value="" disabled selected>Selected:  {{ $record->EnglishSpeakingLevel }} </option>
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
                        <input name="ComputerSkills" type="text" data-parsley-required="true" value="{{ $record->ComputerSkills }}">
                        <label name="ComputerSkills">مهارت های کمپیوتر مشخصا بنوسید</label>
                    </div>



                    <div class="modal-footer">
                        <button type="submit" class=" waves-effect waves-light btn">Update</button> &nbsp;&nbsp;&nbsp;&nbsp;
                    </div>
                </div>
                </form>
            </div>
        </div>

        </div>
    </div>


@stop

</body>
