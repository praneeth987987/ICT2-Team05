 <div class="widget widget-table action-table">
<div class="widget-header"> <i class="icon-th-list"></i>
  <h3>List of Donors</h3>
</div>
<!-- /widget-header -->
<div class="widget-content">
  <table class="table table-striped table-bordered">
<thead>
   <tr>
	<th> First Name </th>
	<th> Subject </th>
	<th> Email Address </th>
	<th> Contact Number </th>
	<th> Message </th>
	
  </tr>
</thead>
<tbody>
<?php foreach($res as $row)  { ?>
<tr>
	<td> <?php echo $row->name;?></td>
	<td> <?php echo $row->subject;?> </td>
	<td> <?php echo $row->email;?> </td>
	<td> <?php echo $row->contact;?> </td>
	<td> <?php echo $row->message;?> </td>
 </tr>
<?php } ?>
</tbody>
  </table>
</div>
<!-- /widget-content -->
</div>