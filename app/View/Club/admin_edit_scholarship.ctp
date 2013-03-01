<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
	<div class="row-fluid">
		<div class="span12 well">
			<h4>Edit Scholarship</h4>
				<?php 
				echo $this->Form->create('EditScholarship',array('url' => array('controller' => 'Club',
																		'action' => 'editScholarship', 
																		'club' => $this->request->params['club'],
																		'id' => $this->request->params['id'],
																		'admin' => 'true')));
				echo "<dl class=\"dl-horizontal\">";
					echo "<dt>";
						echo $this->Form->label('name', 'Name');
					echo "</dt>";
					echo "<dd>";
						echo $this->Form->input('name', array('label' => false,
																		'value' => $scholarship['Scholarship']['name']));
						echo "</dd>";
					
					echo "<dt>";
						echo $this->Form->label('info', 'Information');
					echo "</dt>";
					echo "<dd>";
						echo $this->Form->textarea('info', array('label' => false,
																'rows' => '10',
																'value' => $scholarship['Scholarship']['information']));
					echo "</dd>";
				echo "</dl>";
				echo $this->Form->submit('Save Changes',array('class' => 'btn'));
				echo $this->Form->end();
				?>
		</div>
	</div>
</body>	
</html>
