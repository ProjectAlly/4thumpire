<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
	<div class="row-fluid">
		<div class="span12 well">
	   		<table class="table">
		    	<thead>
		        	<tr>
		          		<th>Policy</th>
		          		<th></th>
		          		<th></th>
		        	</tr>
		      	</thead>
		      	<tbody>
			    	<?php 
			      	foreach($policyInfo as $policy):
			      	 	echo "<tr>";
			      	 		echo "<td>";
			      	 			echo $policy['Policy']['policy'];
			      	 		echo "</td>";
			      	 		echo "<td>";
			      	 		?>
								<!-- MODAL TO ADD NEW POLICY -->
								<a href="#editPolicy" data-toggle="modal" class="label label-info">Edit</a>
								<div style="display:none;" class="modal" id="editPolicy" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								  <div class="modal-header">
								    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></button>
									    <h3 id="myModalLabel">Edit Policy</h3>
								  </div>
								  <div class="modal-body">
								  	<?php 
									echo $this->Form->create('EditPolicy',array('class' => 'form-horizontal',
																			'url' => array('controller' => 'Policy', 
						   	 		              											'action' => 'editPolicy', 
						   	 		              											'club' => $this->request->params['club'], 
						   	 		              											'admin' => true,
						   	 		              											'id' => $policy['Policy']['id'])));
	   	 		              									
									echo "<div class=\"control-group\">";
										echo $this->Form->label('policy_info', 'Policy', array('class' => 'control-label'));
											echo $this->Form->input('Policy.policy_info', array('label' => false,
																						'type' => 'textarea', 
																						'rows' => '10',
																						'value' => $policy['Policy']['policy'],
																						'div' => array(
																							'class' => 'controls'
																						)));
									echo "</div>";
									echo $this->Form->submit('Save changes',array('class' => 'btn btn-primary'));
									echo $this->Form->end();
									echo "</div>";
									echo "</div>";
									?>		
								  </div>
								</div>						
								<!-- MODAL ENDS -->							 
	   	 		            <?php   	
							echo "</td>";
							echo "<td>";
							  	echo $this->Html->link('Remove', array('controller' => 'Policy', 
	   	 		              											'action' => 'removePolicy', 
	   	 		              											'club' => $this->request->params['club'], 
	   	 		              											'admin' => true, 
							  											'id' => $policy['Policy']['id']),
	   	 		              									array('class' => 'label label-info'));
	   	 		            echo "</td>";  
			      	 	echo "</tr>";
			      	endforeach;
			      	?>
			      </tbody>
		    </table>
			<!-- MODAL TO ADD NEW POLICY -->
			<a href="#myModal" role="button" class="btn btn-primary" data-toggle="modal">Add new policy</a>
			<div style="display: none;" class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-header">
			    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></button>
				    <h3 id="myModalLabel">Add new Policy</h3>
			  </div>
			  <div class="modal-body">
			  	<?php 
				echo $this->Form->create('AddPolicy',array('class' => 'form-horizontal',
													'url' => array('controller' => 'Policy',
																		'action' => 'addPolicy', 
																		'club' => $this->request->params['club'], 
																		'admin' => 'true')));
				echo "<div class=\"control-group\">";
					echo $this->Form->label('policy_info', 'Policy', array('class' => 'control-label'));
						echo $this->Form->input('Policy.policy_info', array('label' => false,
																	'type' => 'textarea', 
																	'rows' => '10',
																	'div' => array(
																		'class' => 'controls'
																	)));
				echo "</div>";
				echo $this->Form->submit('Add Policy',array('class' => 'btn btn-primary'));
				echo $this->Form->end();
				echo "</div>";
				echo "</div>";
				?>		
			  </div>
			</div>						
			<!-- MODAL ENDS -->							 
														 
		  <br/><br/>	
		</div>
	</div>
</body>	
</html>
