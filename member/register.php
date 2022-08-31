<?php
include("../conn.php");

if($_SERVER["REQUEST_METHOD"] == "POST")
{

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
    echo '<script type="text/JavaScript"> alert("This username has been taken. Please pick another username"); window.location.href = "createaccount.php"; </script>';

} else {
    $sql="INSERT INTO users (username, password, role, IC, email, first_name, last_name, phone, income, address)
    VALUES
    ('$_POST[user_name]', '$_POST[psw]', 'member', '$_POST[IC]',
    '$_POST[email]', '$_POST[firstname]', '$_POST[lastname]', '$_POST[new_phone]', '$_POST[income]', '$_POST[address]')";

    echo '<script type="text/JavaScript"> alert("Account registration successful!"); window.location.href = "../login.php"; </script>';

    if (!mysqli_query($con,$sql)) {
        die('Error: ' . mysqli_error($con));
    }
}

$con->close();
}
?>


<html>
<head>
  <link rel = "stylesheet" href = "../CSS/style.css">
  <title>Register for account</title>
<form method="post">
    <div class="center">
      <h1>Register</h1>
      <p>Please fill in this form to create a member account.</p>
      <hr>

      <label for="username"><b>Username</b></label> <br>
      <input name="user_name" id="user_name" required> <br>

      <label for="psw"><b>Password</b></label> <br>
      <input type="password" name="psw" id="psw" required> <br>

      <label for="email"><b>Email</b></label> <br>
      <input name="email" id="email" required> <br>

      <label for="IC"><b>IC Number</b></label> <br>
      <input  name="IC" id="IC" maxlength="12" required> <br>
      <hr>

      <label for="firstname">First name</label> <br>
      <input name="firstname" id="firstname" required> <br>

      <label for="new_Lname">Last name</label> <br>
      <input id="Lname" name="lastname" required> <br>

      <label for="new_phone">Your Phone</label> <br>
      <input id="phone" name="new_phone" maxlength="10" required> <br>

      <label for="address">Address</label> <br>
      <input type = "textarea" id="address" name="address" required> <br>

      <label for="income">Annual Income</label> <br>
      <input type="number" id="income" name="income" maxlength="12" required> <br> <br> <br>

      <button type="submit">Register</button> <br>
      <p>Already have an account? <a href="../../login.php">Log in!</a></p>
      <p>Want to register as centre owner? <a href="../../login.php">Sign up!</a></p>
    </div>
  </form>
