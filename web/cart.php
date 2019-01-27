<?php
	session_start();
	include(browse.php);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="style_03.css">
	<script src="http://code.jquery.com/jquery-3.3.1.js"
  			integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  			crossorigin="anonymous">
  	</script>
	<script type="text/javascript" src="myscript_03.js"></script>
	<title>view cart</title>
</head>
<body>
	<div class="shopping_cart">
	<div class="title">
		<header>
			<h1 style="color:black">Shopping Bag</h1>
			<br><br><br><br>
		</header>
	</div>
		<?php
			if (isset($_SESSION['cart'])) {

				static $a1 = 0;
				static $a2 = 0;
				static $a3 = 0;
				static $a4 = 0;
				static $a5 = 0;
				static $a6 = 0;
				//static $artwork[] = $_SESSION['artwork'];

				/* get item quantities*/
				foreach($_SESSION['cart'] as $cart_item) {
					switch ($cart_item){
						case $_SESSION['artwork']['a1']:
							$a1++;
							break;
						case $_SESSION['artwork']['a2']:
							$a2++;
							break;
						case $_SESSION['artwork']['a3']:
							$a3++;
							break;
						case $_SESSION['artwork']['a4']:
							$a4++;
							break;
						case $_SESSION['artwork']['a5']:
							$a5++;
							break;
						case $_SESSION['artwork']['a6']:
							$a6++;
							break;
					}
					
				}

				/*Display items if quantity is not 0*/
				if ($a1 != 0){
					$a = $_SESSION['artwork']['a1'];
					$src = $a['src'];
					$alt = $a['value'];
					echo "<div class='bag_item'><button type='button' class='rm'><img src='pics/remove.png' alt='trash'/></button>";
					echo "<div class='image'><img height='20px' width='7px' src='$src' alt='$alt'/></div>";
					echo "<div class='bag_item_description'><p>" . $a['description'] . "</p></div>";
					echo "<div class='quantity'><button class='plus_btn' type='button' name='plus-button'>";
					echo "<img src='pics/plus.png' alt='plus'/></button>"; 
					echo "<input type='text' name='amount' value='$a1'/>";
					echo "<button class='minus_btn' type='button' name='minus-button'>";
					echo "<div class='bag_item_total'><p>" . $a1 * $a['data-prce'] .
					  "</p></div>";
					echo "<img src='pics/minus.png' alt='minus'/></button></div></div><hr>";
				}
				if ($a2 != 0){
					$a = $_SESSION['artwork']['a2'];
					$src = $a['src'];
					$alt = $a['value'];
					echo "<div class='bag_item'><button type='button' class='rm'><img src='pics/remove.png' alt='trash'/></button>";
					echo "<div class='image'><img height='20px' width='7px' src='$src' alt='$alt'/></div>";
					echo "<div class='bag_item_description'><p>" . $a['description'] . "</p></div>";
					echo "<div class='quantity'><button class='plus_btn' type='button' name='plus-button'>";
					echo "<img src='pics/plus.png' alt='plus'/></button>"; 
					echo "<input type='text' name='amount' value='$a1'/>";
					echo "<button class='minus_btn' type='button' name='minus-button'>";
					echo "<div class='bag_item_total'><p>" . $a1 * $a['data-prce'] .
					  "</p></div>";
					echo "<img src='pics/minus.png' alt='minus'/></button></div></div><hr>";
				}
				if ($a3 != 0){
					$a = $$_SESSION['artwork']['a3'];
					$src = $a['src'];
					$alt = $a['value'];
					echo "<div class='bag_item'><button type='button' class='rm'><img src='pics/remove.png' alt='trash'/></button>";
					echo "<div class='image'><img height='20px' width='7px' src='$src' alt='$alt'/></div>";
					echo "<div class='bag_item_description'><p>" . $a['description'] . "</p></div>";
					echo "<div class='quantity'><button class='plus_btn' type='button' name='plus-button'>";
					echo "<img src='pics/plus.png' alt='plus'/></button>"; 
					echo "<input type='text' name='amount' value='$a1'/>";
					echo "<button class='minus_btn' type='button' name='minus-button'>";
					echo "<div class='bag_item_total'><p>" . $a1 * $a['data-prce'] .
					  "</p></div>";
					echo "<img src='pics/minus.png' alt='minus'/></button></div></div><hr>";
				}
				if ($a4 != 0){
					$a = $_SESSION['artwork']['a4'];
					$src = $a['src'];
					$alt = $a['value'];
					echo "<div class='bag_item'><button type='button' class='rm'><img src='pics/remove.png' alt='trash'/></button>";
					echo "<div class='image'><img height='20px' width='7px' src='$src' alt='$alt'/></div>";
					echo "<div class='bag_item_description'><p>" . $a['description'] . "</p></div>";
					echo "<div class='quantity'><button class='plus_btn' type='button' name='plus-button'>";
					echo "<img src='pics/plus.png' alt='plus'/></button>"; 
					echo "<input type='text' name='amount' value='$a1'/>";
					echo "<button class='minus_btn' type='button' name='minus-button'>";
					echo "<div class='bag_item_total'><p>" . $a1 * $a['data-prce'] .
					  "</p></div>";
					echo "<img src='pics/minus.png' alt='minus'/></button></div></div><hr>";
				}
				if ($a5 != 0){
					$a = $_SESSION['artwork']['a5'];
					$src = $a['src'];
					$alt = $a['value'];
					echo "<div class='bag_item'><button type='button' class='rm'><img src='pics/remove.png' alt='trash'/></button>";
					echo "<div class='image'><img height='20px' width='7px' src='$src' alt='$alt'/></div>";
					echo "<div class='bag_item_description'><p>" . $a['description'] . "</p></div>";
					echo "<div class='quantity'><button class='plus_btn' type='button' name='plus-button'>";
					echo "<img src='pics/plus.png' alt='plus'/></button>"; 
					echo "<input type='text' name='amount' value='$a1'/>";
					echo "<button class='minus_btn' type='button' name='minus-button'>";
					echo "<div class='bag_item_total'><p>" . $a1 * $a['data-prce'] .
					  "</p></div>";
					echo "<img src='pics/minus.png' alt='minus'/></button></div></div><hr>";
				}
				if ($a6 != 0){
					$a = $_SESSION['artwork']['a6'];
					$src = $a['src'];
					$alt = $a['value'];
					echo "<div class='bag_item'><button type='button' class='rm'><img src='pics/remove.png' alt='trash'/></button>";
					echo "<div class='image'><img height='20px' width='7px' src='$src' alt='$alt'/></div>";
					echo "<div class='bag_item_description'><p>" . $a['description'] . "</p></div>";
					echo "<div class='quantity'><button class='plus_btn' type='button' name='plus-button'>";
					echo "<img src='pics/plus.png' alt='plus'/></button>"; 
					echo "<input type='text' name='amount' value='$a1'/>";
					echo "<button class='minus_btn' type='button' name='minus-button'>";
					echo "<div class='bag_item_total'><p>" . $a1 * $a['data-prce'] .
					  "</p></div>";
					echo "<img src='pics/minus.png' alt='minus'/></button></div></div><hr>";
				}

				echo "<a href='checkout.php'><button type='button' value='Proceed to Checkout'></button></a>";
				echo "<br><p style='font-size:15px; padding: 20px'>Would you like to continue <a href='browse.php'>browsing</a>?</p>";
			} else {
				echo "<em><h3> You've not selected any items </h3></em>" . "<p style='font-size:15px'>Please continue <a href='browse.php'>browsing</a>.</p>";
			}
		?>
	</div>
	
	<!-- curtosy of  view-source:https://designmodo.com/demo/shopping-cart/ for the following jquery code-->
	<script type="text/javascript">
		$(document).ready(function(){
			$('.minus_btn').on('click', function(e) {
			    e.preventDefault();
			    var $this = $(this);
			    var $input = $this.closest('div').find('input');
			    var value = parseInt($input.val());
			 
			    if (value &amp;gt; 1) {
			        value = value - 1;
			    } else {
			        value = 0;
			    }
			 
			  $input.val(value);
			 
			});
			 
			$('.plus_btn').on('click', function(e) {
			    e.preventDefault();
			    var $this = $(this);
			    var $input = $this.closest('div').find('input');
			    var value = parseInt($input.val());
			 
			    if (value &amp;lt; 100) {
			        value = value + 1;
			    } else {
			        value =100;
			    }
			 
			    $input.val(value);
			});
		});
	</script>
</body>
<footer>
	<?php
		include 'footer.php';
	?>
</footer>
</html>