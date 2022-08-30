<?php
include("../conn.php");

$sql = "SELECT * FROM users";
$result = $con->query($sql);

$valid = 1;

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if ($row["username"] == $_POST['user_name']){
            $valid = 0;
        }
    }
}


if ($valid == 0){
    echo '<script type="text/JavaScript"> alert("This username has been taken. Please pick another username"); window.location.href = "register.html"; </script>';

} else {
    $sql="INSERT INTO users (username, password, role, IC, email, first_name, last_name, phone, income, address)
    VALUES
    ('$_POST[user_name]', '$_POST[psw]', 'member', '$_POST[IC]',
    '$_POST[email]', '$_POST[firstname]', '$_POST[lastname]', '$_POST[new_phone]', '$_POST[income]', '$_POST[address]')";

    echo '<script type="text/JavaScript"> alert("Account registration successful!"); window.location.href = "login.html"; </script>';

    if (!mysqli_query($con,$sql)) {
        die('Error: ' . mysqli_error($con));
    }
}

$con->close();

?>
