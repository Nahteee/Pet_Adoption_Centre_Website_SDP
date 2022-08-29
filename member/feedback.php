<?php
// session_start();
include("../conn.php");
include("../session.php");

if(isset($_POST['submit'])){
    $title = $_POST['title'];
      $content = $_POST['content'];
    $sql="INSERT INTO feedback (user_ID, title, description)
    VALUES ('$userid','$title','$content')";

    if (!mysqli_query($con,$sql)){
        die('Error: ' . mysqli_error($con));
    }
    else {
        echo '<script>alert("Submitted Successful!");
        window.location.href= "index_mem.php";
        </script>';
    }
      mysqli_close($con);

  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FeedBack to Us!</title>
    <style>
    input {
      width: 250px;
      padding: 8px;
      margin: 3px 0 11px 0;
      display: inline-block;
      font-size:12pt;
      text-decoration: none;
    }
    textarea{
      resize:none;
    }
  </style>
</head>

<body>
    <form method="post">
        <center>
            <h1>Send a Feedback to Us!</h1>
            <label for="title">Title:</label><br>
            <input type="text" value="" name="title" placeholder="Type a title" required><br>
            <label for="des">Description:</label><br>
            <textarea name="content" value="" cols="40" rows="20" required></textarea>
            <br><input type="submit" name="submit" value="Send">
        </center>
    </form>
</body>

</html>
