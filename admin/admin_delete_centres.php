<?php
	include("session.php");
	include("../conn.php");
	$id = intval($_GET['id']);
	$result = mysqli_query($con,"DELETE FROM centre_pages WHERE id=$id");
	mysqli_close($con); //close database connection
	header('Location: admin_centres.php');
?>
