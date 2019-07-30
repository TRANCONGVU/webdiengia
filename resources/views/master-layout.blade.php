<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>title</title>
	<base href="{{asset('')}}">
	<link rel="stylesheet" href="">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" type="image/x-icon" href="" />
	<link rel="stylesheet" type="text/css" href="lib/bootstrap_4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/reset-browser.css">
	<link rel="stylesheet" type="text/css" href="lib/fontawesome.5.7.2/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="lib/OwlCarousel2-2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="lib/OwlCarousel2-2.3.4/assets/owl.theme.default.min.css">
	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="lib/banner-slider/engine1/style.css" />
    <!-- End WOWSlider.com HEAD section -->
    <link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="lib/bootstrap_4.0.0/js/bootstrap.min.js"></script>


</head>
<body>

@include('header')
@yield('content')
@include('footer')

</body>
</html>
