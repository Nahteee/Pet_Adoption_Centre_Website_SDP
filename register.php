<?php
include("conn.php");

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
    echo '<script type="text/JavaScript"> alert("This username has been taken. Please pick another username"); window.location.href = "register.php"; </script>';

} else {
    $sql="INSERT INTO users (username, password, role, IC, email, first_name, last_name, phone, income, address)
    VALUES
    ('$_POST[user_name]', '$_POST[psw]', 'member', '$_POST[IC]',
    '$_POST[email]', '$_POST[firstname]', '$_POST[lastname]', '$_POST[new_phone]', '$_POST[income]', '$_POST[address]')";

    echo '<script type="text/JavaScript"> alert("Account registration successful!"); window.location.href = "login.php"; </script>';

    if (!mysqli_query($con,$sql)) {
        die('Error: ' . mysqli_error($con));
    }
}

$con->close();
}
?>


<!DOCTYPE html>
<html>
<head>
<title>User Registration</title>
<link href="CSS/register.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">
</head>

<body>

<form method="post">

<div id="container">
<h2>ForeverHome</h2>
<h3>Member Registration</h3>

	<div class="section">
		<div class="label">
			Username
		</div>
		<div class="field">
			<input type="text" name="user_name" required="required">
		</div>
	</div>

	<div class="section">
		<div class="label">
			Password
		</div>
		<div class="field">
			<input type="password" name="psw" required="required">
		</div>
	</div>

  <div class="section">
    <div class="label">
      Email Address
    </div>
    <div class="field">
      <input type="email" name="email" required="required">
    </div>
  </div>

	<div class="section">
		<div class="label">
			IC Number
		</div>
		<div class="field">
			<input type="text" name="IC" maxlength="12" required="required">
		</div>
	</div>

  <div class="section">
		<div class="label">
			First Name
		</div>
		<div class="field">
			<input type="text" name="firstname">
		</div>
	</div>

  <div class="section">
		<div class="label">
			Last Name
		</div>
		<div class="field">
			<input type="text" name="lastname">
		</div>
	</div>

	<div class="section">
		<div class="label">
			Contact Number
		</div>
		<div class="field">
			<input type="text" name="new_phone" maxlength="10">
		</div>
	</div>

  <div class="section">
		<div class="label">
			Home Address
		</div>
		<div class="field" >
			<textarea required="required" name="address"></textarea>
		</div>
	</div>

  <div class="section">
		<div class="label">
			Annual Income
		</div>
		<div class="field">
			<input type="number" name="income" maxlength="12">
		</div>
	</div>

	<div class="section">
		<div class="label">
			&nbsp;
		</div>
		<div class="field">
			<button type="submit" class="btn" name="submitBtn">Register</button>
			<button type="reset" class="btn">Reset</button>
		</div>
	</div>

  <p>Already have an account? <a href="login.php">Log in!</a></p>
  <p>Want to register as centre owner? <a href="owner/ownerregister.php">Sign up!</a></p>


</div>
</form>
</body>
</html>
