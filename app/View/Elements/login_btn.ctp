				<ul class="nav pull-right">
					<li class="dropdown">
						<a class="dropdown-toggle" href="#" data-toggle="dropdown">Sign In <strong class="caret"></strong></a>
						<div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
							<form method="post" action="login">
								<input style="margin-bottom: 15px;" type="text" placeholder="Username" id="username" name="username">
								<input style="margin-bottom: 15px;" type="password" placeholder="Password" id="password" name="password">
								<input style="float: left; margin-right: 10px;" type="checkbox" name="remember-me" id="remember-me" value="1">
								<label class="string optional" for="user_remember_me">Remember me</label>
								<input class="btn btn-primary btn-block" type="submit" id="sign-in" value="Sign In">
							</form>
						</div>
					</li>
				</ul>



<!-- Button to trigger modal -->
<!-- <a class="btn btn-primary pull-right" data-toggle="modal" href="#myModal">Login</a>
	
	<!-- Modal -->
<!-- 	<div id="myModal" class="fade hide modal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				
		<div class="modal-header">
	    	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
	    	<h3 id="myModalLabel">Login to 4<sup>th</sup> Umpire</h3>
	  	</div>
				
		<div class="modal-body">
			<blockquote><h5>Sign in with 4<sup>th</sup>Umpire Account</h5></blockquote>
				  	<?php 
				  		//MODEL NOT YET CREATED
						echo $this->Form->create(' ', array ('class' => 'form-horizontal',
															'url' => array('controller' => ' ',
																			'action' => ' ')));
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
						echo $this->Form->submit('Login',array('class' => 'btn'));
						echo $this->Form->end();
					?>
		  </div>
		
		  <div class="modal-footer">
		    Noy yet a member? 
		    <?php echo $this->Html->link('Register', array('controller' => 'Home', 'action' => 'signUp'), array('class' => 'btn btn-primary'));?>
		  </div>
	</div>
	
-->

