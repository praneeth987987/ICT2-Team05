<section class="mail pt-lg-5 pt-4">
	<div class="container pt-lg-5">
		<h2 class="heading text-center mb-sm-5 mb-4">Contact Us </h2>
		<div class="row agileinfo_mail_grids">
			<div class="col-lg-8 agileinfo_mail_grid_right">
				<form action="<?php echo base_url();?>Welcome/addContact" method="post">
					<div class="row">
						<div class="col-md-6 wthree_contact_left_grid pr-md-0">
							<div class="form-group">
								<input type="text" name="name" class="form-control" placeholder="Name" required="">
							</div>
							<div class="form-group">
								<input type="email" name="email" class="form-control" placeholder="Email" required="">
							</div>
						</div>
						<div class="col-md-6 wthree_contact_left_grid">
							<div class="form-group">
								<input type="text" name="contact" class="form-control" placeholder="Phone Number" required="">
							</div>
							<div class="form-group">
								<input type="text" name="subject" class="form-control" placeholder="Subject" required="">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<textarea name="message" placeholder="Message" class="form-control" required=""></textarea>
							</div>
						</div>
						<div class="col-md-12">
							<div class="submit-buttons">
								<button type="submit" class="btn">Submit</button>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="col-lg-4 col-md-6 mt-lg-0 mt-4 contact-info">
				<h4 class="mb-4">Address Information</h4>
				<p><span class="fa mr-2 fa-map-marker"></span>No 51, 10th st. Senthil nagar  <span>Chennai-600096, India.</span></p>
				<p class="phone py-2"><span class="fa mr-2 fa-phone"></span>Phone : +91-7661008649 </p>
				<p><span class="fa mr-2 fa-envelope"></span>Email : <a href="#">info@example.com</a></p>
				
				<h4 class="my-4">Book Your Appointment</h4>
				<p class="phone"><span class="fa mr-2 fa-phone"></span>Call us at +91-7661008649 </p>
			</div>
		</div>
	</div>

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
	
</section>