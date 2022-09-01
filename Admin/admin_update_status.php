<?php
include("../conn.php");
	$id = intval($_GET['id']); 
	$result = mysqli_query($con,"UPDATE tickets SET status = 'Fixed' WHERE ID =$id");
	mysqli_close($con); 
	header('Location: admin_ticket.php');
?>