@extends('admin.auth.layout.app')
@section('title', 'Admin Forgot Password')
@section('content')
<div class="limiter">
    <div class="container-login100 page-background">
        <div class="wrap-login100">
            <form class="login100-form validate-form">
					<span class="login100-form-logo">
						<img width="200px" height="120px" alt="Yabatech Logo" class="logo-default"
                             src="{{ asset('./assets/img/yabatech-logo.svg') }}"/>
					</span>
                <p class="text-center txt-small-heading">
                    Forgot Your Password? Let Us Help You.
                </p>
                <div class="wrap-input100 validate-input" data-validate="Enter username">
                    <input class="input100" type="text" name="username" placeholder="Enter Your Register Email Address">
                    <span class="focus-input100" data-placeholder=""></span>
                </div>
                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Send
                    </button>
                </div>
                <div class="text-center p-t-27">
                    <a class="txt1" href="{{ route('admin.login')  }}">
                        Login?
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection


