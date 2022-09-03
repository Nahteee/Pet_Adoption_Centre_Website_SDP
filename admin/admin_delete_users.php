<?php
	include("session.php");
	include("../conn.php");
	$id = intval($_GET['id']);
	$result = mysqli_query($con,"DELETE FROM users WHERE id=$id");
	mysqli_close($con); //close database connection
	header('Location: admin_users.php'); 
?>
