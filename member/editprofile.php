<?php
include("../conn.php");

session_start();
$sql = "SELECT * FROM users";
$result = $con->query($sql);
$valid = 1;

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if ($row["username"] == $_POST['user_name']){
            if ($_POST['user_name'] != $_SESSION["username"]){
                $valid = 0;
            }

        }
    }
}

if ($valid == 0){
    echo '<script type="text/JavaScript"> alert("This username has been taken. Please pick another username"); window.location.href = "profile.php"; </script>';
}

else {
    $id = $_SESSION['auth_user_id'];

    $sql = "UPDATE users SET
    username = '$_POST[user_name]',
    IC = '$_POST[IC]',
    email = '$_POST[email]',
    first_name = '$_POST[firstname]',
    last_name = '$_POST[lastname]',
    phone = '$_POST[new_phone]',
    income = '$_POST[income]',
    address = '$_POST[address]'

    WHERE ID = $id;";
}

if (!mysqli_query($con,$sql)) {
    die('Error: ' . mysqli_error($con));
} else {
    echo '<script type="text/JavaScript"> alert("Your personal information has been changed, please log back in again"); window.location.href = "login.html"; </script>';
}

$con->close();

?>
