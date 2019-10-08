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
	<?php foreach($res as $row){?>
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
				
					<h1><?php echo $row->donor_firstName; ?> <?php echo $row->donor_lastName; ?> </h1>
					<h4><b>Age:</b> <?php echo $row->donor_age; ?></h4>
                   <h4><b>Blood-Group :</b> <?php echo $row->donor_bloodGroup; ?></h4><h4><b>Contact :</b> <?php echo $row->contact_number; ?></h4><h4><b>Email :</b> <?php echo $this->session->userdata('email'); ?></h4><h4><b>Gender :</b> <?php echo $this->session->userdata('donor_gender'); ?></h4><h4><b>Address :</b> <?php echo $row->donor_address; ?></h4>
                    <button class="btn btn-danger" onclick="window.location.href = '<?php echo base_url();?>index.php/Welcome/edit_profile'" type="button"><i class="fa fa-edit"></i> Edit Profile</button>
				</div>
				<?php } ?>
			</div>
		</div>	
	</div>
</div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>

</html>