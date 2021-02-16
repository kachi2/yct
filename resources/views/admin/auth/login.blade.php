@extends('admin.auth.layout.app')
@section('title', 'Admin Login')
@section('content')
<div class="limiter">
    <div class="container-login100 page-background">
        <div class="wrap-login100">
            <form class="login100-form validate-form">
					<span class="login100-form-logo">
						<img width="200px" height="120px" alt="Yabatech Logo" class="logo-default"
                             src="{{ asset('./assets/img/yabatech-logo.svg') }}"/>
					</span>
                <span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>
                <div class="wrap-input100 validate-input" data-validate="Enter username">
                    <input class="input100" type="text" name="username" placeholder="Username">
                    <span class="focus-input100" data-placeholder=""></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" type="password" name="pass" placeholder="Password">
                    <span class="focus-input100" data-placeholder=""></span>
                </div>
                <div class="contact100-form-checkbox">
                    <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                    <label class="label-checkbox100" for="ckb1">
                        Remember me
                    </label>
                </div>
                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Login
                    </button>
                </div>
                <div class="text-center p-t-30">
                    <a class="txt1" href="{{ route('admin.forgot-password') }}">
                        Forgot Password?
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end page content -->
@endsection

