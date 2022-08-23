<?php

include("../conn.php");

$sql="INSERT INTO adoption_request (ID, user_ID, species, remarks, status)

VALUES

('$_POST[petID]', '$_POST[userID]', '$_POST[species]', '$_POST[remarks]', 0)";

if (!mysqli_query($con, $sql)) {
    die("Error: " . mysqli_error($con));
}
else {
    echo "adoption application submmited!";
}

mysqli_close($con);

?>