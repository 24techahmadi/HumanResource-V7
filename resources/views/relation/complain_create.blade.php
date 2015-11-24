
@extends('layouts.RelationLayout')

@section('title')
    HR| ثبت شکایت

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

            <!--breadcrumbs start-->
            <div id="breadcrumbs-wrapper" class=" grey lighten-3">
                <div class="container">
                    <div class="row">
                        <div class="col s12 m12 l12" align="right">
                            <h5 class="breadcrumbs-title">فورم ها</h5>
                            <ol class="breadcrumb">
                                <li><a href="relation">دشبورد</a>
                                </li>

                                <li class="active">فورم ثبت شکایات</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!--breadcrumbs end-->
            @section('content')
                <h1 class="header" align="right">فورم ثبت شکایات</h1>

                <!--Input fields-->
                <div class="row">
                    <form method="POST" action="{{ url('complain') }}" class="col s12" data-parsley-validate>
                        {!! csrf_field() !!}
                    <div class="col s12 m12 l12">
                        <div class="card-panel">
                            <h1 align="center" class="logo-wrapper"><a class="brand-logo darken-1"><img src="{{ URL::asset('assets/images/AF2.png') }}" height="100" width="100" alt="materialize logo" sizes></a></h1>
                            <h5 align="center" class="header">جمهوری اسلامی افغانستان</h5>
                            <h5 align="center" class="header">وزارت تحصیلات عالی افغانستان</h5>
                                <h5 class="row" align="center" class="header">ریاست منابع بشری
                            </h5>

                                    <div class="input-field col s12" align="center">
                                        <ul id="task-card" class="collection with-header">
                                            <li class="collection-header cyan">
                                                <h5 class="task-card-title">معلومات عمومی</h5>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-group prefix"></i>
                                        <input placeholder="" name="Name" type="text" data-parsley-required="true" >
                                        <label for="Name">اسم</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-group prefix"></i>
                                        <input placeholder="" name="FatherName" type="text" data-parsley-required="true">
                                        <label for="FatherName">اسم پدر</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-group prefix"></i>
                                        <input placeholder="" name="LastName" type="text" data-parsley-required="true">
                                        <label for="LastName">تخلص</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-group prefix"></i>
                                        <input placeholder="" name="Province" type="text" data-parsley-required="true">
                                        <label for="Province">ولایت</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-group prefix"></i>
                                        <input placeholder="" name="District" type="text" data-parsley-required="true">
                                        <label for="District">ولسوالی</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-group prefix"></i>
                                        <input placeholder="" name="Village" type="text" data-parsley-required="true">
                                        <label for="Village">قریه</label>
                                    </div>


                                    <div class="input-field col s12" align="center">
                                        <ul id="task-card" class="collection with-header">
                                            <li class="collection-header cyan">
                                                <h5 class="task-card-title">وظیفه فعلی</h5>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-group prefix"></i>
                                        <input placeholder="" name="EducationLevel" type="text" data-parsley-required="true">
                                        <label for="EducationLevel">درجه تحصیل</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-group prefix"></i>
                                        <input placeholder="" name="EducationPlace" type="text" data-parsley-required="true">
                                        <label for="EducationPlace">محل تحصیل</label>
                                    </div>

                                    <div class="col s12 m8 l12" style="margin-bottom:30px">
                                        <i class="mdi-social-group prefix"></i>
                                        <label for="HaveJob">&nbsp;&nbsp;&nbsp;آیا فعلا وظیفه دارید؟</label>&nbsp;&nbsp;

                                                <input name="HaveJob" checked value="بله" type="radio" id="test1" />
                                                <label for="test1">بلی</label>
                                                <input name="HaveJob" value="نخیر" type="radio" id="test2" />
                                                <label for="test2">نخیر</label>

                                    </div> <hr />

                                    <div class="input-field col s6">
                                        <i class="mdi-social-group prefix"></i>
                                        <input placeholder="" name="TargetBast" type="text" data-parsley-required="true">
                                        <label for="TargetBast">عنوان وظیفه</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-group prefix"></i>
                                        <input placeholder="" name="ComplainedOffice" type="text" data-parsley-required="true">
                                        <label for="ComplainedOffice">اداره</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-group prefix"></i>
                                        <input placeholder="" name="Bast" type="text" data-parsley-required="true">
                                        <label for="Bast">بست</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-group prefix"></i>
                                        <input placeholder="" name="PlaceOfJob" type="text" data-parsley-required="true">
                                        <label for="PlaceOfJob">محل وظیفه</label>
                                    </div>

                                    <div class="input-field col s12" align="center">
                                        <ul id="task-card" class="collection with-header">
                                            <li class="collection-header cyan">
                                                <h5 class="task-card-title">موضوعات شکایت</h5>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-group prefix"></i>
                                        <input placeholder="" name="NewPositionTitle" type="text" data-parsley-required="true">
                                        <label for="ComplainedTitle">عنوان بست مورد منازعه</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-group prefix"></i>
                                        <input placeholder="" name="RelatedOffice" type="text" data-parsley-required="true">
                                        <label for="RelatedOffice">اداره مربوطه</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-group prefix"></i>
                                        <input placeholder="" name="ComplaindPossition" type="text" data-parsley-required="true">
                                        <label for="ComplaindOffice">مرجع شکایت</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-group prefix"></i>
                                        <input placeholder="" name="ComplainedOfficeAdds" type="text" data-parsley-required="true">
                                        <label for="ComplainedOfficeAdds">آدرس اداره</label>
                                    </div>

                                    <div class="input-field col s12" align="center">
                                        <ul id="task-card" class="collection with-header">
                                            <li class="collection-header cyan">
                                                <h5 class="task-card-title">لطفا یکی از گذینه های زیر را انتخاب نماید</h5>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="input-field col s12" align="right">
                                        <ul id="task-card" class="collection with-header">
                                            <li >
                                                <h5 >شکایات مربوط تعینات</h5>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="row">
                                    <div class="input-field col s6">
                                            <input name="ComplainObjectives" checked value="عدم شارت لیست" type="radio" id="test16" />
                                            <label for="test16">عدم شارت لیست</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-schedule prefix"></i>
                                        <input name="NotShortlistedDate" type="date" class="datepicker">
                                        <label for="NotShortlistedDate"> تاریخ اعلان نتایج برای عدم شارت لیست </label>
                                    </div>
                                        </div> <hr />

                            <div class="row">
                            <div class="input-field col s6" style="margin-bottom:20px;">
                                <input name="ComplainObjectives" value="عدم اخذ امتحان" type="radio" id="test166" />
                                <label for="test166" >عدم اخذ امتحان</label>
                            </div>
                                </div> <hr />


                                    <div class="row">
                                        <div class="input-field col s6">
                                            <input name="ComplainObjectives" value="عدم قناعت از نتیجه امتحان" type="radio" id="test17" />
                                            <label for="test17">عدم قناعت از نتیجه امتحان</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-schedule prefix"></i>
                                            <input name="ExaminationDate" type="date" class="datepicker">
                                            <label for="ExaminationDate">تاریخ اخذ امتحان</label>
                                        </div>

                                        <div class="input-field col s12">
                                            <i class="mdi-action-schedule prefix"></i>
                                            <input name="ResultAnnouncmentDate" type="date" class="datepicker">
                                            <label for="ResultAnnouncmentDate">تاریخ ابلاغ نتیجه امتحان</label>
                                        </div>

                                        <i class="mdi-social-group prefix"></i>
                                        <label for="ExaminationType">نوع امتحان</label>

                                            <input name="ExaminationType" checked value="تحریری" type="radio" id="test3" />
                                            <label for="test3">تحریری</label>
                                            <input name="ExaminationType" value="تقریری" type="radio" id="test4" />
                                            <label for="test4">تقریری</label>
                                    </div> <hr />

                                    <div class="row">
                                        <div class="input-field col s12" style="margin-bottom:20px;">
                                                <input name="ComplainObjectives" value="عدم تقرر" type="radio" id="test18" />
                                                <label for="test18">عدم تقرر</label>
                                        </div> <hr />

                                        <div class="input-field col s12" align="right">
                                            <ul id="task-card" class="collection with-header">
                                                <li >
                                                    <h5 >شکایات سایر موارد</h5>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="input-field col s6">
                                            <br>
                                            <input name="ComplainObjectives" value="نارصایتی ارزیابی سالانه"  type="radio" id="test19" />
                                            <label for="test19">نارصایتی ارزیابی سالانه</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <br>
                                            <input name="ComplainObjectives" value="مشکلات تعقاع"   type="radio" id="test20" />
                                            <label for="test20">مشکلات تعقاعد</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <br>
                                            <input name="ComplainObjectives" value=">اعاده حقوق معاشات"   type="radio" id="test21" />
                                            <label for="test21">اعاده حقوق معاشات</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <br>
                                            <input name="ComplainObjectives" value=">تبدیلی غیر قانونی"   type="radio" id="test22" />
                                            <label for="test22">تبدیلی غیر قانونی</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <br>
                                            <input name="ComplainObjectives" value="انفکاک از وظیفه"   type="radio" id="test23" />
                                            <label for="test23">انفکاک از وظیفه</label>
                                        </div><br />

                                        <div class="input-field col s6">
                                            <br>
                                            <input name="ComplainObjectives" value="اعلان بست" type="radio" id="test24" />
                                            <label for="test24">اعلان بست</label>
                                        </div>

                                 <div class="row col s12">

                                    <div class="input-field col s12">
                                        <i class="mdi-social-group prefix"></i>
                                        <input placeholder="" name="MyComplians" type="text">
                                        <label for="MyComplians">درصورتیکه شکایات شما غیر از گزینه های ذکرشده باشد لطف نموده موضوع را در اینجا تذکردهید </label>
                                    </div>
                                </div>

                                    <div class="input-field col s12" align="center">
                                        <ul id="task-card" class="collection with-header">
                                            <li class="collection-header cyan">
                                                <h5 class="task-card-title">برای استفاده رسمی آمریت اداری</h5>
                                            </li>
                                        </ul>
                                    </div>


                                    <div class="input-field col s6">
                                        <i class="mdi-social-group prefix"></i>
                                        <input placeholder="" name="ComplainsID" type="text" data-parsley-required="true">
                                        <label for="ComplainsID">شماره ثبت شکایت</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-info-outline prefix"></i>
                                        <input placeholder="" name="ComplainsDocs" type="text" data-parsley-required="true">
                                        <label for="ComplainsDocs">تعداد اسناد ضمیمه شده فورم</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-info-outline prefix"></i>
                                        <input placeholder="" name="ComplainsDetail" type="text" data-parsley-required="true">
                                        <label for="ComplainsDetail">تفصیل شکایت</label>
                                    </div>



                                    <div class="input-field col s6" >
                                        <i class="mdi-action-schedule prefix"></i>
                                        <input name="ComplainerSignatureDate" type="date" class="datepicker" data-parsley-required="true">
                                        <label for="ComplainerSignatureDate">تاریخ امضای شاکی</label>
                                    </div>



                                    <div class="input-field col s6">
                                        <i class="mdi-action-schedule prefix"></i>
                                        <input name="BoardSignatureDate" type="date" class="datepicker" data-parsley-required="true">
                                        <label for="BoardSignatureDate">تاریخ امضای مقام ریاست بورد</label>
                                    </div>

                                    <div class="input-field col s6" >
                                        <i class="mdi-action-schedule prefix"></i>
                                        <input name="ExecutionSignatureDate" type="date" class="datepicker" data-parsley-required="true">
                                        <label for="ExecutionSignatureDate">تاریخ امضای ریاست اجرایه</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-schedule prefix"></i>
                                        <input name="EvaluationSignatureDate" type="date" class="datepicker" data-parsley-required="true">
                                        <label for="EvaluationSignatureDate">تاریخ امضای آمریت تحلیل و بر رسی</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-person prefix"></i>
                                        <input placeholder="" name="ResponsibleTeams" type="text" data-parsley-required="true">
                                        <label for="ResponsibleTeams">تیم کار شناسی موظف</label>
                                    </div>



                                    <div class="input-field col s12">
                                        <button class="btn cyan waves-effect waves-light right" type="submit" name="submit">Save
                                            <i class="mdi-content-send right"></i>
                                        </button>
                                    </div>
                                        <br /><br /><br /><br /><br /><br /></div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>




        @stop

    </div>
    </section>
</div>
</div>
</body>


