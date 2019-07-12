@extends('prac.temp')

@section('title')
	{{ "Products" }}
@endsection

@section('csreg')
	<link rel="stylesheet" type="text/css" href="{{ asset('/nasifcss/css/registration.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/nasifcss/css/login.css') }}">

	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- Custom Theme files -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //Custom Theme files -->
	<!-- web font -->
	<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
	<!-- //web font -->
@endsection

@section('register')
	<div class="main-w3layouts wrapper">
		<!-- <h1>Creative SignUp Form</h1> -->

		{{-- <span class="login100-form-logo">
            <img src="/nasifcss/images/logo.png">
        </span> --}}

		<div class="container">
			<form method="post" action="{{ route('product.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
			   <label>Product Type</label>
			    <select name="type" class="form-control">
				    <option disabled="disabled" selected="selected"> - Select Product Type - </option>
	  				<option >Television</option>
	  				<option >Monitor</option>
	  				<option >Mobile</option>
	  				<option >Air Conditioner</option>
	  				<option >Freeze</option>
	  				<option >Micro oven</option>
	  			</select>
	  		</div>

			 {{-- <div class="form-group">
		      <label for="nos">Number of Student</label>
		      <input type="nos" class="form-control" id="nos" placeholder="Enter number of student" name="number_of_students">
		    </div> --}}

		    <div class="form-group">
		      <label>Vendor</label>
		      <select name="vendor" class="form-control">
		      	<option disabled="disabled" selected="selected"> - Select Vendor - </option>
  				<option>Samsung</option>
  				<option>Singer</option>
  				<option>whirepool</option>
  				<option>General</option>
  				<option>Walton</option>
  				<option>Asus</option>
  				<option>Hp</option>
  				<option>Apple</option>
			  </select>
		    </div>

			 {{-- <div class="form-group">
		      <label>Type of Department</label>
		      <select name="type_of_department" class="form-control">
		      	<option disabled="disabled" selected="selected"> - Select Department Type - </option>
  				<option >Engineering</option>
  				<option >Science & Humanities</option>
			  </select>
		    </div> --}}

		    <div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn" type="submit">
							save
						</button>
					</div>
			</form>
		</div>

		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
@endsection