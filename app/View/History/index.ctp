<div class="row-fluid">
		<div class="tabbable">
			<ul class="nav nav-pills nav-stacked span3 well">
				<li class="active"><a href="#tab1" data-toggle="tab">Heritage</a></li>
				<li><a href="#tab2" data-toggle="tab">Honours</a></li>
				<li><a href="#tab3" data-toggle="tab">Old Players</a></li>
				<li><a href="#tab4" data-toggle="tab">Titles (Cups)</a></li>
			</ul>
			<div class="tab-content span9 well">
				<div id="tab1" class="tab-pane active">
				    <h4>Heritage</h4>
					<?php
						foreach ($heritageInfo as $heritage) {
							echo "<b>".$heritage['Heritage']['information']."</b><br/>";
							echo "<br/><br/>";
						}
					?>
				</div>
				<div id="tab2" class="tab-pane">
				    <h4>Honours</h4>
					<?php 
						foreach ($honourInfo as $honour) {
							echo "<b>".$honour['Honour']['name']."</b><br/>";
							echo "<br/><br/>";
						}
					?>
				</div>
				<div id="tab3" class="tab-pane">
				     <h4>Old Players</h4>
					<?php
						foreach ($oldPlayerInfo as $oldPlayer) {
							echo "<b>".$oldPlayer['OldPlayer']['name']."</b><br/>";
							echo "<br/><br/>";
						}
					?>
				</div>
				<div id="tab4" class="tab-pane">
				      <h4>Titles (Cups)</h4>
					<?php  
						foreach ($titleInfo as $title) {
							echo "<b>".$title['Title']['name']."</b><br/>";
							echo $title['Title']['info']."<br/>";
							echo "<br/><br/>";
						}
					?>
				</div>
			</div><!-- /.tab-content -->
		</div><!-- /.tabbable -->
</div>
