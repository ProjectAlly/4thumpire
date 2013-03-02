<?php $act = $this->request->params['action']; ?>
<style>
	.pull-right{
		float:right;
	}
</style>
<div class="header">
	
	<h1>4<sup>th</sup><span style="color: #08C">Umpire</span></h1>
	<ul class="nav nav-pills">
		<li class="<?php if($act == 'signUp'){ echo "active"; }?> pull-right">
			<?php echo $this->Html->link('Sign Up', array('controller' => 'Home', 'action' => 'signUp')); ?>
		</li>
		<li class="<?php if($act == 'contactUs'){ echo "active"; }?> pull-right">
			<?php echo $this->Html->link('Contact Us', array('controller' => 'Home', 'action' => 'contactUs')); ?>
		</li>
		<li class="<?php if($act == 'blog'){ echo "active"; }?> pull-right">
			<?php echo $this->Html->link('Blog', array('controller' => 'Home', 'action' => 'ourBlog')); ?>
		</li>
		<li class="<?php if($act == 'newsAndUpdates'){ echo "active"; }?> pull-right">
			<?php echo $this->Html->link('News and Updates', array('controller' => 'Home', 'action' => 'newsAndUpdates')); ?>
		</li>
		<li class="<?php if($act == 'products'){ echo "active"; }?> pull-right">
			<?php echo $this->Html->link('Products', array('controller' => 'Home', 'action' => 'ourProducts')); ?>
		</li>
		<li class="<?php if($act == 'aboutUs'){ echo "active"; }?> pull-right">
			<?php echo $this->Html->link('About Us', array('controller' => 'Home', 'action' => 'aboutUs')); ?>
		</li>  					
		<li class="<?php if($act == 'index'){ echo "active"; }?> pull-right">
			<?php echo $this->Html->link('Home', array('controller' => 'Home', 'action' => 'index')); ?>
		</li>
	</ul>
	<hr>
</div>