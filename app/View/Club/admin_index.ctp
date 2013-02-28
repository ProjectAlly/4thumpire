<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
	<div class="row-fluid">
		<div class="span12 well">
			<div class="accordion" id="accordion2">
			  	<!-- GROUNDS -->
				<div class="accordion-group">
			    	<div class="accordion-heading">
			      		<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
						Grounds
			      		</a>
			    	</div>
			    	<div id="collapseOne" class="accordion-body collapse in">
			      		<div class="accordion-inner">
							<?php 
								echo $this->Form->create('Ground',array('url' => array('controller' => 'Club', 
						   	 		              											'action' => 'editGround', 
						   	 		              											'club' => $this->request->params['club'], 
						   	 		              											'admin' => true)));
								foreach($groundInfo as $ground){
									echo "<dl class=\"dl-horizontal\">";
										echo "<dt>";
											echo $this->Form->label('ground_name', 'Name of Ground');
										echo "</dt>";
										echo "<dd>";
											echo $this->Form->input('ground_name', array('label' => false,
																							'value' => $ground['Ground']['name']));
											echo "</dd>";
										
										echo "<dt>";
											echo $this->Form->label('ground_info', 'Information');
										echo "</dt>";
										echo "<dd>";
											echo $this->Form->textarea('ground_info', array('label' => false,
																						'id' => 'aboutus', 
																						'rows' => '10',
																						'value' => $ground['Ground']['info']));
										echo "</dd>";
									echo "</dl>";
								}
								echo $this->Form->submit('Save Changes',array('class' => 'btn btn-primary'));
								echo $this->Form->end();
							?>
					    </div>
			    	</div>
			 	</div>
			  <!-- /GROUNDS -->
			  
			  <!-- COMMITEE MEMBER -->
			  	<div class="accordion-group">
			    	<div class="accordion-heading">
			      		<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
						Committee					
			      		</a>
			    	</div>
			    	<div id="collapseTwo" class="accordion-body collapse">
			      		<div class="accordion-inner">
							<div class="well">
					    		<table class="table">
							    	<thead>
							        	<tr>
							          		<th>Member Name</th>
							          		<th>Member Information</th>
							          		<th></th>
							          		<th></th>
							        	</tr>
							      	</thead>
							      	<tbody>
								    	<?php 
								      	foreach($committeeInfo as $committee):
								      	 	echo "<tr>";
								      	 		echo "<td>";
								      	 			echo $committee['Committee']['member_name'];
								      	 		echo "</td>";	
								      	 		echo "<td>";
								      	 			echo $committee['Committee']['member_info'];
								      	 		echo "</td>";
								      	 		echo "<td>";
													echo $this->Html->link('Edit',array('controller' => 'Club', 
						   	 		              											'action' => 'editCommittee', 
						   	 		              											'club' => $this->request->params['club'], 
						   	 		              											'id' => $committee['Committee']['id'],
																							'admin' => true),
																					array('class' => 'label label-info'));
												echo "</td>";
												echo "<td>";
												  	echo $this->Html->link('Remove', array('controller' => 'Club', 
						   	 		              											'action' => 'removeCommittee', 
						   	 		              											'club' => $this->request->params['club'], 
						   	 		              											'admin' => true, 
												  											'id' => $committee['Committee']['id']),
						   	 		              									array('class' => 'label label-info'));
												echo "</td>";
								      	 	echo "</tr>";
								      	endforeach;
								      	?>
							      </tbody>
							    </table>
							</div>

							<?php 
						  	echo $this->Html->link('Add New Committee members', array('controller' => 'Club', 
					   	 		              											'action' => 'addCommittee', 
					   	 		              											'club' => $this->request->params['club'], 
					   	 		              											'admin' => true),
					   	 		              									array('class' => 'btn btn-primary'));
							?>
							
						  <br/><br/>	
					
				  		</div>
			    	</div>
				</div>
				<!-- /COMMITTEE MEMBER -->
			  
			  
			  <div class="accordion-group">
			    <div class="accordion-heading">
			      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
			        Subscriptions
			      </a>
			    </div>
			    <div id="collapseThree" class="accordion-body collapse">
			      <div class="accordion-inner">
							<div class="well">
					    		<table class="table">
							    	<thead>
							        	<tr>
							          		<th>Member Name</th>
							          		<th>Member Information</th>
							          		<th></th>
							          		<th></th>
							        	</tr>
							      	</thead>
							      	<tbody>
								    	<?php 
								      	foreach($subscriptionInfo as $subscription):
								      	 	echo "<tr>";
								      	 		echo "<td>";
								      	 			echo $subscription['Subscription']['member_name'];
								      	 		echo "</td>";	
								      	 		echo "<td>";
								      	 			echo $subscription['Subscription']['member_info'];
								      	 		echo "</td>";	
								      	 		echo "<td>";
													echo $this->Html->link('Edit',array('controller' => 'Club', 
						   	 		              											'action' => 'editSubscription', 
						   	 		              											'club' => $this->request->params['club'], 
						   	 		              											'admin' => true,
						   	 		              											'id' => $subscription['Subscription']['id']),
																					array('class' => 'label label-info'));
												echo "</td>";
												echo "<td>";
												  	echo $this->Html->link('Remove', array('controller' => 'Club', 
						   	 		              											'action' => 'removeSubscription', 
						   	 		              											'club' => $this->request->params['club'], 
						   	 		              											'admin' => true, 
												  											'id' => $subscription['Subscription']['id']),
						   	 		              									array('class' => 'label label-info'));
												echo "</td>";
								      	 	echo "</tr>";
								      	endforeach;
								      	?>
							      </tbody>
							    </table>
							</div>

							<?php 
						  	echo $this->Html->link('Add New Subscription', array('controller' => 'Club', 
				   	 		              											'action' => 'addSubscription', 
				   	 		              											'club' => $this->request->params['club'], 
				   	 		              											'admin' => true),
				   	 		              									array('class' => 'btn btn-primary'));
							?>
							
						  <br/><br/>	
				  </div>
			    </div>
			  </div>
			  <div class="accordion-group">
			    <div class="accordion-heading">
			      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
			        Scholarships
			      </a>
			    </div>
			    <div id="collapseFour" class="accordion-body collapse">
			      <div class="accordion-inner">
							<div class="well">
					    		<table class="table">
							    	<thead>
							        	<tr>
							          		<th>Scholarship</th>
							          		<th>Information</th>
							          		<th></th>
							          		<th></th>
							        	</tr>
							      	</thead>
							      	<tbody>
								    	<?php 
								      	foreach($scholarshipInfo as $scholarship):
								      	 	echo "<tr>";
								      	 		echo "<td>";
								      	 			echo $scholarship['Scholarship']['name'];
								      	 		echo "</td>";	
								      	 		echo "<td>";
								      	 			echo $scholarship['Scholarship']['information'];
								      	 		echo "</td>";	
								      	 		echo "<td>";
													echo $this->Html->link('Edit',array('controller' => 'Club', 
						   	 		              											'action' => 'editScholarship', 
						   	 		              											'club' => $this->request->params['club'], 
						   	 		              											'admin' => true,
						   	 		              											'id' => $scholarship['Scholarship']['id']),
																					array('class' => 'label label-info'));
												echo "</td>";
												echo "<td>";
												  	echo $this->Html->link('Remove', array('controller' => 'Club', 
						   	 		              											'action' => 'removeScholarship', 
						   	 		              											'club' => $this->request->params['club'], 
						   	 		              											'admin' => true, 
												  											'id' => $scholarship['Scholarship']['id']),
						   	 		              									array('class' => 'label label-info'));
												echo "</td>";
								      	 	echo "</tr>";
								      	endforeach;
								      	?>
							      </tbody>
							    </table>
							</div>

							<?php 
						  	echo $this->Html->link('Add New Scholarship', array('controller' => 'Club', 
			   	 		              											'action' => 'addScholarship', 
			   	 		              											'club' => $this->request->params['club'], 
			   	 		              											'admin' => true),
			   	 		              									array('class' => 'btn btn-primary'));
							?>
							
						  <br/><br/>	
			      </div>
			    </div>
			  </div>
			  <div class="accordion-group">
			    <div class="accordion-heading">
			      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFive">
			        Club Marks
			      </a>
			    </div>
			    <div id="collapseFive" class="accordion-body collapse">
			      <div class="accordion-inner">
							<div class="well">
					    		<table class="table">
							    	<thead>
							        	<tr>
							          		<th>Award Name</th>
							          		<th>Award Information</th>
							          		<th></th>
							          		<th></th>
							        	</tr>
							      	</thead>
							      	<tbody>
								    	<?php 
								      	foreach($marksInfo as $marks):
								      	 	echo "<tr>";
								      	 		echo "<td>";
								      	 			echo $marks['Marks']['award_name'];
								      	 		echo "</td>";	
								      	 		echo "<td>";
								      	 			echo $marks['Marks']['award_info'];
								      	 		echo "</td>";	
								      	 		echo "<td>";
													echo $this->Html->link('Edit',array('controller' => 'Club', 
						   	 		              											'action' => 'editMark', 
						   	 		              											'club' => $this->request->params['club'], 
						   	 		              											'admin' => true,
						   	 		              											'id' => $marks['Marks']['id']),
																					array('class' => 'label label-info'));
												echo "</td>";
												echo "<td>";
												  	echo $this->Html->link('Remove', array('controller' => 'Club', 
						   	 		              											'action' => 'removeMark', 
						   	 		              											'club' => $this->request->params['club'], 
						   	 		              											'admin' => true, 
												  											'id' => $marks['Marks']['id']),
						   	 		              									array('class' => 'label label-info'));
												echo "</td>";
								      	 	echo "</tr>";
								      	endforeach;
								      	?>
							      </tbody>
							    </table>
							</div>

							<?php 
						  	echo $this->Html->link('Add New Mark', array('controller' => 'Club', 
   	 		              											'action' => 'addMark', 
   	 		              											'club' => $this->request->params['club'], 
   	 		              											'admin' => true),
   	 		              									array('class' => 'btn btn-primary'));
							?>
							
						  <br/><br/>	
			      </div>
			    </div>
			  </div>
			  <div class="accordion-group">
			    <div class="accordion-heading">
			      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseSix">
			        Partners
			      </a>
			    </div>
			    <div id="collapseSix" class="accordion-body collapse">
			      <div class="accordion-inner">
							<div class="well">
					    		<table class="table">
							    	<thead>
							        	<tr>
							          		<th>Member Name</th>
							          		<th></th>
							          		<th></th>
							        	</tr>
							      	</thead>
							      	<tbody>
								    	<?php 
								      	foreach($partnerInfo as $partner):
								      	 	echo "<tr>";
								      	 		echo "<td>";
								      	 			echo $partner['Partner']['name'];
								      	 		echo "</td>";	
								      	 		echo "<td>";
													echo $this->Html->link('Edit',array('controller' => 'Club', 
						   	 		              											'action' => 'editPartner', 
						   	 		              											'club' => $this->request->params['club'], 
						   	 		              											'admin' => true,
						   	 		              											'id' => $partner['Partner']['id']),
																					array('class' => 'label label-info'));
												echo "</td>";
												echo "<td>";
												  	echo $this->Html->link('Remove', array('controller' => 'Club', 
						   	 		              											'action' => 'removePartner', 
						   	 		              											'club' => $this->request->params['club'], 
						   	 		              											'admin' => true, 
												  											'id' => $partner['Partner']['id']),
						   	 		              									array('class' => 'label label-info'));
												echo "</td>";
								      	 	echo "</tr>";
								      	endforeach;
								      	?>
							      </tbody>
							    </table>
							</div>
							<?php 
						  	echo $this->Html->link('Add New Partner', array('controller' => 'Club', 
		   	 		              											'action' => 'addPartner', 
		   	 		              											'club' => $this->request->params['club'], 
		   	 		              											'admin' => true),
		   	 		              									array('class' => 'btn btn-primary'));
							?>
						  <br/><br/>	
			      </div>
			    </div>
			  </div>
			</div>
			<!-- COLLAPSIBLE MENU ENDS -->
			<script type="text/javascript">
			$(".collapse").collapse();
			</script>
		</div>
	</div>
</body>	
</html>
