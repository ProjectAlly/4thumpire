<div class="row-fluid">
	<div class="span12 well">
		<h4>Edit Committee Member</h4>
			<?php 
			echo $this->Form->create('EditCommittee',array('url' => array('controller' => 'Club',
																	'action' => 'editCommittee', 
																	'club' => $this->request->params['club'],
																	'id' => $this->request->params['id'],
																	'admin' => 'true')));
			echo "<dl class=\"dl-horizontal\">";
				echo "<dt>";
					echo $this->Form->label('name', 'Member name');
				echo "</dt>";
				echo "<dd>";
					echo $this->Form->input('name', array('label' => false,
																	'value' => $committee['Committee']['member_name']));
					echo "</dd>";
				
				echo "<dt>";
					echo $this->Form->label('info', 'Member Information');
				echo "</dt>";
				echo "<dd>";
					echo $this->Form->textarea('info', array('label' => false,
															'rows' => '10',
															'value' => $committee['Committee']['member_info']));
				echo "</dd>";
			echo "</dl>";
			echo $this->Form->submit('Save Changes',array('class' => 'btn'));
			echo $this->Form->end();
			?>
	</div>
</div>
