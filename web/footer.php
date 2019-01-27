&copy; 
<?php

	$created = 2019;
	$current = date('Y');
	echo "<hr>" . $created . (($created != $current) ? '-' . $current : '') . " Copyright";
?> 