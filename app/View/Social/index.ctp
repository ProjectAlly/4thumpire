<!DOCTYPE html>
<html lang="en">
	<div class="row-fluid">
			<div class="tabbable">
				<ul class="nav nav-pills nav-stacked span3 well">
					<li class="active"><a href="#tab1" data-toggle="tab">Socials</a></li>
					<li><a href="#tab2" data-toggle="tab">Tours</a></li>
					<li><a href="#tab3" data-toggle="tab">Cricket Weeks</a></li>
					<li><a href="#tab4" data-toggle="tab">Award Evenings</a></li>
				</ul>
				<div class="tab-content span9 well">
					<div id="tab1" class="tab-pane active">
					    <h4>Socials</h4>
						<?php
							foreach ($socialInfo as $social) {
								echo "<b>".$social['Social']['name']."</b><br/>";
								echo $social['Social']['information']."<br/>";
								echo "<span class="."label label-info".">";
								echo $social['Social']['date']."<br/>";
								echo "</span>";
								echo "<br/><br/>";
							}
						?>
					</div>
					<div id="tab2" class="tab-pane">
					    <h4>Tours</h4>
						<?php
							foreach ($tourInfo as $tour) {
								echo $tour['Tour']['information']."<br/>";
								echo "<span class="."label label-info".">";
								echo $tour['Tour']['date']."<br/>";
								echo "</span>";
								echo "<br/><br/>";
							}
						?>
					</div>
					<div id="tab3" class="tab-pane">
					     <h4>Cricket Weeks</h4>
						<?php
							foreach ($weekEventInfo as $weekEvent) {
								echo "<b>".$weekEvent['WeeklyCricketEvent']['event_name']."</b><br/>";
								echo $weekEvent['WeeklyCricketEvent']['details']."<br/>";
								echo "<span class="."label label-info".">";
								echo $weekEvent['WeeklyCricketEvent']['date']."<br/>";
								echo "</span>";
								echo "<br/><br/>";
							}
						?>
					</div>
					<div id="tab4" class="tab-pane">
					      <h4>Award Evenings</h4>
						<?php
							foreach ($awardInfo as $award) {
								echo "<b>".$award['Award']['name']."</b><br/>";
								echo $award['Award']['info']."<br/>";
								echo "<span class="."label label-info".">";
								echo $award['Award']['date']."<br/>";
								echo "</span>";
								echo "<br/><br/>";
							}
						?>
					</div>
				</div><!-- /.tab-content -->
			</div><!-- /.tabbable -->
	</div>
</html>