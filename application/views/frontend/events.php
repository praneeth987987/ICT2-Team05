<section class="services-inner py-5">
	<div class="container py-md-3">
		<h2 class="heading text-center mb-sm-5 mb-4">Services </h2>
		<div class="row service-grids">
			
			<div class="row col-lg-6 mb-lg-0 mb-5 mt-sm-0 mt-5 padder-none">
				<div class="col-sm-3 mb-sm-0 mb-4 ser_icon">
					<span class="icon bg3 mx-auto">
						<span class="fa fa-bullseye"></span>
					</span>
				</div>
				<div class="col-sm-9">
					<h4>Blood Treatment</h4>
					<p class="">Blood cancer treatments and side effects. ... While some slow-growing blood cancers can be managed by taking daily medication, people with faster-growing acute blood cancers may need stronger (intensive) treatments. The treatment your doctors recommend will depend on the type of blood</p>
				</div>
			</div>
			<div class="row col-lg-6 padder-none">
				<div class="col-sm-9 text-sm-right">
					<h4>Routine Blood Check-up</h4>
					<p class="">A typical routine blood test is the complete blood count, also called CBC, to count your red and white blood cells as well as measure your hemoglobin levels and other blood components. This test can uncover anemia, infection, and even cancer of the blood.</p>
				</div>
				<div class="col-sm-3 mt-sm-0 mt-4 ser_icon ser-right">
					<span class="icon bg4 mx-auto">
						<span class="fa fa-user-md"></span>
					</span>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //Services -->


<!-- services -->
<section class="services py-5">
	<div class="container py-lg-5">
		<h3 class="heading text-center mb-5">Our Events </h3>
		<div class="row offer-grids">
		<?php foreach($data as $row){ ?>
			<div class="col-lg-4 col-md-6">
				<div class="ser1">
					<div class="bg-layer">
						<h4 class=""><?php echo $row->event_name; ?></h4>
						<p class="mt-3"><?php echo $row->event_description; ?></p>
						<p class="mt-3"><?php echo $row->event_date; ?></p>
						<p class="mt-3"><?php echo $row->event_location; ?></p>
					</div>
				</div>
			</div>
		<?php } ?>
		</div>
	</div>
</section>
<!-- //services -->	

<!-- join -->
<section class="join py-5">
	<div class="container py-lg-5 py-sm-3">
		<div class="row join_grids">
			<div class="col-lg-6">
				<img src="<?php echo base_url();?>FrontAssets/images/blood12.jpg" class="img-fluid" alt="" />
			</div>
			<div class="col-lg-6">
				<h4 class="mt-4">Make Your Donation Today</h4>
				<p class="py-sm-4 py-3">Every three seconds, someone needs a blood transfusion! 20% of recipients are children – many are cancer patients, accident victims or patients undergoing surgery. A small needle prick and a little of your time could transform you into a superhero. </p>
				<p class="pb-3">Yes, by donating blood you’ll be saving up to three human lives each time you donate! Isn’t it shocking that about 60% of the population are eligible to donate blood, yet less than 4% do!</p>
				<a class="btn btn-banner text-capitalize" href="#" role="button">Become A Donor</a>
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