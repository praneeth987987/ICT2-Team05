 <div class="widget widget-table action-table">
<div class="widget-header"> <i class="icon-th-list"></i>
  <h3>List of Donors</h3>
</div>
<!-- /widget-header -->
<div class="widget-content">
  <table class="table table-striped table-bordered">
<thead>
   <tr>
	<th> Donor Name </th>
	<th> Contact Number </th>
	<th> Address </th>
	<th> Blood Group </th>
	<th> Addiction </th>
	<th> Gender </th>
	<th> Picture </th>
	<th> Medical Report </th>
	<th class="td-actions"> Remove Donor </th>
  </tr>
</thead>
<tbody>
<?php foreach($res as $row)  { ?>
<tr>
	<td> <?php echo $row->donor_firstName;?> <?php echo $row->donor_lastName;?> </td>
	<td> <?php echo $row->contact_number;?> </td>
	<td> <?php echo $row->donor_address;?> </td>
	<td> <?php echo $row->donor_bloodGroup;?> </td>
	<td> <?php echo $row->donor_addiction;?> </td>
	<td> <?php echo $row->donor_gender;?> </td>
	<td><img src="<?php echo base_url();?>uploads/<?php echo $row->picture; ?>" style="width:100px;height:100px;"></td>
	<td><a href="<?php echo base_url().'index.php/Admin/download/'.$row->donor_id ?>"><?php  echo $row->donor_medicalReport;?></a></td>
	
	<td class="td-actions">
	<a href="<?php echo base_url();?>index.php/Admin/delete_donor?donor_id=<?php echo $row->donor_id; ?>" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
 </tr>
<?php } ?>
</tbody>
  </table>
</div>
<!-- /widget-content --> 
</div>