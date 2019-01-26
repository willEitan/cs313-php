<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="style_03.css">
	<script type="text/javascript" src="myscript_03.js"></script>
	<title>view cart</title>
</head>
<body>
	<?php
		print_r($_SESSION['cart']);
	?>
</body>
<footer>
	&copy; 
	<?php
		$created = 2019;
		$current = date('Y');
		echo $created . (($created != $current) ? '-' . $current : '') . " Copyright";
	?>
</footer>
</html>