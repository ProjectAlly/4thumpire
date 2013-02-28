<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
	<div class="row-fluid">
		<div class="span12 well">
			<h4>Edit Honour</h4>
				<?php 
				echo $this->Form->create('EditHonour',array('url' => array('controller' => 'History',
																		'action' => 'editHonour', 
																		'club' => $this->request->params['club'],
																		'id' => $this->request->params['id'],
																		'admin' => 'true')));
				echo "<dl class=\"dl-horizontal\">";
					echo "<dt>";
						echo $this->Form->label('name', 'Honour Name');
					echo "</dt>";
					echo "<dd>";
						echo $this->Form->input('name', array('label' => false,
																		'type' => 'textarea',
																		'value' => $honour['Honour']['name']));
						echo "</dd>";
				echo "</dl>";
				echo $this->Form->submit('Save Changes',array('class' => 'btn'));
				echo $this->Form->end();
				?>
		</div>
	</div>
</body>	
</html>
