<?php
//PHP for deleting a page application (admin)

include("../conn.php");
include("../session.php");
$id = $userid;

mysqli_query($con,"DELETE FROM adoption_request WHERE ID=$id");

mysqli_close($con); //close database connection
header('Location: viewapplication.php');
?>
