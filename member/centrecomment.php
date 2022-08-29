<?php 
//PHP to send comments for centre pages

include("../conn.php");
session_start();

if (!isset($_SESSION["username"])) {
    echo "Pls login first";
}

$uID = $_SESSION['userID'];
$sql="INSERT INTO centre_comments (user_ID, comment, centre_ID)

VALUES

('$uID', '$_POST[centreComment]', '$_POST[centreId]')";

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