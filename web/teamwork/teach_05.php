<!DOCTYPE html>
<html lang="en">
<head>
	<title>Teach Week 05</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
	include "db_connect.php";
	echo "<h1>Scripture References</h1>";
	foreach ($db->query('SELECT book, chapter, verse, content FROM scriptures') as $row)
	{
		//print_r($row);
	  echo "<p><b>" . $row['book'] . " {$row['chapter']}:{$row['verse']} - </b> \"";
	  echo $row['content'];
	  echo '"</p>';
	}
	?>
	<br>
	<form method="post" action="">
		Search for Book: <input type="text" name="book">
		<input type="submit" name="submit">
	</form>

	<?php
		if(isset($_POST) && $_POST['book']){
			
			$book = htmlspecialchars($_POST['book']);
			$statement = $db->query("SELECT book FROM scriptures WHERE book='{$book}'");
			$results = $statement->fetchAll(PDO::FETCH_ASSOC);
			//print_r($results);
			if ($results) {
				echo $results[0]['book'] . " is found";
			} else {
				echo "Sorry, $_POST['book'] is not found!";
			}
		}
	?>
</body>
</html>
