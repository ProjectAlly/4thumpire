<?php
	foreach ($temp as $new) {
	?> 
	<li style="list-style: none">
		<div class="span12">
	    <h6><?php echo $new[$model]['title'] ?></h6>
		<div>
	        <span class="badge badge-success pull-right">
	        	Posted on <?php echo $new[$model]['date']; ?>
	        </span>
	    </div> 
    </div>
    </li>
	<?php 
	}
	?> 
