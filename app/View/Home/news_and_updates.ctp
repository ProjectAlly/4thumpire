<!DOCTYPE html>
<?php 

	//CSS FOR NEWS TICKER
	echo $this->Html->css('news-ticker.css');
?>

<html lang="en">
	

	<div class="row-fluid">
		<div class="span4">
			<h5>International News</h5>
			<ul id="ticker">
					<?php echo $this->element('news_ticker', array('temp' => $temp_international_news, 'model' => 'InternationalNews')); ?>
			</ul>
		</div>
		<div class="span4">
			<h5>Club Cricket News</h5>
			<ul id="ticker1">
					<?php echo $this->element('news_ticker', array('temp' => $temp_club_updates, 'model' => 'ClubUpdates')); ?>
			</ul>
		</div>
		<div class="span4">
		<h5>News and Annoucement</h5>
		<ul id="ticker2">
					<?php echo $this->element('news_ticker', array('temp' => $temp_club_updates, 'model' => 'ClubUpdates')); ?>
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
		