<!DOCTYPE html>
<html lang="en">
	<div class="row-fluid">
			<div class="tabbable">
				<ul class="nav nav-pills nav-stacked span3 well">
					<li class="active"><a href="#tab1" data-toggle="tab">Club Photos</a></li>
					<li><a href="#tab2" data-toggle="tab">Social Events</a></li>
					<li><a href="#tab3" data-toggle="tab">Awards</a></li>
					<li><a href="#tab4" data-toggle="tab">Videos</a></li>
				</ul>
				<div class="tab-content well span9">
					<div id="tab1" class="tab-pane active">
					    <h4>Club Photos</h4>
						<?php
							foreach ($clubPhotoInfo as $clubPhotos) {
								echo "<b>".$clubPhotos['ClubPhoto']['caption']."</b><br/>";
								echo $clubPhotos['ClubPhoto']['description']."<br/>";
								echo "<br/><br/>";
							}
						?>
					</div>
					<div id="tab2" class="tab-pane">
					    <h4>Social Events</h4>
						<?php
							foreach ($socialInfo as $social) {
								echo "<b>".$social['Social']['name']."</b><br/>";
								echo $social['Social']['information']."<br/>";
								echo "<br/><br/>";
							}
						
						?>
					</div>
					<div id="tab3" class="tab-pane">
					     <h4>Awards</h4>
						<?php
							foreach ($awardInfo as $photo) {
								echo "<b>".$photo['AwardPhoto']['caption']."</b><br/>";
								echo $photo['AwardPhoto']['description']."<br/>";
								echo "<br/><br/>";
							}
						
						?>
					</div>
					<div id="tab4" class="tab-pane">
					      <h4>Videos</h4>
						<?php
							foreach ($clubVideoInfo as $video) {
								echo "<b>".$video['ClubVideo']['caption']."</b><br/>";
								echo $video['ClubVideo']['description']."<br/>";
								echo "<br/><br/>";
							}
						
						?>
					</div>
				</div><!-- /.tab-content -->
			</div><!-- /.tabbable -->
	</div>
</html>