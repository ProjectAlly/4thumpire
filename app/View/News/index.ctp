<!DOCTYPE html>
<html lang="en">
<head>
</head>
	<div class="row-fluid">
	  <div class="span3 well">
	  	<h5>Important Dates and Events</h5>
			<ul id="ticker">
			<?php 
				foreach ($weekEventInfo as $new) {
				?> 
				<li style="list-style: none">
					<div class="span12">
				    <h6><?php echo $new['WeeklyCricketEvent']['event_name'] ?></h6>
						<div>
					        <span class="badge badge-success pull-right">
					        	<?php echo $new['WeeklyCricketEvent']['date']; ?>
					        </span>
					    </div> 
					</div>
			    </li>
				<?php 
				}
				?>
			</ul>
	  </div>
	  <div class="span6 well">
	  	<h5>Club News</h5>
	  	Slider to be implemented.
	  	<br/>
	  	<br/>
	  	<br/>
	  	<br/>
	  	<br/>
	  	<br/>
	  	<br/>
	  	<br/>
	  </div>
	  <div class="span3 well">
	  	<h5>Internationl Cricket News</h5>
			<ul id="ticker1">
					<?php echo $this->element('news_ticker', array('temp' => $internationalInfo, 'model' => 'InternationalNews')); ?>
			</ul>
	  </div>
	</div>
	<div class="row-fluid">
	  <div class="span3 well">
	  	<h5>Google Ads</h5>
	  	Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet 
	  	dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
	  </div>
	  
	  <div class="span3 offset6 well">
	  	<h5>Other Club News</h5>
			<ul id="ticker2">
					<?php echo $this->element('news_ticker', array('temp' => $otherClubInfo, 'model' => 'ClubUpdate')); ?>
			</ul>

	  </div>
	</div>
</html>

<script>
	function tick(){
		$('#ticker li:first').slideUp( function () { $(this).appendTo($('#ticker')).slideDown(); });
	}
	setInterval(function(){ tick () }, 3000);

	function tick1(){
		$('#ticker1 li:first').slideUp( function () { $(this).appendTo($('#ticker1')).slideDown(); });
	}
	setInterval(function(){ tick1 () }, 3000);

	function tick2(){
		$('#ticker2 li:first').slideUp( function () { $(this).appendTo($('#ticker2')).slideDown(); });
	}
	setInterval(function(){ tick2 () }, 3000);
</script>
