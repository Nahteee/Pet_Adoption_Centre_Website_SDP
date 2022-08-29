<?php 
//PHP to send comments for centre pages

include("../conn.php");

$sql="INSERT INTO centre_comments (user_ID, comment, centre_ID)

VALUES

('$_POST[userID]', '$_POST[centreComment]', '$_POST[centreId]')";

$centreID = $_POST['centreId'];

if (!mysqli_query($con, $sql)) {
    die("Error: " . mysqli_error($con));
}
else {
    echo "application submmited!";
    header("Location: viewpages.php?id=" . $centreID);
}

mysqli_close($con);

?>