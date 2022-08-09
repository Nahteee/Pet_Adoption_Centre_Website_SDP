<?php
session_start();
if (!isset($_SESSION['username']))  //redirects to login.html is session is not set
    header("Location: login.html");
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "username is  " . $_SESSION["username"] . ".<br>";
echo "first name is " . $_SESSION["firstname"] . ".<br>"
?>

<a href="./profile.php">Profile</a>

<form action="logout.php" method="POST">
    <input type="hidden" name="destroySession" value="1">
    <input type="submit" value="log out" />
</form>
</body>
</html>