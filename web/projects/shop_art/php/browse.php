<?php
	session_start();
?>
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
		<h3 style="padding-left: 25px;">Featuring Artwork by <a href="../php/about.php">Sarah Tenney</a></h3>
		<div id="featured-gallary"></div>
		<section>.
			<!--gallary content-->
			<div class='content'>
				<?php
					$q1 = $db->query('SELECT image, image_title FROM art ORDER BY image_title');
					
					$i = 1;
					foreach ($q1 as $row)
					{
						echo "<div class='image-wrapper'><img src='{$row['image']}' alt='{$row['image_title']}'width='600px' height='400px' style='display:block;' onclick='openModal(); currentSlide({$i});'>";
						echo "<div class='desc'><p>{$row['image_title']}</p></div></div>";			
						$i += 1;
					}
				?>
			</div>

			<!-- modal content -->
			<div id='myModal' class='modal'>
				<span class='close cursor' onclick='closeModal()'>&times;</span>
				<div class='modal-content'>
					<?php
						$q2 = $db->query('SELECT image FROM art ORDER BY image_title');
						foreach ($q2 as $row) {
							//hidden slides
							echo "<div class='mySlides'><img src='{$row['image']}' width='100%'></div>";
						}
					?>
				</div>
				<a class='prev' onclick='plusSlides(-1)'>&#10094;</a>
				<a class='next' onclick='plusSlides(1)'>&#10095;</a>
			</div>

			<!-- sidebar content -->
			<div id='mySidebar' class='sidebar'>
				<p class="art-integrals" id="title"></p>
				<p class="art-integrals" id="type"></p>
				<p class="art-integrals" id="artist"></p>
				<p class="art-integrals" id="price"></p>
				<p class="art-integrals" id="dprice"></p>
				Purchase quantity: <br><input id="quantity" type="text" value="1" name="">
				<button onclick="addtocart();" id="addtocart" value="Add to Cart" name="Add to Cart">Add to Cart</button>
			</div>

		</section>
		<script type="text/javascript" src="../js/gallary.js"></script>
</body><br><br><br>
<?php
	include "footer.php";
?>
</html>