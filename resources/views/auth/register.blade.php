@extends('masterlogin')
@section('title')
    Admin | Login
@endsection
@section('form-content')
    <form class="login-form" role="form" method="POST" action="{{ url('/admin/users') }}">

        <div class="row">
            <div class="input-field col s12 center">
                <img src="{{ asset('images/login-logo.png') }}" alt="" class="circle responsive-img valign profile-image-login">
                <p class="center">  مدیریت کاربران</p>
            </div>
        </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row margin">
            <div class="input-field col s12 {{ $errors->has('name') ? 'has-error' : '' }}">
                <i class="mdi-social-person-outline prefix"></i>
                <input name="name" type="text" value="{{ old('name') }}" >
                <label for="name" class="center-align right-login-lable"> نام کاربر </label>
                <span style="font-size: small; color:red;">{{ $errors->first('name', ' :message') }}</span>
            </div>
        </div>
        <div class="row margin">
            <div class="input-field col s12 {{ $errors->has('email') ? 'has-error' : '' }}">
                <i class="mdi-social-person-outline prefix"></i>
                <input name="email" type="text" value="{{ old('email') }}" >
                <label for="email" class="center-align right-login-lable"> ایمل آدرس </label>
                <span style="font-size: small; color:red;">{{ $errors->first('email', ':message') }}</span>
            </div>
        </div>
        <div class="row margin">
            <div class="input-field col s12 {{ $errors->has('password') ? 'has-error' : '' }}">
                <i class="mdi-action-lock-outline prefix"></i>
                <input name="password" type="password" required="required">
                <label for="password" class="right-login-lable">رمز عبور</label>
                <span style="font-size: small; color:red;">{{ $errors->first('password', ':message') }}</span>
            </div>
        </div>
        <div class="row margin">
            <div class="input-field col s12 {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                <i class="mdi-action-lock-outline prefix"></i>
                <input name="password_confirmation" type="password" required="required">
                <label for="password_confirmation" class="right-login-lable">تایید رمز عبور</label>
                <span style="font-size: small; color:red;">{{ $errors->first('password_confirmation', ':message') }}</span>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">

                <button class="btn waves-effect waves-light col s12" > ثبت نام</button>
            </div>
        </div>
    </form>

@endsection
