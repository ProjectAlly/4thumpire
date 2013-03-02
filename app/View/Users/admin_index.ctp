<div class="row-fluid">
		<div class="span well">
        <h3>Administrator Login</h3>
				  	<?php 
				echo $this->Form->create('User',array('class' => 'form-horizontal',
											'url' => array('controller' => 'Users',
														   'action' => 'authenticate', 'club' => $this->request->params['club'])));
				echo "<div class=\"control-group\">";
					echo $this->Form->label('admin_username', 'Username', array('class' => 'control-label'));
					echo $this->Form->input('admin_username',array(
															'label' => false,
															'placeholder' => 'Username',
															'div' => array(
																'class' => 'controls'
															)	
															));
				echo "</div>";
				echo "<div class=\"control-group\">";
					echo $this->Form->label('admin_password', 'Password', array('class' => 'control-label'));
					echo $this->Form->input('admin_password',array('label' => false,
															  'placeholder' => 'Password',
															  'type' => 'password',
															  'div' => array(
																'class' => 'controls'
																)
															   ));
				echo "</div>";
				echo "<div class=\"control-group\">";
				echo "<div class=\"controls\">";
				?>
				<label class="checkbox">
				<?php 
				echo $this->Form->checkbox('remember_me',array('label' => false));
					//echo " Remember me";	
				echo "Remember Me </label>";
					echo $this->Form->submit('Log me in',array('class' => 'btn'));
					echo $this->Form->end();
				echo "</div>";
				echo "</div>";
				?>		
	</div>
</div>
