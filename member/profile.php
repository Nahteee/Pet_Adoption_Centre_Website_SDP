<?php
session_start();
if (!isset($_SESSION['username']))  //do not allow non members to access this page
    header("Location: login.html"); //redirects to login.html is session is not set
?>
<!DOCTYPE html>
<head>
    <link rel = "stylesheet" href = "../style.css">
    <title>Your Profile</title>
    <div class="center">
<form action="editprofile.php" method="post">
      <h1>Profile</h1>

      <hr>

      <label for="username"><b>Username</b></label> <br>
      <input name="user_name" id="user_name" value="<?php echo $_SESSION["username"] ?>" required> <br>

      <label for="email"><b>Email</b></label> <br>
      <input name="email" id="email" value="<?php echo $_SESSION["email"] ?>" required> <br>

      <label for="IC"><b>IC Number</b></label> <br>
      <input type=number name="IC" id="IC" maxlength="12" value="<?php echo $_SESSION["IC"] ?>" required> <br>
      <hr>

      <label for="firstname"><b>First name</b></label> <br>
      <input name="firstname" id="firstname" value="<?php echo $_SESSION["firstname"] ?>" required> <br>

      <label for="new_Lname">Last name</label> <br>
      <input id="Lname" name="lastname" value="<?php echo $_SESSION["lastname"] ?>" required> <br>

      <label for="new_phone">Your Phone</label> <br>
      <input type=number id="phone" name="new_phone" maxlength="10" value="<?php echo $_SESSION["phone"] ?>" required> <br>

      <label for="address">Address</label> <br>
      <input id="address" name="address" value="<?php echo $_SESSION["address"] ?>" required> <br>

      <label for="income">Annual Income</label> <br>
      <input type="number" id="income" name="income" maxlength="12" value="<?php echo $_SESSION["income"] ?>" required> <br> <br> <br>

      <button type="submit">Save</button>
    </div>
  
  </form>
