<div class="row-fluid">
	<div class="span12 well">
		<h4>Add Player</h4>
			<?php 
			echo $this->Form->create('AddOldPlayer',array('url' => array('controller' => 'History',
																	'action' => 'addOldplayer', 
																	'club' => $this->request->params['club'],
																	'admin' => 'true')));
			echo "<dl class=\"dl-horizontal\">";
				echo "<dt>";
					echo $this->Form->label('name', 'Name');
				echo "</dt>";
				echo "<dd>";
					echo $this->Form->input('name', array('label' => false));
					echo "</dd>";
			echo "</dl>";
			echo $this->Form->submit('Add Player',array('class' => 'btn'));
			echo $this->Form->end();
			?>
	</div>
</div>
