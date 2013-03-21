<div class="row-fluid">
	<div class="span12 well">
		<h4>Add Policy</h4>
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
