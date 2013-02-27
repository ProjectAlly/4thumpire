<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<div class="row-fluid">
		<div class="span12 well">
			<div class="accordion" id="accordion2">
			  	<!-- International News -->
				<div class="accordion-group">
			    	<div class="accordion-heading">
			      		<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
						International News
			      		</a>
			    	</div>
			    	<div id="collapseOne" class="accordion-body collapse in">
			      		<div class="accordion-inner">
							<div class="well">
					    		<table class="table">
							    	<thead>
							        	<tr>
											<th>News Title</th>
											<th>Date</th>
											<th>Edit</th>
											<th>Delete</th>
										</tr>
							      	</thead>
							      	<tbody>
								    	<?php 
											foreach ($internationalInfo as $internationalInfos):
										?>
										<tr>
											<td><?php echo $internationalInfos['InternationalNews']['title']; ?></td>
											<td><?php echo $internationalInfos['InternationalNews']['date']; ?></td>
											<td><a href=""><i class="icon-pencil">Edit</i></a></td>
											<td><a href=""><i class="icon-remove">Remove</i></a></td>
										</tr>
										<?php 
											endforeach;
										?>
							      </tbody>
							    </table>
							</div> <!-- /WELL -->
		
							<button href="" class="btn btn-primary">Add New International News</button>
									
							<br/><br/>	
					    </div>
			    	</div>
			 	</div>
			  <!-- /International News -->
					  
				<!-- Club Updates -->
				<div class="accordion-group">
					<div class="accordion-heading">
				    	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
						Club Updates					
				      	</a>
				    </div>
			    	<div id="collapseTwo" class="accordion-body collapse">
			      		<div class="accordion-inner">
							<div class="well">
					    		<table class="table">
							    	<thead>
							        	<tr>
							          		<th>News Title</th>
											<th>Date</th>
											<th>Edit</th>
											<th>Delete</th>
							        	</tr>
							      	</thead>
							      	<tbody>
								    	<?php 
											foreach ($clubUpdateInfo as $clubUpdateInfos):
										?>
										<tr>
											<td><?php echo $clubUpdateInfos['ClubUpdate']['title']; ?></td>
											<td><?php echo $clubUpdateInfos['ClubUpdate']['date']; ?></td>
											<td><a href=""><i class="icon-pencil">Edit</i></a></td>
											<td><a href=""><i class="icon-remove">Remove</i></a></td>
										</tr>
										<?php 
											endforeach;
										?>
							      </tbody>
							    </table>
							</div>
	
							<button href="" class="btn btn-primary">Add New Club Updates</button>
							
						  <br/><br/>	
					
				  		</div>
			    	</div>
				</div>
				<!-- /Club Updates -->
					  				  
				<!-- Weekly Cricket Event -->
				<div class="accordion-group">
				    <div class="accordion-heading">
				      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
				        Weekly Cricket Event
				      </a>
				    </div>
				    <div id="collapseFour" class="accordion-body collapse">
				    	<div class="accordion-inner">
								<div class="well">
						    		<table class="table">
								    	<thead>
								        	<tr>
								          		<th>News Title</th>
												<th>Date</th>
												<th>Edit</th>
												<th>Delete</th>
								        	</tr>
								      	</thead>
								      	<tbody>
									    	<?php 
												foreach ($weekEventInfo as $weekEventInfos):
											?>
											<tr>
												<td><?php echo $weekEventInfos['WeeklyCricketEvent']['event_name']; ?></td>
												<td><?php echo $weekEventInfos['WeeklyCricketEvent']['date']; ?></td>
												<td><a href=""><i class="icon-pencil">Edit</i></a></td>
												<td><a href=""><i class="icon-remove">Remove</i></a></td>
											</tr>
											<?php 
												endforeach;
											?>
								      </tbody>
								    </table>
								</div>
	
								<button href="" class="btn btn-primary">Add New Weekly Cricket Event</button>
								
							  <br/><br/>	
				      	</div>
				    </div>
				</div>
				<!-- /Weekly Cricket Event -->	  
			</div><!-- /ACCORDION -->
			<!-- COLLAPSIBLE MENU ENDS -->

			<script type="text/javascript">
			$(".collapse").collapse();
			</script>
		</div><!-- SPAN12  -->
	</div><!-- /ROW FLUID -->
		
	</body>
</html>