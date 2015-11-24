@extends('admin\layout')
@section('nav-title')
    Admin | Users
@endsection
@section('styles')

    <style type="text/css">
        th,td{
            font-family: Arial;
            font-size: 14px;
        }
        label{
            font-size: 18px;
        }
    </style>
    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="{{ asset('css/prism.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ asset('js/plugins/perfect-scrollbar/perfect-scrollbar.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ asset('js/plugins/chartist-js/chartist.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ asset('js/plugins/data-tables/css/jquery.dataTables.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    @endsection
    @section('admin-dashboard-content')
        <div class="row">
            <div class="col m12">
                <div class="row">
                    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
                        <div class="container">
                            <div class="row">
                                <div class="col s11 m11 l11">
                                    <h5 class="breadcrumbs-title">تحصیل در موسسات خصوصی</h5>
                                    <ol class="breadcrumb">
                                        <li><a href="{{ url('/')  }}">صفحه اصلی</a></li>
                                        <li><a href="{{ url('/') }}">موسسات خصوصی</a></li>
                                        <li class="active">راجستر نمودن موسسه خصوصی</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!--start container-->
    <div class="container" style="margin-top: -100px;">
        <div class="section">
            <!--DataTables example-->
            <div id="table-datatables" style="margin-top:100px;">
                <h5 class="header center">راجستر نمودن موسسه خصوصی</h5>
                <div class="row">
                    <div class="col s6 offset-s3">
                        <form method="POST" action="{{ url('/admin/universities') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <label for="universityType {{ $errors->has('universityType') ? 'has-error' : '' }}">نوعیت موسسه:</label>


                            <select class="browser-default"  name="universityType">
                                <option value="" disabled selected>نوعیت موسسه را انتخاب کنید!</option>
                                <option value="موسسه تحصیلات عالی خصوصی">موسسه تحصیلات عالی خصوصی</option>
                                <option value="پوهنتون خصوصی">پوهنتون خصوصی</option>
                            </select>


                            <span style="font-size: small; color:red;">{{ $errors->first('universityType', ' :message') }}</span><br/>

                            <label for="university_Name {{ $errors->has('university_Name') ? 'has-error' : '' }}">نام موسسه به انگلیسی:</label>
                            <input type="text" name="university_Name" value="{{ old('university_Name') }}">
                            <span style="font-size: small; color:red;">{{ $errors->first('university_Name', ' :message') }}</span><br/>

                            <label for="universityPerName {{ $errors->has('universityPerName') ? 'has-error' : '' }}">نام موسسه به دری:</label>
                            <input type="text" name="universityPerName" value="{{ old('universityPerName') }}">
                            <span style="font-size: small; color:red;">{{ $errors->first('universityPerName', ' :message') }}</span><br/>

                            <label for="FoundationYear {{ $errors->has('FoundationYear') ? 'has-error' : '' }}">سال تاسیس:</label>
                            <input type="date" name="FoundationYear" value="{{ old('FoundationYear') }}">
                            <span style="font-size: small; color:red;">{{ $errors->first('FoundationYear', ' :message') }}</span><br/>

                            <label for="universityPrLocation {{ $errors->has('universityPrLocation') ? 'has-error' : '' }}">ولایت:</label>
                            <input type="text" name="universityPrLocation" value="{{ old('universityPrLocation') }}">
                            <span style="font-size: small; color:red;">{{ $errors->first('universityPrLocation', ' :message') }}</span><br/>

                            <label for="universityDistLocation {{ $errors->has('universityDistLocation') ? 'has-error' : '' }}">ولسوالی:</label>
                            <input type="text" name="universityDistLocation" value="{{ old('universityDistLocation') }}">
                            <span style="font-size: small; color:red;">{{ $errors->first('universityDistLocation', ' :message') }}</span><br/>

                            <button type="submit" class="btn waves-effect waves-light">راجستر نمودن</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection                 <!-- Sajjad Hosaini -->
    {{-- {!! Form::open(['url'=>'login/check','method'=>'PATCH']) !!}
            User Name : {!! Form::text('user')!!}<br>
    Password : {!! Form::text('password')!!}
    {!! Form::submit('Login')!!}
    {!! Form::close() !!} --}}