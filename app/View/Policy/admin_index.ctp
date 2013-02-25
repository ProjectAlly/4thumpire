<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
	<div class="row-fluid">
		<div class="span12 well">
	   		<table class="table">
		    	<thead>
		        	<tr>
		          		<th>Policy</th>
		          		<th></th>
		          		<th></th>
		        	</tr>
		      	</thead>
		      	<tbody>
			    	<?php 
			      	foreach($policyInfo as $policy):
			      	 	echo "<tr>";
			      	 		echo "<td>";
			      	 			echo $policy['Policy']['policy'];
			      	 		echo "</td>";
			      	 		?>
										      	 		<td>
							      	 		              <a href=""><i class="icon-pencil">Edit</i></a>
														</td>
														<td>
		    									          <a href=""><i class="icon-remove">Remove</i></a>
										      	 		</td>
										      	 		<?php 	
			      	 	echo "</tr>";
			      	endforeach;
			      	?>
			      </tbody>
		    </table>
			<button href="" class="btn btn-primary">Add New Policy</button>
		  <br/><br/>	
		</div>
	</div>
</body>	
</html>
