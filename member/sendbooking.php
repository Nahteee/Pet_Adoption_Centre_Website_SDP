<?php

include("../conn.php");

$sql="INSERT INTO adoption_request (ID, user_ID, species, remarks, centre_ID, status)

VALUES

('$_POST[userID]', '$_POST[species]', '$_POST[remarks]', '$_POST[centreID]', 0)";

if (!mysqli_query($con, $sql)) {
    die("Error: " . mysqli_error($con));
}
else {
    echo "adoption application submmited!";
}

mysqli_close($con);

?>
