<?php
	session_start();
	require 'service.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Shop Art</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="style_03.css">
	<script type="text/javascript" src="myscript_03.js"></script>
</head>
<body>
 	<header>
		<div class="top">
			<h1>Shop Art</h1>
			<h3>By Sarah Tenney</h3>
		</div>
	</header>
	<div class="art-gallary">
		<div class="art-featured">.
			<form method="get" action="/cart.php">
				<!-- a1 -->
				<div class="art-slide">
		 			<br><div class="slide-info"> 1 / 6 <br>
		 				<?php
		 					echo "<em>$" . $_SESSION['artwork']['a1']['data-price'] . "</em>";
		 				?>
		 				<a href="service.php?action=add&el=a1"><input type="button" name="Add to Cart" value="Add to Cart"/></a>
		 			</div>
		 			<img src="<?php echo $_SESSION['artwork']['a1']['src'];?>" alt="<?php echo $_SESSION['artwork']['a1']['value'];?>" style="width:100%;">
				</div>
				<!-- a2 -->
				<div class="art-slide">
		 			<br><div class="slide-info"> 2 / 6 <br>
		 				<?php
		 					echo "<em>$" . $_SESSION['artwork']['a']['data-price'] . "</em>";
		 				?>
		 				<a href="service.php?action=add&el=a2"><input type="button" name="Add to Cart" value="Add to Cart"/></a>
		 			</div>
		 			<img src="<?php echo $_SESSION['artwork']['a2']['src'];?>" alt="<?php echo $_SESSION['artwork']['a2']['value'];?>" style="width:100%;">
				</div>
				<!-- a3 -->
				<div class="art-slide">
		 			<br><div class="slide-info"> 3 / 6 <br>
		 				<?php
		 					echo "<em>$" . $_SESSION['artwork']['a3']['data-price'] . "</em>";
		 				?>
		 				<a href="service.php?action=add&el=a3"><input type="button" name="Add to Cart" value="Add to Cart"/></a>
		 			</div>
		 			<img src="<?php echo $_SESSION['artwork']['a3']['src'];?>" alt="<?php echo $_SESSION['artwork']['a3']['value'];?>" style="width:100%;">
				</div>
				<!-- a4 -->
				<div class="art-slide">
		 			<br><div class="slide-info"> 4 / 6 <br>
		 				<?php
		 					echo "<em>$" . $_SESSION['artwork']['a4']['data-price'] . "</em>";
		 				?>
		 				<a href="service.php?action=add&el=a4"><input type="button" name="Add to Cart" value="Add to Cart"/></a>
		 			</div>
		 			<img src="<?php echo $_SESSION['artwork']['a4']['src'];?>" alt="<?php echo $_SESSION['artwork']['a4']['value'];?>" style="width:100%;">
				</div>
				<!-- a5 -->
				<div class="art-slide">
		 			<br><div class="slide-info"> 5 / 6 <br>
		 				<?php
		 					echo "<em>$" . $_SESSION['artwork']['a5']['data-price'] . "</em>";
		 				?>
		 				<a href="service.php?action=add&el=a5"><input type="button" name="Add to Cart" value="Add to Cart"/></a>
		 			</div>
		 			<img src="<?php echo $_SESSION['artwork']['a5']['src'];?>" alt="<?php echo $_SESSION['artwork']['a5']['value'];?>" style="width:100%;">
				</div>
				<!-- a6 -->
				<div class="art-slide">
		 			<br><div class="slide-info"> 6 / 6 <br>
		 				<?php
		 					echo "<em>$" . $_SESSION['artwork']['a6']['data-price'] . "</em>";
		 				?>
		 				<a href="service.php?action=add&el=a6"><input type="button" name="Add to Cart" value="Add to Cart"/></a>
		 			</div>
		 			<img src="<?php echo $_SESSION['artwork']['a6']['src'];?>" alt="<?php echo $_SESSION['artwork']['a6']['value'];?>" style="width:100%;">
				</div>

				<!-- Browse Arrows -->
				<a class="prev" onclick="plusSlides(-1);">❮</a>
				<a class="next" onclick="plusSlides(1);">❯</a>

				<!-- caption -->
				<div class="art-title">
					<p id="caption"></p>
				</div>

				<!-- Image Row -->
				<div class="row">
					<div class="col">
						<img class="mini" src="<?php echo $_SESSION['artwork']['a1']['src'];?>" alt="<?php echo $_SESSION['artwork']['a1']['value'];?>" style="width:100%; height:50px;" onclick="currentSlide(1);">
					</div>
					<div class="col">
						<img class="mini" src="<?php echo $_SESSION['artwork']['a2']['src'];?>" alt="<?php echo $_SESSION['artwork']['a2']['value'];?>" style="width:100%; height:50px;" onclick="currentSlide(2);">
					</div>
					<div class="col">
						<img class="mini" src="<?php echo $_SESSION['artwork']['a3']['src'];?>" alt="<?php echo $_SESSION['artwork']['a3']['value'];?>" style="width:100%; height:50px;" onclick="currentSlide(3);">
					</div>
					<div class="col">
						<img class="mini" src="<?php echo $_SESSION['artwork']['a4']['src'];?>" alt="<?php echo $_SESSION['artwork']['a4']['value'];?>" style="width:100%; height:50px;" onclick="currentSlide(4);">
					</div>
					<div class="col">
						<img class="mini" src="<?php echo $_SESSION['artwork']['a5']['src'];?>" alt="<?php echo $_SESSION['artwork']['a5']['value'];?>" style="width:100%; height:50px;" onclick="currentSlide(5);">
					</div>
					<div class="col">
						<img class="mini" src="<?php echo $_SESSION['artwork']['a6']['src'];?>" alt="<?php echo $_SESSION['artwork']['a6']['value'];?>" style="width:100%; height:50px;" onclick="currentSlide(6);">
					</div>
				</div>
				<br><input type="submit" name="Checkout" value="View Cart" />
			</form>
			<script type="text/javascript" src="gallary.js"></script>
		</div>
		<hr>
	</div>
	<script type="text/javascript" src="gallary.js"></script>
</body>
<footer>
	<?php
		include 'footer.php';
	?>
</footer>
</html>