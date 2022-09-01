<?php
//View a selected centre page in more detail

include("../conn.php");
include("../header.php");
include("../session.php");

$id = intval($_GET['id']);
$result = mysqli_query($con,"SELECT * FROM centre_pages WHERE ID=$id");
$comments = mysqli_query($con, "SELECT * FROM centre_comments WHERE centre_ID=$id");
$pets = mysqli_query($con, "SELECT * FROM pets WHERE centre_ID=$id");
?>

<html>
<body>
	<head>
		<link rel = "stylesheet" href = "../CSS/viewstyle.css">
	</head>
	<title>Centre Page</title>
<body>
	<div class = "center">
		<p>

	<?php
		while($row = mysqli_fetch_array($result)) {

			echo "<img src = '../Uploads/" . $row['centre_pic'] . "' style = 'width: 300px; height: auto;'>";
			echo "<h1 style='font-size:50px;'>" . $row['centre_name'] . "</h1><br>";

			echo "<p style='font-size:20px;'>";

			echo "<b>Located at:</b><br>" . $row['location'];
			echo "<br><br>";
			echo $row['description'];
			echo "<br><br>";
			echo "<b>Contact Number: </b>" . $row['phone'];
			echo "<br>";
			echo "<b>Email: </b>" . $row['email'];
			echo "</p><br><br><br>";
		}
	?>

</p>
<p> <br>
	<h3 style="font-size:25px;">Pets up for adoption</h3>
	<br>
	<br>
	<div class = "container">
	<?php
		while($row = mysqli_fetch_array($pets)) {
			echo "<div class = 'child'>";
				echo "<img src = '../Uploads/" . $row['image_name'] . "' style = 'width: 250px; height: auto;'>";
				echo "<br>";
				echo "<br>";
				echo "Name: " . $row['name'] . "<br>";

				echo "Age: " . $row['age'] . "<br>";

				echo "Species: " . $row['species'] . "<br>";

				echo "Breed: " . $row['breed'] . "<br";
				echo "<br><br><br>";
				echo "<button class = 'small' onclick = \"window.location='placebooking.php?id=";
				echo $row['ID'];
				echo "';\"> Adopt Me! </button>";
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
		<textarea type = "text"  name = "centreComment"></textarea> <br> <br>
	<input type = "submit" value = "Submit comment"> <br> <br>
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
