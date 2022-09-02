<?php
include("../conn.php");
include("../header.php");
include("../session.php");
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $status = 0;
    $sql = "INSERT INTO tickets (user_ID,title,description,status) VALUES ('$userid','$title','$content','$status')";

    if (!mysqli_query($con,$sql)){
        die('Error: ' . mysqli_error($con));
    }
    else {
        echo '<script>alert("Submitted Successful!");
        window.location.href= "view_bug_status.php";
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
    <title>Send Bug Report</title>
    <style>
        .bug-form {
          padding-top: 150px;
        }

        input {
            width: 250px;
            padding: 8px;
            margin: 3px 0 11px 0;
            display: inline-block;
            font-size: 12pt;
            text-decoration: none;
        }

        textarea {
            resize: none;
        }
    </style>
</head>

<body>
    <form method="post" class="bug-form">
        <center>
            <h1>Send a Bug Report</h1>
            <label for="title">Title:</label><br>
            <input type="text" value="" name="title" placeholder="Type a title" required><br>
            <label for="des">Description:</label><br>
            <textarea name="content" value="" cols="40" rows="20" required></textarea>
            <br><input type="submit" name="submit" value="Send">
            <input type="hidden" name="status" value="Not Fixed">
        </center>
    </form>
    <center><a href="../index.php" class="Hbtn">Back</a></center>
    <br><br><br>
    <footer>
    	<?php include("../footer.php") ?>
    </footer>
</body>

</html>
