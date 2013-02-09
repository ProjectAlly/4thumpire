<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
	<div class="row-fluid">
		<div class="span12 well">
			<h4>Features</h4>
			<ul class="inline">
				<li><?php echo $this->html->link('Welcome Message',array('controller' => 'ClubHome', 'action'=>'index')); ?></li>
				<li><?php echo $this->html->link('About Us',array('controller' => 'AboutUs', 'action'=>'index')); ?></li>
			</ul>
			<h4>Club Management</h4>
			<ul class="inline">
				<li><?php echo $this->html->link('Club Information',array('controller' => 'Club', 'action'=>'index')); ?></li>
				<li><?php echo $this->html->link('Club History',array('controller' => 'History', 'action'=>'index')); ?></li>
				<li><?php echo $this->html->link('Club Policies',array('controller' => 'Policy', 'action'=>'index')); ?></li>
				<li><?php echo $this->html->link('Socials',array('controller' => 'Social', 'action'=>'index')); ?></li>
				<li><?php echo $this->html->link('Colts Information',array('controller' => 'Colt', 'action'=>'index')); ?></li>
				<li><?php echo $this->html->link('Club Sponsors',array('controller' => 'Sponsor', 'action'=>'index')); ?></li>
				<li><?php echo $this->html->link('News and Updates',array('controller' => 'News', 'action'=>'index')); ?></li>
				<li><?php echo $this->html->link('Gallery',array('controller' => 'Gallery', 'action'=>'index')); ?></li>
			</ul>
			
		</div>
	</div>
</body>	
</html>
