<!DOCTYPE html>
<html lang="en">
<head>
</head>
	<div class="row-fluid well">
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
</html>
