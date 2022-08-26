<?php 
//Page for admin to view page applications

include("../conn.php");
$result = mysqli_query($con, "SELECT * FROM centre_pages WHERE verified = 0");
?>

<html>
<head>
	<link rel="stylesheet" href="../style.css">
<body>
	<title>View applications as Admin</title>
	<div class = "center">
	<h2>Adoption centre page applications</h2>
	<br>

	<table>
		<tr>
			<th>User ID</th>
			<th>Adoption Centre Name</th>
			<th>SSM</th>
			<th>Address</th>
			<th>Phone Number</th>
			<th>Email</th>
			<th>Description</th>
			<td> </td>
			<td> </td>
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
			echo "<button class = 'small'> <a class = 'buttonlink' href=\"verifyapplication.php?id=";
			echo $row['ID'];
			echo "\">Verify</a> </button> </td>";
			
			echo "<td> <button class = 'small'><a href class = 'buttonlink' =\"deleteapplication.php?id=";
			echo $row['ID'];
			echo "\" onClick=\"return confirm('Delete ";
			echo $row['centre_name'];
			echo " details?');\">Delete</a></td> </button></tr>";
		}
		mysqli_close($con);
		?>
	</table>
</div>
</body>
</html>