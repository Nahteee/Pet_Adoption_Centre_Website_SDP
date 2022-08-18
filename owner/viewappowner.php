<?php 
//Page for owners to view their sent applications

include("../conn.php");
$id = intval($_GET['id']);
$result = mysqli_query($con, "SELECT * FROM centre_pages WHERE user_ID = $id"); //replace 13 with user ID from session variable when logging in
?>

<html>
<body>
	<title>View applications as Centre Owner</title>
	<h2>Adoption centre page applications</h2>
	<br>

	<table>
		<tr>
			<td>Adoption Centre Name</td>
			<td>SSM</td>
			<td>Address</td>
			<td>Phone Number</td>
			<td>Email</td>
			<td>Description</td>
			<td>Verify</td>
		</tr>
		<?php
		while($row = mysqli_fetch_array($result)) {
			echo "<tr>";
			echo "<td>";
			echo $row['centre_name'];
			echo "</td>";

			echo "<td>";
			echo $row['ssm'];
			echo "</td>";

			echo "<td>";
			echo $row['location'];
			echo "</td>";

			echo "<td>";
			echo $row['phone'];
			echo "</td>";

			echo "<td>";
			echo $row['email'];
			echo "</td>";
			
			echo "<td>";
			echo $row['description'];
			echo "</td>";
			
			echo "<td>";
			if ($row['verified'] == 1) {
				echo "Verified";
			}
			else {
				echo "Pending verification";
			}
			echo "</td></tr>";
		}
		mysqli_close($con);
		?>
	</table>
</body>
</html>