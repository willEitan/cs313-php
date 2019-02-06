<!DOCTYPE html>
<html>
<head>
	<title>Shop Art by Sarah Tenney</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="shop_style.css">
	<script type="text/javascript" src="shop.js"></script>
</head>
<body>
	<?php
		include "nav.html";
		require "db_connect";
	?>
	<!-- <?php
		foreach ($db->query('SELECT  FROM art') as $row)
		{
			//print_r($row);
		  echo "<p><b>" . $row['book'] . " {$row['chapter']}:{$row['verse']} - </b> \"";
		  echo $row['content'];
		  echo '"</p>';
		}
	?> -->
</body>
<?php
	include "footer.php";
?>
</html>