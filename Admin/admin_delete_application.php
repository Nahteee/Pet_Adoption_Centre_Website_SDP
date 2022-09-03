<?php 
include("../conn.php");
$id = intval($_GET['id']);
mysqli_query($con,"DELETE FROM centre_pages WHERE ID=$id");
mysqli_close($con); 
header('Location: admin_view_application.php');
?>