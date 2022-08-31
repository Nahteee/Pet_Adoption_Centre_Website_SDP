<?php
 if (isset($_POST['submitBtn'])) {
	include("conn.php");


	$sql="INSERT INTO customers (Username, Password, Name, Contact_Number, Email, Address) VALUES ('$_POST[Username]','$_POST[Password]','$_POST[Name]','$_POST[Contact_Number]','$_POST[Email]','$_POST[Address]')";

	if (!mysqli_query($con,$sql)){
		die('Error: ' . mysqli_error($con));
	}
	else {
		echo '<script>alert("Successfully registered!");
		window.location.href= "index.php";
		</script>';
	}

	mysqli_close($con);
 }
?>

<!DOCTYPE html>
<html>
<head>
<title>User Registration</title>
<link href="CSS/style.css" rel="stylesheet" type="text/css">
</head>

<body>

<form method="post">

<div id="container">
<h2>EcoFresh</h2>
<h3>User Registration</h3>
	<div class="section">
		<div class="label">
			Username
		</div>
		<div class="field">
			<input type="text" name="Username" required="required">
		</div>
	</div>
	<div class="section">
		<div class="label">
			Password
		</div>
		<div class="field">
			<input type="password" name="Password" required="required">
		</div>
	</div>
	<div class="section">
		<div class="label">
			Name
		</div>
		<div class="field">
			<input type="text" name="Name" required="required">
		</div>
	</div>

	<div class="section">
		<div class="label">
			Contact Number
		</div>
		<div class="field">
			<input type="text" name="Contact_Number">
		</div>
	</div>
  <div class="section">
    <div class="label">
      Email Address
    </div>
    <div class="field">
      <input type="email" name="Email" required="required">
    </div>
  </div>
  <div class="section">
		<div class="label">
			Home Address
		</div>
		<div class="field" >
			<textarea required="required" name="Address"></textarea>
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


</div>
</form>
</body>
</html>
