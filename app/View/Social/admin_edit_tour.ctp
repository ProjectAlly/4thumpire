<div class="row-fluid">
	<div class="span12 well">
		<h4>Edit Tour</h4>
			<?php 
			echo $this->Form->create('EditTour',array('url' => array('controller' => 'Social',
																	'action' => 'editTour', 
																	'club' => $this->request->params['club'],
																	'id' => $this->request->params['id'],
																	'admin' => 'true')));
			echo "<dl class=\"dl-horizontal\">";

				echo "<dt>";
					echo $this->Form->label('info', 'Tour Information');
				echo "</dt>";
				echo "<dd>";
					echo $this->Form->textarea('info', array('label' => false,
															'rows' => '10',
															'value' => $tour['Tour']['information']));
				echo "</dd>";
				
				echo "<dt>";
					echo $this->Form->label('date', 'Date');
				echo "</dt>";
				echo "<dd>";
					echo $this->Form->input('date', array('label' => false, 
															'value' => $tour['Tour']['date']));
				echo "</dd>";
				
			echo "</dl>";
			echo $this->Form->submit('Save Changes',array('class' => 'btn'));
			echo $this->Form->end();
			?>
	</div>
</div>
