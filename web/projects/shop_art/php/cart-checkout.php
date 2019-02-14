<?php
	session_start();
	foreach($_SESSION["cart"] as $c) {
		print_r($c);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Art Cart</title>
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

	<div class="main-content">

	</div>
</body>
<?php
	include "footer.php";
?>
</html>