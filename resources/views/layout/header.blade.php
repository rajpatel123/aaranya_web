<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<meta charset="utf-8" />
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<title>{{ $data['title'] ?? "title" }}</title>
	<meta content="" name="descriptison" />
	<meta content="" name="keywords" />
	<!-- Favicons -->
	<link href="assets/img/favicon.png" rel="icon" />
	<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;300;400;500;600;700;800&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Vendor CSS Files -->
	<!-- Vendor CSS Files -->
	<link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
	<link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
	<link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet" />
</head>

<body <?php if (Session::has('dark_mode')) {
			echo ("class='dark-solution'");
		} ?>>
	<!-- ======= Header ======= -->

	<header id="header" class="fixed-top   header-transparent ">
		<div class="container">
			<div class="header justify-content-between d-flex">
				<div class="logo">
					<a href="{{ URL::to('/') }}"><img src="assets/img/arnya/aaranya-logo.svg" /></a>
					<!-- <a href="index.html"><img src="assets/img/arnya/aaranya-logo.svg" /></a> -->
					<a class="top-btn-hover" href="#">For Business</a>
				</div>
				<nav class=" nav-menu d-none d-lg-block">
					<ul>
						<li class="hover-btn-header hover1"><a href="{{url('/book-a-demo')}}">Get A Demo</a></li>
						<li><a href="{{url('/solutions')}}">Solutions</a></li>
						<li><a href="{{url('/plans')}}">Plans</a></li>
						<li><a href="{{url('/about')}}">About Us</a></li>
						<li class="drop-down"><img style="width:25px; margin-top: 6px;" src="assets/img/arnya/settings-icon.svg" />
							<ul>

								<li><button class="light-nave">Light Mode</button></li>
								<li><button class="dark-nave">Dark Mode</button></li>

							</ul>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</header>

	<!-- End Header -->