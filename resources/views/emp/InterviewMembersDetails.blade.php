@extends('layouts.EmpLayout')

@section('title')
    HR | فورمه کمیته مصاحبه

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
                        <div class="row">
              <div class="col s12 m12 l12" align="right">
                <h5 class="breadcrumbs-title">مدیریت کارمندان</h5>
                <ol class="breadcrumb">
                  <li><a href="employment">دشبورد</a>
                  </li>
                 
                  <li class="active">فورمه کمیته مصاحبه</li>
                </ol>
              </div>
                    </div>
                </div>
            </div>
            <!--breadcrumbs end-->

            @section('content')

                    <!-- Start- All Commitee Member -->

            <h1 class="header" align="right">فورمه کمیته مصاحبه</h1>

            <!--DataTables of AllMember-->
            <div id="table-datatables">
                <h4 class="header"></h4>
                <div class="row">
                    <div class="col s12 m8 l12">
                        <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                            <thead>
                            <tr>
                                <th>آیدی</th>
                                <th>اسم</th>
                                <th>تخلص </th>
                                <th>وظیفه </th>
                                <th>موقف در کمیته</th>
                                <th>ایمل</th>
                                <th>تاریخ</th>
                                <th>اصلاح</th>
                                <th>حذف</th>


                            </tr>
                            </thead>

                            <tfoot>
                                <th>آیدی</th>
                                <th>اسم</th>
                                <th>تخلص </th>
                                <th>وظیفه </th>
                                <th>موقف در کمیته</th>
                                <th>ایمل</th>
                                <th>تاریخ</th>
                                <th>اصلاح</th>
                                <th>حذف</th>

                            </tfoot>

                            <tbody>

                                <tr>
                                    <td>{{ $CommiteeMembersDetails->id }}</td>
                                    <td>{{ $CommiteeMembersDetails->Name }} </td>
                                    <td>{{ $CommiteeMembersDetails->LastName }} </td>
                                    <td>{{ $CommiteeMembersDetails->Job }} </td>
                                    <td>{{ $CommiteeMembersDetails->Position }}</td>
                                    <td>{{ $CommiteeMembersDetails->Email }}</td>
                                    <td>{{ $CommiteeMembersDetails->Date }}</td>

                                    <td><a onclick="moreInfo({{ $CommiteeMembersDetails->id }});" class="waves-effect waves-light modal-trigger" href="#info_m" value="{{ $CommiteeMembersDetails->id }}">Edit</a> </td>

                                    <td><a class="modal-action modal-close modal-trigger" href="#modal2"> <i class="mdi-action-delete prefix"></i></a> </td>
                                </tr>


                                        <!-- Modal Trigger -->


                                <!-- Edit CommiteeMembers -->
                                <div id="info_m" class="modal modal-fixed-footer">
                                    <div class="modal-content">
                                        <h4>Modal Header</h4>
                                        <div class="row" id="more">

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
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
