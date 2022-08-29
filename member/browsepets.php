<?php
//Page for members to browse through adoption centres

include("../conn.php");
<<<<<<< HEAD
=======
include("../header.php");
>>>>>>> Ethan

$result = mysqli_query($con, "SELECT * FROM pets");
?>

<html>
<head>
<<<<<<< HEAD
	<link rel = "stylesheet" href = "../style.css">
</head>
<body>
=======
	<link rel = "stylesheet" href = "../CSS/style.css">
	<link rel="stylesheet" href="../CSS/headerstyle.css?v=<?php echo time(); ?>">
</head>
<body>
		<?php //include("../header.php"); ?>
>>>>>>> Ethan
	<title>Browse Pets</title>
	<div class = "center">
	<h2>All pets</h2>
	<br>

	<table>
		<tr>
			<th> </th>
			<th>Species</th>
			<th>Breed</th>
			<th> </th>
		</tr>

		<?php
		while($row = mysqli_fetch_array($result)) {
			echo "<tr>";

			echo "<td>";
<<<<<<< HEAD
			echo "<img src = '../uploads/" . $row['image_name'] . "' style = 'width:100px; height:auto;'>";
=======
			echo "<img src = '../Uploads/" . $row['image_name'] . "' style = 'width:100px; height:auto;'>";
>>>>>>> Ethan
			echo "</td>";

			echo "<td>";
			echo $row['species'];
			echo "</td>";

			echo "<td>";
			echo $row['breed'];
			echo "</td>";
<<<<<<< HEAD
		
=======

>>>>>>> Ethan
			echo "<td>";
			echo "<button class='small'><a class='buttonlink' href=\"viewpages.php?id=";
			echo $row['ID'];
			echo "\">View page</a></button></td>";
			echo "</tr>";
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
