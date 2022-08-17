<?php include("session.php");
?>

<!DOCTYPE html>
<html>
<!--Adoption Centre Owner Homepage; view owned pages, apply for pages, view sent applications<-->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Adoption Centre Owner Homepage</title>
</head>
<body>
	<h2>Adoption Centre Owner Homepage </h2>

	<p>
		<?php
			echo "<a href=viewownedpages.php?id=3>View owned pages</a>"; //add session
		?>
	</p>
	<p>
		<a href="centreform.html">Apply for an adoption centre page</a>
	</p>
	<p>
		<?php
			echo "<a href=viewownedpages.php?id=3>View page applications</a>"; //add session
		?>
	</p>
</body>
</html>