<?php
include("../conn.php");
include("../session.php");
if (basename($_FILES["centrePic"]["name"])) {

    // To set the folder, file name and file type
    $target_dir = "../Uploads/";
    $target_file = $target_dir . basename($_FILES["centrePic"]["name"]);


    if (move_uploaded_file($_FILES["centrePic"]["tmp_name"], $target_file)) {
        //To get file name
        $file_name = basename($_FILES["centrePic"]["name"]);
    }
    $sql = "UPDATE centre_pages
        SET centre_name='$_POST[centreName]',
        ssm='$_POST[centreSSM]',
        location='$_POST[address]',
        phone='$_POST[centrePhone]',
        email='$_POST[centreEmail]',
        description='$_POST[centreDesc]',
        centre_pic= '$file_name'
        
        WHERE ID=$_POST[id];";
} else {
    $sql = "UPDATE centre_pages
SET centre_name='$_POST[centreName]',
ssm='$_POST[centreSSM]',
location='$_POST[address]',
phone='$_POST[centrePhone]',
email='$_POST[centreEmail]',
description='$_POST[centreDesc]',
centre_pic = '$_POST[oldcentrepic]',

WHERE ID=$_POST[id];";
}



if (!mysqli_query($con, $sql)) {
    die("Error: " . mysqli_error($con));
} else {
    // echo '<script type="text/JavaScript"> alert("Page Succesfully Updated!"); window.location.href = "../member/viewpages.php?id=' . $_POST['id'].'" </script>';
}

mysqli_close($con);
