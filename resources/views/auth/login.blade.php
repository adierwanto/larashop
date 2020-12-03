<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V17</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="{{asset('loginpage/assets/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('loginpage/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('loginpage/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('loginpage/assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('loginpage/assets/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('loginpage/assets/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('loginpage/assets/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('loginpage/assets/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('loginpage/assets/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('loginpage/assets/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('loginpage/assets/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
                <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                    @csrf
					<span class="login100-form-title p-b-34">
						Account Login
					</span>
					
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type Email">
						<input id="email" class="input100 @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus autocomplete="">
                        {{-- <span class="focus-input100"></span> --}}
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					</div>
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
						<input class="input100 @error('password') is-invalid @enderror" type="password" id="password" name="password" placeholder="Password" required autocomplete="current-password">
                        {{-- <span class="focus-input100"></span> --}}
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							{{ __('Login') }}
                        </button>
                        <div class="w-full text-center p-t-27 p-b-239">
                        @if (Route::has('password.request'))
                                    <a class="txt1" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                        </div>
					</div>

					{{-- <div class="w-full text-center p-t-27 p-b-239">
						<span class="txt1">
							Forgot
						</span>

						<a href="#" class="txt2">
							User name / password?
						</a>
					</div> --}}

					<div class="w-full text-center">
						<a href="{{ route('register') }}" class="txt3">
							Sign Up
						</a>
					</div>
				</form>

            <div class="login100-more" style="background-image: url('{{asset('loginpage/assets/images/bg-01.jpg')}}');"></div>
			</div>
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="{{asset('loginpage/assets/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('loginpage/assets/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('loginpage/assets/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('loginpage/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('loginpage/assets/vendor/select2/select2.min.js')}}"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="{{asset('loginpage/assets/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('loginpage/assets/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('loginpage/assets/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('loginpage/assets/js/main.js')}}"></script>

</body>
</html>


{{-- @extends('layouts.app')

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
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
