<center> Add Event </center>
		  <div class="tab-pane" id="formcontrols">
		  <?php foreach($res as $row){ ?>
								<form id="edit-profile" method="post" action="<?php echo base_url();?>Admin/updateEvents" class="form-horizontal">
									<fieldset>
										<div class="control-group">											
											<label class="control-label" for="username">Event Name</label>
											<div class="controls">
											<input type="hidden" name="event_id" value="<?php echo $this->input->get('id')?>">
												<input type="text" name="event_name" value="<?php echo $row->event_name; ?>" class="span6 disabled" id="username">
												
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										
										<div class="control-group">											
											<label class="control-label" for="firstname">Event Description</label>
											<div class="controls">
												<textarea type="text"  name="event_description" class="span6" id="firstname"><?php echo $row->event_description; ?></textarea>
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										
										<div class="control-group">											
											<label class="control-label" for="lastname">Event Date</label>
											<div class="controls">
												<input type="date" name="event_date" value="<?php echo $row->event_date; ?>" class="span6" id="lastname">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										
										<div class="control-group">											
											<label class="control-label" for="email">Event Location</label>
											<div class="controls">
												<input type="text" value="<?php echo $row->event_location; ?>" name="event_location" class="span4" id="email">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										
									
											
										<div class="form-actions">
											<input type="submit" value="Save" class="btn btn-primary"> 
											<input type="button" onclick="window.location.href = '<?php echo base_url();?>index.php/Admin/events'" value="Cancel" class="btn">
										</div> <!-- /form-actions -->
									</fieldset>
								</form>
		  <?php } ?>
								</div>
 