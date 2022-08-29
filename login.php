<?php
session_start();
include("conn.php");

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	// username and password sent from Form
	$username=mysqli_real_escape_string($con,$_POST['username']);
	$password=mysqli_real_escape_string($con,$_POST['password']);

	$sql="SELECT ID, role FROM users WHERE username='$username' and password='$password' and role!='admin'";
	if ($result=mysqli_query($con,$sql))  {
	  // Return the number of rows in result set
	  $rowcount=mysqli_num_rows($result);
	}

	while($row=mysqli_fetch_array($result)){
		$id = $row['ID'];
    $role = $row['role'];
	}

	if($rowcount==1 && $role=='member')  {
		$_SESSION['username']=$username;
		$_SESSION['userID']=$id;
		header("location: index.php");
	}
  else if($rowcount==1  && $role=='owner')  {
		$_SESSION['username']=$username;
		$_SESSION['userID']=$id;
		header("location: owner/centreowner.php");
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodePen - Wavy login form</title>
    <link rel="stylesheet" href="CSS/loginstyle.css?v=<?php echo time(); ?>">
    <link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">
  </head>
  <body>
    <div class="img-container" onclick="location.href='index.php';"><img src="Imgs/ForeverHome Logo.png" alt=""></div>
    <form class="login" method="post">
      <input type="text" name="username" required="required" placeholder="Username">
      <input type="password" name="password" required="required" placeholder="Password">
      <button type="submit" name="submitBtn">Login</button>
      <div class="register-btn" onclick="location.href='register.php';">Register</div>
    </form>

  </body>
</html>
