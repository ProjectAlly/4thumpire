<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
	<div class="row-fluid">
		<div class="span2 well">
			<h4>Welcome Message</h4>
					<?php echo $club_info['Club']['club_message']; ?>
		</div>
		<div class="span6 well">
			<h4></h4>
		</div>
		<div class="span4">
			<div class="well">
				<h4>News and Updates</h4>
				<?php 
					foreach ($clubNews as $news) {
						echo "<b>".$news['ClubNews']['title']."</b><br/>"; 
						echo $news['ClubNews']['description'];
					}
				?>				
			</div>
			<div class="well">
				<h4>Sponsors</h4>
				<?php
					foreach ($clubSponsors as $clubSponsor) {
						echo "<b>".$clubSponsor['ClubSponsor']['name']."</b><br/>";
					}
				?>
			</div>
		</div>
	</div>
</body>	
</html>
