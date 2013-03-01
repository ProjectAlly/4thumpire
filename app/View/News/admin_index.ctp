<div class="row-fluid">
	    <div class="span12 well">
			<div class="accordion" id="accordion2">
			  	<!-- International News -->
				<div class="accordion-group">
			    	<div class="accordion-heading">
			      		<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
						International News
			      		</a>
			    	</div>
			    	<div id="collapseOne" class="accordion-body collapse in">
			      		<div class="accordion-inner">
							<div class="well">
					    		<table class="table">
							    	<thead>
							        	<tr>
											<th>News Title</th>
											<th>Date</th>
											<th>Edit</th>
											<th>Delete</th>
										</tr>
							      	</thead>
							      	<tbody>
								    	<?php 
											foreach ($internationalInfo as $internationalInfos):
										?>
										<tr>
											<td><?php echo $internationalInfos['InternationalNews']['title']; ?></td>
											<td><?php echo $internationalInfos['InternationalNews']['date']; ?></td>
											<td>
												<?php
                                                    echo $this->Html->link('Edit',array('controller' => 'News',
                                                                                        'action' => 'editInternationalNews',
                                                                                        'club' => $this->request->params['club'],
                                                                                        'admin' => true,
                                                                                        'id' => $internationalInfos['InternationalNews']['id']),
                                                                                  array('class' => 'label label-info'));
                                                ?>
											</td>
											<td>
                                                <?php
                                                    echo $this->Html->link('Remove',array('controller' => 'News',
                                                                                        'action' => 'removeInternationalNews',
                                                                                        'club' => $this->request->params['club'],
                                                                                        'admin' => true,
                                                                                        'id' => $internationalInfos['InternationalNews']['id']),
                                                                                 array('class' => 'label label-info'));
                                                ?>
                                            </td>
										</tr>
										<?php 
											endforeach;
										?>
							      </tbody>
							    </table>
							</div> <!-- /WELL -->

                              <?php
                              echo $this->Html->link('Add International News', array('controller' => 'History',
                                                                                     'action' => 'addInternationalNews',
                                                                                     'club' => $this->request->params['club'],
                                                                                     'admin' => true),
                                                                               array('class' => 'btn btn-primary'));
                              ?>

									
							<br/><br/>	
					    </div>
			    	</div>
			 	</div>
			  <!-- /International News -->
					  
				<!-- Club Updates -->
				<div class="accordion-group">
					<div class="accordion-heading">
				    	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
						Club Updates					
				      	</a>
				    </div>
			    	<div id="collapseTwo" class="accordion-body collapse">
			      		<div class="accordion-inner">
							<div class="well">
					    		<table class="table">
							    	<thead>
							        	<tr>
							          		<th>News Title</th>
											<th>Date</th>
											<th>Edit</th>
											<th>Delete</th>
							        	</tr>
							      	</thead>
							      	<tbody>
								    	<?php 
											foreach ($clubUpdateInfo as $clubUpdateInfos):
										?>
										<tr>
											<td><?php echo $clubUpdateInfos['ClubUpdate']['title']; ?></td>
											<td><?php echo $clubUpdateInfos['ClubUpdate']['date']; ?></td>
											<td>
                                                <?php
                                                echo $this->Html->link('Edit',array('controller' => 'News',
                                                                                    'action' => 'editClubUpdates',
                                                                                    'club' => $this->request->params['club'],
                                                                                    'admin' => true,
                                                                                    'id' => $clubUpdateInfos['ClubUpdate']['id']),
                                                                              array('class' => 'label label-info'));
                                                ?>
                                            </td>
											<td>
                                                <?php
                                                    echo $this->Html->link('Remove',array('controller' => 'News',
                                                                                        'action' => 'editInternationalNews',
                                                                                        'club' => $this->request->params['club'],
                                                                                        'admin' => true,
                                                                                        'id' => $clubUpdateInfos['ClubUpdate']['id']),
                                                                                  array('class' => 'label label-info'));
                                                ?>
                                            </td>
										</tr>
										<?php 
											endforeach;
										?>
							      </tbody>
							    </table>
							</div>
                             <?php
                             echo $this->Html->link('Add Club Updates', array('controller' => 'History',
                                      'action' => 'addInternationalNews',
                                      'club' => $this->request->params['club'],
                                      'admin' => true),
                                  array('class' => 'btn btn-primary'));
                             ?>

						  <br/><br/>	
					
				  		</div>
			    	</div>
				</div>
				<!-- /Club Updates -->
					  				  
				<!-- Weekly Cricket Event -->
				<div class="accordion-group">
				    <div class="accordion-heading">
				      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
				        Weekly Cricket Event
				      </a>
				    </div>
				    <div id="collapseThree" class="accordion-body collapse">
				    	<div class="accordion-inner">
								<div class="well">
						    		<table class="table">
								    	<thead>
								        	<tr>
								          		<th>News Title</th>
												<th>Date</th>
												<th>Edit</th>
												<th>Delete</th>
								        	</tr>
								      	</thead>
								      	<tbody>
									    	<?php 
												foreach ($weekEventInfo as $weekEventInfos):
											?>
											<tr>
												<td><?php echo $weekEventInfos['WeeklyCricketEvent']['event_name']; ?></td>
												<td><?php echo $weekEventInfos['WeeklyCricketEvent']['date']; ?></td>
												<td>
                                                    <?php
                                                        echo $this->Html->link('Edit',array('controller' => 'News',
                                                                                            'action' => 'editWeeklyCricketNews',
                                                                                            'club' => $this->request->params['club'],
                                                                                            'admin' => true,
                                                                                            'id' => $weekEventInfos['WeeklyCricketEvent']['id']),
                                                                                      array('class' => 'label label-info'));
                                                    ?>
                                                </td>
												<td>
                                                    <?php
                                                        echo $this->Html->link('Remove',array('controller' => 'News',
                                                                                            'action' => 'removeWeeklyCricketNews',
                                                                                            'club' => $this->request->params['club'],
                                                                                            'admin' => true,
                                                                                            'id' => $weekEventInfos['WeeklyCricketEvent']['id']),
                                                                                       array('class' => 'label label-info'));
                                                    ?>
                                                </td>
											</tr>
											<?php 
												endforeach;
											?>
								      </tbody>
								    </table>
								</div>
                                <?php
                                    echo $this->Html->link('Add Weekly Cricket Event', array('controller' => 'History',
                                                                                            'action' => 'addWeeklyCricketNews',
                                                                                            'club' => $this->request->params['club'],
                                                                                            'admin' => true),
                                                                                       array('class' => 'btn btn-primary'));
                                ?>

							  <br/><br/>	
				      	</div>
				    </div>
				</div>
				<!-- /Weekly Cricket Event -->	  
			</div><!-- /ACCORDION -->
			<!-- COLLAPSIBLE MENU ENDS -->

			<script type="text/javascript">
			$(".collapse").collapse();
			</script>
		</div><!-- SPAN12  -->
</div><!-- /ROW FLUID -->
