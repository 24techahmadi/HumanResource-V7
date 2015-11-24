@extends('layouts.EmpLayout')

@section('title')
    HR | فورم ارزیابی جهت انتخاب

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
                            <h5 class="breadcrumbs-title">مدیریت استخدام کارکنان</h5>
                            <ol class="breadcrumb">
                                <li><a href="employment">دشبورد</a>
                                </li>

                                <li class="active">فورم ارزیابی جهت انتخاب</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!--breadcrumbs end-->
            @section('content')
                <h1 class="header" align="left">فورم ارزیابی جهت انتخاب</h1>


                    <a href="{{ url('selection/create') }}" class="tooltipped btn-floating  btn-large waves-effect waves-light right" tooltipped data-position="bottom" data-delay="50" data-tooltip="NewRecord"><i class="mdi-content-add"></i></a>



                <!--Start- Show All P2 Memebrs Table-->
                <div id="table-datatables">
                    <h4 class="header"></h4>
                    <div class="row">
                        <div class="col s12 m8 l12">
                            <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                                <thead align="left">
                                <tr>
                                    <th>ID</th>
                                    <th>تاریخ</th>
                                    <th>بست</th>
                                    <th>وظیفه</th>
                                    <th>ریاست</th>
                                    <th>Setting</th>
                                </tr>
                                </thead>

                                <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>تاریخ</th>
                                    <th>بست</th>
                                    <th>وظیفه</th>
                                    <th>ریاست</th>
                                    <th>Setting</th>
                                </tr>
                                </tfoot>
                                <tbody>

                                @foreach($selections as $record)
                                    <tr>
                                        <td>{{ $record->id }}</td>
                                        <td>{{ $record->Date }}</td>
                                        <td>{{ $record->Position }}</td>
                                        <td>{{ $record->JobTitle }}</td>
                                        <td>{{ $record->Reyasat }}</td>
                                        <td><a href="{{url('selection', $record->id)}}" class="waves-effect waves-light"> <i class="right mdi-action-settings prefix"></i></a> </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            @stop

    </section>
</div>
</div>

</body>

