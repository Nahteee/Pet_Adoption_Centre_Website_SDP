<?php

include("../conn.php");
include("../session.php");
$id = $userid;

mysqli_query($con,"UPDATE adoption_request SET status = 1 WHERE ID = $id");

mysqli_close($con); //close database connection
header('Location: viewapplication.php');

?>
