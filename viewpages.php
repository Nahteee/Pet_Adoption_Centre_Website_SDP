<?php
//View a selected centre page in more detail

include("conn.php");

$id = intval($_GET['id']); 
$result = mysqli_query($con,"SELECT * FROM centre_pages WHERE id=$id");

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
		
//while($row = mysqli_fetch_array($result))
?>