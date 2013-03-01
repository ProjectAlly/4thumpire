<div class="row-fluid">
	<div class="span12 well">
		<h4>Add Committee Member</h4>
			<?php 
			echo $this->Form->create('AddCommittee',array('url' => array('controller' => 'Club',
																	'action' => 'addCommittee', 
																	'club' => $this->request->params['club'],
																	'admin' => 'true')));
			echo "<dl class=\"dl-horizontal\">";
				echo "<dt>";
					echo $this->Form->label('name', 'Member name');
				echo "</dt>";
				echo "<dd>";
					echo $this->Form->input('name', array('label' => false));
					echo "</dd>";
				
				echo "<dt>";
					echo $this->Form->label('info', 'Member Information');
				echo "</dt>";
				echo "<dd>";
					echo $this->Form->textarea('info', array('label' => false,
															'rows' => '10'));
				echo "</dd>";
			echo "</dl>";
			echo $this->Form->submit('Add Member',array('class' => 'btn'));
			echo $this->Form->end();
			?>
	</div>
</div>
