<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
	<div class="row-fluid">
		<div class="span12 well">
		
		
			<h4>Welcome Message</h4>
				<?php 
				echo $this->Form->create('ClubHome',array('url' => array('controller' => 'ClubHome',
																		'action' => 'updateClubHome', 'admin' => 'true')));
				echo "<dl class=\"dl-horizontal\">";
					echo "<dt>";
						echo $this->Form->label('welcome_message', 'Message');
					echo "</dt>";
					echo "<dd>";
						echo $this->Form->textarea('welcome_message', array('label' => false,
																	'id' => 'welcome_message', 
																	'rows' => '10',
																	'value' => $club_info['Club']['club_message']));
					echo "</dd>";
				echo "</dl>";
				echo $this->Form->submit('Save Changes',array('class' => 'btn'));
				echo $this->Form->end();
				?>
		</div>
	</div>
</body>	
</html>
