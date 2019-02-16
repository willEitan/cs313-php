<!DOCTYPE html>
<html>
<head>
	<title>Shop Art by Sarah Tenney</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="../css/shop_style.css">
	<script type="text/javascript" src="../js/shop.js"></script>
	<?php require "db_connect.php";?>
</head>
<body>
	<div include-html="../html/nav.html"></div>
	<script>includeHTML();</script><br>
	<!-- <div class="main-content"> -->
		<!-- <h3 style="padding-left: 25px;">Featuring Artwork by <a href="../php/about.php">Sarah Tenney</a></h3>
		<div id="featured-gallary"></div> -->
		<section>
			<?php 
				$query_1 = $db->query('SELECT image, image_title FROM art ORDER BY image_title');
				$query_2 = $db->query('SELECT image FROM art ORDER BY image_title');
				require "gallary.php";
			?>
		</section>
</body>
<!-- <?php
	include "footer.php";
?> -->
</html>