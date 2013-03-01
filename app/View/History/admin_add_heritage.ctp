<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
	<div class="row-fluid">
		<div class="span12 well">
			<h4>Add Heritage</h4>
				<?php 
				echo $this->Form->create('AddHeritage',array('url' => array('controller' => 'History',
																		'action' => 'addHeritage', 
																		'club' => $this->request->params['club'],
																		'admin' => 'true')));
				echo "<dl class=\"dl-horizontal\">";
					
					echo "<dt>";
						echo $this->Form->label('info', 'Information');
					echo "</dt>";
					echo "<dd>";
						echo $this->Form->textarea('info', array('label' => false,
																'rows' => '10'));
					echo "</dd>";
				echo "</dl>";
				echo $this->Form->submit('Add',array('class' => 'btn'));
				echo $this->Form->end();
				?>
		</div>
	</div>
</body>	
</html>
