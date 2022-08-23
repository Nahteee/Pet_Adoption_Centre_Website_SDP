<?php

include("../conn.php");
include("../session.php");

$petId = intval($_GET['id']);

$pets = mysqli_query($con, "SELECT * FROM pets WHERE ID=$petId");
?>
<html>
<head>
	<link rel="stylesheet" href = "../style.css">
	<title> Adopt Pet </title>
</head>
<div class = "center">

<?php
if (!isset($_SESSION['userID'])) {
	echo "pls login first";
}
else {
while($row = mysqli_fetch_array($pets)) {

		echo "<img src = '../uploads/" . $row['image_name'] . "' style = 'width: 300px; height: auto;'>";
		echo "<h1>" . $row['name'] . "</h1>";

		echo $row['name'] . " is " . $row['age'] . " years old<br>";
		echo $row['name'] . " is a " . $row['species'] . "<br>";
		echo $row['name'] . "'s breed is " . $row['breed'] . "<br>";
		echo "<h3><br>Will you adopt " . $row['name'] . "?</h3><br>";
	

?>
Adoption remarks: <br>
<form>
	<input type = "hidden" name = "petID" value = "<?php echo $row['ID']; ?>">
	<input type = "hidden" name = "userID" value = "<?php echo $_SESSION['userID']; ?>">
	<input type = "hidden" name = "species" value = "<?php echo $row['species']; ?>">
	<textarea type="text" name="remarks"></textarea>
	<input type = "submit" value="Adopt <?php echo $row['name']; ?>">
</form>
</div>

<?php
	}
}
mysql_close($con);
?>