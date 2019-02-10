<!DOCTYPE html>
<html lang="en">
<head>
	<title>Search Results</title>
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
			if(isset($_GET) && $_GET['SA']){	
				$search = htmlspecialchars($_GET['SA']);
				echo $search;
				/*$statement = $db->query("SELECT  FROM  JOIN WHERE ={$search}");
				$results = $statement->fetchAll(PDO::FETCH_ASSOC);
				//print_r($results);
				if ($results) {
					echo $results[0]['search'] . " is found";
				} else {
					echo "<h3>Sorry, query \"$search\" found nothing!</h3>";
					echo "<br><strong>Suggestions:</strong><ul><li>Make sure spelling is correct</li><li>Make sure you are searching for art title, art description, art type, or artist's name</li>"
				}*/
			}
		?>
	</div>
</body>
<?php
	include "footer.php";
?>
</html>