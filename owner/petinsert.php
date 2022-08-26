<?php 
//PHP to add new pets 

include("../conn.php");

$image = $_FILES['centrePic']['name'];

$sql="INSERT INTO pets (name, age, species, breed, centre_ID, image_name)

VALUES

('$_POST[petName]', '$_POST[petAge]', '$_POST[petSpecies]', '$_POST[petBreed]', '$_POST[centreID]', '$image')";

if (!mysqli_query($con, $sql)) {
    die("Error: " . mysqli_error($con));
}
else {
    echo "application submmited!";
    header("location: centreowner.php");
}

mysqli_close($con);

?>