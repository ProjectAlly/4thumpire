<div class="row-fluid">
	<div class="span12 well">
		<h4>Edit Partner</h4>
			<?php 
			echo $this->Form->create('EditPartner',array('url' => array('controller' => 'Club',
																	'action' => 'editPartner', 
																	'club' => $this->request->params['club'],
																	'id' => $this->request->params['id'],
																	'admin' => 'true')));
			echo "<dl class=\"dl-horizontal\">";
				echo "<dt>";
					echo $this->Form->label('name', 'Partner name');
				echo "</dt>";
				echo "<dd>";
					echo $this->Form->input('name', array('label' => false,
																	'value' => $partner['Partner']['name']));
					echo "</dd>";
			echo "</dl>";
			echo $this->Form->submit('Save Changes',array('class' => 'btn'));
			echo $this->Form->end();
			?>
	</div>
</div>
