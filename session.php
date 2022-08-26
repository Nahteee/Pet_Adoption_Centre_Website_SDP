<?php 
session_start();

if (!isset($_SESSION['userID'])) {
	if (!isset($_SESSION['username'])) {
    header("Location: login.html");
	}
	else {
	header("location: ownerlogin.php");
	}

}

?>