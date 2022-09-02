<?php

include("../conn.php");

$sql="INSERT INTO adoption_request ( user_ID, petID, remarks, centre_ID, status)

VALUES

('$_POST[userID]', '$_POST[petID]', '$_POST[remarks]', '$_POST[centreID]', 0)";

if (!mysqli_query($con, $sql)) {
    die("Error: " . mysqli_error($con));
}
else {
    echo '<script type="text/JavaScript"> alert("Adoption Application Submitted!"); window.location.href = "/SDP-Source-Code/member/browsepets.php"; </script>';

}

mysqli_close($con);

?>
