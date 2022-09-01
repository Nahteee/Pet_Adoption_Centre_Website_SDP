<?php
//Page where owners can view all their owned pages

include("../conn.php");
include("../header.php");
$id = intval($_GET['id']); 
$result = mysqli_query($con, "SELECT * FROM centre_pages WHERE user_ID = $id AND verified = 1");
?>

<html>
<head>
	<link rel = "stylesheet" href = "../CSS/style.css">
</head>
<title>View owned pages</title>
<div class = "center" style='background-color: white;'>
<body style='background-image: url("/sdp/Imgs/bg.png");'>
	<title>View Adoption Centre Pages</title>
	<h2>Owned Adoption Centres</h2>
	<br>

	<table>
		<tr>
			<th>Adoption Centre Name</th>
			<th></th>
			<th> </th>
		</tr>
		<?php
		while($row = mysqli_fetch_array($result)) {
			echo "<tr>";
			echo "<td>";
			echo $row['centre_name'];
			echo "</td>";

			echo "<td>";
			echo "<a href=\"../member/viewpages.php?id=";
			echo $row['ID'];
			echo "\">Visit page</a></td>";
			
			echo "<td>";
			echo "<a href=\"editpage.php?id=";
			echo $row['ID'];
			echo "\">Edit</a></td>";
			
		}
		mysqli_close($con);
		?>
	</table>
</div>
</body>
</html>
