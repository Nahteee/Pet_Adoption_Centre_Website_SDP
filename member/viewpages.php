<?php
//View a selected centre page in more detail

include("../conn.php");
include("../session.php");

$id = intval($_GET['id']); 
$result = mysqli_query($con,"SELECT * FROM centre_pages WHERE ID=$id");
$comments = mysqli_query($con, "SELECT * FROM centre_comments WHERE centre_ID=$id");
$pets = mysqli_query($con, "SELECT * FROM pets WHERE centre_ID=$id");
?>

<html>
<body>
	<head>
		<link rel = "stylesheet" href = "style.css">
	</head>
	<title>Centre Page</title>
<body>
	<div class = "center">
		<p>

	<?php
		while($row = mysqli_fetch_array($result)) {

			echo "<img src = '../uploads/" . $row['centre_pic'] . "' style = 'width: 300px; height: auto;'>";
			echo "<h1>" . $row['centre_name'] . "</h1>";

			echo "Located at: " . $row['location'];
			echo "<br>";
			echo $row['description'];
			echo "<br>";
		}
	?>

</p>
<p> <br>
	<h3>Pets up for adoption</h3>
	<div class = "container">
	<?php
		while($row = mysqli_fetch_array($pets)) {
			echo "<div class = 'child'>";
			if ($row["image_name"] == "") {
				echo $row['name'];

				echo $row['age'];

				echo $row['species'];

				echo $row['breed'];
				echo "<br>";
			}
			else {
				echo "<img src = '../uploads/" . $row['image_name'] . "' style = 'width: 250px; height: auto;'>";
				echo "<br>";
				echo "<br>";
				echo "Name: " . $row['name'] . "<br>";

				echo "Age: " . $row['age'] . "<br>";

				echo "Species: " . $row['species'] . "<br>";

				echo "Breed: " . $row['breed'] . "<br";
				echo "<br>";
			}
			echo "</div>";
		}
	?>
</p>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<center>

<form action = "centrecomment.php" method = "post">
		<input type="hidden" name="centreId" value="<?php echo $id ?>">
		<input type="hidden" name="userID" value="<?php echo $_SESSION['userID'] ?>">
		<textarea type = "text"  name = "centreComment"> </textarea>
	<input type = "submit" value = "Submit comment">
</form>

<?php
//display comments
		while($row = mysqli_fetch_array($comments)) {
			echo "<div class = 'comment'>";
			$uid = $row['user_ID'];
			$username = mysqli_query($con, "SELECT * FROM users WHERE ID=$uid");
			while($row2 = mysqli_fetch_array($username)) {
				echo "<b>" . $row2['username'] . "</b>";
			}
			echo " posted at " . $row['time'];
			echo "<br>";
			echo $row['comment'];

			echo "</div>";
			echo "<br>";
		} 

?>
</div>
</body>
</html>
