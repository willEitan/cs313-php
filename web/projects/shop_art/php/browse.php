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
				$query = $db->query('SELECT ar.pseudonym, ui.first_name, ui.last_name, at.name, a.image, a.image_title, a.rating, a.price FROM art AS a JOIN artist AS ar ON a.artist_id = ar.artist_id JOIN user_info AS ui ON ar.user_info_id = ui.user_info_id JOIN art_type AS at ON a.art_type_id = at.art_type_id');

				echo "<div class='content'>";
				foreach ($query as $row)
				{
					echo "<div class='image-wrapper'><img src='{$row['image']}' alt='{$row['image_title']}'width='600px' height='400px' style='display:block;'>";
					echo "<div class='desc'>$row['image-title']</div>";
					echo "<br><p>{$row['image_title']}</p></div><div class='modal'></div>";			
				}
				echo "</div><div id='mySidebar' class='sidebar'></div>";

				echo "<div id='myModal' class='modal'><span class='close cursor' onclick='closeModal()'>&times;</span><div class='modal-content'>";
				foreach($query as $row){
					echo "<div class='mySlides'><img src='{$row['image']}' alt='{$row['image_title']}'width='100%'></div>";
				}
				echo "</div><a class='prev' onclick='plusSlides(-1)'>&#10094;</a>";
				echo "<a class='next' onclick='plusSlides(1)'>&#10095;</a></div>";
			?>
		</section>
	</div>
</body>
<?php
	include "footer.php";
?>
</html>