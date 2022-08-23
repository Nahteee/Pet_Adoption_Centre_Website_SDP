<?php include("../session.php");
?>

<!DOCTYPE html>
<html>
<!--Adoption Centre Owner Homepage; view owned pages, apply for pages, view sent applications<-->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel = "stylesheet" href = "style.css">
	<title>Adoption Centre Owner Homepage</title>
</head>
<body>
	<div class = "center">
	<h2>Adoption Centre Owner Homepage </h2>

	<p>
		<button>
		<?php
			echo "<a class = \"buttonlink\" href=\"viewownedpages.php?id=";
			echo $_SESSION['userID'];
			echo "\">View owned pages</a>";
		?>
	</button>
	</p>
	<p>
		<button>
		<a  class = "buttonlink" href="centreform.html">Apply for an adoption centre page</a>
	</button>
	</p>
	<p>
		<button>
		<?php
			echo "<a class = \"buttonlink\" href=\"viewappowner.php?id=";
			echo $_SESSION['userID'];
			echo "\">View page applications</a>";
		?>
	</button>
	</p>
	<p>
		<button>
		<?php
			echo "<a class = \"buttonlink\"  href=\"logout.php";
			echo "\">Logout</a>";
		?>
	</button>
	</p>
</div>
</body>
</html>