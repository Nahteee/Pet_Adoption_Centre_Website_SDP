<?php
session_start();
if (!isset($_SESSION['username']))  //do not allow non members to access this page
    header("Location: login.html"); //redirects to login.html is session is not set
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "username is  " . $_SESSION["username"] . ".<br>";
echo "first name is " . $_SESSION["firstname"] . ".<br>";
echo "role is " . $_SESSION["userRole"] . ".<br>"
?>

<a href="./profile.php">Profile</a>
<a href="indexforum.php">Forum</a>
<a href="sendbug.php">Send a Bug Report</a>
<a href="feedback.php">give us FeedBack</a>


<form action="logout.php" method="POST">
    <input type="hidden" name="destroySession" value="1">
    <input type="submit" value="log out" />
</form>
</body>
</html>