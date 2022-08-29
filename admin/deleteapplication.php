<?php 
//PHP for deleting a page application (admin)


include("../conn.php");

$id = intval($_GET['id']);

mysqli_query($con,"DELETE FROM centre_pages WHERE ID=$id");

mysqli_close($con); //close database connection
header('Location: viewapplication.php');
?>