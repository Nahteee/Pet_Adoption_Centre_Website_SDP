<?php
session_start();
include("../conn.php");

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	// username and password sent from Form
	$username=mysqli_real_escape_string($con,$_POST['username']);
	$password=mysqli_real_escape_string($con,$_POST['password']);

	$sql="SELECT ID FROM users WHERE username='$username' and password='$password' and role='admin'";
	if ($result=mysqli_query($con,$sql))  {
	  // Return the number of rows in result set
	  $rowcount=mysqli_num_rows($result);
	}

	while($row=mysqli_fetch_array($result)){
		$id = $row['id'];
	}

	if($rowcount==1)  {
		$_SESSION['mySession']=$username;
		$_SESSION['admin_id']=$id;
		header("location: admin_users.php");
	}
	else  {
		echo "<script>alert('Your Login Name or Password is invalid. Please re login');</script>";
	}
	mysqli_close($con);
}
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--So that the browser will render the width of the page at the width of its own screen-->
  <link rel="stylesheet" href="../CSS/reset.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="../CSS/admin_login_style.css?v=<?php echo time(); ?>">
  <title></title>
</head>

<body>
  <header>
    <a href="adminindex.php" class="header-brand"><img src="../Imgs/ForeverHome Logo.png" alt=""></a>
  </header>

  <main>
    <div class="login-box">
      <h1 class="box-header">🔒 Please enter your admin login details.</h1>
      <div class="box-wrapper">
        <form method="post">
          <p><strong>Username</strong></p>
          <div class="text-box">
	            <img src="../Imgs/username.png" alt="">
							<div class="">
	            	<input type="text" name="username" required="required" placeholder="Type in your username">
							</div>
          </div>
          <p><strong>Password</strong></p>
          <div class="text-box">
            <img src="../Imgs/password.png" alt="">
						<div class="">
							<input type="password" name="password" required="required" placeholder="Type in your password">
						</div>
          </div>
          <button type="submit" name="submitBtn">Login</button>
        </form>
      </div>
    </div>
  </main>

  <footer>
    <div class="company-name">
      <a href="../index.php">ForeverHome&nbsp;</a>
      <p>© 2022 Company, Inc</p>
    </div>
  </footer>

</body>

</html>
