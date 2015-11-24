@extends('masterlogin')
@section('title')
	Admin | Login
@endsection
@section('styles')
    <link href="css/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">
    @endsection
@section('form-content')
					<form class="login-form" role="form" method="POST" action="{{ url('/auth/login') }}">

						<div class="row">
							<div class="input-field col s12 center">
								<img src="{{ asset('images/login-logo.png') }}" alt="" class="circle responsive-img valign profile-image-login">
								<p class="center">  مدیریت تحصیلات خصوصی </p>
							</div>
						</div>
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="row margin">
							<div class="input-field col s12 {{ $errors->has('email') ? 'has-error' : '' }}">
								<i class="mdi-social-person-outline prefix"></i>
								<input name="email" type="email" value="{{ old('email') }}" required="required">
								<label for="email" class="center-align right-login-lable"> ایمل آدرس </label>
                                <span style="font-size: small; color:red;">{{ $errors->first('email', 'لطفا مشخصات خود را چک کنید') }}</span>
							</div>
						</div>
						<div class="row margin">
							<div class="input-field col s12 {{ $errors->has('password') ? 'has-error' : '' }}">
								<i class="mdi-action-lock-outline prefix"></i>
								<input name="password" type="password" required="required">
								<label for="password" class="right-login-lable">رمز عبور</label>
                                <span>{{ $errors->first('password', ':message') }}</span>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12 m12 l12  login-text">
								<input type="checkbox" id="remember-me" />
								<label for="remember-me"> به خاطر سپردن</label>
							</div>
						</div>

						<div class="row">
							<div class="input-field col s12">

								<button class="btn waves-effect waves-light col s12" > ورود</button>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s6 m6 l6">
								<p class="margin right-align medium-small"><a href="{{ url('/password/email') }}">فراموش کردن</a></p>
							</div>
							<div class="input-field col s6 m6 l6">
								<p class="margin medium-small"><a href="#">ثبت نام</a></p>
							</div>
						</div>
					</form>

@endsection
