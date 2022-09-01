<?php 
session_start();

header("location: /sdp/login.php");

session_destroy();
?>