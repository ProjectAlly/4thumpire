	<?php
		//BOOTSTRAP WIZARD CSS 
		echo $this->Html->css('bootstrap.min.css');
		echo $this->Html->css('bwizard/bwizard.min.css');
		echo $this->Html->css('bwizard/bwizard.css');
	?>
   	<div class="container">
		<h4>Create 4<sup>th</sup> Umpire Account</h4>
		<div id="wizard">
			<ol>
				<li>Personal Details</li>
				<li>Club Details</li>
				<li>Confirmation</li>
			</ol>
			<div>
				<?php 
						echo $this->Form->create('Register', array ('class' => 'form-horizontal',
															'url' => array('controller' => 'Home', 'action' => 'registerUser')));
						echo "<div class=\"control-group\">";
						echo $this->Form->label('fname', 'First name *', array('class' => 'control-label'));
						echo $this->Form->input('fname',array('label' => false,
																   'div' => array('class' => 'controls')
																   ));
						echo "</div>";
						echo "<div class=\"control-group\">";
						echo $this->Form->label('surname', 'Surname *', array('class' => 'control-label'));
						echo $this->Form->input('surname', array('label' => false,
																	'div' => array('class' => 'controls')
																   ));
						echo "</div>";
						echo "<div class=\"control-group\">";
						echo $this->Form->label('gender', 'Gender *', array('class' => 'control-label'));
						echo $this->Form->input('gender', array('label' => false,
																	'options' => array('M' => 'Male', 'F' =>'Female'),
																   'div' => array('class' => 'controls')
																   ));
						echo "</div>";
						echo "<div class=\"control-group\">";
						echo $this->Form->label('clubPos', 'Club Position *', array('class' => 'control-label'));
						echo $this->Form->input('clubPos',array('label' => false,
																   'div' => array('class' => 'controls')
																   ));
						echo "</div>";
						echo "<div class=\"control-group\">";
						echo $this->Form->label('address', 'Address *', array('class' => 'control-label'));
						echo $this->Form->input('address',array('label' => false,
																	'type' => 'textarea',
																	'rows' => 3,
																   'div' => array('class' => 'controls')
																   ));
						echo "</div>";
						echo "<div class=\"control-group\">";
						echo $this->Form->label('city', 'Town/City *', array('class' => 'control-label'));
						echo $this->Form->input('city',array('label' => false,
																   'div' => array('class' => 'controls')
																   ));
						echo "</div>";
						echo "<div class=\"control-group\">";
						echo $this->Form->label('country', 'Country *', array('class' => 'control-label'));
						echo $this->Form->input('country',array('label' => false,
																   'div' => array('class' => 'controls')
																   ));
						echo "</div>";
						echo "<div class=\"control-group\">";
						echo $this->Form->label('lPhone', 'Landline phone ', array('class' => 'control-label'));
						echo $this->Form->input('lPhone',array('label' => false,
																   'div' => array('class' => 'controls')
																   ));
						echo "</div>";
						echo "<div class=\"control-group\">";
						echo $this->Form->label('mPhone', 'Mobile phone *', array('class' => 'control-label'));
						echo $this->Form->input('mPhone',array('label' => false,
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
						echo $this->Form->label('inputPassword', 'Password *', array('class' => 'control-label'));
						echo $this->Form->input('inputPassword',array('label' => false,
																	'type' => 'password',
																   'div' => array('class' => 'controls')
																   ));
						echo "</div>";
						echo $this->Form->submit('Save and click Next',array('class' => 'btn span3 offset10'));
						echo $this->Form->end();
						
						
				?>
			</div>
			<div>
				<?php 
						echo $this->Form->create('Register', array ('class' => 'form-horizontal',
															'url' => array('controller' => 'Home',
																			'action' => 'registerUser_form2')));
						echo "<div class=\"control-group\">";
						echo $this->Form->label('clubName', 'Club name *', array('class' => 'control-label'));
						echo $this->Form->input('clubName',array('label' => false,
																   'div' => array('class' => 'controls')
																   ));
						echo "</div>";
						echo "<div class=\"control-group\">";
						echo $this->Form->label('leagueName', 'League name *', array('class' => 'control-label'));
						echo $this->Form->input('leagueName',array('label' => false,
																   'div' => array('class' => 'controls')
																   ));
						echo "</div>";
						echo "<div class=\"control-group\">";
						echo $this->Form->label('clubCountry', 'Country *', array('class' => 'control-label'));
						echo $this->Form->input('clubCountry',array('label' => false,
																   'div' => array('class' => 'controls')
																   ));
						echo "</div>";
						echo "<div class=\"control-group\">";
						echo $this->Form->label('clubAge', 'Club age *', array('class' => 'control-label'));
						echo $this->Form->input('clubAge', array('label' => false,
																	'options' => array('Under 18s', 'Over 18s', 'All ages'),
																   'div' => array('class' => 'controls')
																   ));
						echo "</div>";
						echo "<div class=\"control-group\">";
						echo $this->Form->label('clubGender', 'Club Gender *', array('class' => 'control-label'));
						echo $this->Form->input('clubGender', array('label' => false,
																	'options' => array('Male', 'Female', 'Mixed'),
																   'div' => array('class' => 'controls')
																   ));
						echo "</div>";
						echo $this->Form->submit('Sign Up',array('class' => 'btn span2 offset10'));
						echo $this->Form->end();
						?>
			</div>
			<div>
					CONFIRMATION..

			</div>
		</div>
	</div>

<?php 
	//BOOTSTRAP WIZARD SCRIPTS
	echo $this->Html->script('bwizard/jquery.min.js');
	echo $this->Html->script('bwizard/bwizard.min.js'); 
?>
<script type="text/javascript">
	$("#wizard").bwizard();
	$("#wizard").bwizard({ show: function (click, ui) {
			
		 } });
</script>
