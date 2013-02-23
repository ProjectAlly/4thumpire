<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
	<div class="row-fluid">
		<div class="span12 well">
			<div class="accordion" id="accordion2">
				<div class="accordion-group">
			  	<!-- GROUNDS -->
			    	<div class="accordion-heading">
			      		<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
						Grounds
			      		</a>
			    	</div>
			    	<div id="collapseOne" class="accordion-body collapse in">
			      		<div class="accordion-inner">
							<?php 
								echo $this->Form->create('Ground',array('url' => array('controller' => 'Club',
																						'action' => 'editGround', 'admin' => 'true')));
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
								echo $this->Form->submit('Save Changes',array('class' => 'btn'));
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
							          		<th style="width: 150px;">Member Name</th>
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
								      	 		?>
								      	 		<td>
					      	 		              <a href=""><i class="icon-pencil">Edit</i></a>
												</td>
												<td>
    									          <a href=""><i class="icon-remove">Remove</i></a>
								      	 		</td>
								      	 		<?php 	
								      	 	echo "</tr>";
								      	endforeach;
								      	?>
							      </tbody>
							    </table>
							</div>

							<button href="" class="btn btn-primary">Add New Committee Member</button>
							
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
								      	 		?>
								      	 		<td>
					      	 		              <a href=""><i class="icon-pencil">Edit</i></a>
												</td>
												<td>
    									          <a href=""><i class="icon-remove">Remove</i></a>
								      	 		</td>
								      	 		<?php 	
								      	 	echo "</tr>";
								      	endforeach;
								      	?>
							      </tbody>
							    </table>
							</div>

							<button href="" class="btn btn-primary">Add New Subscriptions</button>
							
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
								      	 		?>
								      	 		<td>
					      	 		              <a href=""><i class="icon-pencil">Edit</i></a>
												</td>
												<td>
    									          <a href=""><i class="icon-remove">Remove</i></a>
								      	 		</td>
								      	 		<?php 	
								      	 	echo "</tr>";
								      	endforeach;
								      	?>
							      </tbody>
							    </table>
							</div>

							<button href="" class="btn btn-primary">Add New Scholarships</button>
							
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
								      	 		?>
								      	 		<td>
					      	 		              <a href="<?php ?>"><i class="icon-pencil">Edit</i></a>
												</td>
												<td>
    									          <a href=""><i class="icon-remove">Remove</i></a>
								      	 		</td>
								      	 		<?php 	
								      	 	echo "</tr>";
								      	endforeach;
								      	?>
							      </tbody>
							    </table>
							</div>

							<button href="" class="btn btn-primary">Add New Marks</button>
							
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
								      	 		?>
								      	 		<td>
					      	 		              <a href=""><i class="icon-pencil">Edit</i></a>
												</td>
												<td>
    									          <a href=""><i class="icon-remove">Remove</i></a>
								      	 		</td>
								      	 		<?php 	
								      	 	echo "</tr>";
								      	endforeach;
								      	?>
							      </tbody>
							    </table>
							</div>

							<button href="" class="btn btn-primary">Add New Partners</button>
							
						  <br/><br/>	
			      </div>
			    </div>
			  </div>
			</div>
			<!-- COLLAPSIBLE MENU ENDS -->
			<script type="text/javascript">
			$(".collapse").collapse()
			</script>
		</div>
	</div>
</body>	
</html>
