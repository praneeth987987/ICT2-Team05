<div class="banner" id="home">
	<div class="layer">
		<div class="container">
			<div class="banner-text-agile">
				<div class="row">
					<div class="col-lg-6 p-0">
					<?php if($this->session->flashdata('success')){ ?>
					<div class="alert alert-danger" role="alert" id="success-alert">
					<strong id="myWish"><?php echo $this->session->flashdata('success');?></strong> 
					</div>
					<?php } ?>
															
						<!-- banner slider-->
					<div class="csslider infinity" id="slider1">
						<input type="radio" name="slides" checked="checked" id="slides_1" />
						<input type="radio" name="slides" id="slides_2" />
						<input type="radio" name="slides" id="slides_3" />
					<ul class="banner_slide_bg">
							<li>
								<div class="container-fluid">
									<div class="w3ls_banner_txt">
										<h3 class="b-w3ltxt text-capitalize mt-md-4"><span>Give blood Register today.  </span> Become a blood donor.</h3>
										<p class="w3ls_pvt-title my-3">Blood supplies vary depending on the region and time of year. As more restrictive donor criteria are necessary to protect the safety of the blood supply and as the donor population ages, the inventory levels are affected across the nation.</p>
										<a data-toggle="modal" data-target="#myModal" href="#" class="btn btn-banner my-sm-3 mb-3"><b>Already a donor?</b></a>
										<a href="<?php echo base_url();?>Welcome/donor_registration" class="btn btn-banner1 my-sm-3 mb-3"><b>Become a Donor</b></a>
									</div>
								</div>
							</li>
							<li>
								<div class="container-fluid">
									<div class="w3ls_banner_txt">
										<h3 class="b-w3ltxt text-capitalize mt-md-4"><span>We care about your</span> Blood</h3>
										<p class="w3ls_pvt-title my-3">For a whole blood donation, approximately 500 ml or one-half liter of blood is collected. For donations of other blood products, such as platelet or plasma, the amount collected depends on your height, weight and platelet count..</p>
									<a data-toggle="modal" data-target="#myModal" href="#" class="btn btn-banner my-sm-3 mb-3"><b>Already a donor?</b></a>
										<a href="<?php echo base_url();?>Welcome/donor_registration" class="btn btn-banner1 my-sm-3 mb-3"><b>Become a Donor</b></a>
									</div>
								</div>
							</li>
						
							<li>
								<div class="container-fluid">
									<div class="w3ls_banner_txt">
										<h3 class="b-w3ltxt text-capitalize mt-md-4"><span>Professionally Trained</span> Staff.</h3>
										<p class="w3ls_pvt-title my-3">Staff undertaking donor health and risk assessment should be well-trained in the observation of donor appearance and detection of signs of ill health.</p>
										<a data-toggle="modal" data-target="#myModal" href="#" class="btn btn-banner my-sm-3 mb-3"><b>Already a donor?</b></a>
										<a href="<?php echo base_url();?>Welcome/donor_registration" class="btn btn-banner1 my-sm-3 mb-3"><b>Become a Donor</b></a>
									</div>
								</div>
							</li>
						</ul>
						<div class="navigation">
							<div>
								<label for="slides_1"></label>
								<label for="slides_2"></label>
								<label for="slides_3"></label>
							</div>
						</div>
					</div>
					<!-- //banner slider-->

					</div>
					<div class="col-lg-6 col-md-8">
						<img src="<?php echo base_url();?>FrontAssets/images/blood12.jpg" style="margin-top: 56px;" alt="" class="img-fluid" />
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
    <div class="map mt-5">
		<iframe src="https://maps.google.com/maps?q=10%20th%20%20st%20senthil%20nagar%2C%20seevaram%2C%20chennai&t=&z=13&ie=UTF8&iwloc=&output=embed"	style="border:0"></iframe>
	</div>
	
	<div class="container">
  
  <!-- Modal-->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <p><b>Donor Login</b></p>
        </div>
		<form action="<?php echo base_url();?>Welcome/isLoginDonor" method="post">
		<div class="form-group">
			<input type="email" name="email" class="form-control" placeholder="Email Id" required="">
		</div>
		<div class="form-group">
			<input type="password" name="password" class="form-control" placeholder="Password" required="">
		</div>
		
        <div class="modal-footer">
		<input type="submit" value="Login" class="btn btn-default" >
		<input type="button" value="Register" onclick="window.location.href='<?php echo base_url()?>Welcome/donor_registration'" class="btn btn-default" >
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      </form>
    </div>
  </div>
  
</div>
<section class="appointment text-center py-5">
	<div class="container py-sm-3">
		<h4>Get A Blood Donor</h4>
		<p class="mt-3">Get a donor of your blood group, Click on search</p>
		<a href="<?php echo base_url(); ?>Welcome/searchview">Serach Donor</a>
	</div>
</section>

  <script src="<?php echo base_url();?>assetsAdmin/js/bootstrap.min.js"></script>
    <script type="text/javascript">
			$(document).ready(function () {
			 
			window.setTimeout(function() {
				$(".alert").fadeTo(1000, 0).slideUp(1000, function(){
					$(this).remove(); 
				});
			}, 3000);
			 
			});
	</script>
			
<!-- //banner -->

<!-- about -->
