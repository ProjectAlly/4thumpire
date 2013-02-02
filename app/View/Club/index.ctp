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
						<?php print_r($groundInfo); ?>
					</div>
					<div id="tab2" class="tab-pane">
					    <h4>Committee</h4>
						<?php print_r($committeeInfo); ?>
					</div>
					<div id="tab3" class="tab-pane">
					     <h4>Subscriptions</h4>
						<?php print_r($subscriptionInfo); ?>
					</div>
					<div id="tab4" class="tab-pane">
					      <h4>Club Marks</h4>
						<?php print_r($marksInfo); ?>
					</div>
					<div id="tab5" class="tab-pane">
					      <h4>Scholarships</h4>
						<?php print_r($scholarshipInfo); ?>
					</div>
					<div id="tab6" class="tab-pane">
					      <h4>Partners</h4>
						<?php print_r($partnerInfo); ?>
					</div>
				</div><!-- /.tab-content -->
			</div><!-- /.tabbable -->
	</div>
</html>