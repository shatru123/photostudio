@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
    {{--<meta charset="utf-8">--}}
    {{--<meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
    {{--<meta name="description" content="">--}}
    {{--<meta name="keywords" content="">--}}
    {{--<link rel="shortcut icon" href="{{asset('images/backend/img/favicon.png')}}">--}}
    {{--<title>Sign In</title>--}}


    {{--<link rel="stylesheet" href="{{asset('css/backend/fonts/open-sans/style.min.css')}}"> <!-- common font  styles  -->--}}
    {{--<link rel="stylesheet" href="{{asset('css/backend/fonts/universe-admin/style.css')}}"> <!-- universeadmin icon font styles -->--}}
    {{--<link rel="stylesheet" href="{{asset('css/backend/fonts/mdi/css/materialdesignicons.min.css')}}"> <!-- meterialdesignicons -->--}}
    {{--<link rel="stylesheet" href="{{asset('css/backend/fonts/iconfont/style.css')}}"> <!-- DEPRECATED iconmonstr -->--}}
    {{--<link rel="stylesheet" href="{{asset('vendor/backend/vendor/flatpickr/flatpickr.min.css')}}"> <!-- original flatpickr plugin (datepicker) styles -->--}}
    {{--<link rel="stylesheet" href="{{asset('vendor/backend/vendor/simplebar/simplebar.css')}}"> <!-- original simplebar plugin (scrollbar) styles  -->--}}
    {{--<link rel="stylesheet" href="{{asset('vendor/backend/vendor/tagify/tagify.css')}}"> <!-- styles for tags -->--}}
    {{--<link rel="stylesheet" href="{{asset('vendor/backend/vendor/tippyjs/tippy.css')}}"> <!-- original tippy plugin (tooltip) styles -->--}}
    {{--<link rel="stylesheet" href="{{asset('vendor/backend/vendor/select2/css/select2.min.css')}}"> <!-- original select2 plugin styles -->--}}
    {{--<link rel="stylesheet" href="{{asset('vendor/backend/vendor/bootstrap/css/bootstrap.min.css')}}"> <!-- original bootstrap styles -->--}}
    {{--<link rel="stylesheet" href="{{asset('css/backend/css/style.min.css')}}" id="stylesheet"> <!-- universeadmin styles -->--}}



    {{--<script src="{{asset('js/backend/js/ie.assign.fix.min.js')}}"></script>--}}
{{--</head>--}}
{{--<body class="p-front">--}}


{{--<div class="navbar navbar-light navbar-expand-lg p-front__navbar"> <!-- is-dark -->--}}
    {{--<a class="navbar-brand" href="/"><img src="{{asset('images/backend/img/logo.png')}}" alt=""/></a>--}}
    {{--<a class="navbar-brand-sm" href="/"><img src="{{asset('images/backend/img/logo-sm.png')}}" alt=""/></a>--}}

    {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse">--}}
        {{--<span class="ua-icon-navbar-open navbar-toggler__open"></span>--}}
        {{--<span class="ua-icon-alert-close navbar-toggler__close"></span>--}}
    {{--</button>--}}

    {{--<div class="collapse navbar-collapse" id="navbar-collapse">--}}
        {{--<div class="p-front__navbar-collapse">--}}
            {{--<div class="navbar-nav">--}}
                {{--<a class="nav-item nav-link active" href="#">About</a>--}}
                {{--<a class="nav-item nav-link" href="#">Features</a>--}}
                {{--<a class="nav-item nav-link" href="#">Pricing</a>--}}
            {{--</div>--}}
            {{--<form class="form-inline">--}}
                {{--<a class="btn btn-info btn-rounded" href="{{ route('register') }}">Sign Up</a>--}}
            {{--</form>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}




{{--<div class="p-front__content">--}}

    {{--<div class="p-signin">--}}
        {{--<form method="POST" action="{{ route('login') }}">--}}
            {{--<h2 class="p-signin__form-heading">Login </h2>--}}
            {{--<div class="p-signin__form-content">--}}
                {{--<div class="row">--}}
                    {{--<div class="form-group col-md-12">--}}
                        {{--<label for="p-signin-work-email"> Email</label>--}}
                        {{--<input type="email" class="form-control" id="p-signin-work-email" placeholder="you@yourcompany.com">--}}
                        {{--<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="you@yourcompany.com" name="email" value="{{ old('email') }}" required autofocus>--}}

                        {{--@if ($errors->has('email'))--}}
                            {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                        {{--@endif--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="row">--}}
                    {{--<div class="form-group col-md-12">--}}
                        {{--<label for="p-signin-set-password">Password</label>--}}

                        {{--<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password" required>--}}

                        {{--@if ($errors->has('password'))--}}
                            {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                        {{--@endif--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group row">--}}
                    {{--<div class="col-md-6 offset-md-4">--}}
                        {{--<div class="form-check">--}}
                            {{--<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

                            {{--<label class="form-check-label" for="remember">--}}
                                {{--{{ __('Remember Me') }}--}}
                            {{--</label>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div>--}}
                    {{--<button type="submit" class="btn btn-info ">Get Started!</button>--}}
                {{--</div>--}}
                {{--<div class="p-signin__form-links">--}}
                    {{--<div class="p-signin__form-link">--}}
                        {{--Don't have an account? <a href="{{ route('register') }}" class="link-info">Sign Up</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</form>--}}
    {{--</div>--}}

{{--</div>--}}



{{--<footer class="p-front__footer">--}}
    {{--<ul class="nav">--}}
        {{--<li class="nav-item">--}}
            {{--<a class="nav-link active" href="#">Contact</a>--}}
        {{--</li>--}}
        {{--<li class="nav-item">--}}
            {{--<a class="nav-link" href="#">FAQ</a>--}}
        {{--</li>--}}
        {{--<li class="nav-item">--}}
            {{--<a class="nav-link" href="#">Terms of Service</a>--}}
        {{--</li>--}}
    {{--</ul>--}}
    {{--<span>2018 &copy; </span>--}}
{{--</footer>--}}



{{--<script src="{{asset('vendor/backend/vendor/jquery/jquery.min.js')}}"></script>--}}
{{--<script src="{{asset('vendor/backend/vendor/popper/popper.min.js')}}"></script>--}}
{{--<script src="{{asset('vendor/backend/vendor/bootstrap/js/bootstrap.min.js')}}"></script>--}}
{{--<script src="{{asset('vendor/backend/vendor/select2/js/select2.full.min.js')}}"></script>--}}
{{--<script src="{{asset('vendor/backend/vendor/simplebar/simplebar.js')}}"></script>--}}
{{--<script src="{{asset('vendor/backend/vendor/text-avatar/jquery.textavatar.js')}}"></script>--}}
{{--<script src="{{asset('vendor/backend/vendor/tippyjs/tippy.all.min.js')}}"></script>--}}
{{--<script src="{{asset('vendor/backend/vendor/flatpickr/flatpickr.min.js')}}"></script>--}}
{{--<script src="{{asset('vendor/backend/vendor/wnumb/wNumb.js')}}"></script>--}}
{{--<script src="{{asset('js/backend/js/main.js')}}"></script>--}}



{{--<div class="sidebar-mobile-overlay"></div>--}}

{{--</body>--}}
{{--</html>--}}
{{--@endsection--}}