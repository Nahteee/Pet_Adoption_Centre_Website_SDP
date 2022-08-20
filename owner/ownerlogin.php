<!DOCTYPE html>
<html>
<!--Page to login as adoption centre owner-->
<head>
    <link rel="stylesheet" href="style.css">
</head>
<div class="header">
  <a href="#default" class="logo"> <img src = "../ForeverHome_Logo.png" style = "width:100px; height:100px;"></a>
  <div class="header-right">
    <a href="#home">Home</a>
    <a href="#about">About</a>
    <a class = "active" href="ownerlogin.php">Login</a>
  </div>
</div>
<title>Login as Centre Owner</title>
<body>
    <div class = "center">
    <h2>Login as an Adoption Centre Owner</h2>
    <h4>Please enter your details below: </h4>
    <br>
    <form action = "login.php" method="post">
        <p>
        <label for = "username">Username <br> </label>
        <input type="text" name="username" required="required">
    </p>
    <p>
        <label for ="password">Password<br> </label>
        <input type="text" name="password" required="required">
    </p>
        <input type="submit" value="Login">
    </form>
</div>
</body>
</html>