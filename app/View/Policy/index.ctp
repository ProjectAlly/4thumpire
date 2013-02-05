<!DOCTYPE html>
<html lang="en">
<head>
</head>
	<div class="row-fluid">
		<div class="span12 well">
			<h4>Rules and Policies of Club</h4>
			<ul>
			<?php  
				foreach ($policyInfo as $policy) {
					echo "<li><b>".$policy['Policy']['policy']."</b></li><br/>";
					echo "<br/>";
				}
			?>
			</ul>
		</div>
	</div>
</html>
