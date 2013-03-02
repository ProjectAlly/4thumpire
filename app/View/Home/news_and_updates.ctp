<?php 
	//CSS FOR NEWS TICKER
	echo $this->Html->css('news-ticker.css');
?>
	<div class="row-fluid">
		<div class="span4 well">
			<h4>International News</h4>
			<ul id="ticker">
					<?php echo $this->element('news_ticker', array('temp' => $temp_international_news, 'model' => 'InternationalNews')); ?>
			</ul>
		</div>
		<div class="span4 well">
			<h4>Club Cricket News</h4>
			<ul id="ticker1">
					<?php echo $this->element('news_ticker', array('temp' => $temp_club_updates, 'model' => 'ClubUpdate')); ?>
			</ul>
		</div>
		<div class="span4 well">
			<h4>News and Annoucement</h4>
			<ul id="ticker2">
					<?php echo $this->element('news_ticker', array('temp' => $temp_club_updates, 'model' => 'ClubUpdate')); ?>
					<?php echo $this->element('news_ticker', array('temp' => $temp_news_updates, 'model' => 'NewsAndUpdates')); ?>
			</ul>	
			<!-- NEED TO IMPLEMENT CAROUSEL -->
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
		