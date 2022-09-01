<?php 

include("../conn.php");

$id = intval($_GET['id']);

mysqli_query($con,"UPDATE centre_pages SET verified = 1 WHERE ID = $id");

mysqli_close($con); //close database connection
header('Location: admin_view_application.php');

?>