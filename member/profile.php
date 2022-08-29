<?php
include("../conn.php");
include("../header.php");
session_start();
if(!isset($_SESSION['username'])) {
    header("Location: ../login.php");
}

$uID = $_SESSION['userID'];
$result = mysqli_query($con, "SELECT * FROM users WHERE ID = $uID");

while($row=mysqli_fetch_array($result)) {

?>
<!DOCTYPE html>
<head>
    <link rel = "stylesheet" href = "../CSS/style.css">
    <title>Your Profile</title>
    <div class="center">
<form action= "editprofile.php" method="post">
      <h1>Profile</h1>

      <hr>

      <label for="username"><b>Username</b></label> <br>
      <input name="user_name" id="user_name" value="<?php echo $row['username'] ?>" required> <br>

      <label for="email"><b>Email</b></label> <br>
      <input name="email" id="email" value="<?php echo $row['email'] ?>" required> <br>

      <label for="IC"><b>IC Number</b></label> <br>
      <input type=number name="IC" id="IC" maxlength="12" value="<?php echo $row['IC'] ?>" required> <br>
      <hr>

      <label for="firstname"><b>First name</b></label> <br>
      <input name="firstname" id="firstname" value="<?php echo $row['first_name'] ?>" required> <br>

      <label for="new_Lname">Last name</label> <br>
      <input id="Lname" name="last_name" value="<?php echo $row['lastname'] ?>" required> <br>

      <label for="new_phone">Your Phone</label> <br>
      <input type=number id="phone" name="new_phone" maxlength="10" value="<?php echo $row['phone'] ?>" required> <br>

      <label for="address">Address</label> <br>
      <input id="address" name="address" value="<?php echo $row['address'] ?>" required> <br>

      <label for="income">Annual Income</label> <br>
      <input type="number" id="income" name="income" maxlength="12" value="<?php echo $row['income'] ?>" required> <br> <br> <br>

      <input type="submit" value = "Save">
    </div>
  
  </form>

<?php
}
?>
