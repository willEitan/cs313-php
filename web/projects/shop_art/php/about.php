<!DOCTYPE html>
<html lang="en">
<head>
	<title>About the Artist</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="shop_style.css">
	<script type="text/javascript" src="shop.js"></script>
	<?php require "db_connect.php";?>
</head>
<body>
	<div include-html="../html/nav.html"></div>
	<script>includeHTML();</script>

	<div class="main-content">
		<?php
			foreach ($db->query('SELECT  FROM artist') as $row) {
				//print_r($row);
			  
			}
		?>
	</div>
</body>
<?php
	include "footer.php";
?>
</html>