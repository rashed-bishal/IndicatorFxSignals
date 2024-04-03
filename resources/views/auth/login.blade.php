<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('includes.assets.css')
    <title>Login | IndicatorFxSignals</title>

</head>
<body style="margin: 0px;margin-top: 0px;">
@if($errors->any())
    <div class="alert alert-danger" role="alert" id="alert-box">
        <ul style="list-style-type: none;margin: 0;padding: 0;border: none;">
            @foreach($errors->all() as $error)
                <li><i class="fa fa-warning" style="font-size: 20px;"></i><span class="text-danger margin-left" style="margin: 0px;margin-left: 10px;"></span><span class="text-danger margin-left" style="margin: 0px;margin-left: 10px;">{{$error}}</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="position: relative;float: right;"></button></li>
            @endforeach
        </ul>
    </div>
@endif

<div class="d-flex flex-column justify-content-center" id="login-box" style="margin-top: 25px;">
    <div class="login-box-header">
        <h4 style="color: rgb(0,0,0);margin-bottom: 0px;font-weight: 400;font-size: 27px;margin-top: 0px;">IndicatorFx Signals Login</h4>
    </div>
    <div class="login-box-content">
        <div class="fb-login box-shadow"><a class="d-flex flex-row align-items-center social-login-link lgn" id="fb" href="#"><i class="fa fa-facebook" style="margin-left: 0px;padding-right: 20px;padding-left: 22px;width: 56px;"></i>Login with Facebook</a></div>
        <div class="gp-login box-shadow"><a class="d-flex flex-row align-items-center social-login-link lgn" style="margin-bottom: 10px;" href="#"><i class="fa fa-google" style="color: rgb(255,255,255);width: 56px;"></i>Login with Google</a></div>
    </div>
    <div class="d-flex flex-row align-items-center login-box-seperator-container">
        <div class="login-box-seperator"></div>
        <div class="login-box-seperator-text">
            <p style="margin-bottom: 0px;padding-left: 10px;padding-right: 10px;font-weight: 400;color: rgb(201,201,201);">or</p>
        </div>
        <div class="login-box-seperator"></div>
    </div>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="email-login" style="background-color: #ffffff;">
            <input id="email" type="email" name="email" class="email-imput form-control" style="margin-top: 10px;" placeholder="Email Address" :value="old('email')" required autofocus/>
            <input id="password" type="password" name="password" class="password-input form-control" style="margin-top: 10px;" placeholder="Password" required>
        </div>
        <div class="submit-row" style="margin-bottom: 8px;padding-top: 0px;">
            <button class="btn btn-primary d-block box-shadow w-100" id="submit-id-submit" type="submit" style="background: #FF6600 !important;">Login</button>
            <div class="d-flex justify-content-between">
                <div class="form-check form-check-inline" id="form-check-rememberMe"><input class="form-check-input" type="checkbox" id="remember_me" for="remember" style="cursor: pointer;" name="remember"><label class="form-check-label" for="formCheck-1"><span class="label-text">Remember Me</span></label></div><a id="forgot-password-link" href="href="{{ route('password.request') }}"">Forgot Password?</a>
            </div>
        </div>
    </form>
    <div id="login-box-footer" style="padding: 10px 20px;padding-bottom: 23px;padding-top: 18px;">
        <p style="margin-bottom: 0px;">Don't you have an account?<a id="register-link" href="{{ route('register') }}">Sign Up!</a></p>
    </div>
</div>
@include('includes.assets.js')
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="{{asset('resources/js/alert.js')}}"></script>
</body>
</html>

