<?php
include("conn.php");

$sql = "UPDATE contacts SET
centre_name='$_POST[centreName]',
ssm='$_POST[centreSSM]',
location='$_POST[address]',
phone='$_POST[centrePhone]',
email='$_POST[centreEmail]',
description='$_POST[centreDesc]',
WHERE ID=$_POST[id];";

if (mysqli_query($con, $sql)) {
	mysqli_close($con);
	header('Location: centreowner.php');
}
?>