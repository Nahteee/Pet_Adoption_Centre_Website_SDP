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
    password = '$_POST[psw]',
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
<html>
<head>
<title>User Registration</title>
<link href="../CSS/register.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">
</head>

<body style="background-color: #F4ECD0;">

<form method="post">
  <?php
    include("../conn.php");
    $id = $_SESSION['userID'];
    $result = mysqli_query($con,"SELECT * FROM users WHERE ID = $id");
    $row = mysqli_fetch_array($result);
    $_SESSION["auth_user_id"] = $row["ID"];
    $_SESSION["psw"] = $row["password"];
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
<div id="container" style="background-color: #F4ECD0;">
<h2>ForeverHome</h2>
<h3>Your Profile</h3>

	<div class="section">
		<div class="label">
			Username
		</div>
		<div class="field">
			<input type="text" name="user_name" value="<?php echo $_SESSION["username"] ?>" required="required">
		</div>
	</div>

	<div class="section">
		<div class="label">
			Password
		</div>
		<div class="field">
			<input type="text" name="psw" value="<?php echo $_SESSION["psw"] ?>" required="required">
		</div>
	</div>

  <div class="section">
    <div class="label">
      Email Address
    </div>
    <div class="field">
      <input type="email" name="email" value="<?php echo $_SESSION["email"] ?>" required="required">
    </div>
  </div>

	<div class="section">
		<div class="label">
			IC Number
		</div>
		<div class="field">
			<input type="text" name="IC" maxlength="12" value="<?php echo $_SESSION["IC"] ?>" required="required">
		</div>
	</div>

  <div class="section">
		<div class="label">
			First Name
		</div>
		<div class="field">
			<input type="text" name="firstname" value="<?php echo $_SESSION["firstname"] ?>" required="required">
		</div>
	</div>

  <div class="section">
		<div class="label">
			Last Name
		</div>
		<div class="field">
			<input type="text" name="lastname" value="<?php echo $_SESSION["lastname"] ?>" required="required">
		</div>
	</div>

	<div class="section">
		<div class="label">
			Contact Number
		</div>
		<div class="field">
			<input type="text" name="new_phone" maxlength="10" value="<?php echo $_SESSION["phone"] ?>" required="required">
		</div>
	</div>

  <div class="section">
		<div class="label">
			Home Address
		</div>
		<div class="field" >
			<textarea required="required" name="address"><?php echo $_SESSION["address"] ?></textarea>
		</div>
	</div>

  <div class="section">
		<div class="label">
			Annual Income
		</div>
		<div class="field">
			<input type="text" name="income" maxlength="12" value="<?php echo $_SESSION["income"] ?>" required="required">
		</div>
	</div>

	<div class="section">
		<div class="label">
			&nbsp;
		</div>
		<div class="field">
			<button type="submit" class="btn" name="submitBtn">Save</button>
      <button type="reset" onclick="location.href='../index.php';" class="btn">Exit</button>
		</div>
	</div>



</div>
</form>
</body>
</html>
