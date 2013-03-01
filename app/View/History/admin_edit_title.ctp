<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
	<div class="row-fluid">
		<div class="span12 well">
			<h4>Edit Title</h4>
				<?php 
				echo $this->Form->create('EditTitle',array('url' => array('controller' => 'History',
																		'action' => 'editTitle', 
																		'club' => $this->request->params['club'],
																		'id' => $this->request->params['id'],
																		'admin' => 'true')));
				echo "<dl class=\"dl-horizontal\">";
					echo "<dt>";
						echo $this->Form->label('name', 'Name');
					echo "</dt>";
					echo "<dd>";
						echo $this->Form->input('name', array('label' => false,
																		'value' => $title['Title']['name']));
						echo "</dd>";
					
					echo "<dt>";
						echo $this->Form->label('info', 'Information');
					echo "</dt>";
					echo "<dd>";
						echo $this->Form->textarea('info', array('label' => false,
																'rows' => '10',
																'value' => $title['Title']['info']));
					echo "</dd>";
				echo "</dl>";
				echo $this->Form->submit('Save Changes',array('class' => 'btn'));
				echo $this->Form->end();
				?>
		</div>
	</div>
</body>	
</html>
