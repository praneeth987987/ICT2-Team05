<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>FindBlood::Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="<?php echo base_url();?>BackAssets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>BackAssets/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600it="stylesheet">
<link href="<?php echo base_url();?>BackAssets/css/font-awesome.css" rel="stylesheet">
<link href="<?php echo base_url();?>BackAssets/css/style.css" rel="stylesheet">
<link href="<?php echo base_url();?>BackAssets/css/pages/dashboard.css" rel="stylesheet">

</head>
<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="<?php echo base_url();?>Admin/dashboard">FindBlood :: ADMIN </a>
      <div class="nav-collapse">
        <ul class="nav pull-right">
        
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user"></i> <?php echo $this->session->userdata('admin_email'); ?><b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="javascript:;">Profile</a></li>
              <li><a href="javascript:;">Logout</a></li>
            </ul>
          </li>
		<li class="dropdown"><a href="<?php echo base_url();?>Admin/logout" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user"></i> Logout <b class="caret"></b></a>
        </ul >
      </div>
      <!--/.nav-collapse --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner -->
</div>
<!-- /navbar -->
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li><a href="<?php echo base_url();?>Admin/dashboard"><i class="icon-dashboard"></i><span>Dashboard</span> </a> </li>
		<li><a href="<?php echo base_url();?>Admin/donors"><i class="icon-user"></i><span>Donors</span> </a> </li>
	
		<li><a href="<?php echo base_url();?>Admin/messages"><i class="icon-user"></i><span>Messages</span> </a> </li>
    <li><a href="<?php echo base_url();?>Admin/events"><i class="icon-book"></i><span>Manage Events</span> </a> </li>
        
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->
<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script>
    $(function(){
        $('a').each(function(){
            if ($(this).prop('href') == window.location.href) {
                $(this).addClass('active'); $(this).parents('li').addClass('active');
            }
        });
    });
</script>
