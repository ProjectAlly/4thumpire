<!DOCTYPE html>
<html lang="en">
<head>
<?php 
	//JS FOR CAROUSEL
	echo $this->Html->script('vendor/src/bootstrap-carousel.js');
	//CSS FOR NEWS TICKER
	echo $this->Html->css('news-ticker.css');
?>
</head>
	<div class="row-fluid">
		<div class="span12">
			<!--  
			<div id="myCarousel" class="carousel slide">-->
			  <!-- Carousel items -->
			  <!--  
			  <div class="carousel-inner">
			    <div class="active item"><img alt="xyz" src="img/india.jpg"></div>
			    <div class="item"><img alt="xyz" src="img/aus.jpg"></div>
			    <div class="item"><img alt="xyz" src="img/west.jpg"></div>
			  </div>-->
			  <!-- Carousel nav -->
			  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
			  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
			</div>
			
			<!-- CAROUSEL ENDS -->	

		</div>
		<script type="text/javascript">
		
			//INTIALIZING SCRIPT FOR CAROUSEL
			
			$(document).ready(function(){
			    $('.carousel').carousel();
			  });
		</script>
	</div>

	<div class="row-fluid">
		<div class="span4 well">
			<h4>News and Updates</h4>
				<ul id="ticker">
					<?php echo $this->element('news_ticker', array('temp' => $temp_news_updates, 'model' => 'NewsAndUpdates')); ?>
				</ul>
		</div>
		<div class="span4 well">
			<h4>Clubs Update</h4>
				<ul id="ticker1">
					<?php echo $this->element('news_ticker', array('temp' => $temp_club_updates, 'model' => 'ClubUpdates')); ?>
				</ul>
		</div>
		<div class="span4 well">
			<h4>Sponsors</h4>
				<p>
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
				Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis 
				parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, 
				pretium quis, sem. Nulla consequat massa quis enim. 
				</p>
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
</script>
		