<?php
//Page for members to browse through adoption centres

include("../conn.php");

$result = mysqli_query($con, "SELECT * FROM pets");
?>

<html>
<head>
	<link rel = "stylesheet" href = "../style.css">
</head>
<body>
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
			echo "<img src = '../uploads/" . $row['image_name'] . "' style = 'width:100px; height:auto;'>";
			echo "</td>";

			echo "<td>";
			echo $row['species'];
			echo "</td>";

			echo "<td>";
			echo $row['breed'];
			echo "</td>";
		
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
</html>