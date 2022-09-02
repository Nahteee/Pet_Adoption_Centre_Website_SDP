<?php
//Page for center owners to view pet applications

include("../conn.php");
include("../session.php");

$id = $userid;
$result = mysqli_query($con, "SELECT * FROM adoption_request WHERE status = 0");
?>

<html>
<head>
	<link rel="stylesheet" href="../CSS/style.css">
<body style='background-image: url("/SDP-Source-Code/Imgs/bg.png");'>
	<title>View adoption applications</title>
	<div class = "beeg" style='background-color: white;'>
	<h2>Pet adoption applications</h2>
	<br>

	<table>
		<tr>
			<th>Username</th>
			<th>IC</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Phone</th>
			<th>Income</th>
			<th>Address</th>
			<th>Remarks</th>
			<th>Pet</th>
			<td> </td>
			<td> </td>
		</tr>
		<?php
		while($row = mysqli_fetch_array($result)) {
			echo "<tr>";
			echo "<td>";
			$uID = $row['user_ID'];
			$user = mysqli_query($con, "SELECT * FROM users WHERE ID = $uID");
			$row1 = mysqli_fetch_array($user);
			echo $row1['username'];
			echo "</td>";

			echo "<td>";
			echo $row1['IC'];
			echo "</td>";

			echo "<td>";
			echo $row1['first_name'];
			echo "</td>";

			echo "<td>";
			echo $row1['last_name'];
			echo "</td>";

			echo "<td>";
			echo $row1['phone'];
			echo "</td>";

			echo "<td>";
			echo $row1['income'];
			echo "</td>";

			echo "<td>";
			echo $row1['address'];
			echo "</td>";

			echo "<td>";
			echo $row['remarks'];
			echo "</td>";

			echo "<td>";
			$petID = $row['petID'];
			$pet = mysqli_query($con, "SELECT * FROM pets WHERE ID = $petID");
			$row2 = mysqli_fetch_array($pet);
			echo $row2['name'];
			echo "</td>";

			echo "<td>";
			echo "<button class = 'small'> <a class = 'buttonlink' href=\"approvepetapp.php?id=";
			echo $row['ID'];
			echo "\">Verify</a> </button> </td>";

			echo "<td> <button class = 'small'><a href class = 'buttonlink' =\"deletepetapp.php?id=";
			echo $row['ID'];
			echo "\" onClick=\"return confirm('Delete ";
			echo " application details?');\">Delete</a></td> </button></tr>";
		}
		mysqli_close($con);
		?>
	</table>
</div>
</body>
</html>
