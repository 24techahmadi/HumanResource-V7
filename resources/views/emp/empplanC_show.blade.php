@extends('layouts.EmpLayout')

@section('title')
    HR | پلان ج
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
                        <h5 class="breadcrumbs-title">مدیریت انکشاف اداره</h5>
                        <ol class="breadcrumb">
                            <li><a href="capacitybuilding">دشبورد</a>
                            </li>

                            <li class="active" >پلان ج</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!--breadcrumbs end-->
        @section('content')
            <h1 class="header" align="right">پلان ج</h1>

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
                            <form method="POST" action="{{ url('empplanC') }}" class="col s12" >
                                {!! csrf_field() !!}

                                <div class="row">
                                    <div class="input-field col s12">
                                        <ul id="task-card" class="collection with-header">
                                            <li class="collection-header cyan">
                                                <h6 class="task-card-title">جدول ج : ضرورت بست ها در بخش های لیلیه ها و شفا خانه های کادری وبخش های اداری پوهنتونها و موسسات تحصیلات عالی و مر وزارت تحصیلات عالی</h6>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="mdi-action-schedule prefix"></i>
                                        <input name="DateOflastEvaluation" type="date" class="datepicker" value="{{ $record->DateOflastEvaluation }}">
                                        <label for="DateOflastEvaluation">برای سال</label>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col s6">
                                            <i class="mdi-action-perm-identity prefix"></i>
                                            <input  name="Number" type="text" data-parsley-required="true" value="{{ $record->Number }}">
                                            <label for="Number">شماره</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-maps-place prefix"></i>
                                            <input  name="org" type="text" data-parsley-required="true" value="{{ $record->org }}">
                                            <label for="org">اداره</label>
                                        </div>

                                        <div class="input-field col s12">
                                            <ul id="task-card" class="collection with-header">
                                                <li class="collection-header cyan">
                                                    <h5 class="task-card-title">کارمند</h5>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-maps-place prefix"></i>
                                            <input  name="Edary" type="text" data-parsley-required="true" value="{{ $record->Edary }}">
                                            <label for="Edary">بخش اداری</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-maps-place prefix"></i>
                                            <input  name="Dormatory" type="text" data-parsley-required="true" value="{{ $record->Dormatory }}">
                                            <label for="Dormatory">لیلیه</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-maps-place prefix"></i>
                                            <input  name="Haspital" type="text" data-parsley-required="true" value="{{ $record->Haspital }}">
                                            <label for="Haspital">شفا خانه کادری</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-maps-place prefix"></i>
                                            <input  name="Totle" type="text" data-parsley-required="true" value="{{ $record->Totle }}">
                                            <label for="Totle">مجموع</label>
                                        </div>

                                        <div class="input-field col s12">
                                            <ul id="task-card" class="collection with-header">
                                                <li class="collection-header cyan">
                                                    <h5 class="task-card-title">کارکن خدماتی</h5>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-maps-place prefix"></i>
                                            <input  name="Edarysecond" type="text" data-parsley-required="true" value="{{ $record->Edarysecond }}">
                                            <label for="Edarysecond">بخش اداری</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-maps-place prefix"></i>
                                            <input  name="Dormatorysecond" type="text" data-parsley-required="true" value="{{ $record->Dormatorysecond }}">
                                            <label for="Dormatorysecond">لیلیه</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-maps-place prefix"></i>
                                            <input  name="Haspitalsecond" type="text" data-parsley-required="true" value="{{ $record->Haspitalsecond }}">
                                            <label for="Haspitalsecond">شفا خانه کادری</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-maps-place prefix"></i>
                                            <input  name="Totalsecond" type="text" data-parsley-required="true" value="{{ $record->Totalsecond }}">
                                            <label for="Totalsecond">مجموع</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-social-person prefix"></i>
                                            <input name="TotaleofTotle" type="text" data-parsley-required="true" value="{{ $record->TotaleofTotle }}">
                                            <label for="TotaleofTotle">مجموع عمومی</label>
                                        </div>
                                        <div class="input-field col s6">
                                            {{--<button class="btn cyan waves-effect waves-light left" type="submit" name="submit">Update--}}

                                            {{--</button>--}}

                                            <td><a onclick="moreInfo({{ $record->id }});" class="modal-trigger" href="#modal2" value="{{ $record->id }}"> <i class="mdi-editor-border-color prefix"></i></a> </td>


                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>



                    <!-- Modal2- View Records Information-->

                    <div id="modal2" class="modal" style="border-radius:25px">
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
                                        <h1 align="center" class="logo-wrapper"><a class="brand-logo darken-1"><img src="{{ URL::asset('assets/images/AF2.png') }}" height="100" width="100" alt="materialize logo" sizes></a></h1>
                                        <h5 align="center" class="header">جمهوری اسلامی افغانستان</h5>
                                        <h5 align="center" class="header">وزارت تحصیلات عالی افغانستان</h5>
                                        <h5 align="center" class="header">ریاست منابع بشری</h5>
                                        <hr>
                                        <div class="row">
                                            <form method="POST" action="{{ route('empplanC.update',['id'=>$record]) }}" accept-charset="utf-8" class="col s11 right" data-parsley-validate>
                                                {!! csrf_field() !!}
                                                <input name="_method" type="hidden" value="PATCH">

                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <ul id="task-card" class="collection with-header">
                                                            <li class="collection-header cyan">
                                                                <h6 class="task-card-title">جدول ج : ضرورت بست ها در بخش های لیلیه ها و شفا خانه های کادری وبخش های اداری پوهنتونها و موسسات تحصیلات عالی و مر وزارت تحصیلات عالی</h6>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="input-field col s6">
                                                        <i class="mdi-action-schedule prefix"></i>
                                                        <input name="DateOflastEvaluation" type="date" class="datepicker" value="{{ $record->DateOflastEvaluation }}">
                                                        <label for="DateOflastEvaluation">برای سال</label>
                                                    </div>

                                                    <div class="row">
                                                        <div class="input-field col s6">
                                                            <i class="mdi-action-perm-identity prefix"></i>
                                                            <input  name="Number" type="text" data-parsley-required="true" value="{{ $record->Number }}">
                                                            <label for="Number">شماره</label>
                                                        </div>

                                                        <div class="input-field col s6">
                                                            <i class="mdi-maps-place prefix"></i>
                                                            <input  name="org" type="text" data-parsley-required="true" value="{{ $record->org }}">
                                                            <label for="org">اداره</label>
                                                        </div>

                                                        <div class="input-field col s12">
                                                            <ul id="task-card" class="collection with-header">
                                                                <li class="collection-header cyan">
                                                                    <h5 class="task-card-title">کارمند</h5>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <div class="input-field col s6">
                                                            <i class="mdi-maps-place prefix"></i>
                                                            <input  name="Edary" type="text" data-parsley-required="true" value="{{ $record->Edary }}">
                                                            <label for="Edary">بخش اداری</label>
                                                        </div>

                                                        <div class="input-field col s6">
                                                            <i class="mdi-maps-place prefix"></i>
                                                            <input  name="Dormatory" type="text" data-parsley-required="true" value="{{ $record->Dormatory }}">
                                                            <label for="Dormatory">لیلیه</label>
                                                        </div>

                                                        <div class="input-field col s6">
                                                            <i class="mdi-maps-place prefix"></i>
                                                            <input  name="Haspital" type="text" data-parsley-required="true" value="{{ $record->Haspital }}">
                                                            <label for="Haspital">شفا خانه کادری</label>
                                                        </div>

                                                        <div class="input-field col s6">
                                                            <i class="mdi-maps-place prefix"></i>
                                                            <input  name="Totle" type="text" data-parsley-required="true" value="{{ $record->Totle }}">
                                                            <label for="Totle">مجموع</label>
                                                        </div>

                                                        <div class="input-field col s12">
                                                            <ul id="task-card" class="collection with-header">
                                                                <li class="collection-header cyan">
                                                                    <h5 class="task-card-title">کارکن خدماتی</h5>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <div class="input-field col s6">
                                                            <i class="mdi-maps-place prefix"></i>
                                                            <input  name="Edarysecond" type="text" data-parsley-required="true" value="{{ $record->Edarysecond }}">
                                                            <label for="Edarysecond">بخش اداری</label>
                                                        </div>

                                                        <div class="input-field col s6">
                                                            <i class="mdi-maps-place prefix"></i>
                                                            <input  name="Dormatorysecond" type="text" data-parsley-required="true" value="{{ $record->Dormatorysecond }}">
                                                            <label for="Dormatorysecond">لیلیه</label>
                                                        </div>

                                                        <div class="input-field col s6">
                                                            <i class="mdi-maps-place prefix"></i>
                                                            <input  name="Haspitalsecond" type="text" data-parsley-required="true" value="{{ $record->Haspitalsecond }}">
                                                            <label for="Haspitalsecond">شفا خانه کادری</label>
                                                        </div>

                                                        <div class="input-field col s6">
                                                            <i class="mdi-maps-place prefix"></i>
                                                            <input  name="Totalsecond" type="text" data-parsley-required="true" value="{{ $record->Totalsecond }}">
                                                            <label for="Totalsecond">مجموع</label>
                                                        </div>

                                                        <div class="input-field col s6">
                                                            <i class="mdi-social-person prefix"></i>
                                                            <input name="TotaleofTotle" type="text" data-parsley-required="true" value="{{ $record->TotaleofTotle }}">
                                                            <label for="TotaleofTotle">مجموع عمومی</label>
                                                        </div>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="submit" class=" waves-effect waves-light btn">Update</button> &nbsp;&nbsp;&nbsp;&nbsp;
                                                </div>

                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @stop
                </div>
            </div>
            </section>
    </div>
</div>
</body>


