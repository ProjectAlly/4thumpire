<div class="row-fluid">
	<div class="span12 well">
		<h4>Edit Weekly Event</h4>
			<?php 
			echo $this->Form->create('EditWeeklyevent',array('url' => array('controller' => 'Social',
																	'action' => 'editWeeklyevent', 
																	'club' => $this->request->params['club'],
																	'id' => $this->request->params['id'],
																	'admin' => 'true')));
			echo "<dl class=\"dl-horizontal\">";

				echo "<dt>";
					echo $this->Form->label('name', 'Weeklyevent Event Name');
				echo "</dt>";
				echo "<dd>";
					echo $this->Form->input('name', array('label' => false,
															'value' => $weekly_event['WeeklyCricketEvent']['event_name']));
				echo "</dd>";
			
				echo "<dt>";
					echo $this->Form->label('info', 'Information');
				echo "</dt>";
				echo "<dd>";
					echo $this->Form->textarea('info', array('label' => false,
															'rows' => '10',
															'value' => $weekly_event['WeeklyCricketEvent']['details']));
				echo "</dd>";
				
				echo "<dt>";
					echo $this->Form->label('date', 'Date');
				echo "</dt>";
				echo "<dd>";
					echo $this->Form->input('date', array('label' => false, 
															'value' => $weekly_event['WeeklyCricketEvent']['date']));
				echo "</dd>";
				
			echo "</dl>";
			echo $this->Form->submit('Save Changes',array('class' => 'btn'));
			echo $this->Form->end();
			?>
	</div>
</div>
