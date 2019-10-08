<!DOCTYPE html>
<html lang="en">
<head>
<title>Findblood</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
	
	<!-- css files -->
	<link href="<?php echo base_url();?>FrontAssets/css/css_slider.css" type="text/css" rel="stylesheet" media="all"><!-- slider css -->
    <link href="<?php echo base_url();?>FrontAssets/css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="<?php echo base_url();?>FrontAssets/css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="<?php echo base_url();?>FrontAssets/css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
    <link href="<?php echo base_url();?>FrontAssets/css/popuo-box.css" rel="stylesheet"><!-- fontawesome css -->
	<!-- //css files -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
	
	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet">
	<!-- //google fonts -->
	
<style>
.active, .btn:hover {
  background-color: #666; 
  color: white;
}
</style>
	
</head>
<body>

<!-- top header -->
<div class="header-top">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<ul class="d-lg-flex header-w3_pvt">
					<li class="mr-lg-3">
						<span class="fa fa-envelope-open"></span>
						<a href="mailto:info@example.com" class="">info@findblood.com</a>
					</li>
					<li>
						<span class="fa fa-phone"></span>
						<p class="d-inline">Call Us +91-7661008649</p>
					</li>
				</ul>
			</div>
			
			<div class="col-sm-6 header-right-w3_pvt">
				<ul class="d-lg-flex header-w3_pvt justify-content-lg-end">
					<li class="mr-lg-3">
						<span class=""><span class="fa fa-clock-o"></span>Mon - Fri : 8:30am to 9:30pm</span>
					</li>
					<li class="">
						<span class=""><span class="fa fa-clock-o"></span>Sat & Sun : 9:00am to 6:00pm</span>
					</li>
				</ul>
			</div>
			
		</div>
	</div>
</div>
<!-- //top header -->

<!-- //header -->
<header class="py-3">
	<div class="container">
			<div id="logo">
				<h1> <a href="<?php echo base_url();?>FrontAssets/index.html"><span class="fa fa-heart" aria-hidden="true"></span> Findblood</a></h1>
			</div>

			
		<!-- nav -->
		<nav class="d-lg-flex">

			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop" />
			<ul class="menu mt-2 ml-auto">
				<li class=""><a href="<?php echo base_url();?>">Home</a></li>
				<li class=""><a href="<?php echo base_url();?>Welcome/about">About Us</a></li>
				<li class=""><a href="<?php echo base_url();?>Welcome/events">Events</a></li>
				<li class=""><a href="<?php echo base_url();?>Welcome/contact_us">Contact Us</a></li>
				<?php if($this->session->userdata('donor_firstName')){ ?>
					<li class=""><a href="<?php echo base_url();?>Welcome/donor_profile">Profile</a></li>
					<li class=""><a href="<?php echo base_url();?>Welcome/logout">Logout</a></li>
				<?php } else { ?>
				<li class=""><a  data-toggle="modal" data-target="#myModal" href="#">Login</a></li>
				<?php } ?>
			</ul>
			<div class="login-icon ml-2">
				<a class="user" href="<?php echo base_url(); ?>Welcome/searchview"> Search Donor</a>
			</div>
		</nav>
		<div class="clear"></div>
		<!-- //nav -->
	</div>
	
</header>

<script>
    $(function(){
        $('a').each(function(){
            if ($(this).prop('href') == window.location.href) {
                $(this).addClass('active'); $(this).parents('li').addClass('active');
            }
        });
    });
</script>
<!-- //header -->