<?php
//Page for members to browse through adoption centres

include("../conn.php");

$result = mysqli_query($con, "SELECT * FROM centre_pages WHERE verified = 1");
?>

<html>
<body>
	<title>Browse Adoption Centre Pages</title>
	<h2>All Adoption Centres</h2>
	<br>

	<table>
		<tr>
			<td>Centre Name</td>
			<td>Address</td>
			<td>Description</td>
		</tr>

		<?php
		while($row = mysqli_fetch_array($result)) {
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
			
		}
		mysqli_close($con);
		?>
	</table>
</body>
</html>