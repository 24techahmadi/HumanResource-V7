@extends('layouts.EmpLayout')

@section('title')
    HR | نمایش کاندیدان
@stop
<link rel="icon" href="{{ URL::asset('assets/images/favicon/favicon-32x32.png') }}" sizes="32x32">

<!-- Favicons-->
<link rel="apple-touch-icon-precomposed" href="{{ URL::asset('assets/images/favicon/apple-touch-icon-152x152.png')}}">
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

<!-- START HEADER -->
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
                            <h5 class="breadcrumbs-title">کاندادن</h5>
                            <ol class="breadcrumb">
                                <li><a href="index.html">دشبورد</a></li>
                                <li><a href="index.html">کاندادن شارت لیست شده</a></li>
                                <li class="active">تمام کاندیدان</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!--breadcrumbs end-->

            @section('content')

                <a class="btn-floating btn-large waves-effect waves-light right" href="{{ URL::to('listcondidate') }}"><i class="mdi-hardware-keyboard-backspace"></i></a>

                <h4>ذخیره کاندیدان</h4>
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="card-panel">
                            <h4 class="header2">نمایش کاندیدان</h4>

                            <div class="row">
                                <div class="col s12 m12 l12">
                                    <div class="card-panel">
                                        <h1 align="center" class="logo-wrapper"><a class="brand-logo darken-1"><img src="{{ URL::asset('assets/images/AF2.png') }}" height="100" width="100" alt="materialize logo" sizes></a></h1>
                                        <h5 align="center" class="header">فورمه ثبت درخواستی</h5>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-perm-identity prefix"></i>
                                        <input name="id" type="text" value="{{ $record->id }}">
                                        <label for="id">ID</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <i class="mdi-action-perm-identity prefix"></i>
                                        <input name="CodeNumber" type="text" value="{{ $record->CodeNumber }}">
                                        <label for="CodeNumber">نمبر کود</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-alarm-add prefix"></i>
                                        <input name="Date" type="text" class="datepicker" value="{{ $record->Date }}">
                                        <label for="Date">تاریخ</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-maps-location-history prefix"></i>
                                        <input name="JobTitle" type="text" value="{{ $record->JobTitle }}">
                                        <label for="JobTitle">وظیفه</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-account-circle prefix"></i>
                                        <input name="Department" type="text" value="{{ $record->Department }}">
                                        <label for="Department">مدیریت</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-account-circle prefix"></i>
                                        <input name="Presedential" type="text" value="{{ $record->Presedential }}">
                                        <label for="Presedential">ریاست</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-maps-pin-drop prefix"></i>
                                        <input name="Ministry" type="text" value="{{ $record->Ministry }}">
                                        <label for="Ministry">وزارت/اداره</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-alarm-add prefix"></i>
                                        <input name="AnnouncementDate" type="text" class="datepicker" value="{{ $record->AnnouncementDate }}">
                                        <label for="AnnouncementDate">تاریخ اعلان</label>
                                    </div>

                                    <div class="col s12 m12 l12">
                                        <h5 align="center" class="header">شهرت</h5>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-account-circle prefix"></i>
                                        <input name="EmpId" type="text" value="{{ $record->EmpId }}">
                                        <label for="EmpId">شماره</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-assignment-ind prefix"></i>
                                        <input name="Name" type="text" value="{{ $record->Name }}">
                                        <label for="Name">اسم </label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-account-circle prefix"></i>
                                        <input name="FatherName" type="text" value="{{ $record->FatherName }}">
                                        <label for="FatherName">ولد</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-person prefix"></i>
                                        <input name="LastName" type="text" value="{{ $record->LastName }}">
                                        <label for="LastName">تخلص</label>
                                    </div>

                                    <div class="col s12 m12 l12">
                                        <h5 align="center">تاریخ صدور و وصول درخواستی</h5>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-alarm-add prefix"></i>
                                        <input name="DistributionDate" type="text" class="datepicker" value="{{ $record->DistributionDate }}">
                                        <label for="DistributionDate">تاریخ صدور</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-alarm-add prefix"></i>
                                        <input name="ReceiveDate" type="text" class="datepicker" value="{{ $record->ReceiveDate }}">
                                        <label for="ReceiveDate">تاریخ وصول</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-alarm-add prefix"></i>
                                        <input name="LastAcceptanceDate" type="text" class="datepicker" value="{{ $record->LastAcceptanceDate }}">
                                        <label for="LastAcceptanceDate">آخرین پزیرش درخواستی</label>
                                    </div>


                                    <div class="input-field col s6">
                                        <i class="mdi-action-alarm-add prefix"></i>
                                        <input name="Shortlist" type="text" value="{{ $record->Shortlist }}">
                                        <label for="Shortlist">شارت لیست شده یا خیر؟</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-alarm-add prefix"></i>

                                        <input name="InterviewDate" type="text" class="datepicker" value="{{ $record->InterviewDate }}">
                                        <label for="InterviewDate">تاریخ مصاحبه</label>
                                    </div>

                                    <div class="input-field col s6">

                                        <input name="InterviewScore" type="text" value="{{ $record->InterviewScore }}">
                                        <label for="InterviewScore">نمرات مصاحبه</label>
                                    </div>
                                    <br />

                                    <div class="input-field col s12">
                                        <i class="mdi-action-alarm-add prefix"></i>
                                        <input name="Selection" type="text" value="{{ $record->Selection }}">
                                        <label for="Selection">انتخاب شده یا خیر؟</label>
                                    </div>
                                    <br />

                                    <div class="input-field col s12">
                                        <i class="mdi-communication-forum prefix"></i>
                                        <textarea name="Comment" class="materialize-textarea" length="200" value="{{ $record->Comment }}"></textarea>
                                        <label for="Comment">ملا حظات</label>
                                    </div>

                                    <div class="col s12 m12 l12">
                                        <h6 align="right">نوت: این فورم بصورت کتاب (ثبت درخواستی) در اداره منابع بشری /
                                            ریاست اجرایه بورد تعینات موجود باشد وتمام مراحل راکه فورمه طی می نماید طی می نماید درج نماید</h6>
                                    </div>

                                    <div class="input-field col s12">
                                        <a onclick="moreInfo({{ $record->id }});" class="modal-trigger" href="#modal2" value="{{ $record->id }}"> <i class="mdi-editor-border-color prefix"></i></a>

                                    </div>
                                </div>
                            </div>

                            </form>
                        </div>
                    </div>
                </div>



                <div id="modal2" class="col s8 m8 l12 modal" style="border-radius:25px">
                    <div class="modal-content">
                        <div class="card-panel cyan darken-1">
                            <h5 class="card-content white-text"> Update Records</h5>
                        </div>
                        <!-- strat Content of Modal2 -->

                        <!--Show Specific Record-->
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="card-panel">
                                    <h4 class="header2"><b>Record Information</b></h4>
                                    <div class="divider"> </div>
                                    <div class="row">
                                        <form method="POST" action="{{ route('listcondidate.update',['id'=>$record]) }}" accept-charset="utf-8" class="col s11 right" data-parsley-validate>
                                            {!! csrf_field() !!}
                                            <input name="_method" type="hidden" value="PATCH">

                                            <div class="row">
                                                <div class="input-field col s6">
                                                    <i class="mdi-action-perm-identity prefix"></i>
                                                    <input name="CodeNumber" type="text" value="{{ $record->CodeNumber }}" data-parsley-required="true">
                                                    <label for="CodeNumber">نمبر کود</label>
                                                </div>

                                                <div class="input-field col s6">
                                                    <i class="mdi-action-alarm-add prefix"></i>
                                                    <input name="Date" type="text" class="datepicker" data-parsley-required="true" value="{{ $record->Date }}">
                                                    <label for="Date">تاریخ</label>
                                                </div>

                                                <div class="input-field col s6">
                                                    <i class="mdi-maps-location-history prefix"></i>
                                                    <input name="JobTitle" type="text" data-parsley-required="true" value="{{ $record->JobTitle }}">
                                                    <label for="JobTitle">وظیفه</label>
                                                </div>

                                                <div class="input-field col s6">
                                                    <i class="mdi-action-account-circle prefix"></i>
                                                    <input name="Department" type="text"  data-parsley-required="true" value="{{ $record->Department }}">
                                                    <label for="Department">مدیریت</label>
                                                </div>

                                                <div class="input-field col s6">
                                                    <i class="mdi-action-account-circle prefix"></i>
                                                    <input name="Presedential" type="text" data-parsley-required="true" value="{{ $record->Presedential }}">
                                                    <label for="Presedential">ریاست</label>
                                                </div>

                                                <div class="input-field col s6">
                                                    <i class="mdi-maps-pin-drop prefix"></i>
                                                    <input name="Ministry" type="text" data-parsley-required="true" value="{{ $record->Ministry }}">
                                                    <label for="Ministry">وزارت/اداره</label>
                                                </div>

                                                <div class="input-field col s6">
                                                    <i class="mdi-action-alarm-add prefix"></i>
                                                    <input name="AnnouncementDate" type="text" class="datepicker" data-parsley-required="true" value="{{ $record->AnnouncementDate }}">
                                                    <label for="AnnouncementDate">تاریخ اعلان</label>
                                                </div>

                                                <div class="col s12 m12 l12">
                                                    <h5 align="center" class="header">شهرت</h5>
                                                </div>

                                                <div class="input-field col s6">
                                                    <i class="mdi-action-account-circle prefix"></i>
                                                    <input name="EmpId" type="text" data-parsley-required="true" value="{{ $record->EmpId }}">
                                                    <label for="EmpId">شماره</label>
                                                </div>

                                                <div class="input-field col s6">
                                                    <i class="mdi-action-assignment-ind prefix"></i>
                                                    <input name="Name" type="text" data-parsley-required="true" value="{{ $record->Name }}">
                                                    <label for="Name">اسم </label>
                                                </div>

                                                <div class="input-field col s6">
                                                    <i class="mdi-action-account-circle prefix"></i>
                                                    <input name="FatherName" type="text" data-parsley-required="true" value="{{ $record->FatherName }}">
                                                    <label for="FatherName">ولد</label>
                                                </div>

                                                <div class="input-field col s6">
                                                    <i class="mdi-social-person prefix"></i>
                                                    <input name="LastName" type="text" data-parsley-required="true" value="{{ $record->LastName }}">
                                                    <label for="LastName">تخلص</label>
                                                </div>

                                                <div class="col s12 m12 l12">
                                                    <h5 align="center">تاریخ صدور و وصول درخواستی</h5>
                                                </div>

                                                <div class="input-field col s6">
                                                    <i class="mdi-action-alarm-add prefix"></i>
                                                    <input name="DistributionDate" type="text" data-parsley-required="true" class="datepicker" value="{{ $record->DistributionDate }}">
                                                    <label for="DistributionDate">تاریخ صدور</label>
                                                </div>

                                                <div class="input-field col s6">
                                                    <i class="mdi-action-alarm-add prefix"></i>
                                                    <input name="ReceiveDate" type="text"  data-parsley-required="true" class="datepicker" value="{{ $record->ReceiveDate }}">
                                                    <label for="ReceiveDate">تاریخ وصول</label>
                                                </div>

                                                <div class="input-field col s6">
                                                    <i class="mdi-action-alarm-add prefix"></i>
                                                    <input name="LastAcceptanceDate" data-parsley-required="true" type="text" class="datepicker" value="{{ $record->LastAcceptanceDate }}">
                                                    <label for="LastAcceptanceDate">آخرین پزیرش درخواستی</label>
                                                </div>

                                                <div class="input-field col s6">
                                                    <label for="Shortlist" >شارت لیست شده یا خیر؟</label>
                                                    <br />
                                                    <p>
                                                        <input name="Shortlist" value="Yes" type="radio" id="ShortlistYes" />
                                                        <label for="ShortlistYes">بلی</label>
                                                        <input name="Shortlist" value="No" type="radio" id="ShortlistNo" data-parsley-required="true"/>
                                                        <label for="ShortlistNo">نخیر</label>
                                                    </p>
                                                </div>

                                                <div class="input-field col s6">
                                                    <i class="mdi-action-alarm-add prefix"></i>

                                                    <input name="InterviewDate" type="text" class="datepicker" data-parsley-required="true" value="{{ $record->InterviewDate }}">
                                                    <label for="InterviewDate">تاریخ مصاحبه</label>
                                                </div>

                                                <div class="input-field col s6">

                                                    <input name="InterviewScore" type="text" data-parsley-required="true" value="{{ $record->InterviewScore }}">
                                                    <label for="InterviewScore">نمرات مصاحبه</label>
                                                </div>
                                                <br />

                                                <div class="input-field col s6">
                                                    <label for="Selection">انتخاب شده یا خیر؟</label>
                                                    <br />
                                                    <p>
                                                        <input name="Selection" value="Yes" type="radio" id="Yes" />
                                                        <label for="Yes">بلی</label>
                                                        <input name="Selection" value="No" type="radio" id="No" data-parsley-required="true"/>
                                                        <label for="No">نخیر</label>
                                                    </p>
                                                </div>
                                                <br />

                                                <div class="input-field col s12">
                                                    <i class="mdi-communication-forum prefix"></i>
                                                    <textarea name="Comment" class="materialize-textarea" length="200" value="{{ $record->Comment }}"></textarea>
                                                    <label for="Comment">ملا حظات</label>
                                                </div>

                                                <div class="col s12 m12 l12">
                                                    <h6 align="right">نوت: این فورم بصورت کتاب (ثبت درخواستی) در اداره منابع بشری /
                                                        ریاست اجرایه بورد تعینات موجود باشد وتمام مراحل راکه فورمه طی می نماید طی می نماید درج نماید</h6>
                                                </div>


                                                <div class="modal-footer">
                                                <button type="submit" class=" waves-effect waves-light btn">Update</button> &nbsp;&nbsp;&nbsp;&nbsp;
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            @stop
        </section>
    </div>
</div>
</body>
