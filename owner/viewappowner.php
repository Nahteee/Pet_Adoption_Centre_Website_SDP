<?php 
//Page for owners to view their sent applications

include("../conn.php");
$id = intval($_GET['id']);
$result = mysqli_query($con, "SELECT * FROM centre_pages WHERE user_ID = $id");
?>

<html>
<body>
	<head>
		<link rel = "stylesheet" href = "../CSS/style.css">
	</head>
	<title>View applications as Centre Owner</title>
	<div class = "center">
	<h2>Adoption centre page applications</h2>
	<br>
	<body>
	<table>
		<tr>
			<th>Centre Name</th>
			<th>SSM</th>
			<th>Address</th>
			<th>Phone Number</th>
			<th>Email</th>
			<th>Description</th>
			<th> </th>
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
</div>
</body>
</html>