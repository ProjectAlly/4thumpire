<div class="row-fluid">
	<div class="span12 well">
		<h4>Edit Player</h4>
			<?php 
			echo $this->Form->create('EditOldPlayer',array('url' => array('controller' => 'History',
																	'action' => 'editOldplayer', 
																	'club' => $this->request->params['club'],
																	'id' => $this->request->params['id'],
																	'admin' => 'true')));
			echo "<dl class=\"dl-horizontal\">";
				echo "<dt>";
					echo $this->Form->label('name', 'Name');
				echo "</dt>";
				echo "<dd>";
					echo $this->Form->input('name', array('label' => false,
																	'value' => $oldPlayer['OldPlayer']['name']));
					echo "</dd>";
			echo "</dl>";
			echo $this->Form->submit('Save Changes',array('class' => 'btn'));
			echo $this->Form->end();
			?>
	</div>
</div>
