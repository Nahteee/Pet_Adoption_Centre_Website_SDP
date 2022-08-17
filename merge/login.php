<?php
include("dbcon.php");

$sql = "SELECT * FROM users";
$result = $con->query($sql);

session_start();

$inputuser = $_POST[uname];
$inputpass = $_POST[psw];

$success = 0;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if  ($row["username"] == $inputuser){
            if ($row["password"] == $inputpass){
                $_SESSION["auth_user_id"] = $row["ID"];
                $_SESSION["firstname"] = $row["first_name"];
                $_SESSION["lastname"] = $row["last_name"];
                $_SESSION["phone"] = $row["phone"];
                $_SESSION["IC"] = $row["IC"];
                $_SESSION["email"] = $row["email"];
                $_SESSION["address"] = $row["address"];
                $_SESSION["income"] = $row["income"];
                $_SESSION["username"] = $row["username"];
                $_SESSION["userRole"] = $row["role"];
                $success = 1;
                echo '<script type="text/JavaScript"> window.location.href = "index_mem.php"; </script>'; 
                #break 1;
            }

        }


    }
}

if ($success == 0){
    echo '<script type="text/JavaScript"> alert("Username or password incorrect."); window.location.href = "login.html"; </script>';
}
?>