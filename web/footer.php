<hr>
&copy; 
<?php

	$created = 2019;
	$current = date('Y');
	echo $created . (($created != $current) ? '-' . $current : '') . " Copyright";
?> 