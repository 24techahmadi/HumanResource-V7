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
                    <form method="POST" action="{{ url('shortlist') }}" class="col s12" data-parsley-validate>
                        {!! csrf_field() !!}
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
                                        <div class="input-field col s6">

                                            <input name="AnnouncementDate" type="text" class="datepicker" data-parsley-required="true">
                                            <label for="AnnouncementDate">تاریخ اعلان</label>
                                        </div>

                                        <div class="input-field col s6">

                                            <input name="EndDate" type="text" class="datepicker" data-parsley-required="true">
                                            <label for="EndDate">تاریخ ختم</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col s6">

                                            <input name="ReannouncementDate" class="datepicker" type="text" data-parsley-required="true">
                                            <label for="ReannouncementDate">تاریخ اعلان مجدد</label>
                                        </div>

                                        <div class="input-field col s6">

                                            <input name="ReannouncementEndDate" class="datepicker" type="text" data-parsley-required="true">
                                            <label for="ReannouncementEndDate">ختیم اعلان</label>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="input-field col s6">
                                            <input name="Ministry" type="text" data-parsley-required="true">
                                            <label for="Ministry">وزارت/اداره</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <input name="Reyasat" type="text" data-parsley-required="true">
                                            <label for="Reyasat">ریاست</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input name="Bast" type="text" data-parsley-required="true">
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
                                            <input name="IDNumber" type="text" data-parsley-required="true">
                                            <label for="IDNumber">شماره</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col s6">
                                            <input name="Name" type="text" data-parsley-required="true">
                                            <label for="Name">اسم</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <input name="LastName" type="text" data-parsley-required="true">
                                            <label for="LastName">تخلص</label>
                                        </div>


                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input name="FatherName" type="text" data-parsley-required="true">
                                                <label for="FatherName">ولد</label>
                                            </div>


                                            <div class="input-field col s6">
                                                <select name="EducationLevel" data-parsley-required="true">
                                                    <option value="" disabled selected>درجه تحصیل</option>
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
                                                <input name="Email" type="text" data-parsley-required="true">
                                                <label for="Email">Email</label>
                                            </div>

                                            <div class="input-field col s6">
                                                <i class="mdi-communication-call prefix"></i>
                                                <input name="Phone" type="text" data-parsley-required="true">
                                                <label for="Phone">Phone</label>
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
                                            <input name="ExpWorkRelated" data-parsley-required="true" type="text">
                                            <label for="ExpWorkRelated">مرتبط به وظیفه</label>
                                        </div>
                                    </div>

                                    <div class="input-field col s12">
                                        <i class="mdi-communication-call prefix"></i>
                                        <input name="GenrelExp" data-parsley-required="true" type="text">
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
                                            <input type="checkbox" name="Dari" value="True" id="Dari" />
                                            <label for="Dari">دری
                                            </label>
                                            <span class="task-cat teal"></span>
                                        </li>

                                        <li class="collection-item dismissable">
                                            <input type="checkbox" name="Pashto" value="True" id="Pashto" />
                                            <label for="Pashto">پشتو
                                            </label>
                                            <span class="task-cat purple"></span>
                                        </li>
                                        <li class="collection-item dismissable">
                                            <input type="checkbox" name="English" id="English" value="True" checked="checked" />
                                            <label for="English">انگلیسی
                                            </label>
                                            <span class="task-cat pink"></span>
                                        </li>
                                        <li class="collection-item dismissable">
                                            <input type="checkbox" name="MoreLanguage" value="True" id="MoreLanguage"/>
                                            <label for="MoreLanguage">سایر زبانها</label>
                                            <span class="task-cat cyan"></span>


                                        </li>
                                    </ul>

                                </div>


                                <div class="col s12 m4 l4">

                                    <ul id="task-card" class="collection with-header">
                                        <li class="collection-header cyan">
                                            <h4 class="task-card-title">کمپیوتر</h4>

                                        </li>
                                        <li class="collection-item dismissable">
                                            <input type="checkbox" name="Windows" value="True" id="Windows"/>
                                            <label for="Windows">ویندوز</label>
                                            <span class="task-cat red"></span>
                                        </li>
                                        <li class="collection-item dismissable">
                                            <input type="checkbox" name="Office" value="True" id="Office"  checked="checked" />
                                            <label for="Office">پروگرام آفیس
                                            </label>
                                            <span class="task-cat teal"></span>
                                        </li>

                                        <li class="collection-item dismissable">
                                            <input type="checkbox" name="Networking" value="True" id="Networking" />
                                            <label for="Networking">شبکه
                                            </label>
                                            <span class="task-cat purple"></span>
                                        </li>
                                        <li class="collection-item dismissable">
                                            <input type="checkbox" name="MoreOnComputers" value="True" id="MoreOnComputers"/>
                                            <label for="MoreOnComputers">سایر برنامه ها
                                            </label>
                                            <span class="task-cat pink"></span>
                                        </li>

                                    </ul>
                                </div>
                                <div class="col s12 m4 l4">

                                    <ul id="task-card" class="collection with-header">
                                        <li class="collection-header cyan">
                                            <h4 class="task-card-title">مهارت های دیگر</h4>
                                        </li>
                                        <li class="collection-item dismissable">
                                            <input type="checkbox" name="GoodManagement" value="True" id="GoodManagement" />
                                            <label for="GoodManagement">مدیریت خوب
                                            </label>
                                            <span class="task-cat teal"></span>
                                        </li>


                                        <li class="collection-item dismissable">
                                            <input type="checkbox" name="bodyLanguage" value="True" id="bodyLanguage"/>
                                            <label for="bodyLanguage">افهام و تفهیم خوب
                                            </label>
                                            <span class="task-cat pink"></span>
                                        </li>
                                        <li class="collection-item dismissable">
                                            <input type="checkbox" name="GoodCommunication" value="True" id="GoodCommunication" checked="checked"/>
                                            <label for="GoodCommunication">ارتباطاتات خوب</label>
                                            <span class="task-cat cyan"></span>
                                        </li>

                                        <li class="collection-item dismissable">
                                            <input type="checkbox" name="OtherSkills" value="True" id="OtherSkills"/>
                                            <label for="OtherSkills">سایر مهارت ها</label>
                                            <span class="task-cat red"></span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="input-field col s12">
                                    <input name="MoreLanguageNames" value="" type="text">
                                    <label for="MoreLanguageNames">سایر زبان ها</label>
                                </div>
                                <div class="input-field col s12">
                                    <input name="MoreOnComputersDetails" value="" type="text">
                                    <label for="MoreOnComputersDetails">سایر برنامه ها</label>
                                </div>
                                <div class="input-field col s12">
                                    <input name="OtherSkillsDetails" value="" type="text" >
                                    <label for="OtherSkillsDetails">سایر مهارت ها</label>
                                </div>


                                    <div class="input-field col s12">
                                        <i class=" mdi-maps-beenhere prefix"></i>
                                        <input name="Rules" type="text" data-parsley-required="true">
                                        <label for="Rules">شرایت مندرج مواد (7)و(8)قانون کارکنان خدمات ملکی و شرایط ارایه شده از طرف اداره</label>
                                    </div>

                                    <div class="input-field col s12">
                                        <i class=" mdi-maps-beenhere prefix"></i>
                                        <input name="Result" type="text" data-parsley-required="true">
                                        <label for="Result">نتیجه</label>
                                    </div>



                                    <div class="input-field col s12">
                                        <button class="btn cyan waves-effect waves-light right" type="submit" name="submit">اضافه
                                            <i class="mdi-content-send right"></i>
                                        </button>
                                    </div>
                                </div>

                            </div>
                            </form>
                        </div>
                    </div>
                </div>
    @stop

</div>
</div>

</body>

