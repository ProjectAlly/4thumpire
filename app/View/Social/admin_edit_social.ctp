<div class="row-fluid">
	<div class="span12 well">
		<h4>Edit Social</h4>
			<?php 
			echo $this->Form->create('EditSocial',array('url' => array('controller' => 'Social',
																	'action' => 'editSocial', 
																	'club' => $this->request->params['club'],
																	'id' => $this->request->params['id'],
																	'admin' => 'true')));
			echo "<dl class=\"dl-horizontal\">";

				echo "<dt>";
					echo $this->Form->label('name', 'Social Event Name');
				echo "</dt>";
				echo "<dd>";
					echo $this->Form->input('name', array('label' => false,
															'value' => $social['Social']['name']));
				echo "</dd>";
			
				echo "<dt>";
					echo $this->Form->label('info', 'Information');
				echo "</dt>";
				echo "<dd>";
					echo $this->Form->textarea('info', array('label' => false,
															'rows' => '10',
															'value' => $social['Social']['information']));
				echo "</dd>";
				
				echo "<dt>";
					echo $this->Form->label('date', 'Date');
				echo "</dt>";
				echo "<dd>";
					echo $this->Form->input('date', array('label' => false, 
															'value' => $social['Social']['date']));
				echo "</dd>";
				
			echo "</dl>";
			echo $this->Form->submit('Save Changes',array('class' => 'btn'));
			echo $this->Form->end();
			?>
	</div>
</div>
