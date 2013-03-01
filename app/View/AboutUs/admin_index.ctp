<div class="row-fluid">
	<div class="span12 well">
		<h4>About Us</h4>
			<?php 
			echo $this->Form->create('AboutUs',array('url' => array('controller' => 'AboutUs',
																	'action' => 'updateAboutUs', 
																	'club' => $this->request->params['club'], 
																	'admin' => 'true')));
			echo "<dl class=\"dl-horizontal\">";
				echo "<dt>";
					echo $this->Form->label('about_us_title', 'Title');
				echo "</dt>";
				echo "<dd>";
					echo $this->Form->input('about_us_title', array('label' => false,
																	'value' => $club_info['Club']['about_us_title']));
					echo "</dd>";
				
				echo "<dt>";
					echo $this->Form->label('about_us', 'About Us');
				echo "</dt>";
				echo "<dd>";
					echo $this->Form->textarea('about_us', array('label' => false,
																'id' => 'aboutus', 
																'rows' => '10',
																'value' => $club_info['Club']['about_us']));
				echo "</dd>";
			echo "</dl>";
			echo $this->Form->submit('Save Changes',array('class' => 'btn'));
			echo $this->Form->end();
			?>
	</div>
</div>
