<style>
</style>
<div class="innerpage-banner" id="home">
	<div class="inner-page-layer">
	</div>
</div>
<!-- //banner -->
<!-- contact -->
<section class="mail pt-lg-5 pt-4">
	<div class="container pt-lg-5">
		<h2 class="heading text-center mb-sm-5 mb-4">Donor Registration </h2>
		<div class="row agileinfo_mail_grids">
			<div class="col-lg-8 agileinfo_mail_grid_right">
				<form action="<?php echo base_url();?>Welcome/addDonor" method="post" enctype='multipart/form-data'>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								Profile Picture	<input type="file" style="height:80px;width:100px"  name="picture" placeholder="" class="form-control" required="">
							</div>
						</div>
						<div class="col-md-6 wthree_contact_left_grid pr-md-0">
							<div class="form-group">
								<input type="text" name="first_name" class="form-control" placeholder="First Name" required="">
							</div>
							<div class="form-group">
								<input type="text" name="age" class="form-control" placeholder="Age" required="">
							</div>
						</div>
						<div class="col-md-6 wthree_contact_left_grid">
							<div class="form-group">
								<input type="text" name="last_name" class="form-control" placeholder="Last Name" required="">
							</div>
							<div class="form-group">
							<select name="blood_group" class="form-control" style="height:30px;"  placeholder="Blood Group" required="">
								<option value="" >Blood Group</option>
								<option value="A+">A+</option>
								<option value="A-">A-</option>
								<option value="B+">B+</option>
								<option value="B-">B-</option>
								<option value="AB+">AB+</option>
								<option value="AB-">AB-</option>
								<option value="O+">O+</option>
								<option value="O-">O-</option>
							</select>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<textarea name="address" placeholder="Address" class="form-control" cols="10" rows="3" required=""></textarea>
							</div>
						</div>
						<div class="col-md-6 wthree_contact_left_grid">
							<div class="form-group">
							<select name="gender" style="height:30px;" class="form-control"   placeholder="Blood Group" required="">
								<option value="">Gender</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select>
							</div>
							<div class="form-group">
							<select name="addiction" style="height:30px;" class="form-control"   placeholder="Blood Group" required="">
								<option value="">Addiction</option>
								<option value="Smoking">Smoking</option>
								<option value="Drinking">Drinking</option>
								<option value="None">None</option>
							</select>	
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
							Medical Report	<input type="file" style="height:70px;"  name="file" placeholder="Medical Report" class="form-control" required="">
							</div>
						</div>
						<div class="col-md-6 wthree_contact_left_grid">
						<div class="form-group">
								<input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" maxlength="10" name="contact_no" class="form-control" placeholder="Contact Number" required="">
							</div>
							<div class="form-group">
								<input type="email" name="email" class="form-control" placeholder="Email" required="">
							</div>
							<div class="form-group">
								<input type="password" name="password" id="txtPassword" class="form-control" placeholder="Password" required="">
							</div>							
							<div class="form-group">
								<input type="password" name="confirm_password" id="txtConfirmPassword" class="form-control" placeholder="Confirm Password" required="">
							</div>
						</div>
						<div class="col-md-12">
							<div class="submit-buttons">
								<button type="submit" id="btnSubmit" class="btn">Submit</button>
								<button type="reset" class="btn">Clear</button>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="col-lg-4 col-md-6 mt-lg-0 mt-4 contact-info">
				<h4 class="mb-4">Address Information</h4>
				<p><span class="fa mr-2 fa-map-marker"></span>No 51, 10th st. Senthil nagar <span>Chennai-600096, India.</span></p>
				<p class="phone py-2"><span class="fa mr-2 fa-phone"></span>Phone : +91-7661008649 </p>
				<p><span class="fa mr-2 fa-envelope"></span>Email : <a href="mailto:info@example.com">info@findblood.com</a></p>
				<h4 class="my-4">Call us At</h4>
				<p class="phone"><span class="fa mr-2 fa-phone"></span>Call Us At +91-7661008649 </p> 
			</div>
		</div>
	</div>	
</section>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("#btnSubmit").click(function () {
            var password = $("#txtPassword").val();
            var confirmPassword = $("#txtConfirmPassword").val();
            if (password != confirmPassword) {
                alert("Passwords do not match.");
                return false;
            }
            return true;
        });
    });
</script>
