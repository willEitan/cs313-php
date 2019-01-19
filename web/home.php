<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ethan's CS313 Home Page</title>
	<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
	<div id="_head">
		<h1>CS Home</h1>
		<h3>By Ethan Williams</h3>
		<em>"Truth is truth! It is not divisible, and any part of it cannot be set aside." ~Russell M. Nelson</em><br><br>
	</div>
	<img src="pics/portfollio.jpg" alt="Ethan">
	<div class="about">
		<hr>
		<p class="about">   This is my cs313 home page. A bit about me: I am a senior at BYU-Idaho, going into software engineering. <em> I enjoy coding! </em> I hope to learn a lot in this course and get an A! Some of my hobbies include basketball and auto. Looking for an internship... peace out for now</p>
		<hr>
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