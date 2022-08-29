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
			header("location: centreowner.php");
		}
		else {
			echo "Wrong username or password";
		}
}
mysqli_close($con);
?>