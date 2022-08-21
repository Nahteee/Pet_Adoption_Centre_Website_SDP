<?php
//View a selected centre page in more detail

include("../conn.php");

$id = intval($_GET['id']); 
$result = mysqli_query($con,"SELECT * FROM centre_pages WHERE ID=$id");
$comments = mysqli_query($con, "SELECT * FROM centre_comments WHERE centre_ID=$id");
$pets = mysqli_query($con, "SELECT * FROM pets WHERE centre_ID=$id");
$row = mysqli_fetch_array($result);
?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel = "stylesheet" href = "style.css">
	<title>Centre Page</title>
</head>
<body>
	<div class = "center">
		pooop
	</div>
<p>

	<?php
		while($row = mysqli_fetch_array($pets)) {
			echo "<td>";
			echo $row['name'];
			echo "</td>";

			echo "<td>";
			echo $row['age'];
			echo "</td>";

			echo "<td>";
			echo $row['species'];
			echo "</td>";

			echo "<td>";
			echo $row['breed'];
			echo "</td>";
			
		}
?>
</p>


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
</body>
</html>
