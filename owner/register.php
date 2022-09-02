<?php
//PHP to send new applications

include("../conn.php");

$sql="INSERT INTO users (username, password, first_name, last_name, IC, phone, email, address, income, role)

VALUES

('$_POST[username]', '$_POST[password]', '$_POST[fname]', '$_POST[lname]', '$_POST[ic]', '$_POST[phone]', '$_POST[email]', '$_POST[address]', '$_POST[income]', 'owner')";

if (!mysqli_query($con, $sql)) {
    die("Error: " . mysqli_error($con));
}
else {
    echo '<script type="text/JavaScript"> alert("Account registration successful!"); window.location.href = "../login.php"; </script>';
}

mysqli_close($con);

?>
