<?php

include("../conn.php");
include("../session.php");
$id = intval($_GET['id']);

mysqli_query($con,"UPDATE adoption_request SET status = 1 WHERE ID = $id");

mysqli_close($con); //close database connection
header('Location: viewpetapp.php');

?>
