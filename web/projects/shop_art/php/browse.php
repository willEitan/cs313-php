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

	<div class="main-content">
		<h3 style="padding-left: 25px;">Featuring Artwork by <a href="../php/about.php">Sarah Tenney</a></h3>
		<div id="featured-gallary"></div>
		<section id="gallary">
			<?php
				foreach ($db->query('SELECT ar.pseudonym, ui.first_name, ui.last_name, at.name, a.image, a.image_title, a.rating, a.price FROM art AS a JOIN artist AS ar ON a.artist_id = ar.artist_id JOIN user_info AS ui ON ar.user_info_id = ui.user_info_id JOIN art_type AS at ON a.art_type_id = at.art_type_id') as $row)
				{
					/*if (ar.pseudonym != '') {
						$artist_name = $row['ar.pseudonym'];
					} else {
						$artist_name = $row['ui.first_name'] + ' ' + $row['ui.last_name'];
					}
					echo $artist_name .  ' ';
					echo $row['at.name'] . ' ';*/
					echo $row['a.image'] . '<br>';
				}
			?>
		</section>
	</div>
</body>
<?php
	include "footer.php";
?>
</html>