<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<style>
    	.row{
		    margin-top:40px;
		    padding: 0 10px;
		}
		.clickable{
		    cursor: pointer;   
		}

		.panel-heading div {
			margin-top: -18px;
			font-size: 15px;
		}
		.panel-heading div span{
			margin-left:5px;
		}
		.panel-body{
			display: none;
		}
</style>

<div class="container">
    <h1>Click the filter icon <small>(<i class="glyphicon glyphicon-filter"></i>)</small></h1>
    	<div class="row" style="width: 130%;">
			<div class="col-md-6" style="margin-left: 260px;">
				<div class="panel panel-primary">
					<div class="panel-heading" style="background:maroon;">
						<h3 class="panel-title">Donors</h3>
						<div class="pull-right">
							<span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
								<i class="glyphicon glyphicon-filter"></i>
							</span>
						</div>
					</div>
					<div class="panel-body">
						<input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filter Developers" />
					</div>

					<table class="table table-hover" id="dev-table">
						<thead>
	
							<tr>
								<th>Donor Name</th>
								<th>Donor Gender</th>
								<th>Donor Age</th>
                				<th>Donor Addiction</th>
								<th>Donor Picture</th>
							</tr>
						</thead>
						<tbody>
					
						<?php foreach($data as $row) { ?>
							<tr>
								<td><?php echo $row->donor_firstName;?> <?php echo $row->donor_lastName;?> </td>
								<td><?php echo $row->donor_gender;?></td>
								<td><?php echo $row->donor_age;?></td>
								<td><?php echo $row->donor_addiction;?></td>
								<td><img src="<?php echo base_url();?>uploads/<?php echo $row->picture; ?>" style="width:100px;height:100px;"></td>
							</tr>
						<?php } ?>
				
						</tbody>
					</table>
				</div>
			</div>
			<div class="col-md-6">
				
			</div>
		</div>
	</div>
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