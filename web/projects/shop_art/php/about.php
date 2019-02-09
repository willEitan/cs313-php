<!DOCTYPE html>
<html lang="en">
<head>
	<title>About the Artist</title>
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
		<?php
			echo "hello";
			$statement = $db->query('SELECT about, picture FROM artist');
			$results = $statement->fetchAll(PDO::FETCH_ASSOC);
			print_r($results);
			print_r($statement);
		  	echo "<img class = 'artist-image'src='{$results['picture']}' width:240px; height:540px;><br>";
		  	echo $results['about'] . "<br>";
		
		?>
	</div>
</body>
<?php
	include "footer.php";
?>
</html>