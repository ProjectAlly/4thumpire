<!DOCTYPE html>
<html lang="en">
	<div class="row-fluid">
		<div class="span10 well">
		<?php 
		echo $this->Form->create('Ground',array('url' => array('controller' => 'Club',
																	'action' => 'addGround', 'admin' => 'true')));
		echo "<dl class=\"dl-horizontal\">";
				echo "<dt>";
					echo $this->Form->label('ground_name', 'Name of Ground');
				echo "</dt>";
				echo "<dd>";
					echo $this->Form->input('ground_name', array('label' => false,
																	'value' => $ground['Ground']['name']));
					echo "</dd>";
				
				echo "<dt>";
					echo $this->Form->label('ground_info', 'Information');
				echo "</dt>";
				echo "<dd>";
					echo $this->Form->textarea('ground_info', array('label' => false,
																'id' => 'aboutus', 
																'rows' => '10',
																'value' => $ground['Ground']['info']));
				echo "</dd>";
			echo "</dl>";
		?>
		</div>
	</div>
</html>