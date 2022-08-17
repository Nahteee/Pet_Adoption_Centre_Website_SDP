<?php
//PHP to update table after editing centre details

include("../conn.php");

$sql = "UPDATE centre_pages 

SET centre_name='$_POST[centreName]',
ssm='$_POST[centreSSM]',
location='$_POST[address]',
phone='$_POST[centrePhone]',
email='$_POST[centreEmail]',
description='$_POST[centreDesc]' 

WHERE ID=$_POST[id];";

if (!mysqli_query($con, $sql)) {
    die("Error: " . mysqli_error($con));
}
else {
    echo "Page updated!";
}
?>