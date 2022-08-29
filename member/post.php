<<<<<<< HEAD
<?php
    session_start();
    require('../conn.php');
    if(@$_SESSION['auth_user_id']){
?>
<script type='text/javascript'>
    function preview_image(event) 
    {
    var reader = new FileReader();
    reader.onload = function()
    {
    var output = document.getElementById('output_image');
    output.src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
    }
</script>
<html>
    <head><title>Post a Forum</title></head>
    <?php include('header.php');?>
    <?php include('navbar.php');?>
    <form action ="post.php" method="POST" enctype="multipart/form-data"> 
    <center>
        <h2>Post a Forum</h2>
        <br>
        Topic name:<br><input type="text" name="topic_name" style="width:400px"><br>
        <br>
        Content:<br>
        <textarea name="con" style="resize:none; width:400px;height:300px"></textarea>
        <br><br>
        <img style='width: 350px;height:auto;' id="output_image"/>
        <br>
        Upload Image:
        <input type="file" name="image" onchange="preview_image(event)">
        <br><br>
        <input type="submit" name="submit" value="post">
    </center>
    </form>
    <body>
    </body>
</html>
<?php
    $t_name = @$_POST['topic_name'];
    $content = @$_POST['con'];
    $post_user = $_SESSION['username'];
    if (isset($_POST['submit'])){
        // To set the folder, file name and file type
        $target_dir = "../uploads/";
        $target_file = $target_dir.basename($_FILES['image']['name']);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file))
        {
            //To get file name
            $file_name = basename($_FILES['image']['name']);
        }
        if ($t_name && $content) {
            if(strlen($t_name) >= 10 && strlen($t_name) <= 70) {
                
                $sql="INSERT INTO forum_post (title, description,user_ID,image) 
                    VALUES ('$t_name','$content','".$_SESSION['auth_user_id']."', '$file_name')";
                    if (!mysqli_query($con,$sql)){
                        die('Error: ' . mysqli_error($con));
                    }
                    else {
                        echo "<script>alert('Post Successful!!');window.location.href='indexforum.php';</script>";
                    }
            }
            else {
                echo "<script>alert('Topic name must be at least 10 and 70 characters long');</script>";
            }
        }
        else {
            echo "<script>alert('Please fill in the fields!');</script>";
        }
    }

    }
    else {
        echo "<script>alert('You have to Log In before you post anything!');window.location.href='indexforum.php';</script>";
    }

?>
=======
<?php
    session_start();
    require('../conn.php');
    if(@$_SESSION['userID']){
?>
<script type='text/javascript'>
    function preview_image(event) 
    {
    var reader = new FileReader();
    reader.onload = function()
    {
    var output = document.getElementById('output_image');
    output.src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
    }
</script>
<html>
    <head><title>Post a Forum</title></head>
    <?php include('header.php');?>
    <?php include('navbar.php');?>
    <form action ="post.php" method="POST" enctype="multipart/form-data"> 
    <center>
        <h2>Post a Forum</h2>
        <br>
        Topic name:<br><input type="text" name="topic_name" style="width:400px"><br>
        <br>
        Content:<br>
        <textarea name="con" style="resize:none; width:400px;height:300px"></textarea>
        <br><br>
        <img style='width: 350px;height:auto;' id="output_image"/>
        <br>
        Upload Image:
        <input type="file" name="image" onchange="preview_image(event)">
        <br><br>
        <input type="submit" name="submit" value="post">
    </center>
    </form>
    <body>
    </body>
</html>
<?php
    $t_name = @$_POST['topic_name'];
    $content = @$_POST['con'];
    $post_user = $_SESSION['username'];
    if (isset($_POST['submit'])){
        // To set the folder, file name and file type
        $target_dir = "../Uploads/";
        $target_file = $target_dir.basename($_FILES['image']['name']);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file))
        {
            //To get file name
            $file_name = basename($_FILES['image']['name']);
        }
        if ($t_name && $content) {
            if(strlen($t_name) >= 10 && strlen($t_name) <= 70) {
                
                $sql="INSERT INTO forum_post (title, description,user_ID,image) 
                    VALUES ('$t_name','$content','".$_SESSION['userID']."', '$file_name')";
                    if (!mysqli_query($con,$sql)){
                        die('Error: ' . mysqli_error($con));
                    }
                    else {
                        echo "<script>alert('Post Successful!!');window.location.href='indexforum.php';</script>";
                    }
            }
            else {
                echo "<script>alert('Topic name must be at least 10 and 70 characters long');</script>";
            }
        }
        else {
            echo "<script>alert('Please fill in the fields!');</script>";
        }
    }

    }
    else {
        echo "<script>alert('You have to Log In before you post anything!');window.location.href='indexforum.php';</script>";
    }

?>
>>>>>>> Ethan
<?php include('footer.php');?>