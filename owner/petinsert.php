<?php 
//PHP to add new pets 

include("../conn.php");
include("session.php");

$image = $_FILES['centrePic']['name'];
$id = $_SESSION['userID'];

$sql="INSERT INTO centre_pages (user_ID, centre_name, ssm, location, phone, email, description, verified, centre_pic)

VALUES

('$id', '$_POST[centreName]', '$_POST[centreSSM]', '$_POST[address]', '$_POST[centrePhone]', '$_POST[centreEmail]', '$_POST[centreDesc]', 0, '$image')";

if (!mysqli_query($con, $sql)) {
    die("Error: " . mysqli_error($con));
}
else {
    echo "application submmited!";
}

mysqli_close($con);

?>