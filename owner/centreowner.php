<?php 
session_start();
include("../header.php");
?>

<!DOCTYPE html>
<html>
<!--Adoption Centre Owner Homepage; view owned pages, apply for pages, view sent applications<-->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel = "stylesheet" href = "../CSS/style.css">
	<title>Adoption Centre Owner Homepage</title>
</head>
<body style='background-image: url("/sdp/Imgs/bg.png");'><br><br><br>
	<div class = "center" style='background-color: white;'>
	<h1 style='font-size:40px;'>Adoption Centre Owner Homepage </h1>
	<br><br><br><br><br><br><br><br>
		<button>
		<?php
			echo "<a class = \"buttonlink\" href=\"viewownedpages.php?id=";
			echo $_SESSION['userID'];
			echo "\">View owned pages</a>";
		?>
	</button> <br><br>
		<button>
		<?php
			echo "<a class = \"buttonlink\" href=\"viewpetapp.php?id=";
			echo $_SESSION['userID'];
			echo "\">View adoption applications</a>";
		?>
	</button> <br><br>
		<button>
		<a  class = "buttonlink" href="centreform.php">Apply for an adoption centre page</a>
	</button> <br><br>
		<button>
		<?php
			echo "<a class = \"buttonlink\" href=\"viewappowner.php?id=";
			echo $_SESSION['userID'];
			echo "\">View page applications</a>";
		?>
	</button> <br><br>
		<button>
		<?php
			echo "<a class = \"buttonlink\"  href=\"logout.php";
			echo "\">Logout</a>";
		?>
	</button>
</div>
</body>
</html>