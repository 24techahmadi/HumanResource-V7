
@extends('layouts.RelationLayout')

@section('title')
    HR| UpdateComplain

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
                <div class="row col s12 m12 l12">
                    <form style="margin-left:-180px;margin-right: 30px" data-parsley-validate>
                        {!! csrf_field() !!}

                            <div class="card-panel">

                                <h1 align="center" class="logo-wrapper"><a class="brand-logo darken-1"><img src="{{ URL::asset('assets/images/AF2.png') }}" height="100" width="100" alt="materialize logo" sizes></a></h1>
                                <h5 align="center" class="header">جمهوری اسلامی افغانستان</h5>
                                <h5 align="center" class="header">وزارت تحصیلات عالی افغانستان</h5>
                                <h5 align="center" class="header">ریاست منابع بشری</h5>
                                <hr>



                                        <div class="input-field col s12" align="center">
                                            <ul id="task-card" class="collection with-header">
                                                <li class="collection-header cyan">
                                                    <h5 class="task-card-title">معلومات عمومی</h5>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-social-group prefix"></i>
                                            <input placeholder="" name="Name" type="text" data-parsley-required="true" value="{{ $complains->Name }}">
                                            <label for="Name">اسم</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-social-group prefix"></i>
                                            <input placeholder="" name="FatherName" type="text" data-parsley-required="true" value="{{ $complains->FatherName }}">
                                            <label for="FatherName">اسم پدر</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-social-group prefix"></i>
                                            <input placeholder="" name="LastName" type="text" data-parsley-required="true" value="{{ $complains->LastName }}">
                                            <label for="LastName">تخلص</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-social-group prefix"></i>
                                            <input placeholder="" name="Province" type="text" data-parsley-required="true" value="{{ $complains->Province }}">
                                            <label for="Province">ولایت</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-social-group prefix"></i>
                                            <input placeholder="" name="District" type="text" data-parsley-required="true" value="{{ $complains->District }}">
                                            <label for="District">ولسوالی</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-social-group prefix"></i>
                                            <input placeholder="" name="Village" type="text" data-parsley-required="true" value="{{ $complains->Village }}">
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
                                            <input placeholder="" name="EducationLevel" type="text" data-parsley-required="true"  value="{{ $complains->EducationLevel }}">
                                            <label for="EducationLevel">درجه تحصیل</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-social-group prefix"></i>
                                            <input placeholder="" name="EducationPlace" type="text" data-parsley-required="true"  value="{{ $complains->EducationPlace }}">
                                            <label for="EducationPlace">محل تحصیل</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-social-group prefix"></i>
                                            <input placeholder="" name="HaveJob" type="text" value="{{ $complains->HaveJob }}">
                                            <label for="HaveJob">آیا فعلا وظیفه دارید؟</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-social-group prefix"></i>
                                            <input placeholder="" name="TargetBast" type="text" data-parsley-required="true" value="{{ $complains->TargetBast }}">
                                            <label for="TargetBast">عنوان وظیفه</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-social-group prefix"></i>
                                            <input placeholder="" name="ComplainedOffice" type="text" data-parsley-required="true" value="{{ $complains->ComplainedOffice }}">
                                            <label for="ComplainedOffice">اداره</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-social-group prefix"></i>
                                            <input placeholder="" name="Bast" type="text" data-parsley-required="true" value="{{ $complains->Bast }}">
                                            <label for="Bast">بست</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-social-group prefix"></i>
                                            <input placeholder="" name="PlaceOfJob" type="text" data-parsley-required="true" value="{{ $complains->PlaceOfJob }}">
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
                                            <input placeholder="" name="NewPositionTitle" type="text" data-parsley-required="true" value="{{ $complains->NewPositionTitle }}">
                                            <label for="ComplainedTitle">عنوان بست مورد منازعه</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-social-group prefix"></i>
                                            <input placeholder="" name="RelatedOffice" type="text" data-parsley-required="true" value="{{ $complains->RelatedOffice }}">
                                            <label for="RelatedOffice">اداره مربوطه</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-social-group prefix"></i>
                                            <input placeholder="" name="ComplaindOffice" type="text" data-parsley-required="true" value="{{ $complains->ComplaindOffice }}">
                                            <label for="ComplaindOffice">مرجع شکایت</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-social-group prefix"></i>
                                            <input placeholder="" name="ComplainedOfficeAdds" type="text" data-parsley-required="true" value="{{ $complains->ComplainedOfficeAdds }}">
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
                                            <div class="input-field col s12">
                                                <i class="mdi-social-group prefix"></i>
                                                <input placeholder="" disabled type="text" value="{{ $complains->ComplainObjectives }}">
                                                <label for="Bast">موضوع شکایت</label>
                                            </div>

                                            <div class="input-field col s12">
                                                <i class="mdi-action-schedule prefix"></i>
                                                <input name="NotShortlistedDate" disabled type="text" value="{{ $complains->NotShortlistedDate }}">
                                                <label for="NotShortlistedDate"> تاریخ اعلان نتایج برای عدم شارت لیست </label>
                                            </div>

                                            <div class="input-field col s12">
                                                <i class="mdi-action-schedule prefix"></i>
                                                <input name="ExaminationDate" disabled type="text" value="{{ $complains->ExaminationDate }}">
                                                <label for="ExaminationDate">تاریخ اخذ امتحان</label>
                                            </div>


                                            <div class="row col s12">

                                                <div class="input-field col s12">
                                                    <i class="mdi-social-group prefix"></i>
                                                    <input placeholder="" disabled name="MyComplians" type="text" data-parsley-required="true">
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
                                                <input placeholder="" name="ComplainsID" type="text" data-parsley-required="true" value="{{ $complains->ComplainsID }}">
                                                <label for="ComplainsID">شماره ثبت شکایت</label>
                                            </div>

                                            <div class="input-field col s6">
                                                <i class="mdi-action-info-outline prefix"></i>
                                                <input placeholder="" name="ComplainsDocs" type="text" data-parsley-required="true" value="{{ $complains->ComplainsDocs }}">
                                                <label for="ComplainsDocs">تعداد اسناد ضمیمه شده فورم</label>
                                            </div>

                                            <div class="input-field col s6">
                                                <i class="mdi-action-info-outline prefix"></i>
                                                <input placeholder="" name="ComplainsDetail" type="text" data-parsley-required="true" value="{{ $complains->ComplainsDetail }}">
                                                <label for="ComplainsDetail">تفصیل شکایت</label>
                                            </div>



                                            <div class="input-field col s6" >
                                                <i class="mdi-action-schedule prefix"></i>
                                                <input name="ComplainerSignatureDate" type="date" class="datepicker" value="{{ $complains->ComplainerSignatureDate }}">
                                                <label for="ComplainerSignatureDate">تاریخ امضای شاکی</label>
                                            </div>



                                            <div class="input-field col s6">
                                                <i class="mdi-action-schedule prefix"></i>
                                                <input name="BoardSignatureDate" type="date" class="datepicker" value="{{ $complains->BoardSignatureDate }}">
                                                <label for="BoardSignatureDate">تاریخ امضای مقام ریاست بورد</label>
                                            </div>

                                            <div class="input-field col s6" >
                                                <i class="mdi-action-schedule prefix"></i>
                                                <input name="ExecutionSignatureDate" type="date" class="datepicker" value="{{ $complains->ExecutionSignatureDate }}">
                                                <label for="ExecutionSignatureDate">تاریخ امضای ریاست اجرایه</label>
                                            </div>

                                            <div class="input-field col s6">
                                                <i class="mdi-action-schedule prefix"></i>
                                                <input name="EvaluationSignatureDate" type="date" class="datepicker" value="{{ $complains->EvaluationSignatureDate }}">
                                                <label for="EvaluationSignatureDate">تاریخ امضای آمریت تحلیل و بر رسی</label>
                                            </div>

                                            <div class="input-field col s6">
                                                <i class="mdi-social-person prefix"></i>
                                                <input placeholder="" name="ResponsibleTeams" type="text" data-parsley-required="true" value="{{ $complains->ResponsibleTeams }}">
                                                <label for="ResponsibleTeams">تیم کار شناسی موظف</label>
                                            </div>



                                            <div class="input-field col s12">
                                                <a onclick="moreInfo({{ $complains->id }});" class="modal-trigger" href="#modal2" value="{{ $complains->id }}"> <i class="mdi-editor-border-color prefix"></i></a>
                                            </div>
                                        </div>






                            </div>
                        </form>
                </div>





    <div id="modal2" class="modal" style="border-radius:25px">
        <div class="modal-content">
            <div class="card-panel cyan darken-1">
                <h5 class="card-content white-text"> Update Records</h5>
            </div>
            <!-- strat Content of Modal2 -->

            <div class="row">

                <form method="POST" action="{{ route('complain.update',['id'=>$complains]) }}" accept-charset="utf-8" class="col s12" data-parsley-validate>
                    {!! csrf_field() !!}
                    <input name="_method" type="hidden" value="PATCH">
                    <div class="col s12 m12 l12">


                            <h1 align="center" class="logo-wrapper"><a class="brand-logo darken-1"><img src="{{ URL::asset('assets/images/AF2.png') }}" height="100" width="100" alt="materialize logo" sizes></a></h1>
                            <h5 align="center" class="header">جمهوری اسلامی افغانستان</h5>
                            <h5 align="center" class="header">وزارت تحصیلات عالی افغانستان</h5>
                            <h5 align="center" class="header">ریاست منابع بشری</h5>
                            <hr>

                                    <div class="input-field col s12" align="center">
                                        <ul id="task-card" class="collection with-header">
                                            <li class="collection-header cyan">
                                                <h5 class="task-card-title">معلومات عمومی</h5>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-group prefix"></i>
                                        <input placeholder="" name="Name" type="text" data-parsley-required="true" value="{{ $complains->Name }}">
                                        <label for="Name">اسم</label>
                                    </div>


                                    <div class="input-field col s6">
                                        <i class="mdi-social-group prefix"></i>
                                        <input placeholder="" name="FatherName" type="text" data-parsley-required="true" value="{{ $complains->FatherName }}">
                                        <label for="FatherName">اسم پدر</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-group prefix"></i>
                                        <input placeholder="" name="LastName" type="text" data-parsley-required="true" value="{{ $complains->LastName }}">
                                        <label for="LastName">تخلص</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-group prefix"></i>
                                        <input placeholder="" name="Province" type="text" data-parsley-required="true" value="{{ $complains->Province }}">
                                        <label for="Province">ولایت</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-group prefix"></i>
                                        <input placeholder="" name="District" type="text" data-parsley-required="true" value="{{ $complains->District }}">
                                        <label for="District">ولسوالی</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-group prefix"></i>
                                        <input placeholder="" name="Village" type="text" data-parsley-required="true" value="{{ $complains->Village }}">
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
                                        <input placeholder="" name="EducationLevel" type="text" data-parsley-required="true"  value="{{ $complains->EducationLevel }}">
                                        <label for="EducationLevel">درجه تحصیل</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-group prefix"></i>
                                        <input placeholder="" name="EducationPlace" type="text" data-parsley-required="true"  value="{{ $complains->EducationPlace }}">
                                        <label for="EducationPlace">محل تحصیل</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-group prefix"></i>
                                        <input placeholder="" disabled name="HaveJob" type="text" value="{{ $complains->HaveJob }}">
                                        <label for="HaveJob">آیا فعلا وظیفه دارید؟</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-group prefix"></i>
                                        <input placeholder="" name="TargetBast" type="text" data-parsley-required="true" value="{{ $complains->TargetBast }}">
                                        <label for="TargetBast">عنوان وظیفه</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-group prefix"></i>
                                        <input placeholder="" name="ComplainedOffice" type="text" data-parsley-required="true" value="{{ $complains->ComplainedOffice }}">
                                        <label for="ComplainedOffice">اداره</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-group prefix"></i>
                                        <input placeholder="" name="Bast" type="text" data-parsley-required="true" value="{{ $complains->Bast }}">
                                        <label for="Bast">بست</label>
                                    </div>

                                    <div class="input-field col s12">
                                        <i class="mdi-social-group prefix"></i>
                                        <input placeholder="" name="PlaceOfJob" type="text" data-parsley-required="true" value="{{ $complains->PlaceOfJob }}">
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
                                        <input placeholder="" name="NewPositionTitle" type="text" data-parsley-required="true" value="{{ $complains->NewPositionTitle }}">
                                        <label for="ComplainedTitle">عنوان بست مورد منازعه</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-group prefix"></i>
                                        <input placeholder="" name="RelatedOffice" type="text" data-parsley-required="true" value="{{ $complains->RelatedOffice }}">
                                        <label for="RelatedOffice">اداره مربوطه</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-group prefix"></i>
                                        <input placeholder="" name="ComplaindOffice" type="text" data-parsley-required="true" value="{{ $complains->ComplaindOffice }}">
                                        <label for="ComplaindOffice">مرجع شکایت</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-group prefix"></i>
                                        <input placeholder="" name="ComplainedOfficeAdds" type="text" data-parsley-required="true" value="{{ $complains->ComplainedOfficeAdds }}">
                                        <label for="ComplainedOfficeAdds">آدرس اداره</label>
                                    </div>

                                    <div class="input-field col s12" align="center">
                                        <ul id="task-card" class="collection with-header">
                                            <li class="collection-header cyan">
                                                <h5 class="task-card-title">لطفا یکی از گذینه های زیر را انتخاب نماید</h5>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="input-field col s12">
                                        <i class="mdi-social-group prefix"></i>
                                        <input placeholder="" disabled type="text" value="{{ $complains->ComplainObjectives }}">
                                        <label for="Bast">موضوع شکایت</label>
                                    </div>

                                    <div class="input-field col s12">
                                        <i class="mdi-action-schedule prefix"></i>
                                        <input name="NotShortlistedDate" type="text" value="{{ $complains->NotShortlistedDate }}">
                                        <label for="NotShortlistedDate"> تاریخ اعلان نتایج برای عدم شارت لیست </label>
                                    </div>

                                    <div class="input-field col s12">
                                        <i class="mdi-action-schedule prefix"></i>
                                        <input name="ExaminationDate" type="text" value="{{ $complains->ExaminationDate }}">
                                        <label for="ExaminationDate">تاریخ اخذ امتحان</label>
                                    </div>

                                <div class="row col s12">

                                    <div class="input-field col s12">
                                        <i class="mdi-social-group prefix"></i>
                                        <input placeholder="" name="MyComplians" value="{{ $complains->MyComplians }}" type="text">
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
                                        <input placeholder="" name="ComplainsID" type="text" data-parsley-required="true" value="{{ $complains->ComplainsID }}">
                                        <label for="ComplainsID">شماره ثبت شکایت</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-info-outline prefix"></i>
                                        <input placeholder="" name="ComplainsDocs" type="text" data-parsley-required="true" value="{{ $complains->ComplainsDocs }}">
                                        <label for="ComplainsDocs">تعداد اسناد ضمیمه شده فورم</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-info-outline prefix"></i>
                                        <input placeholder="" name="ComplainsDetail" type="text" data-parsley-required="true" value="{{ $complains->ComplainsDetail }}">
                                        <label for="ComplainsDetail">تفصیل شکایت</label>
                                    </div>

                                <div class="input-field col s6" >
                                    <i class="mdi-action-schedule prefix"></i>
                                    <input name="ComplainerSignatureDate" type="date" class="datepicker" data-parsley-required="true">
                                    <label for="ComplainerSignatureDate">تاریخ امضای شاکی</label>
                                </div>



                                    <div class="input-field col s6">
                                        <i class="mdi-action-schedule prefix"></i>
                                        <input name="BoardSignatureDate" type="date" class="datepicker"  data-parsley-required="true" value="{{ $complains->BoardSignatureDate }}">
                                        <label for="BoardSignatureDate">تاریخ امضای مقام ریاست بورد</label>
                                    </div>

                                    <div class="input-field col s6" >
                                        <i class="mdi-action-schedule prefix"></i>
                                        <input name="ExecutionSignatureDate" type="date" class="datepicker" data-parsley-required="true" value="{{ $complains->ExecutionSignatureDate }}">
                                        <label for="ExecutionSignatureDate">تاریخ امضای ریاست اجرایه</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-schedule prefix"></i>
                                        <input name="EvaluationSignatureDate" type="Date" id="Date" class="datepicker" data-parsley-required="true" value="{{ $complains->EvaluationSignatureDate }}">
                                        <label for="Date">تاریخ امضای آمریت تحلیل و بر رسی</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-social-person prefix"></i>
                                        <input placeholder="" name="ResponsibleTeams" type="text" data-parsley-required="true" value="{{ $complains->ResponsibleTeams }}">
                                        <label for="ResponsibleTeams">تیم کار شناسی موظف</label>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="submit" class=" waves-effect waves-light btn">Update</button> &nbsp;&nbsp;&nbsp;&nbsp;
                                    </div>

                                </div>
                            </div>
                </form>
                        </div>

            </div>


        </div>
    </div>
</div>

    @stop


</body>


