<?php
//PHP to send new applications

include("../conn.php");
include("../session.php");
$id = $userid;

$target_dir = "../Uploads/";
$target_file = $target_dir . basename($_FILES["centrePic"]["name"]);
$id = $_SESSION['userID'];

if (move_uploaded_file($_FILES["centrePic"]["tmp_name"], $target_file)) {
    $file_name = basename($_FILES["centrePic"]["name"]);

$sql="INSERT INTO centre_pages (user_ID, centre_name, ssm, location, phone, email, description, verified, centre_pic)

VALUES

('$id', '$_POST[centreName]', '$_POST[centreSSM]', '$_POST[address]', '$_POST[centrePhone]', '$_POST[centreEmail]', '$_POST[centreDesc]', 0, '$file_name')";
}

else {
    $file_name="default.jpg";
    $sql="INSERT INTO centre_pages (user_ID, centre_name, ssm, location, phone, email, description, verified, centre_pic)

VALUES

('$id', '$_POST[centreName]', '$_POST[centreSSM]', '$_POST[address]', '$_POST[centrePhone]', '$_POST[centreEmail]', '$_POST[centreDesc]', 0, '$file_name')";
}

if (!mysqli_query($con, $sql)) {
    die("Error: " . mysqli_error($con));
}
else {
    echo '<script type="text/JavaScript"> alert("Adoption Page Request Sent!"); window.location.href = "/SDP-Source-Code/index.php"; </script>';
}

mysqli_close($con);

?>
