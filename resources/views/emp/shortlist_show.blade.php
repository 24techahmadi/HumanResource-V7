@extends('layouts.EmpLayout')

@section('title')
    HR | فورم کاندیدان شارت لست شده

@stop
<link rel="icon" href="{{ URL::asset('assets/images/favicon/favicon-32x32.png') }}" sizes="32x32">

<!-- Favicons-->
<link rel="apple-touch-icon-precomposed" href="{{ URL::asset('assets/images/favicon/apple-touch-icon-152x152.png') }}">
<meta name="msapplication-TileColor" content="#00bcd4">
<meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">


<!--   <link href="{{ URL::asset('assets/bootstraps/bootstrap.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
 -->
<head>


</head>
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
                            <h5 class="breadcrumbs-title">لست کاندیدان</h5>
                            <ol class="breadcrumb">
                                <li><a href="employment">دشبورد</a>
                                </li>

                                <li class="active">فورم کاندیدان شارت لست شده</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!--breadcrumbs end-->


            <!--start container-->


            @section('content')
                <h1 class="header" align="right">فورم کاندیدان شارت لست شده</h1>

                <a class=" waves-effect waves-light btn right " href="{{ URL::to('shortlist') }}">تمام کاندیدان</a> <br /> <br />

                <!--Form Advance-->
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="card-panel">
                            <h1 align="center" class="logo-wrapper"><a class="brand-logo darken-1"><img src="{{ URL::asset('assets/images/AF2.png') }}" height="100" width="100" alt="materialize logo" sizes></a></h1>
                            <h5 align="center" class="header">جمهوری اسلامی افغانستان</h5>
                            <h5 align="center" class="header">وزارت تحصیلات عالی افغانستان</h5>
                            <h5 align="center" class="header">ریاست منابع بشری</h5>
                            <hr>

                            <div class="input-field col s12">
                                <ul id="task-card" class="collection with-header">
                                    <li class="collection-header cyan">
                                        <h5 class="task-card-title" align="right">ثبت کاندیدان در شارت لیست</h5>
                                    </li>
                                </ul>
                            </div>

                            <div class="row">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <input name="AnnouncementDate" type="text" class="datepicker" value="{{ $values->AnnouncementDate }}">
                                            <label for="AnnouncementDate">تاریخ اعلان</label>
                                        </div>

                                        <div class="input-field col s6">

                                            <input name="EndDate" type="text" class="datepicker" value="{{ $values->EndDate }}">
                                            <label for="EndDate">تاریخ ختم</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col s6">

                                            <input name="ReannouncementDate" type="text" value="{{ $values->ReannouncementDate }}">
                                            <label for="ReannouncementDate">تاریخ اعلان مجدد</label>
                                        </div>

                                        <div class="input-field col s6">

                                            <input name="ReannouncementEndDate" type="text" value="{{ $values->ReannouncementEndDate }}">
                                            <label for="ReannouncementEndDate">ختیم اعلان</label>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="input-field col s6">
                                            <input name="Ministry" type="text" value="{{ $values->Ministry }}">
                                            <label for="Ministry">وزارت/اداره</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <input name="Reyasat" type="text" value="{{ $values->Reyasat }}">
                                            <label for="Reyasat">ریاست</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col s12 m12">
                                            <input name="Bast" type="text" value="{{ $values->Bast }}">
                                            <label for="Bast">بست</label>
                                        </div>

                                        <div class="input-field col s12">
                                            <ul id="task-card" class="collection with-header">
                                                <li class="collection-header cyan">
                                                    <h5 class="task-card-title" align="right">شهرت</h5>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="input-field col s12">
                                            <input name="IDNumber" type="text" value="{{ $values->IDNumber }}">
                                            <label for="IDNumber">شماره</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col s6">
                                            <input name="Name" type="text" value="{{ $values->Name }}">
                                            <label for="Name">اسم</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <input name="LastName" type="text" value="{{ $values->LastName }}">
                                            <label for="LastName">تخلص</label>
                                        </div>


                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input name="FatherName" type="text" value="{{ $values->FatherName }}">
                                                <label for="FatherName">ولد</label>
                                            </div>


                                            <div class="input-field col s6">
                                                <input name="EducationLevel" value="{{ $values->EducationLevel }}" type="text" data-parsley-required="true" value="{{ $values->FatherName }}">
                                                <label for="EducationLevel">درجه تحصیلی</label>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="input-field col s6">
                                                <i class="mdi-communication-email prefix"></i>
                                                <input name="Email" type="text" value="{{ $values->Email }}">
                                                <label for="Email">Email</label>
                                            </div>

                                            <div class="input-field col s6">
                                                <i class="mdi-communication-call prefix"></i>
                                                <input name="Phone" type="text" class="datepicker" value="{{ $values->Phone }}" >
                                                <label for="Phone">phone</label>
                                            </div>
                                        </div>

                                        <div class="input-field col s12">
                                            <ul id="task-card" class="collection with-header">
                                                <li class="collection-header cyan">
                                                    <h5 class="task-card-title" align="right">تجربه کاری</h5>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="input-field col s12">
                                            <i class="mdi-communication-call prefix"></i>
                                            <input name="ExpWorkRelated" type="text" value="{{ $values->ExpWorkRelated }}">
                                            <label for="ExpWorkRelated">مرتبط به وظیفه</label>
                                        </div>
                                    </div>

                                    <div class="input-field col s12">
                                        <i class="mdi-communication-call prefix"></i>
                                        <input name="GenrelExp" type="text" value="{{ $values->GenrelExp }}">
                                        <label for="GenrelExp">عمومی</label>
                                    </div>
                            </div>

                            <h4 class="header" align="right">مهارت ها</h4>
                            <div class="row">
                                <div class="col s12 m4 l4">

                                    <ul id="task-card" class="collection with-header">
                                        <li class="collection-header cyan">
                                            <h4 class="task-card-title">لسان ها</h4>
                                        </li>

                                        <li class="collection-item dismissable">
                                            <label for="Dari">دری :
                                            </label><span class="task-cat teal">{{ $values->Dari }}</span>
                                        </li>

                                        <li class="collection-item dismissable">
                                            <label for="Pashto">پشتو
                                            </label><span class="task-cat purple">{{ $values->Pashto }}</span>
                                        </li>

                                        <li class="collection-item dismissable">
                                            <label for="English">انگلیسی
                                            </label><span class="task-cat pink">{{ $values->English }}</span>
                                        </li>

                                        <li class="collection-item dismissable">
                                            <label for="MoreLanguage">سایر زبانها
                                            </label><span class="task-cat cyan">{{ $values->MoreLanguage }}</span>
                                        </li>

                                    </ul>

                                </div>


                                <div class="col s12 m4 l4">

                                    <ul id="task-card" class="collection with-header">
                                        <li class="collection-header cyan">
                                            <h4 class="task-card-title">کمپیوتر</h4>

                                        </li>

                                        <li class="collection-item dismissable">
                                            <label for="Windows">ویندوز
                                            </label><span class="task-cat red">{{ $values->Windows }}</span>
                                        </li>

                                        <li class="collection-item dismissable">
                                            <label for="Office">پروگرام آفیس
                                            </label><span class="task-cat teal">{{ $values->Office }}</span>
                                        </li>

                                        <li class="collection-item dismissable">
                                            <label for="Networking">شبکه
                                            </label><span class="task-cat purple">{{ $values->Networking }}</span>
                                        </li>

                                        <li class="collection-item dismissable">
                                            <label for="MoreOnComputers">سایر برنامه ها
                                            </label><span class="task-cat pink">{{ $values->MoreOnComputers }}</span>
                                        </li>


                                    </ul>
                                </div>
                                <div class="col s12 m4 l4">

                                    <ul id="task-card" class="collection with-header">
                                        <li class="collection-header cyan">
                                            <h4 class="task-card-title">مهارت های دیگر</h4>
                                        </li>

                                        <li class="collection-item dismissable">
                                            <label for="GoodManagement">مدیریت خوب
                                            </label><span class="task-cat teal">{{ $values->GoodManagement }}</span>
                                        </li>

                                        <li class="collection-item dismissable">
                                            <label for="bodyLanguage">افهام و تفهیم خوب
                                            </label><span class="task-cat pink">{{ $values->bodyLanguage }}</span>
                                        </li>

                                        <li class="collection-item dismissable">
                                            <label for="GoodCommunication">ارتباطاتات خوب
                                            </label><span class="task-cat cyan">{{ $values->GoodCommunication }}</span>
                                        </li>

                                        <li class="collection-item dismissable">
                                            <label for="OtherSkills">سایر مهارت ها
                                            </label><span class="task-cat red">{{ $values->OtherSkills }}</span>
                                        </li>

                                    </ul>
                                </div>
                                <div class="input-field col s12">
                                    <input name="MoreLanguageNames" value="{{ $values->MoreLanguageNames }}" type="text">
                                    <label for="MoreLanguageNames">سایر زبان ها</label>
                                </div>
                                <div class="input-field col s12">
                                    <input name="MoreOnComputersDetails" value="{{ $values->MoreOnComputersDetails }}" type="text">
                                    <label for="MoreOnComputersDetails">سایر برنامه ها</label>
                                </div>
                                <div class="input-field col s12">
                                    <input name="OtherSkillsDetails" value="{{ $values->OtherSkillsDetails }}" type="text" >
                                    <label for="OtherSkillsDetails">سایر مهارت ها</label>
                                </div>




                                <div class="row">

                                    <div class="input-field col s12">
                                        <i class=" mdi-maps-beenhere prefix"></i>
                                        <input name="Rules" value="{{ $values->Rules }}" type="text" >
                                        <label for="Rules">شرایت مندرج مواد (7)و(8)قانون کارکنان خدمات ملکی و شرایط ارایه شده از طرف اداره</label>
                                    </div>

                                    <div class="input-field col s12">
                                        <i class=" mdi-maps-beenhere prefix"></i>
                                        <input name="Result" value="{{ $values->Result }}" type="text" >
                                        <label for="Result">نتیجه</label>
                                    </div>


                                    <div class="input-field col s12">
                                        <a onclick="moreInfo({{ $values->id }});" class="modal-trigger" href="#modal2" value="{{ $values->id }}"> <i class="mdi-editor-border-color prefix"></i></a>

                                    </div>
                                </div>

                            </div>
                            </form>
                        </div>
                    </div>
                </div>
        </section>
    </div>



    <div id="modal2" class="modal" style="border-radius:25px">
        <div class="modal-content">
            <div class="card-panel cyan darken-1">
                <h5 class="card-content white-text"> Update Records</h5>
            </div>

                <form method="POST" action="{{ route('shortlist.update',['id'=>$values]) }}" accept-charset="utf-8" class="col s11 right" data-parsley-validate>
                    {!! csrf_field() !!}
                    <input name="_method" type="hidden" value="PATCH">
                <div class="col s12 m12 l12">
                    <div class="card-panel">
                        <h4 class="header2"><b>Record Information</b></h4>
                        <div class="divider"> </div>


                            <div class="row">
                                <h1 align="center" class="logo-wrapper"><a class="brand-logo darken-1"><img src="{{ URL::asset('assets/images/AF2.png') }}" height="100" width="100" alt="materialize logo" sizes></a></h1>
                                <h5 align="center" class="header">جمهوری اسلامی افغانستان</h5>
                                <h5 align="center" class="header">وزارت تحصیلات عالی افغانستان</h5>
                                <h5 align="center" class="header">ریاست منابع بشری</h5>
                                <hr>

                                <div class="input-field col s12">
                                    <ul id="task-card" class="collection with-header">
                                        <li class="collection-header cyan">
                                            <h5 class="task-card-title" align="right">ثبت کاندیدان در شارت لیست</h5>
                                        </li>
                                    </ul>
                                </div>
                                <div class="input-field col s6">

                                    <input name="AnnouncementDate" type="text" class="datepicker" data-parsley-required="true" value="{{ $values->AnnouncementDate }}">
                                    <label for="AnnouncementDate">تاریخ اعلان</label>
                                </div>

                                <div class="input-field col s6">

                                    <input name="EndDate" type="text" class="datepicker" data-parsley-required="true" value="{{ $values->EndDate }}">
                                    <label for="EndDate">تاریخ ختم</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s6">

                                    <input name="ReannouncementDate" type="text"  class="datepicker" data-parsley-required="true" value="{{ $values->ReannouncementDate }}">
                                    <label for="ReannouncementDate">تاریخ اعلان مجدد</label>
                                </div>

                                <div class="input-field col s6">

                                    <input name="ReannouncementEndDate" type="text" class="datepicker" data-parsley-required="true" value="{{ $values->ReannouncementEndDate }}">
                                    <label for="ReannouncementEndDate">ختیم اعلان</label>
                                </div>
                            </div>


                            <div class="row">
                                <div class="input-field col s6">
                                    <input name="Ministry" type="text" data-parsley-required="true" value="{{ $values->Ministry }}">
                                    <label for="Ministry">وزارت/اداره</label>
                                </div>

                                <div class="input-field col s6">
                                    <input name="Reyasat" type="text" data-parsley-required="true" value="{{ $values->Reyasat }}">
                                    <label for="Reyasat">ریاست</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12">
                                    <input name="Bast" type="text"  data-parsley-required="true" value="{{ $values->Bast }}">
                                    <label for="Bast">بست</label>
                                </div>

                                <div class="input-field col s12">
                                    <ul id="task-card" class="collection with-header">
                                        <li class="collection-header cyan">
                                            <h5 class="task-card-title" align="right">شهرت</h5>
                                        </li>
                                    </ul>
                                </div>

                                <div class="input-field col s12">
                                    <input name="IDNumber" data-parsley-required="true" type="text" value="{{ $values->IDNumber }}">
                                    <label for="IDNumber">شماره</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s6">
                                    <input name="Name" type="text" data-parsley-required="true" value="{{ $values->Name }}">
                                    <label for="Name">اسم</label>
                                </div>

                                <div class="input-field col s6">
                                    <input name="LastName" type="text"  data-parsley-required="true" value="{{ $values->LastName }}">
                                    <label for="LastName">تخلص</label>
                                </div>


                                <div class="row">
                                    <div class="input-field col s6">
                                        <input name="FatherName" type="text" data-parsley-required="true" value="{{ $values->FatherName }}">
                                        <label for="FatherName">ولد</label>
                                    </div>



                                    <div class="input-field col s6" >
                                        <select name="EducationLevel">
                                            <option value="" disabled selected placeholder="placeholder">Selecteded: {{ $values->EducationLevel }}</option>
                                            <option value="فارغ 12">فارغ 12</option>
                                            <option value="فارغ 14">فارغ 14</option>
                                            <option value="لسانس">لسانس</option>
                                            <option value="ماستر">ماستر</option>
                                            <option value="دوکتورا">دوکتورا</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="input-field col s6">
                                        <i class="mdi-communication-email prefix"></i>
                                        <input name="Email" type="text" data-parsley-required="true" value="{{ $values->Email }}">
                                        <label for="Email">Email</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-communication-call prefix"></i>
                                        <input name="Phone" type="text"  data-parsley-required="true" value="{{ $values->Phone }}">
                                        <label for="Phone">phone</label>
                                    </div>
                                </div>

                                <div class="input-field col s12">
                                    <ul id="task-card" class="collection with-header">
                                        <li class="collection-header cyan">
                                            <h5 class="task-card-title" align="right">تجربه کاری</h5>
                                        </li>
                                    </ul>
                                </div>

                                <div class="input-field col s12">
                                    <i class="mdi-communication-call prefix"></i>
                                    <input name="ExpWorkRelated" type="text" data-parsley-required="true" value="{{ $values->ExpWorkRelated }}">
                                    <label for="ExpWorkRelated">مرتبط به وظیفه</label>
                                </div>
                            </div>

                            <div class="input-field col s12">
                                <i class="mdi-communication-call prefix"></i>
                                <input name="GenrelExp" type="text" data-parsley-required="true" value="{{ $values->GenrelExp }}">
                                <label for="GenrelExp">عمومی</label>
                            </div>


                            <h4 class="header" align="right">مهارت ها</h4>
                            <div class="row">
                                <div class="col s12 m4 l4">

                                    <ul id="task-card" class="collection with-header">
                                        <li class="collection-header cyan">
                                            <h4 class="task-card-title">لسان ها</h4>
                                        </li>

                                        <li class="collection-item dismissable">
                                            <label for="Dari">دری :
                                            </label><span class="task-cat teal">{{ $values->Dari }}</span>
                                        </li>

                                        <li class="collection-item dismissable">
                                            <label for="Pashto">پشتو
                                            </label><span class="task-cat purple">{{ $values->Pashto }}</span>
                                        </li>

                                        <li class="collection-item dismissable">
                                            <label for="English">انگلیسی
                                            </label><span class="task-cat pink">{{ $values->English }}</span>
                                        </li>

                                        <li class="collection-item dismissable">
                                            <label for="MoreLanguage">سایر زبانها
                                            </label><span class="task-cat cyan">{{ $values->MoreLanguage }}</span>
                                        </li>

                                    </ul>

                                </div>


                                <div class="col s12 m4 l4">

                                    <ul id="task-card" class="collection with-header">
                                        <li class="collection-header cyan">
                                            <h4 class="task-card-title">کمپیوتر</h4>

                                        </li>

                                        <li class="collection-item dismissable">
                                            <label for="Windows">ویندوز
                                            </label><span class="task-cat red">{{ $values->Windows }}</span>
                                        </li>

                                        <li class="collection-item dismissable">
                                            <label for="Office">پروگرام آفیس
                                            </label><span class="task-cat teal">{{ $values->Office }}</span>
                                        </li>

                                        <li class="collection-item dismissable">
                                            <label for="Networking">شبکه
                                            </label><span class="task-cat purple">{{ $values->Networking }}</span>
                                        </li>

                                        <li class="collection-item dismissable">
                                            <label for="MoreOnComputers">سایر برنامه ها
                                            </label><span class="task-cat pink">{{ $values->MoreOnComputers }}</span>
                                        </li>


                                    </ul>
                                </div>
                                <div class="col s12 m4 l4">

                                    <ul id="task-card" class="collection with-header">
                                        <li class="collection-header cyan">
                                            <h4 class="task-card-title">مهارت های دیگر</h4>
                                        </li>

                                        <li class="collection-item dismissable">
                                            <label for="GoodManagement">مدیریت خوب
                                            </label><span class="task-cat teal">{{ $values->GoodManagement }}</span>
                                        </li>

                                        <li class="collection-item dismissable">
                                            <label for="bodyLanguage">افهام و تفهیم خوب
                                            </label><span class="task-cat pink">{{ $values->bodyLanguage }}</span>
                                        </li>

                                        <li class="collection-item dismissable">
                                            <label for="GoodCommunication">ارتباطاتات خوب
                                            </label><span class="task-cat cyan">{{ $values->GoodCommunication }}</span>
                                        </li>

                                        <li class="collection-item dismissable">
                                            <label for="OtherSkills">سایر مهارت ها
                                            </label><span class="task-cat red">{{ $values->OtherSkills }}</span>
                                        </li>

                                    </ul>
                                </div>
                                <div class="input-field col s12">
                                    <input name="MoreLanguageNames" disabled value="{{ $values->MoreLanguageNames }}" type="text">
                                    <label for="MoreLanguageNames">سایر زبان ها</label>
                                </div>
                                <div class="input-field col s12">
                                    <input name="MoreOnComputersDetails" disabled value="{{ $values->MoreOnComputersDetails }}" type="text">
                                    <label for="MoreOnComputersDetails">سایر برنامه ها</label>
                                </div>
                                <div class="input-field col s12">
                                    <input name="OtherSkillsDetails" disabled value="{{ $values->OtherSkillsDetails }}" type="text" >
                                    <label for="OtherSkillsDetails">سایر مهارت ها</label>
                                </div>

                                <div class="row">

                                    <div class="input-field col s12">
                                        <i class=" mdi-maps-beenhere prefix"></i>
                                        <input name="Rules" value="{{ $values->Rules }}" data-parsley-required="true" type="text" >
                                        <label for="Rules">شرایت مندرج مواد (7)و(8)قانون کارکنان خدمات ملکی و شرایط ارایه شده از طرف اداره</label>
                                    </div>

                                    <div class="input-field col s12">
                                        <i class=" mdi-maps-beenhere prefix"></i>
                                        <input name="Result" value="{{ $values->Result }}" data-parsley-required="true" type="text" >
                                        <label for="Result">نتیجه</label>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="submit" class=" waves-effect waves-light btn">Update</button> &nbsp;&nbsp;&nbsp;&nbsp;
                                    </div>
                                </div>

                            </div> {{-- maharat ha--}}
                        </form>
                    </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

    @stop
</body>

