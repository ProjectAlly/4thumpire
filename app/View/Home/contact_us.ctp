<!DOCTYPE html>
<html lang="en">
	<div class="row-fluid">
		<div class="span3">
			<address>
		  		<strong>Twitter, Inc.</strong><br>
  				795 Folsom Ave, Suite 600<br>
  				San Francisco, CA 94107<br>
  				<abbr title="Phone">Phone:</abbr> (123) 456-7890
			</address>
 
			<address>
  				<strong>Hardik Shah</strong><br>
  				<a href="mailto:#">mail.hardikshah@gmail.com</a>
			</address>
		</div>
		<div class="span5 well well-small">
			<h5>Submit a Query:</h5>
			<?php 
				echo $this->Form->create('Query', array('class' => 'form-horizontal', 
														'url' => array('controller' => 'Home', 
																		'action' => 'submitQuery')));
				echo "<div class=\"control-group\">";
				echo $this->Form->label('name', 'Your name *', array('class' => 'control-label'));
				echo $this->Form->input('name',array('label' => false,
														   'div' => array('class' => 'controls')
														   ));
				echo "</div>";
				echo "<div class=\"control-group\">";
				echo $this->Form->label('contactNumber', 'Contact number *', array('class' => 'control-label'));
				echo $this->Form->input('contactNumber',array('label' => false,
														   'div' => array('class' => 'controls')
														   ));
				echo "</div>";
				echo "<div class=\"control-group\">";
				echo $this->Form->label('inputEmail', 'Email address *', array('class' => 'control-label'));
				echo $this->Form->input('inputEmail',array('label' => false,
														   'div' => array('class' => 'controls')
														   ));
				echo "</div>";
				echo "<div class=\"control-group\">";
				echo $this->Form->label('query', 'Query *', array('class' => 'control-label'));
				echo $this->Form->input('query',array('label' => false,
														'type' => 'textarea',
													    'div' => array('class' => 'controls')
														   ));
				echo "</div>";
				
				echo $this->Form->submit('Submit Query',array('class' => 'btn btn-warning span3 offset6'));
				echo $this->Form->end();
				
			?>		
		</div>
		<div class="span4">
			<h5>Locate on Map:</h5>
		
		</div>
	</div>

</html>