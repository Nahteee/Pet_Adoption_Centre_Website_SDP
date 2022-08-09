<?php
include("connection.php");

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

$username = $_POST[username];
$password = $_POST[psw];
$firstname = $_POST[firstname];
$lastname = $_POST[lastname];
$IC = $_POST[IC];
$phone = $_POST[new_phone];
$email = $_POST[email];
$address = $_POST[address];
$income = $_POST[income];
$role = "member";

$valid = 1;

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if ($row["username"] == $username){
            $valid = 0;
        }
    }
}

if ($valid == 0){
    echo '<script type="text/JavaScript"> alert("This username has been taken. Please pick another username"); window.location.href = "/sdp/register.html"; </script>';
} else {
    $sql="INSERT INTO users (ID, username, 'password', 'role', IC, email, first_name, last_name, phone, income, 'address')
    VALUES
    (3, '$username','$password', '$role','$IC',
    '$email' '$firstname','$lastname','$phone', '$income', '$address')"; 
    //echo '<script type="text/JavaScript"> window.location.href = "/sdp/login.html"; </script>';
    if (!mysqli_query($conn,$sql)) {
        die('Error: ' . mysqli_error($conn)); 
    };
};

$conn->close();

?>