@extends('prac.temp')

@section('title')
	{{ "Login" }}
@endsection

@section('cslog')
	<link rel="stylesheet" type="text/css" href="{{ asset('/nasifcss/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/nasifcss/css/login.css') }}">
@endsection

@section('login')
	<div class="limiter">
		<div class="container-login100" style="background-image: url('/nasifcss/images/bg-02.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">

				{{-- <span class="login100-form-title p-b-41">
					WELCOME
				</span> --}}

				<span class="login100-form-logo">
            		<img src="/nasifcss/images/logo.png">
          		</span>
          		{{-- <span class="login100-form-title p-b-41">
					WELCOME
				</span> --}}


				<form class="login100-form validate-form p-b-33 p-t-5" method="POST" action="{{ route('login') }}">
					@csrf
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="email" placeholder="User name">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn" type="submit">
							signin
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
@endsection

@section('js')
	<!--===============================================================================================-->
	<script src="/nasifcss/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/nasifcss/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="/nasifcss/vendor/bootstrap/js/popper.js"></script>
	<script src="/nasifcss/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="/nasifcss/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="/nasifcss/vendor/daterangepicker/moment.min.js"></script>
	<script src="/nasifcss/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="/nasifcss/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="/nasifcss/js/main.js"></script>
@endsection