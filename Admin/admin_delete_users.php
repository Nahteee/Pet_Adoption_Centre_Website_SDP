<?php
	include("session.php");
	include("../conn.php");
	//$_GET[‘id’] — Get the integer value from id parameter in URL.
	//intval() will returns the integer value of a variable
	$id = intval($_GET['id']);
  echo '<script>alert("1 record added!");
  </script>';
	$result = mysqli_query($con,"DELETE FROM users WHERE id=$id");
	mysqli_close($con); //close database connection
	header('Location: admin_users.php'); //redirect the page to view.php page
?>
