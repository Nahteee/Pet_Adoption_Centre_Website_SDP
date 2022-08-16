<?php
//View a selected centre page in more detail

include("conn.php");

$id = intval($_GET['id']); 
$result = mysqli_query($con,"SELECT * FROM centre_pages WHERE id=$id");
$comments = mysqli_query($con, "SELECT * FROM centre_comments WHERE centre_ID=$id");

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
?>
<form action = "centrecomment.php" method = "post">
	<p>
		<input type="hidden" name="centreId" value="<?php echo $id ?>">
		<input type="hidden" name="userID" value="<?php echo 0 ?>"> <!--change value to userID from session-->
		<textarea type = "text" name = "centreComment"> </textarea>
	</p>
	<input type = "submit" value = "Submit comment">
</form>

<?php
//display comments

		while($row = mysqli_fetch_array($comments)) {
			$uid = $row['user_ID'];
			$username = mysqli_query($con, "SELECT * FROM users WHERE ID=$uid");
			echo $row['comment'];
			echo "-";
			while($row = mysqli_fetch_array($username)) {
				echo $row['username'];
				echo "\n";
			}

		} 

?>