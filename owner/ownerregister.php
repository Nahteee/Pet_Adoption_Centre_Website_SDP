


<!DOCTYPE html>
<html>
<head>
<title>Register as Centre Owner</title>
<link href="../CSS/register.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">
</head>

<body>

<form action="register.php" method="post">

<div id="container">
<h2>ForeverHome</h2>
<h3>Owner Registration</h3>

	<div class="section">
		<div class="label">
			Username
		</div>
		<div class="field">
			<input type="text" name="username" required="required">
		</div>
	</div>

	<div class="section">
		<div class="label">
			Password
		</div>
		<div class="field">
			<input type="password" name="password" required="required">
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
			<input type="text" name="ic" maxlength="12" required="required">
		</div>
	</div>

  <div class="section">
		<div class="label">
			First Name
		</div>
		<div class="field">
			<input type="text" name="fname">
		</div>
	</div>

  <div class="section">
		<div class="label">
			Last Name
		</div>
		<div class="field">
			<input type="text" name="lname">
		</div>
	</div>

	<div class="section">
		<div class="label">
			Contact Number
		</div>
		<div class="field">
			<input type="text" name="phone" maxlength="10">
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
			<input type="text" name="income" maxlength="12">
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


</div>
</form>
</body>
</html>
