<?php
include("../conn.php");
include("../header.php");
include("../session.php");
$petId = intval($_GET['id']);
$pets = mysqli_query($con, "SELECT * FROM pets WHERE ID=$petId");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<link rel="stylesheet" href = "../CSS/adoption.css?v=<?php echo time(); ?>">
	<title> Adopt Pet </title>
</head>
<body>


	<div class = "page-wrap">
		<div class="outer-box">

	<?php
	$row = mysqli_fetch_array($pets);
			echo "<img src = '../uploads/" . $row['image_name'] . "' style = 'width: 300px; height: auto; border-radius: 15px;'>";
			echo "<h1>" . $row['name'] . "</h1>";

			echo "<p>". $row['name'] . " is " . $row['age'] . " years old </p>";
			echo "<p>". $row['name'] . " is a " . $row['species'] . "</p>";
			echo "<p>". $row['name'] . "'s breed is " . $row['breed'] . "</p>";
			echo "<h3><br>Will you adopt " . $row['name'] . "?</h3><br>";
	?>

	<p class='uhh'>Adoption remarks:</p>
	<form action = "sendbooking.php" method = "post">
		<input type = "hidden" name = "petID" value = "<?php echo $row['ID']; ?>">
		<input type = "hidden" name = "userID" value = "<?php echo $_SESSION['userID']; ?>">
		<!-- <input type = "hidden" name = "petID" value = "<?php $petId ?>"> -->
		<input type = "hidden" name = "centreID" value = "<?php echo $row['centre_ID']; ?>">
		<textarea type="text" name="remarks"></textarea> <br>
		<input type = "submit" value="Adopt <?php echo $row['name']; ?>">
	</form>
	</div>
	</div>

	<?php
	mysqli_close($con);
	?>

	<footer>
	<?php include("../footer.php") ?>
	</footer>
</body>
</html>
