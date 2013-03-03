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
			      	 		echo "<td>";
							echo $this->Html->link('Edit',array('controller' => 'Policy', 
   	 		              										'action' => 'editPolicy', 
   	 		              										'club' => $this->request->params['club'], 
   	 		              										'id' => $policy['Policy']['id'],
																'admin' => true),
														  array('class' => 'label label-info'));
			      	 		echo "</td>";
							echo "<td>";
							  	echo $this->Html->link('Remove', array('controller' => 'Policy', 
	   	 		              											'action' => 'removePolicy', 
	   	 		              											'club' => $this->request->params['club'], 
	   	 		              											'admin' => true, 
							  											'id' => $policy['Policy']['id']),
	   	 		              									array('class' => 'label label-info'));
	   	 		            echo "</td>";  
			      	 	echo "</tr>";
			      	endforeach;
			      	?>
			      </tbody>
		    </table>
					<?php 
				  	echo $this->Html->link('Add New Policy', array('controller' => 'Policy', 
			   	 		              											'action' => 'addPolicy', 
			   	 		              											'club' => $this->request->params['club'], 
			   	 		              											'admin' => true),
			   	 		              									array('class' => 'btn btn-primary'));
					?>
		  <br/><br/>	
		</div>
	</div>
</body>	
</html>
