<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ethan's CS313 Home Page</title>
	<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
	<h1>CS Home</h1><br>
	<h3>By Ethan Williams</h3><br>
	<em>"Truth is truth! It is not divisible, and any part of it cannot be set aside." ~Russell M. Nelson</em><br>
	<img src="pics/portfollio.jpg" alt="Ethan">
	<div class="about">
		<hr class="about">
		<p class="about">   This is my cs313 home page. A bit about my: I am awesome. I am cool. I am slick. I am a thug. I like cheesey bread.</p>
		<hr class="about">
	</div><br>
	<a href="assignments.php">View assignments page</a><br>
</body>
<footer>
	&copy; 
	<?php
		$created = 2019;
		$current = date('Y');
		echo created . (($created != current) ? '-' . $current : '') . " Copyright";
	?>
</footer>
</html>