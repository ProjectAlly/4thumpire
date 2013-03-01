<div class="row-fluid">
	<div class="span12 well">
		<h4>Add Partner</h4>
			<?php 
			echo $this->Form->create('AddPartner',array('url' => array('controller' => 'Club',
																	'action' => 'addPartner', 
																	'club' => $this->request->params['club'],
																	'admin' => 'true')));
			echo "<dl class=\"dl-horizontal\">";
				echo "<dt>";
					echo $this->Form->label('name', 'Partner name');
				echo "</dt>";
				echo "<dd>";
					echo $this->Form->input('name', array('label' => false));
					echo "</dd>";
			echo "</dl>";
			echo $this->Form->submit('Add Partner',array('class' => 'btn'));
			echo $this->Form->end();
			?>
	</div>
</div>
