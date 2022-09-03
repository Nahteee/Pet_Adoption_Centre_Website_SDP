<?php
//PHP to update table after editing centre details

include("../conn.php");
include("../session.php");

$target_dir = "/SDP-Source-Code/Uploads/";
$target_file = $target_dir . basename($FILES["centrePic"]["name"]);

if(move_uploaded_file($FILES["centrePic"]["tmp_name"], $target_file)) {
    $file_name = basename($FILES["centrePic"]["name"]);
}

if ($file_name == "") {
$sql = "UPDATE centre_pages

SET centre_name='$_POST[centreName]',
ssm='$_POST[centreSSM]',
location='$_POST[address]',
phone='$_POST[centrePhone]',
email='$_POST[centreEmail]',
description='$_POST[centreDesc]'

WHERE ID=$_POST[id];";
}

else {
$sql = "UPDATE centre_pages

SET centre_name='$_POST[centreName]',
ssm='$_POST[centreSSM]',
location='$_POST[address]',
phone='$_POST[centrePhone]',
email='$_POST[centreEmail]',
description='$_POST[centreDesc]',
centre_pic= '$file_name'

WHERE ID=$_POST[id];";
}

if (!mysqli_query($con, $sql)) {
    die("Error: " . mysqli_error($con));
}
else {
    // echo '<script type="text/JavaScript"> alert("Page Succesfully Updated!"); window.location.href = "../member/viewpages.php?id=' . $_POST['id'].'" </script>';
}

mysqli_close($con);

?>
