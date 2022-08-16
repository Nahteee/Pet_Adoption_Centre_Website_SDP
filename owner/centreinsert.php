<?php 
//PHP to send new applications

include("conn.php");

$image = $_FILES['centrePic']['name'];

$sql="INSERT INTO centre_pages (user_ID, centre_name, ssm, location, phone, email, description, verified, centre_pic)

VALUES

('$_POST[userID]', '$_POST[centreName]', '$_POST[centreSSM]', '$_POST[address]', '$_POST[centrePhone]', '$_POST[centreEmail]', '$_POST[centreDesc]', 0, '$filename')";

if (!mysqli_query($con, $sql)) {
    die("Error: " . mysqli_error($con));
}
else {
    echo "application submmited!";
}

mysqli_close($con);

?>