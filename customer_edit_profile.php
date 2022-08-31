<?php
include("../session.php");
	if(isset($_POST["updateBtn"])){
		include("../conn.php");

		$sql = "UPDATE customers SET
		Name='$_POST[name]',
		Username='$_POST[username]',
		Password='$_POST[password]',
		Contact_Number='$_POST[contact]',
    Email='$_POST[email]',
    Address='$_POST[address]'

		WHERE Cust_ID=$_POST[id];";

		if (mysqli_query($con, $sql)) {
		mysqli_close($con);
		echo "<script>alert('Record updated!'); window.location.href='customer.php';</script>";
		}

	}

?>
<!DOCTYPE html>
<html>
<head>
<title>Edit Profile Details</title>
<link href="../CSS/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">
</head>

<body>
<?php
	include("../conn.php");
  $id = $_SESSION['user_id'];
	$result = mysqli_query($con,"SELECT * FROM customers WHERE Cust_ID = $id");
	$row = mysqli_fetch_array($result)
	//while($row = mysqli_fetch_array($result))
	//{
?>

<form method="post" >
<input type="hidden" name="id" value="<?php echo $row['Cust_ID'] ?>">
<div id="container">
<h2><?php echo $row["Name"] ?></h2>
<h3>Edit Profile Details</h3>
<div class="section">
  <div class="label">
    Name
  </div>
  <div class="field">
    <input type="text" value="<?php echo $row["Name"] ?>" name="name" required="required">
  </div>
</div>
<div class="section">
  <div class="label">
    Username
  </div>
  <div class="field">
    <input type="text" value="<?php echo $row["Username"] ?>" name="username" required="required">
  </div>
</div>
<div class="section">
  <div class="label">
    Password
  </div>
  <div class="field">
    <input type="text" value="<?php echo $row["Password"] ?>" name="password" required="required">
  </div>
</div>
<div class="section">
  <div class="label">
    Contact Number
  </div>
  <div class="field">
    <input type="text" value="<?php echo $row["Contact_Number"] ?>" name="contact" required="required">
  </div>
</div>
<div class="section">
  <div class="label">
    Email
  </div>
  <div class="field">
    <input type="text" value="<?php echo $row["Email"] ?>" name="email" required="required">
  </div>
</div>
<div class="section">
  <div class="label">
    Address
  </div>
  <div class="field">
    <input type="text" value="<?php echo $row["Address"] ?>" name="address" required="required">
  </div>
</div>
<div class="section">
  <div class="label">
    &nbsp;
  </div>
  <div class="field">
    <button type="submit" class="btn" name="updateBtn">Submit</button>
  </div>
	</div>
</div>
</form>
<?php
	mysqli_close($con);
?>
</body>
</html>
