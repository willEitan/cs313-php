<?php
	session_start();

	$_SESSION['cart'] = [];
	$_SESSION['artwork'] = [	'a1' => [ 	'id' => 'al',
											'value' => 'Emma',
											'src' => 'pics/emma.jpg',
											'data-price' => '$50.00',
											'data-description' => "",
											'data-quantity'	=> 0],
								'a2' => [ 	'id' => 'a2',
											'value' => 'Oil Landscape',
											'src' => 'pics/oil_landscape.jpg',
											'data-price' => '$50.00',
											'data-description' => "",
											'data-quantity'	=> 0 ],	
								'a3' => [ 	'id' => 'a3',
											'value' => 'Miss Artist',
											'src' => 'pics/sarah.jpg',
											'data-price' => '$70.00',
											'data-description' => "",
											'data-quantity' => 0 ],
								'a4' => [ 	'id' => 'a4',
											'value' => 'House in the Woods',
											'src' => 'pics/hitw.jpg',
											'data-price' => '$40.00',
											'data-description' => "",
											'data-quantity'	=> 0 ],	
								'a5' => [ 	'id' => 'a5',
											'value' => 'Unseen Protection',
											'src' => 'pics/unseen_protection.jpg',
											'data-price' => '$60.00',
											'data-description' => "",
											'data-quantity'	=> 0 ],
								'a6' => [ 	'id' => 'a6',
											'value' => 'Castle on a Hill',
											'src' => 'pics/castle.jpg',
											'data-price' => '$45.00',
											'data-description' => "",
											'data-quantity'	=> 0 ]	
	//$_SESSION['user'] = [];				
						];
	//include(add_to_cart.php);
	print_r($_SESSION['cart']);
	echo $_SESSION['test'];
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
		 					echo "<em>" . $_SESSION['artwork']['a1']['data-price'] . "</em>";
		 				?>
		 				<a href="add_to_cart.php?action=add&el=a1"><!-- <input type="button" name="Add to Cart" value="Add to Cart"/> -->Add</a>
		 			</div>
		 			<img src="<?php echo $_SESSION['artwork']['a1']['src'];?>" alt="<?php echo $_SESSION['artwork']['a1']['value'];?>" style="width:100%;">
				</div>
				<!-- a2 -->
				<div class="art-slide">
		 			<br><div class="slide-info"> 2 / 6 <br>
		 				<?php
		 					echo "<em>" . $_SESSION['artwork']['a']['data-price'] . "</em>";
		 				?>
		 				<input type="button" name="Add to Cart" value="Add to Cart" onclick="<?php $_SESSION['artwork']['a2']['data-quantity'] += 1;?>" /><br>
		 			</div>
		 			<img src="<?php echo $_SESSION['artwork']['a2']['src'];?>" alt="<?php echo $_SESSION['artwork']['a2']['value'];?>" style="width:100%;">
				</div>
				<!-- a3 -->
				<div class="art-slide">
		 			<br><div class="slide-info"> 3 / 6 <br>
		 				<?php
		 					echo "<em>" . $_SESSION['artwork']['a3']['data-price'] . "</em>";
		 				?>
		 				<input type="button" name="Add to Cart" value="Add to Cart" onclick="<?php $_SESSION['artwork']['a3']['data-quantity'] += 1;?>" /><br>
		 			</div>
		 			<img src="<?php echo $_SESSION['artwork']['a3']['src'];?>" alt="<?php echo $_SESSION['artwork']['a3']['value'];?>" style="width:100%;">
				</div>
				<!-- a4 -->
				<div class="art-slide">
		 			<br><div class="slide-info"> 4 / 6 <br>
		 				<?php
		 					echo "<em>" . $_SESSION['artwork']['a4']['data-price'] . "</em>";
		 				?>
		 				<input type="button" name="Add to Cart" value="Add to Cart" onclick="<?php $_SESSION['artwork']['a4']['data-quantity'] += 1;?>" /><br>
		 			</div>
		 			<img src="<?php echo $_SESSION['artwork']['a4']['src'];?>" alt="<?php echo $_SESSION['artwork']['a4']['value'];?>" style="width:100%;">
				</div>
				<!-- a5 -->
				<div class="art-slide">
		 			<br><div class="slide-info"> 5 / 6 <br>
		 				<?php
		 					echo "<em>" . $_SESSION['artwork']['a5']['data-price'] . "</em>";
		 				?>
		 				<input type="button" name="Add to Cart" value="Add to Cart" onclick="<?php $_SESSION['artwork']['a5']['data-quantity'] += 1;?>" /><br>
		 			</div>
		 			<img src="<?php echo $_SESSION['artwork']['a5']['src'];?>" alt="<?php echo $_SESSION['artwork']['a5']['value'];?>" style="width:100%;">
				</div>
				<!-- a6 -->
				<div class="art-slide">
		 			<br><div class="slide-info"> 6 / 6 <br>
		 				<?php
		 					echo "<em>" . $_SESSION['artwork']['a6']['data-price'] . "</em>";
		 				?>
		 				<input type="button" name="Add to Cart" value="Add to Cart" onclick="<?php $_SESSION['artwork']['a6']['data-quantity'] += 1;?>" /><br>
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
				<br><input type="submit" name="Checkout" value="Proceed to Checkout" />
			</form>
			<script type="text/javascript" src="gallary.js"></script>
		</div>
		<hr>
	</div>
	<script type="text/javascript" src="gallary.js"></script>
</body>
<footer>
	<hr>
	&copy; 
	<?php
	
		$created = 2019;
		$current = date('Y');
		echo $created . (($created != $current) ? '-' . $current : '') . " Copyright";
	?> 
</footer>
</html>