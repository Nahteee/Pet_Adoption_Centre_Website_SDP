<?php 
//PHP to login as centre owner
include("../conn.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = mysqli_real_escape_string($con, $_POST['username']);
	$password = mysqli_real_escape_string($con, $_POST['password']);

	$sql = "SELECT * FROM users WHERE username = '$username' and password = '$password' and role = 'owner'";

	if ($result = mysqli_query($con, $sql)) {
		$rowcount = mysqli_num_rows($result);
	}
		if ($rowcount == 1) {
			$row = mysqli_fetch_array($result);
			session_start();
			$_SESSION['userID'] = $row['ID'];
			header("location: centreowner.php");
		}
		else {
			echo "Wrong username or password";
		}
}
mysqli_close($con);
?>