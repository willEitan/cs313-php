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
	<script>includeHTML();</script>

	<div class="main-content">
		<h3>Featuring art by Sarah Tenney</h3>
		<div id="featured-gallary"></div>

		<!-- <?php
			foreach ($db->query('SELECT  FROM art') as $row)
			{
				//print_r($row);
			  echo "<p><b>" . $row['book'] . " {$row['chapter']}:{$row['verse']} - </b> \"";
			  echo $row['content'];
			  echo '"</p>';
			}
		?> -->
	</div>
</body>
<?php
	include "footer.php";
?>
</html>