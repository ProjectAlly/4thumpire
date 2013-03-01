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
							      	 		echo "<td>";
												echo $this->Html->link('Edit',array('controller' => 'History', 
					   	 		              											'action' => 'editHeritage', 
					   	 		              											'club' => $this->request->params['club'], 
					   	 		              											'admin' => true,
					   	 		              											'id' => $heritage['Heritage']['id']),
																			 array('class' => 'label label-info'));
											echo "</td>";
											echo "<td>";
											  	echo $this->Html->link('Remove', array('controller' => 'History', 
					   	 		              											'action' => 'removeHeritage', 
					   	 		              											'club' => $this->request->params['club'], 
					   	 		              											'admin' => true, 
											  											'id' => $heritage['Heritage']['id']),
					   	 		              									array('class' => 'label label-info'));
											echo "</td>";
							      	 	echo "</tr>";
							      	endforeach;
							      	?>
						      </tbody>
						    </table>
						</div> <!-- /WELL -->
	
						<?php 
					  	echo $this->Html->link('Add Heritage', array('controller' => 'History', 
   	 		              											'action' => 'addHeritage', 
   	 		              											'club' => $this->request->params['club'], 
   	 		              											'admin' => true),
   	 		              									array('class' => 'btn btn-primary'));
						?>
								
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
							      	 		echo "<td>";
												echo $this->Html->link('Edit',array('controller' => 'History', 
					   	 		              											'action' => 'editHonour', 
					   	 		              											'club' => $this->request->params['club'], 
					   	 		              											'admin' => true,
					   	 		              											'id' => $honour['Honour']['id']),
																				array('class' => 'label label-info'));
											echo "</td>";
											echo "<td>";
											  	echo $this->Html->link('Remove', array('controller' => 'History', 
					   	 		              											'action' => 'removeHonour', 
					   	 		              											'club' => $this->request->params['club'], 
					   	 		              											'admin' => true, 
											  											'id' => $honour['Honour']['id']),
					   	 		              									array('class' => 'label label-info'));
											echo "</td>";
							      	 	echo "</tr>";
							      	endforeach;
							      	?>
						      </tbody>
						    </table>
						</div>

						<?php 
					  	echo $this->Html->link('Add Honour', array('controller' => 'History', 
   	 		              											'action' => 'addHonour', 
   	 		              											'club' => $this->request->params['club'], 
   	 		              											'admin' => true),
   	 		              									array('class' => 'btn btn-primary'));
						?>
						
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
							      	 		echo "<td>";
												echo $this->Html->link('Edit',array('controller' => 'History', 
					   	 		              											'action' => 'editOldplayer', 
					   	 		              											'club' => $this->request->params['club'], 
					   	 		              											'admin' => true,
					   	 		              											'id' => $oldPlayer['OldPlayer']['id']),
																				array('class' => 'label label-info'));
											echo "</td>";
											echo "<td>";
											  	echo $this->Html->link('Remove', array('controller' => 'History', 
					   	 		              											'action' => 'removeOldplayer', 
					   	 		              											'club' => $this->request->params['club'], 
					   	 		              											'admin' => true, 
											  											'id' => $oldPlayer['OldPlayer']['id']),
					   	 		              									array('class' => 'label label-info'));
											echo "</td>";
							      	 	echo "</tr>";
								     endforeach;
								     ?>
							      </tbody>
							    </table>
							</div>

						<?php 
					  	echo $this->Html->link('Add Old Player', array('controller' => 'History', 
	   	 		              											'action' => 'addOldplayer', 
	   	 		              											'club' => $this->request->params['club'], 
	   	 		              											'admin' => true),
	   	 		              									array('class' => 'btn btn-primary'));
						?>
							
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
							      	 		echo "<td>";
												echo $this->Html->link('Edit',array('controller' => 'History', 
					   	 		              											'action' => 'editTitle', 
					   	 		              											'club' => $this->request->params['club'], 
					   	 		              											'admin' => true,
					   	 		              											'id' => $title['Title']['id']),
																				array('class' => 'label label-info'));
											echo "</td>";
											echo "<td>";
											  	echo $this->Html->link('Remove', array('controller' => 'History', 
					   	 		              											'action' => 'removeTitle', 
					   	 		              											'club' => $this->request->params['club'], 
					   	 		              											'admin' => true, 
											  											'id' => $title['Title']['id']),
					   	 		              									array('class' => 'label label-info'));
											echo "</td>";
										echo "</tr>";
								     endforeach;
								     ?>
							      </tbody>
							    </table>
							</div>

						<?php 
						  	echo $this->Html->link('Add Title', array('controller' => 'History', 
   	 		              											'action' => 'addTitle', 
   	 		              											'club' => $this->request->params['club'], 
   	 		              											'admin' => true),
   	 		              									array('class' => 'btn btn-primary'));
							?>
							
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
