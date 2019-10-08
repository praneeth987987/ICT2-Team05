<center> Add Event </center>
		  <div class="tab-pane" id="formcontrols">
								<form id="edit-profile" method="post" action="<?php echo base_url();?>Admin/addEvents" class="form-horizontal">
									<fieldset>
										
										<div class="control-group">											
											<label class="control-label" for="username">Event Name</label>
											<div class="controls">
												<input type="text" name="event_name" class="span6 disabled" id="username">
												
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										
										<div class="control-group">											
											<label class="control-label" for="firstname">Event Description</label>
											<div class="controls">
												<textarea type="text" name="event_description" class="span6" id="firstname"></textarea>
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										
										<div class="control-group">											
											<label class="control-label" for="lastname">Event Date</label>
											<div class="controls">
												<input type="date" name="event_date" class="span6" id="lastname">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										
										<div class="control-group">											
											<label class="control-label" for="email">Event Location</label>
											<div class="controls">
												<input type="text" name="event_location" class="span4" id="email">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										
									
											
										<div class="form-actions">
											<input type="submit" value="Save" class="btn btn-primary"> 
											<input type="reset" value="Cancel" class="btn">
										</div> <!-- /form-actions -->
									</fieldset>
								</form>
								</div>
 <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>List of Events</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th> Event Name </th>
					<th> Event Description </th>
					<th> Event Date </th>
					<th> Event Location </th>
					<th class="td-actions">Actions </th>
                  </tr>
                </thead>
                <tbody>
				<?php foreach($data as $row) { ?>
                  <tr>
					<td> <?php echo $row->event_name; ?> </td>
					<td> <?php echo $row->event_description; ?> </td>
					<td> <?php echo $row->event_date; ?> </td>
					<td> <?php echo $row->event_location; ?> </td>
                    <td class="td-actions"><a href="<?php echo base_url(); ?>Admin/editEvent?id=<?php echo $row->event_id?>" class="btn btn-small btn-success"><i class="btn-icon-only icon-edit"> </i></a><a href="<?php echo base_url(); ?>Admin/delEvent?id=<?php echo $row->event_id?>" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
                 </tr>
				<?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /widget-content --> 
          </div>
		