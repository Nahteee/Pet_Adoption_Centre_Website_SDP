<?php
//PHP to update table after editing centre details

include("../conn.php");

$image = $_FILES['petPic']['name'];
$sql = "UPDATE pets

SET name='$_POST[petName]',
age='$_POST[petAge]',
species='$_POST[petSpecies]',
breed='$_POST[petBreed]',
image_name= '$image' 

WHERE ID=$_POST[id];";

if (!mysqli_query($con, $sql)) {
    die("Error: " . mysqli_error($con));
}
else {
    echo "Page updated!";
    header("location: centreowner.php");
}

mysqli_close($con);

?>