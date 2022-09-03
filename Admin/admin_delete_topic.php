<?php
	include("session.php");
	include("../conn.php");
	$id = intval($_GET['id']);
	$result = mysqli_query($con,"DELETE FROM forum_post WHERE topic_id=$id");
	mysqli_close($con); //close database connection
	header('Location: admin_view_forum.php'); 
?>
