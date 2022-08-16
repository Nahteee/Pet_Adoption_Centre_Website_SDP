<?php 
//Page for admin to view page applications

include("conn.php");
$result = mysqli_query($con, "SELECT * FROM centre_pages WHERE verified = 0");
?>

<html>
<body>
	<title>View applications as Admin</title>
	<h2>Adoption centre page applications</h2>
	<br>

	<table>
		<tr>
			<td>User ID</td>
			<td>Adoption Centre Name</td>
			<td>SSM</td>
			<td>Address</td>
			<td>Phone Number</td>
			<td>Email</td>
			<td>Description</td>
			<td>Verify</td>
			<td>Delete Application</td>
		</tr>
		<?php
		while($row = mysqli_fetch_array($result)) {
			echo "<tr>";
			echo "<td>";
			echo $row['user_ID'];
			echo "</td>";

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
			echo "<a href=\"verifyapplication.php?id=";
			echo $row['ID'];
			echo "\">Verify</a></td>";
			
			echo "<td><a href=\"deleteapplication.php?id=";
			echo $row['ID'];
			echo "\" onClick=\"return confirm('Delete ";
			echo $row['centre_name'];
			echo " details?');\">Delete</a></td></tr>";
		}
		mysqli_close($con);
		?>
	</table>
</body>
</html>