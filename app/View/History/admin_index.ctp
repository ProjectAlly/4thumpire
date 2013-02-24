<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
	<div class="row-fluid">
		<div class="span12 well">
			<div class="accordion" id="accordion2">
			  	<!-- HERITAGE -->
				<div class="accordion-group">
			    	<div class="accordion-heading">
			      		<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
						Heritage
			      		</a>
			    	</div>
			    	<div id="collapseOne" class="accordion-body collapse in">
			      		<div class="accordion-inner">
							<div class="well">
					    		<table class="table">
							    	<thead>
							        	<tr>
							          		<th>Heritage Information</th>
							          		<th></th>
							          		<th></th>
							        	</tr>
							      	</thead>
							      	<tbody>
								    	<?php 
								      	foreach($heritageInfo as $heritage):
								      	 	echo "<tr>";
								      	 		echo "<td>";
								      	 			echo $heritage['Heritage']['information'];
								      	 		echo "</td>";	
								      	 		?>
								      	 		<td>
					      	 		              <a href="<?php ?>"><i class="icon-pencil">Edit</i></a>
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
							</div> <!-- /WELL -->
		
							<button href="" class="btn btn-primary">Add New Heritage</button>
									
							<br/><br/>	
					    </div>
			    	</div>
			 	</div>
			  <!-- /HERITAGE -->
					  
				<!-- HONOURS -->
				<div class="accordion-group">
					<div class="accordion-heading">
				    	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
						Honours					
				      	</a>
				    </div>
			    	<div id="collapseTwo" class="accordion-body collapse">
			      		<div class="accordion-inner">
							<div class="well">
					    		<table class="table">
							    	<thead>
							        	<tr>
							          		<th>Honour Name</th>
							          		<th></th>
							          		<th></th>
							        	</tr>
							      	</thead>
							      	<tbody>
								    	<?php 
								      	foreach($honourInfo as $honour):
								      	 	echo "<tr>";
								      	 		echo "<td>";
								      	 			echo $honour['Honour']['name'];
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
							</div>
	
							<button href="" class="btn btn-primary">Add New Honours</button>
							
						  <br/><br/>	
					
				  		</div>
			    	</div>
				</div>
				<!-- /HONOURS -->
					  
				<!-- OLD PLAYERS -->
				<div class="accordion-group">
					<div class="accordion-heading">
				      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
				        Old Players
				      </a>
				    </div>
				    <div id="collapseThree" class="accordion-body collapse">
				      <div class="accordion-inner">
								<div class="well">
						    		<table class="table">
								    	<thead>
								        	<tr>
								          		<th>Old Player Name</th>
								          		<th></th>
								          		<th></th>
								        	</tr>
								      	</thead>
								      	<tbody>
									    	<?php 
									      	foreach($oldPlayerInfo as $oldPlayer):
									      	 	echo "<tr>";
									      	 		echo "<td>";
									      	 			echo $oldPlayer['OldPlayer']['name'];
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
								</div>
	
								<button href="" class="btn btn-primary">Add Old Players</button>
								
							  <br/><br/>	
					  </div>
				    </div>
			  	</div>
				<!-- /OLD PLAYERS -->
					  
				<!-- TITLES -->
				<div class="accordion-group">
				    <div class="accordion-heading">
				      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
				        Titles (Cups)
				      </a>
				    </div>
				    <div id="collapseFour" class="accordion-body collapse">
				    	<div class="accordion-inner">
								<div class="well">
						    		<table class="table">
								    	<thead>
								        	<tr>
								          		<th>Title Name</th>
								          		<th>Information</th>
								          		<th></th>
								          		<th></th>
								        	</tr>
								      	</thead>
								      	<tbody>
									    	<?php 
									      	foreach($titleInfo as $title):
									      	 	echo "<tr>";
									      	 		echo "<td>";
									      	 			echo $title['Title']['name'];
									      	 		echo "</td>";	
									      	 		echo "<td>";
									      	 			echo $title['Title']['info'];
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
								</div>
	
								<button href="" class="btn btn-primary">Add New Titles</button>
								
							  <br/><br/>	
				      	</div>
				    </div>
				</div>
				<!-- /TITLES -->	  
			</div><!-- /ACCORDION -->
			<!-- COLLAPSIBLE MENU ENDS -->

			<script type="text/javascript">
			$(".collapse").collapse();
			</script>
		</div><!-- SPAN12  -->
	</div><!-- /ROW FLUID -->
</body>	
</html>
