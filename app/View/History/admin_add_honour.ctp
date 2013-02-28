<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
	<div class="row-fluid">
		<div class="span12 well">
			<h4>Add Honour</h4>
				<?php 
				echo $this->Form->create('AddHonour',array('url' => array('controller' => 'History',
																		'action' => 'addHonour', 
																		'club' => $this->request->params['club'],
																		'admin' => 'true')));
				echo "<dl class=\"dl-horizontal\">";
					echo "<dt>";
						echo $this->Form->label('name', 'Honour name');
					echo "</dt>";
					echo "<dd>";
						echo $this->Form->input('name', array('label' => false, 'type' =>'textarea'
						));
					echo "</dd>";
					
				echo "</dl>";
				echo $this->Form->submit('Add Honour',array('class' => 'btn'));
				echo $this->Form->end();
				?>
		</div>
	</div>
</body>	
</html>
