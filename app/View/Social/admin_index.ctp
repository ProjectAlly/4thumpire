<div class="row-fluid">
	<div class="span12 well">
		<div class="accordion" id="accordion2">
		  	<!-- SOCIAL -->
			<div class="accordion-group">
		    	<div class="accordion-heading">
		      		<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
					Social
		      		</a>
		    	</div>
		    	<div id="collapseOne" class="accordion-body collapse in">
		      		<div class="accordion-inner">
						<div class="well">
				    		<table class="table">
						    	<thead>
						        	<tr>
						          		<th>Social Event Name</th>
						          		<th>Information</th>
						          		<th>Date</th>
						          		<th></th>
						          		<th></th>
						        	</tr>
						      	</thead>
						      	<tbody>
							    	<?php 
							      	foreach($socialInfo as $social):
							      	 	echo "<tr>";
							      	 		echo "<td>";
							      	 			echo $social['Social']['name'];
							      	 		echo "</td>";	
							      	 		echo "<td>";
							      	 			echo $social['Social']['information'];
							      	 		echo "</td>";	
							      	 		echo "<td>";
							      	 			echo $social['Social']['date'];
							      	 		echo "</td>";	
							      	 		echo "<td>";
												echo $this->Html->link('Edit',array('controller' => 'Social', 
					   	 		              											'action' => 'editSocial', 
					   	 		              											'club' => $this->request->params['club'], 
					   	 		              											'admin' => true,
					   	 		              											'id' => $social['Social']['id']),
																			 array('class' => 'label label-info'));
											echo "</td>";
											echo "<td>";
											  	echo $this->Html->link('Remove', array('controller' => 'Social', 
					   	 		              											'action' => 'removeSocial', 
					   	 		              											'club' => $this->request->params['club'], 
					   	 		              											'admin' => true, 
											  											'id' => $social['Social']['id']),
					   	 		              									array('class' => 'label label-info'));
											echo "</td>";
							      	 	echo "</tr>";
							      	endforeach;
							      	?>
						      </tbody>
						    </table>
						</div> <!-- /WELL -->
	
						<?php 
					  	echo $this->Html->link('Add Social', array('controller' => 'Social', 
   	 		              											'action' => 'addSocial', 
   	 		              											'club' => $this->request->params['club'], 
   	 		              											'admin' => true),
   	 		              									array('class' => 'btn btn-primary'));
						?>
						<br/><br/>	
				    </div>
		    	</div>
		 	</div>
		  <!-- /SOCIAL -->
				  
			<!-- TOURS -->
			<div class="accordion-group">
				<div class="accordion-heading">
			    	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
					Tours					
			      	</a>
			    </div>
		    	<div id="collapseTwo" class="accordion-body collapse">
		      		<div class="accordion-inner">
						<div class="well">
				    		<table class="table">
						    	<thead>
						        	<tr>
						          		<th>Tour Information</th>
						          		<th>Date</th>
						          		<th></th>
						          		<th></th>
						        	</tr>
						      	</thead>
						      	<tbody>
							    	<?php 
							      	foreach($tourInfo as $tour):
							      	 	echo "<tr>";
							      	 		echo "<td>";
							      	 			echo $tour['Tour']['information'];
							      	 		echo "</td>";	
							      	 		echo "<td>";
							      	 			echo $tour['Tour']['date'];
							      	 		echo "</td>";	
							      	 		echo "<td>";
												echo $this->Html->link('Edit',array('controller' => 'Social', 
					   	 		              											'action' => 'editTour', 
					   	 		              											'club' => $this->request->params['club'], 
					   	 		              											'admin' => true,
					   	 		              											'id' => $tour['Tour']['id']),
																				array('class' => 'label label-info'));
											echo "</td>";
											echo "<td>";
											  	echo $this->Html->link('Remove', array('controller' => 'Social', 
					   	 		              											'action' => 'removeTour', 
					   	 		              											'club' => $this->request->params['club'], 
					   	 		              											'admin' => true, 
											  											'id' => $tour['Tour']['id']),
					   	 		              									array('class' => 'label label-info'));
											echo "</td>";
							      	 	echo "</tr>";
							      	endforeach;
							      	?>
						      </tbody>
						    </table>
						</div>

						<?php 
					  	echo $this->Html->link('Add Tour', array('controller' => 'Social', 
   	 		              											'action' => 'addTour', 
   	 		              											'club' => $this->request->params['club'], 
   	 		              											'admin' => true),
   	 		              									array('class' => 'btn btn-primary'));
						?>
						
					  <br/><br/>	
				
			  		</div>
		    	</div>
			</div>
			<!-- /TOURS -->
				  
			<!-- OLD WEEKLY CRICKET EVENT -->
			<div class="accordion-group">
				<div class="accordion-heading">
			      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
			        Weekly Cricket Events
			      </a>
			    </div>
			    <div id="collapseThree" class="accordion-body collapse">
			      <div class="accordion-inner">
							<div class="well">
					    		<table class="table">
							    	<thead>
							        	<tr>
							          		<th>Weekly Cricket Event</th>
							          		<th>Details</th>
							          		<th>Date</th>
							          		<th></th>
							          		<th></th>
							        	</tr>
							      	</thead>
							      	<tbody>
								    	<?php 
								      	foreach($weekEventInfo as $weekEvent):
								      	 	echo "<tr>";
								      	 		echo "<td>";
								      	 			echo $weekEvent['WeeklyCricketEvent']['event_name'];
								      	 		echo "</td>";	
								      	 		echo "<td>";
								      	 			echo $weekEvent['WeeklyCricketEvent']['details'];
								      	 		echo "</td>";	
								      	 		echo "<td>";
								      	 			echo $weekEvent['WeeklyCricketEvent']['date'];
								      	 		echo "</td>";	
								      	 		echo "<td>";
													echo $this->Html->link('Edit',array('controller' => 'Social', 
						   	 		              											'action' => 'editWeeklyevent', 
						   	 		              											'club' => $this->request->params['club'], 
						   	 		              											'admin' => true,
						   	 		              											'id' => $weekEvent['WeeklyCricketEvent']['id']),
																					array('class' => 'label label-info'));
												echo "</td>";
												echo "<td>";
												  	echo $this->Html->link('Remove', array('controller' => 'Social', 
						   	 		              											'action' => 'removeWeeklyevent', 
						   	 		              											'club' => $this->request->params['club'], 
						   	 		              											'admin' => true, 
												  											'id' => $weekEvent['WeeklyCricketEvent']['id']),
						   	 		              									array('class' => 'label label-info'));
												echo "</td>";
							      	 		echo "</tr>";
								     endforeach;
								     ?>
							      </tbody>
							    </table>
							</div>

						<?php 
					  	echo $this->Html->link('Add Weekly Cricket Event', array('controller' => 'Social', 
	   	 		              											'action' => 'addWeeklyevent', 
	   	 		              											'club' => $this->request->params['club'], 
	   	 		              											'admin' => true),
	   	 		              									array('class' => 'btn btn-primary'));
						?>
							
						  <br/><br/>	
				  </div>
			    </div>
		  	</div>
			<!-- /WEEKLY CRICKET EVENTS -->
				  
			<!-- AWARD EVENINGS -->
			<div class="accordion-group">
			    <div class="accordion-heading">
			      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
			        Award Evenings
			      </a>
			    </div>
			    <div id="collapseFour" class="accordion-body collapse">
			    	<div class="accordion-inner">
							<div class="well">
					    		<table class="table">
							    	<thead>
							        	<tr>
							          		<th>Event Name</th>
							          		<th>Information</th>
							          		<th>Date</th>
							          		<th></th>
							          		<th></th>
							        	</tr>
							      	</thead>
							      	<tbody>
								    	<?php 
								      	foreach($awardInfo as $award):
								      	 	echo "<tr>";
								      	 		echo "<td>";
								      	 			echo $award['Award']['name'];
								      	 		echo "</td>";	
								      	 		echo "<td>";
								      	 			echo $award['Award']['info'];
								      	 		echo "</td>";	
							      	 			echo "<td>";
								      	 			echo $award['Award']['date'];
								      	 		echo "</td>";	
							      	 		echo "<td>";
												echo $this->Html->link('Edit',array('controller' => 'Social', 
					   	 		              											'action' => 'editAwardeve', 
					   	 		              											'club' => $this->request->params['club'], 
					   	 		              											'admin' => true,
					   	 		              											'id' => $award['Award']['id']),
																				array('class' => 'label label-info'));
											echo "</td>";
											echo "<td>";
											  	echo $this->Html->link('Remove', array('controller' => 'Social', 
					   	 		              											'action' => 'removeAwardeve', 
					   	 		              											'club' => $this->request->params['club'], 
					   	 		              											'admin' => true, 
											  											'id' => $award['Award']['id']),
					   	 		              									array('class' => 'label label-info'));
											echo "</td>";
										echo "</tr>";
								     endforeach;
								     ?>
							      </tbody>
							    </table>
							</div>

						<?php 
						  	echo $this->Html->link('Add Award Evenings', array('controller' => 'Social', 
   	 		              											'action' => 'addAwardeve', 
   	 		              											'club' => $this->request->params['club'], 
   	 		              											'admin' => true),
   	 		              									array('class' => 'btn btn-primary'));
							?>
							
						  <br/><br/>	
			      	</div>
			    </div>
			</div>
			<!-- /AWARD EVENINGS -->	  
		</div><!-- /ACCORDION -->
		<!-- COLLAPSIBLE MENU ENDS -->

		<script type="text/javascript">
		$(".collapse").collapse();
		</script>
	</div><!-- SPAN12  -->
</div><!-- /ROW FLUID -->
