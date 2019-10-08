<div class="innerpage-banner" id="home">
	<div class="inner-page-layer">
	</div>
</div>
<!-- //banner -->

<!-- about -->
<section class="about py-5">
	<div class="container py-md-3">
		<h2 class="heading text-center mb-sm-5 mb-4">About Us </h2>
		<div class="row">
			<div class="col-lg-8">
				<h4 class="about-left">How badly is blood needed? </h4>
				<p class="mt-sm-4 mt-3">Blood supplies vary depending on the region and time of year. As more restrictive donor criteria are necessary to protect the safety of the blood supply and as the donor population ages, the inventory levels are affected across the nation. If you are eligible, your blood donations are needed. The inventory levels of blood would be more consistently maintained if more of those who are eligible donate 1-2 times each year.</p>
				<div class="row mt-4">
					<div class="col-md-3 col-6">
						<div class="about-box">
							<span class="icon">
								<span class="fa fa-heart"></span>
							</span>
							<h4>Donation</h4>
						</div>
					</div>
					
					<!-- .about-box ends here -->
					<div class="col-md-3 col-6 mt-md-0 mt-4">
						<div class="about-box">
							<span class="icon">
								<span class="fa fa-stethoscope"></span>
							</span>
							<h4>Check-ups</h4>
						</div>
					</div>
					
				</div>
			</div>
			<div class="col-lg-4 col-md-8 dental">
				<img src="<?php echo base_url();?>FrontAssets/images/blood_about2.png" class="img-fluid" alt="" />
			</div>
		</div>
	</div>
</section>
<!-- //about -->

<!-- about bottom -->
<section class="about-bottom pb-5">
	<div class="container pb-lg-3">
		<div class="row bottom-grids">
			<div class="col-lg-6">
				<img src="<?php echo base_url();?>FrontAssets/images/about.jpg" class="img-fluid" alt="" />
			</div>
			<div class="col-lg-6 mt-lg-0 mt-5">
				<h4>How often may I donate? </h4>
				<p class="py-3">The Medical Director of each blood donor center is responsible for setting policies regarding the frequency of donation. The policies set by a Medical Director can be more restrictive, permitting donation less frequently than permitted by AABB Standards and FDA regulations. Based on AABB and FDA requirements, you must wait 56 days between whole blood donations. </p>
				<p class="">Platelet (apheresis) donors may donate more frequently. This is because the body replenishes platelets and plasma more quickly than red cells. Platelets will return to normal levels within about 72 hours of donating. Plasma (the liquid portion of your blood) will return to normal levels within a couple of days.</p>
			</div>
		</div>
	</div>
</section>
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
<!-- //about bottom -->