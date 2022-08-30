<?php
// include("../header.php");
?>

<html>
<head>
  <link rel = "stylesheet" href = "../CSS/style.css">
  <title>Register for account</title>
<form action="register.php" method="post">
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
      <input type=number name="IC" id="IC" maxlength="12" required> <br>
      <hr>

      <label for="firstname">First name</label> <br>
      <input name="firstname" id="firstname" required> <br>

      <label for="new_Lname">Last name</label> <br>
      <input id="Lname" name="lastname" required> <br>

      <label for="new_phone">Your Phone</label> <br>
      <input type="number" id="phone" name="new_phone" maxlength="10" required> <br>

      <label for="address">Address</label> <br>
      <input type = "textarea" id="address" name="address" required> <br>

      <label for="income">Annual Income</label> <br>
      <input type="number" id="income" name="income" maxlength="12" required> <br> <br> <br>

      <button type="submit">Register</button> <br>
      <p>Already have an account? <a href="../login.php">Log in!</a></p>
    </div>
  </form>
