<?php 

include("conn.php");

$sql="INSERT INTO centre_pages (user_ID, centre_name, ssm, location, phone, email, description)

VALUES

('$_POST[userID]', '$_POST[centreName]', '$_POST[centreSSM]', '$_POST[address]', '$_POST[centrePhone]', '$_POST[centreEmail]', '$_POST[centreDesc]')";

if (!mysqli_query($con, $sql)) {
    die("Error: " . mysqli_error($con));
}
else {
    echo "application submmited!";
}

mysqli_close($con);

?>