<?php
    session_start();
    require('dbcon.php');
    if(@$_SESSION['authuser_name']){
?>
<html>
    <head><title>Post a Forum</title></head>
    <?php include('header.php');?>
    <?php include('navbar.php');?>
    <form action ="post.php" method="POST"> 
    <center>
        <h2>Post a Forum</h2>
        <br>
        Topic name:<br><input type="text" name="topic_name" style="width:400px"><br>
        <br>
        Content:<br>
        <textarea name="con" style="resize:none; width:400px;height:300px"></textarea>
        <br><br>
        <input type="submit" name="submit" value="Post">
    </center>
    </form>
    <body>
    </body>
</html>
<?php
    $t_name = @$_POST['topic_name'];
    $content = @$_POST['con'];
    $post_user = $_SESSION['authuser_name'];
    if(isset($_POST['submit'])){
        if($t_name && $content){
            if(strlen($t_name) >= 10 && strlen($t_name) <= 70){
                $sql="INSERT INTO topics (topic_name, topic_content, topic_creator,topic_creator_id) 
                    VALUES ('$t_name','$content','$post_user','".$_SESSION['auth_user_id']."')";
                    if (!mysqli_query($con,$sql)){
                        die('Error: ' . mysqli_error($con));
                    }
                    else {
                        echo "<script>alert('Post Successful!!');window.location.href='index.php';</script>";
                    }
            }else{
                echo "<script>alert('Topic name must be at least 10 and 70 characters long');</script>";
            }
        }else{
            echo "<script>alert('Please fill in the fields!');</script>";
        }
    }

    }else{
        echo "<script>alert('You have to Log In before you post anything!');window.location.href='index.php';</script>";
    }

?>
<?php include('footer.php');?>