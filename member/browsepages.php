<?php
//Page for members to browse through adoption centres

include("../conn.php");

$result = mysqli_query($con, "SELECT * FROM centre_pages WHERE verified = 1");
?>

<html>
<head>
<<<<<<< HEAD
	<link rel = "stylesheet" href = "../style.css">
</head>
<body>
=======
	<link rel = "stylesheet" href = "../CSS/style.css">
</head>
<body>
	<header>
		<?php include("../header.php"); ?>
	</header>
>>>>>>> Ethan
	<title>Browse Adoption Centre Pages</title>
	<div class = "center">
	<h2>All Adoption Centres</h2>
	<br>

	<table>

		<?php
		while($row = mysqli_fetch_array($result)) {
			echo "<tr>";

			echo "<td>";
<<<<<<< HEAD
			echo "<img src = '../uploads/" . $row['centre_pic'] . "' style = 'width:100px; height:auto;'>";
=======
			echo "<img src = '../Uploads/" . $row['centre_pic'] . "' style = 'width:100px; height:auto;'>";
>>>>>>> Ethan
			echo "</td>";

			echo "<td>";
			echo "<a href=\"viewpages.php?id=";
			echo $row['ID'];
			echo "\">" . $row['centre_name'] . "</a></td>";

			echo "<td>";
			echo $row['location'];
			echo "</td>";

			echo "<td>";
			echo $row['description'];
			echo "</td>";
			echo "</tr>";
<<<<<<< HEAD
			
=======

>>>>>>> Ethan
		}
		mysqli_close($con);
		?>

	</table>
</div>
</body>
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> Ethan
