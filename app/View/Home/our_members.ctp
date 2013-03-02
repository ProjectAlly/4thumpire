<?php 
	echo $this->Html->css('news-ticker.css');
?>
	<div class="row-fluid">
		<div class="span6" style="border: 1px;">
			<h5>Club News</h5>
			<ul id="ticker">
				<li>
					News item1.
				</li>
				<li>
					News item2.
				</li>
				<li>
					News item3.
				</li>
				<li>
					News item4.
				</li>
			</ul>
		</div>
		<div class="span6">
			<h5>Club Members</h5>
			<ul>
				<li>
					Club Member1
				</li>
				<li>
					Club Member2
				</li>
				<li>
					Club Member3
				</li>
				<li>
					Club Member4
				</li>
			</ul>
		</div>
		
	</div>
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
		