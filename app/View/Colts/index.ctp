<!DOCTYPE html>
<html lang="en">
	<div class="row-fluid">
			<div class="tabbable">
				<ul class="nav nav-pills nav-stacked span2">
					<li class="active"><a href="#tab1" data-toggle="tab">Colts</a></li>
					<li><a href="#tab2" data-toggle="tab">The Colts Chairman</a></li>
					<li><a href="#tab3" data-toggle="tab">Age Group</a></li>
					<li><a href="#tab4" data-toggle="tab">Conduct</a></li>
					<li><a href="#tab5" data-toggle="tab">Club Welfare Officer</a></li>
				</ul>
				<div class="tab-content span10">
					<div id="tab1" class="tab-pane active">
					    <h4>Colts</h4>
						<?php print_r($coltInfo); ?>
					</div>
					<div id="tab2" class="tab-pane">
					    <h4>Colts Chairman</h4>
						<?php print_r($coltInfo); ?>
					</div>
					<div id="tab3" class="tab-pane">
					     <h4>Age Group</h4>
						<?php print_r($coltInfo); ?>
					</div>
					<div id="tab4" class="tab-pane">
					      <h4>Conduct</h4>
						<?php print_r($coltInfo); ?>
					</div>
					<div id="tab5" class="tab-pane">
					      <h4>CLub Welfare Officer</h4>
						<?php print_r($coltInfo); ?>
					</div>
				</div><!-- /.tab-content -->
			</div><!-- /.tabbable -->
	</div>
</html>