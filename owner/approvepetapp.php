<?php

include("../conn.php");
include("../session.php");
$id = intval($_GET['id']);

mysqli_query($con,"UPDATE adoption_request SET status = 1 WHERE ID = $id");

// $sql = ("SELECT * FROM adoption_request WHERE ID=$id");
$result = mysqli_query($con,"SELECT * FROM adoption_request WHERE ID=$id");
while($row = mysqli_fetch_array($result)) {
  $petID = $row["petID"];
}

mysqli_query($con,"DELETE FROM pets WHERE ID=$petID");

mysqli_close($con); //close database connection
header('Location: viewpetapp.php');

?>
