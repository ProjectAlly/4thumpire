<!DOCTYPE html>
<html lang="en">
	<div class="row-fluid">
			<div class="tabbable">
				<ul class="nav nav-pills nav-stacked span2">
					<li class="active"><a href="#tab1" data-toggle="tab">Grounds</a></li>
					<li><a href="#tab2" data-toggle="tab">Committee</a></li>
					<li><a href="#tab3" data-toggle="tab">Subscriptions</a></li>
					<li><a href="#tab4" data-toggle="tab">Club Marks</a></li>
					<li><a href="#tab5" data-toggle="tab">Scholarships</a></li>
					<li><a href="#tab6" data-toggle="tab">Partners</a></li>
				</ul>
				<div class="tab-content span10">
					<div id="tab1" class="tab-pane active">
					    <h4>Grounds</h4>
						<?php
							foreach ($groundInfo as $ground) {
								echo "<b>".$ground['Ground']['name']."</b><br/>";
								echo $ground['Ground']['info']."<br/>";
								echo "<br/><br/>";
							}
						?>
					</div>
					<div id="tab2" class="tab-pane">
					    <h4>Committee</h4>
						<?php
							foreach ($committeeInfo as $com) {
								echo "<b>".$com['Committee']['member_name']."</b><br/>";
								echo "<br/><br/>";
							}
						
						?>
					</div>
					<div id="tab3" class="tab-pane">
					     <h4>Subscriptions</h4>
						<?php
							foreach ($subscriptionInfo as $sub) {
								echo "<b>".$sub['Subscription']['member_name']."</b><br/>";
								echo "<br/><br/>";
							}
						
						?>
					</div>
					<div id="tab4" class="tab-pane">
					      <h4>Club Marks</h4>
						<?php
							foreach ($marksInfo as $mark) {
								echo "<b>".$mark['Marks']['award_name']."</b><br/>";
								echo $mark['Marks']['award_info']."<br/>";
								echo "<br/><br/>";
							}
						
						?>
					</div>
					<div id="tab5" class="tab-pane">
					      <h4>Scholarships</h4>
						<?php 
							foreach ($scholarshipInfo as $sch) {
								echo "<b>".$sch['Scholarship']['name']."</b><br/>";
								echo "<br/><br/>";
							}
						
						?>
					</div>
					<div id="tab6" class="tab-pane">
					      <h4>Partners</h4>
						<?php
							foreach ($partnerInfo as $partner) {
								echo "<b>".$partner['Partner']['name']."</b><br/>";
								echo "<br/><br/>";
							}
						
						?>
					</div>
				</div><!-- /.tab-content -->
			</div><!-- /.tabbable -->
	</div>
</html>