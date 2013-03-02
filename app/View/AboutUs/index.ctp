<div class="row-fluid">
	<div class="well span12">
		<h4><?php echo $club_info['Club']['about_us_title']; ?></h4>
		<?php echo $club_info['Club']['about_us']?>
	</div>
</div>
<?php 
echo $this->Time->format('F jS, Y h:i A', '', null,'' );
?>