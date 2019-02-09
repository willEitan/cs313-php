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
			//require "../php/db_connect.php";
			$statement = $db->query('SELECT about_artist, picture FROM artist');
			$results = $statement->fetchAll(PDO::FETCH_ASSOC);

		  	echo "<img class = 'artist-image'src='{$results[0]['picture']}' max-width:70%; max-height:70%; margin-right: auto; margin-left:auto;><br>";
		  	echo "<p stlye='padding: 5px;'>" . $results[0]['about_artist'] . "</p><br>";
		
		?>
	</div>
</body>
<?php
	include "footer.php";
?>
</html>