<?php
include("../conn.php");


if($_SERVER["REQUEST_METHOD"] == "POST")
{
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
    echo '<script type="text/JavaScript"> alert("Your personal information has been changed, please log back in again"); window.location.href = "../login.php"; </script>';
}

$con->close();
}
?>


<?php
session_start();
if (!isset($_SESSION['username']))  //do not allow non members to access this page
    header("Location: login.php"); //redirects to login.html is session is not set
?>
<!DOCTYPE html>
<head>
    <link rel = "stylesheet" href = "../style.css">
    <title>Your Profile</title>
    <div class="center">
<form method="post">
      <h1>Profile</h1>

      <hr>

      <?php
      	include("../conn.php");
        $id = $_SESSION['userID'];
      	$result = mysqli_query($con,"SELECT * FROM users WHERE ID = $id");
      	$row = mysqli_fetch_array($result);
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
      	//while($row = mysqli_fetch_array($result))
      	//{
      ?>

      <label for="username"><b>Username</b></label> <br>
      <input name="user_name" id="user_name" value="<?php echo $_SESSION["username"] ?>" required> <br>

      <label for="email"><b>Email</b></label> <br>
      <input name="email" id="email" value="<?php echo $_SESSION["email"] ?>" required> <br>

      <label for="IC"><b>IC Number</b></label> <br>
      <input  name="IC" id="IC" maxlength="12" value="<?php echo $_SESSION["IC"] ?>" required> <br>
      <hr>

      <label for="firstname"><b>First name</b></label> <br>
      <input name="firstname" id="firstname" value="<?php echo $_SESSION["firstname"] ?>" required> <br>

      <label for="new_Lname">Last name</label> <br>
      <input id="Lname" name="lastname" value="<?php echo $_SESSION["lastname"] ?>" required> <br>

      <label for="new_phone">Your Phone</label> <br>
      <input  id="phone" name="new_phone" maxlength="10" value="<?php echo $_SESSION["phone"] ?>" required> <br>

      <label for="address">Address</label> <br>
      <input id="address" name="address" value="<?php echo $_SESSION["address"] ?>" required> <br>

      <label for="income">Annual Income</label> <br>
      <input type="number" id="income" name="income" maxlength="12" value="<?php echo $_SESSION["income"] ?>" required> <br> <br> <br>

      <input type="submit" value = "Save">
    </div>

  </form>
