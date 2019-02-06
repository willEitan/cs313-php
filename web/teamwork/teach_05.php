<!DOCTYPE html>
<html lang="en">
<head>
	<title>Teach Week 05</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
	try
	{
	  $dbUrl = getenv('DATABASE_URL');

	  $dbOpts = parse_url($dbUrl);

	  $dbHost = $dbOpts["host"];
	  $dbPort = $dbOpts["port"];
	  $dbUser = $dbOpts["user"];
	  $dbPassword = $dbOpts["pass"];
	  $dbName = ltrim($dbOpts["path"],'/');

	  $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

	  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch (PDOException $ex)
	{
	  echo 'Error!: ' . $ex->getMessage();
	  die();
	}
	echo "<h1>Scripture References</h1>";
	foreach ($db->query('SELECT book, chapter, verse, content FROM scriptures') as $row)
	{
		print_r($row);
	  echo "<p style='font-weight:bold'>" . $row['book'] . " {$row['chapter']}:{$row['verse']} - </p>";
	  echo $row['content'];
	  echo '<br/>';
	}
	?>
</body>
</html>
