<div class="row-fluid">
	<div class="span12 well">
		<h4>Edit Heritage</h4>
			<?php 
			echo $this->Form->create('EditHeritage',array('url' => array('controller' => 'History',
																	'action' => 'editHeritage', 
																	'club' => $this->request->params['club'],
																	'id' => $this->request->params['id'],
																	'admin' => 'true')));
			echo "<dl class=\"dl-horizontal\">";
				
				echo "<dt>";
					echo $this->Form->label('info', 'Information');
				echo "</dt>";
				echo "<dd>";
					echo $this->Form->textarea('info', array('label' => false,
															'rows' => '10',
															'value' => $heritage['Heritage']['information']));
				echo "</dd>";
			echo "</dl>";
			echo $this->Form->submit('Save Changes',array('class' => 'btn'));
			echo $this->Form->end();
			?>
	</div>
</div>
