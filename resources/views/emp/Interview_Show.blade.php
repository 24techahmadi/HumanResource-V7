@extends('layouts.EmpLayout')

@section('title')
    HR | فورمه کمیته مصاحبه

@stop
<link rel="icon" href="{{ URL::asset('assets/images/favicon/favicon-32x32.png') }}" sizes="32x32">

<!-- Favicons-->
<link rel="apple-touch-icon-precomposed" href="{{ URL::asset('assets/images/favicon/apple-touch-icon-152x152.png') }}">
<meta name="msapplication-TileColor" content="#00bcd4">
<meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">

<style type="text/css">
    .parsley-required{color:red;}
    .parsley-equalto{color:red;}
    .parsley-length{color:red;}

</style>
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
                        <div class="col s12 m12 l12">
                            <h5 class="breadcrumbs-title">مدیریت کارمندان</h5>
                            <ol class="breadcrumb">
                                <li><a href="employment">دشبورد</a>
                                </li>

                                <li class="">کمیته مصاحبه</li>
                                <li class="active">اعضا</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!--breadcrumbs end-->

            @section('content')

                    <!-- Start- All Commitee Member -->

            <h4>InterviewCommitee Details</h4>

            <!--DataTables of AllMember-->
            <div id="table-datatables">
                <h4 class="header"></h4>
                <div class="row">
                    <div class="col s12 m8 l12">
                        <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                            <thead>
                            <tr>
                                <th>آیدی</th>
                            <th>اسم </th>
                            <th>تخلص </th>
                            <th>وظیفه </th>
                            <th>موقف در کمیته</th>
                            <th>ایمیل</th>
                            <th>تارخ</th>
                            <th>تنظیمات</th>



                            </tr>
                            </thead>

                            <tfoot>
                            <th>آیدی</th>
                            <th>اسم </th>
                            <th>تخلص </th>
                            <th>وظیفه </th>
                            <th>موقف در کمیته</th>
                            <th>ایمیل</th>
                            <th>تارخ</th>
                            <th>تنظیمات</th>

                            </tfoot>

                            <tbody>

                                <tr>
                                    <td>{{ $interview->id }}</td>
                                    <td>{{ $interview->Name }} </td>
                                    <td>{{ $interview->LastName }} </td>
                                    <td>{{ $interview->Job }} </td>
                                    <td>{{ $interview->CommiteePosition }}</td>
                                    <td>{{ $interview->Email }}</td>
                                    <td>{{ $interview->Date }}</td>

                                    <td><a onclick="moreInfo({{ $interview->id }});" class="waves-effect waves-light modal-trigger" href="#modal222" value="{{ $interview->id }}"><i class="center mdi-editor-mode-edit prefix"></i></a> </td>


                                </tr>


                                        <!-- Modal Trigger -->


                                <!-- Edit CommiteeMembers show -->
                                <div id="modal222" class="modal" style="border-radius:25px">
                                    <div class="modal-content">
                                        <div class="card-panel cyan darken-1">
                                            <h5 class="card-content white-text"> تغیر اعضا </h5>
                                        </div>

                                                        <div class="card-panel">
                                                            <form method="POST" action="{{ route('interview.update',['id'=>$interview]) }}" accept-charset="utf-8" class="col s11 right" data-parsley-validate>
                                                                {!! csrf_field() !!}
                                                            <input name="_method" type="hidden" value="PATCH">

                                                                <div class="row">
                                                                    <div class="input-field col s12 {{ $errors->has('Name') ? 'has-error' : '' }}">
                                                                        <i class="mdi-action-account-box prefix"></i>
                                                                        <input id="Name" name="Name" type="text" value="{{ $interview->Name }}" data-parsley-required="true">
                                                                        <label for="Name">اسم</label>
                                                                        <span style="font-size: small; color:red;">{{ $errors->first('Name', ' :message') }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="input-field col s12 {{ $errors->has('LastName') ? 'has-error' : '' }}">
                                                                        <i class="mdi-action-perm-identity prefix"></i>
                                                                        <input id="LastName" name="LastName" type="text" value="{{ $interview->LastName }}" data-parsley-required="true">
                                                                        <label for="LastName">تخلص</label>
                                                                        <span style="font-size: small; color:red;">{{ $errors->first('LastName', ' :message') }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="input-field col s12 {{ $errors->has('Job') ? 'has-error' : '' }}">
                                                                        <i class="mdi-action-accessibility prefix"></i>
                                                                        <input id="Job" name="Job" type="text" value="{{ $interview->Job }}" data-parsley-required="true">
                                                                        <label for="Job">وظیفه</label>
                                                                        <span style="font-size: small; color:#ff0000;">{{ $errors->first('Job', ' :message') }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="input-field col s12 {{ $errors->has('CommiteePosition') ? 'has-error' : '' }}">
                                                                        <i class="mdi-hardware-keyboard-alt prefix"></i>
                                                                        <input id="CommiteePosition" name="CommiteePosition" type="text" value="{{ $interview->CommiteePosition }}" data-parsley-required="true">
                                                                        <label for="CommiteePosition">موقف در کمیته</label>
                                                                        <span style="font-size: small; color:red;">{{ $errors->first('CommiteePosition', ' :message') }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                        <i class="mdi-communication-email prefix"></i>
                                                                        <input id="Email" name="Email" type="email" value="{{ $interview->Email }}" data-parsley-type="email">
                                                                        <label for="Email">ایمیل</label>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="input-field col s12 {{ $errors->has('Date') ? 'has-error' : '' }}">
                                                                        <i class="mdi-action-schedule prefix"></i>
                                                                        <input id="Date" type="Date" name="Date" class="datepicker" value="{{ $interview->Date }}" data-parsley-required="true">
                                                                        <label for="Date">تارخ</label>
                                                                        <span style="font-size: small; color:red;">{{ $errors->first('Date', ' :message') }}</span>
                                                                    </div>
                                                                </div>

                                                            <div class="modal-footer">
                                                                <button type="submit" class=" waves-effect waves-light btn">Update</button> &nbsp;&nbsp;&nbsp;&nbsp;
                                                            </div>
                                                            </form>
                                </div>
                                </div>


                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <!--End- DataTables of AllMember-->
            <!-- End- All Commitee Member -->

            @stop

        </section>
    </div>
</div>

</body>
