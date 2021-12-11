<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Panagea - Premium site template for travel agencies, hotels and restaurant listing.">
    <meta name="author" content="Ansonika">
    <title>Panagea | Premium site template for travel agencies, hotels and restaurant listing.</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{ URL::asset('/assets/Front/img/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{ URL::asset('/assets/Front/img/apple-touch-icon-57x57-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{ URL::asset('/assets/Front/img/apple-touch-icon-72x72-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{ URL::asset('/assets/Front/img/apple-touch-icon-114x114-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{ URL::asset('/assets/Front/img/apple-touch-icon-144x144-precomposed.png') }}">

    <!-- GOOGLE WEB FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{ URL::asset('/assets/Front/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('/assets/Front/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('/assets/Front/css/vendors.css') }}" rel="stylesheet" type="text/css" />
    
    <!-- YOUR CUSTOM CSS -->
    <link href="{{ URL::asset('/assets/Front/css/custom.css') }}" rel="stylesheet" type="text/css" />
	
</head>

<body id="register_bg">
	
	<nav id="menu" class="fake_menu"></nav>
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<!-- End Preload -->
	
	<div id="login">
		<aside>
			<figure>
				<a href="{{route('front.index')}}"><img src="{{asset('/assets/Front/img/logo.png')}}" width="150" alt="" class="logo_sticky"></a>
			</figure>
			<form action="{{route('front.user.signup_submit')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
				<div class="form-group">
					<label>Your Name</label>
					<input class="form-control" type="text" name="first_name" required>
					<i class="ti-user"></i>
				</div>
				<div class="form-group">
					<label>Your Last Name</label>
					<input name="last_name" class="form-control" type="text" required>
					<i class="ti-user"></i>
				</div>
				<div class="form-group">
					<label>Your Email</label>
					<input name="email" class="form-control" type="email" required>
					<i class="icon_mail_alt"></i>
				</div>
				<div class="form-group">
					<label>Your password</label>
					<input name="password" class="form-control" type="password" id="password1" required> 
					<i class="icon_lock_alt"></i>
				</div>
				<div class="form-group">
					<label>Confirm password</label>
					<input class="form-control" type="password" id="password2" required>
					<i class="icon_lock_alt"></i>
				</div>
				<div id="pass-info" class="clearfix"></div>
				<button type="submit" class="btn_1 rounded full-width add_top_30">Register Now!</a>
				<!-- <div class="text-center add_top_10">Already have an acccount? <strong><a href="login.html">Sign In</a></strong></div> -->
			</form>
			<div class="copy">© {{ date('Y') }} CheapBedFinder</div>
		</aside>
	</div>
	<!-- /login -->
	
	<!-- COMMON SCRIPTS -->
    <script src="{{ URL::asset('assets/Front/js/common_scripts.js')}}"></script>
    <script src="{{ URL::asset('assets/Front/js/main.js')}}"></script>
    <script src="{{ URL::asset('assets/Front/assets/validate.js')}}"></script>
	
	<!-- SPECIFIC SCRIPTS -->
	<script src="{{ URL::asset('assets/Front/js/pw_strenght.js')}}"></script>
  
</body>
</html>