<html>
<style>
	.pull-right{
		float:right;
	}
</style>
<div class="header">
	<?php echo $this->element('login_btn'); ?>
			
	
	<h1>4<sup>th</sup><span style="color: #52a8ec">Umpire</span></h1>
	<ul class="nav nav-pills myselect" id="btnclass">
		<li class="pull-right">
			<?php echo $this->Html->link('Sign Up', array('controller' => 'Home', 'action' => 'signUp')); ?>
		</li>
		<li class="pull-right">
			<?php echo $this->Html->link('Contact Us', array('controller' => 'Home', 'action' => 'contactUs')); ?>
		</li>
		<li class="pull-right">
			<?php echo $this->Html->link('Blog', array('controller' => 'Home', 'action' => 'blog')); ?>
		</li>
		<li class="pull-right">
			<?php echo $this->Html->link('News and Updates', array('controller' => 'Home', 'action' => 'newsAndUpdates')); ?>
		</li>
		<li class="pull-right">
			<?php echo $this->Html->link('Products', array('controller' => 'Home', 'action' => 'products')); ?>
		</li>
		<li class="pull-right">
			<?php echo $this->Html->link('About Us', array('controller' => 'Home', 'action' => 'aboutUs')); ?>
		</li>  					
		<li class="active pull-right">
			<?php echo $this->Html->link('Home', array('controller' => 'Home', 'action' => 'index')); ?>
		</li>
	</ul>
	<hr>
</div>
</html>