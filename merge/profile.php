<?php
session_start();
if (!isset($_SESSION['username']))  //do not allow non members to access this page
    header("Location: login.html"); //redirects to login.html is session is not set
?>
<!DOCTYPE html>
<form action="editprofile.php" method="post">
    <div class="container">
      <h1>Profile</h1>

      <hr>

      <label for="username"><b>Username</b></label>
      <input name="user_name" id="user_name" value="<?php echo $_SESSION["username"] ?>" required>

      <label for="email"><b>Email</b></label>
      <input name="email" id="email" value="<?php echo $_SESSION["email"] ?>" required>

      <label for="IC"><b>IC Number</b></label>
      <input type=number name="IC" id="IC" maxlength="12" value="<?php echo $_SESSION["IC"] ?>" required>
      <hr>

      <label for="firstname"><b>First name</b></label>
      <input name="firstname" id="firstname" value="<?php echo $_SESSION["firstname"] ?>" required> 

      <label for="new_Lname">Last name</label>
      <input id="Lname" name="lastname" value="<?php echo $_SESSION["lastname"] ?>" required>

      <label for="new_phone">Your Phone</label>
      <input type=number id="phone" name="new_phone" maxlength="10" value="<?php echo $_SESSION["phone"] ?>" required>

      <label for="address">Address</label>
      <input id="address" name="address" value="<?php echo $_SESSION["address"] ?>" required>

      <label for="income">Annual Income</label>
      <input type="number" id="income" name="income" maxlength="12" value="<?php echo $_SESSION["income"] ?>" required>

      <button type="submit">Save</button>
    </div>
  
  </form>
