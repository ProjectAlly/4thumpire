<html>
<?php $cont = $this->request->params['controller']; 
?>
<div class="header">
	<br/>
	<h1><?php echo $club_info['Club']['club_name']; ?></h1>
	<br/>
	<div class="navbar">
		<div class="navbar-inner">
			<ul class="nav pull-right">
				<li class="<?php if($cont == 'ClubHome'){ echo "active"; }?> ">
					<?php echo $this->Html->link('Home', array('controller' => 'ClubHome', 'action' => 'index', 'club' => $this->request->params['club'])); ?>
				</li>
				<li class="divider-vertical"></li>
				<li class="<?php if($cont == 'AboutUs'){ echo "active"; }?> ">
					<?php echo $this->Html->link('About Us', array( 'controller' => 'AboutUs', 'action' => 'index',  'club' => $this->request->params['club'])); ?>
				</li>
				<li class="divider-vertical"></li>
				<li class="<?php if($cont == 'Club'){ echo "active"; }?> ">
					<?php echo $this->Html->link('Club', array('controller' => 'Club', 'action' => 'index', 'club' => $this->request->params['club'])); ?>
				</li>
				<li class="divider-vertical"></li>
				<li class="<?php if($cont == 'History'){ echo "active"; }?> ">
					<?php echo $this->Html->link('History', array('controller' => 'History', 'action' => 'index', 'club' => $this->request->params['club'])); ?>
				</li>
				<li class="divider-vertical"></li>
				<li class="<?php if($cont == 'Policy'){ echo "active"; }?> ">
					<?php echo $this->Html->link('Policies', array('controller' => 'Policy', 'action' => 'index', 'club' => $this->request->params['club'])); ?>
				</li>
				<li class="divider-vertical"></li>
				<li class="<?php if($cont == 'Team'){ echo "active"; }?> ">
					<?php echo $this->Html->link('Team', array('controller' => 'Team', 'action' => 'index', 'club' => $this->request->params['club'])); ?>
				</li>  				
				<li class="divider-vertical"></li>	
				<li class="<?php if($cont == 'Social'){ echo "active"; }?> ">
					<?php echo $this->Html->link('Social', array('controller' => 'Social', 'action' => 'index', 'club' => $this->request->params['club'])); ?>
				</li>
				<li class="divider-vertical"></li>
				<li class="<?php if($cont == 'Colts'){ echo "active"; }?> ">
					<?php echo $this->Html->link('Colts', array('controller' => 'Colts', 'action' => 'index', 'club' => $this->request->params['club'])); ?>
				</li>
				<li class="divider-vertical"></li>
				<li class="<?php if($cont == 'Sponsors'){ echo "active"; }?> ">
					<?php echo $this->Html->link('Sponsors', array('controller' => 'Sponsors', 'action' => 'index', 'club' => $this->request->params['club'])); ?>
				</li>
				<li class="divider-vertical"></li>
				<li class="<?php if($cont == 'News'){ echo "active"; }?> ">
					<?php echo $this->Html->link('News', array('controller' => 'News', 'action' => 'index', 'club' => $this->request->params['club'])); ?>
				</li>
				<li class="divider-vertical"></li>
				<li class="<?php if($cont == 'Gallery'){ echo "active"; }?> ">
					<?php echo $this->Html->link('Gallery', array('controller' => 'Gallery', 'action' => 'index', 'club' => $this->request->params['club'])); ?>
				</li>
				<li class="divider-vertical"></li>
				<li class="<?php if($cont == 'ContactUs'){ echo "active"; }?> ">
					<?php echo $this->Html->link('Contact Us', array('controller' => 'ContactUs', 'action' => 'index', 'club' => $this->request->params['club'])); ?>
				</li>
				<li class="divider-vertical"></li>
			</ul>
		</div>
	</div>
</div>
</html>