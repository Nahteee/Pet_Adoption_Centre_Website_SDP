<<<<<<< HEAD
<?php include("../session.php");
=======
<?php 
session_start();
include("../header.php");
>>>>>>> Ethan
?>

<!DOCTYPE html>
<html>
<!--Adoption Centre Owner Homepage; view owned pages, apply for pages, view sent applications<-->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<<<<<<< HEAD
	<link rel = "stylesheet" href = "../style.css">
=======
	<link rel = "stylesheet" href = "../CSS/style.css">
>>>>>>> Ethan
	<title>Adoption Centre Owner Homepage</title>
</head>
<body>
	<div class = "center">
	<h1>Adoption Centre Owner Homepage </h1>
	<br>
<<<<<<< HEAD
	<p>
=======
>>>>>>> Ethan
		<button>
		<?php
			echo "<a class = \"buttonlink\" href=\"viewownedpages.php?id=";
			echo $_SESSION['userID'];
			echo "\">View owned pages</a>";
		?>
<<<<<<< HEAD
	</button>
	</p>
	<p>
=======
	</button> <br>
>>>>>>> Ethan
		<button>
		<?php
			echo "<a class = \"buttonlink\" href=\"viewpetapp.php?id=";
			echo $_SESSION['userID'];
			echo "\">View adoption applications</a>";
		?>
<<<<<<< HEAD
	</button>
	</p>
	<p>
		<button>
		<a  class = "buttonlink" href="centreform.html">Apply for an adoption centre page</a>
	</button>
	</p>
	<p>
=======
	</button> <br>
		<button>
		<a  class = "buttonlink" href="centreform.php">Apply for an adoption centre page</a>
	</button> <br>
>>>>>>> Ethan
		<button>
		<?php
			echo "<a class = \"buttonlink\" href=\"viewappowner.php?id=";
			echo $_SESSION['userID'];
			echo "\">View page applications</a>";
		?>
<<<<<<< HEAD
	</button>
	</p>
	<p>
=======
	</button> <br>
>>>>>>> Ethan
		<button>
		<?php
			echo "<a class = \"buttonlink\"  href=\"logout.php";
			echo "\">Logout</a>";
		?>
	</button>
<<<<<<< HEAD
	</p>
=======
>>>>>>> Ethan
</div>
</body>
</html>