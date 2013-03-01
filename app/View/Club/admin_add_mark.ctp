<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
	<div class="row-fluid">
		<div class="span12 well">
			<h4>Add Mark</h4>
				<?php 
				echo $this->Form->create('AddMark',array('url' => array('controller' => 'Club',
																		'action' => 'addMark', 
																		'club' => $this->request->params['club'],
																		'admin' => 'true')));
				echo "<dl class=\"dl-horizontal\">";
					echo "<dt>";
						echo $this->Form->label('name', 'Award name');
					echo "</dt>";
					echo "<dd>";
						echo $this->Form->input('name', array('label' => false));
						echo "</dd>";
					
					echo "<dt>";
						echo $this->Form->label('info', 'Award Information');
					echo "</dt>";
					echo "<dd>";
						echo $this->Form->textarea('info', array('label' => false,
																'rows' => '10'));
					echo "</dd>";
				echo "</dl>";
				echo $this->Form->submit('Add Mark',array('class' => 'btn'));
				echo $this->Form->end();
				?>
		</div>
	</div>
</body>	
</html>
