<?php 
//PHP for deleting a pet's records


include("../conn.php");

$id = intval($_GET['id']);

mysqli_query($con,"DELETE FROM pets WHERE ID=$id");

mysqli_close($con); //close database connection
header('Location: editpage.php');
?>
