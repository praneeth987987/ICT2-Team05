<!DOCTYPE html>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	body {
  background:linear-gradient(90deg, #e8e8e8 50%);
}

.portfolio {
  padding:6%;
  text-align:center;
}

.heading {
  background:#fff;
  padding:1%;
  text-align:left;
  box-shadow:0px 0px 4px 0px #545b62;
}

.heading img {
  width:10%;
}

.bio-info {
  padding:5%;
  background:#fff;
  box-shadow:0px 0px 4px 0px #b0b3b7;
}

.name {
  font-family:'Charmonman', cursive;
  font-weight:600;
}

.bio-image {
  text-align:center;
}

.bio-image img {
  width:350px;
  height:350px;
  border-radius:50%;
}

.bio-content {
  text-align:left;
}

.bio-content p {
  font-weight:600;
  font-size:30px;
}
	</style>
</head>

<body><div class="container portfolio">
	<div class="row">
		<div class="col-md-12">
			<div class="heading"><h2 align="center"><b>Donor Profile</b></h2>
			</div>
		</div>  		
	</div>
	<div class="bio-info">
	<?php foreach($res as $row){ ?>
		<div class="row">
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-12">
						<div class="bio-image">
						<img src="<?php echo base_url();?>uploads/<?php echo $row->picture; ?>" alt="" />
						</div>
					</div>
				</div>	
			</div>
			<div class="col-md-6">
				<div class="bio-content">
		
			
				<form action="<?php echo base_url();?>Welcome/update_profile_picture" method="post" enctype='multipart/form-data'>
					<div class="row">
						<div class="col-md-6 wthree_contact_left_grid pr-md-0">
							<div class="form-group">
								<input type="file" name="pic" class="form-control" placeholder="First Name" required="">
							</div>
						
						</div>
						
						<div class="col-md-12">
							<div class="submit-buttons">
								<button type="submit" class="btn">Update Profile Picture</button>

							</div>
						</div>
					</div>
				</form>
			
				</div>
			</div>
		</div>	
	</div>
	<?php } ?>
</div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>

</html>