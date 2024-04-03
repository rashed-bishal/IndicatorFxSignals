<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('includes.assets.css')
    <title>Signup | IndicatorFxSignals</title>

</head>
<body style="margin: 0px;margin-top: 0px;">
<div class="d-flex flex-column justify-content-center" id="login-box" style="margin-top: 25px;">
    <div class="login-box-header">
        <h4 style="color: rgb(0,0,0);margin-bottom: 0px;font-weight: 400;font-size: 27px;margin-top: 0px;">IndicatorFx Signals Sign Up</h4>
    </div>
    <form id="registerForm" method="POST" action="{{ route('register') }}">
        @csrf
        <div class="email-login" style="background-color: #ffffff;">
            <input id="firstname" type="text" class="email-imput form-control" name="firstname" :value="old('firstname')" style="margin-top: 10px;" placeholder="First Name" required autofocus/>
            @if($errors->has('firstname'))
                <small class="form-text" style="margin-right: 0px;margin-top: 4px;color: rgb(255,0,0);">{{$errors->first('firstname')}}</small>
            @endif

            <input id="lastname" type="text" class="email-imput form-control" name="lastname" :value="old('lastname')" style="margin-top: 10px;" placeholder="Last Name" required/>
            @if($errors->has('lastname'))
                <small class="form-text" style="margin-right: 0px;margin-top: 4px;color: rgb(255,0,0);">{{$errors->first('lastname')}}</small>
            @endif

            <input id="email" type="email" class="email-imput form-control" name="email" :value="old('email')" style="margin-top: 10px;" placeholder="Email Address" required/>
            @if($errors->has('email'))
                <small class="form-text" style="margin-right: 0px;margin-top: 4px;color: rgb(255,0,0);">{{$errors->first('email')}}</small>
            @endif

            <input id="password" type="password" class="password-input form-control" name="password" style="margin-top: 10px;" placeholder="New Password" required/>
            @if($errors->has('password'))
                <small class="form-text" style="margin-right: 0px;margin-top: 4px;color: rgb(255,0,0);">{{$errors->first('password')}}</small>
            @endif

            <input id="password_confirmation" type="password" class="password-input form-control" name="password_confirmation" style="margin-top: 10px;" placeholder="Confirm Password"/>
            @if($errors->has('password_confirmation'))
                <small class="form-text" style="margin-right: 0px;margin-top: 4px;color: rgb(255,0,0);">{{$errors->first('password_confirmation')}}</small>
            @endif
            @if($errors->has('g-recaptcha-response'))
                <small class="form-text" style="margin-right: 0px;margin-top: 4px;color: rgb(255,0,0);">{{$errors->first('g-recaptcha-response')}}</small>
            @endif

        </div>
        <div class="d-grid submit-row" style="margin-bottom: 8px;padding-top: 0px;"><button class="g-recaptcha btn btn-primary d-block box-shadow w-100"
                                                                                            data-sitekey="{{ config('services.recaptcha_v3.siteKey') }}"
                                                                                            data-callback='onSubmit'
                                                                                            data-action='register'
                                                                                            id="submit-id-submit" type="submit" style="background: #FF6600;">Signup</button>
        </div>
    </form>
    <div id="login-box-footer" style="padding: 10px 20px;padding-bottom: 23px;padding-top: 18px;">
        <p style="margin-bottom: 0px; text-align: center">Already registered?<a id="register-link" href="{{ route('login') }}">Sign in!</a></p>
    </div>
</div>
@include('includes.assets.js')
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://www.google.com/recaptcha/api.js"></script>
<script>
    function onSubmit(token) {
        document.getElementById("registerForm").submit();
    }
</script>

</body>
</html>
