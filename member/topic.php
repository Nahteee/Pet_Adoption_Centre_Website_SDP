<<<<<<< HEAD
<?php
    session_start();
    require('../conn.php');
    include('header.php');
    include('navbar.php'); 
?>
<html>
    <head><title>Home Page</title></head>
    <?php include('header.php');?>
    <center>
        <div class="py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">

                        <h1>SEGS Forum</h1>
                        <br>
                        <div class="card">
        <?php
            if($_GET["id"]){
                $check = mysqli_query($con,"SELECT * FROM forum_post INNER JOIN users ON forum_post.user_ID = users.ID WHERE forum_post.topic_id=" . $_GET["id"] . "");
                if(mysqli_num_rows($check)){
                    $topic_id = $_GET["id"];
                    $_SESSION['topic_id'] = $topic_id;
                    while($row = mysqli_fetch_assoc($check)){
                        if($row['image'] == ""){
                            echo "<div class='card-header'><h4>". $row['title']."</h4>";
                        echo "<h6>By : ". $row['username']."<br> Posted on : ".$row['time']."</h6></div>";
                        echo "<div class='card-body' style='text-align: left'>". $row['description']."
                        <hr>";
                        echo "<div class='main-comment'></div>
                        <div id='error_status'></div>
                        <textarea  class='comment_textbox form-control mb-1' rows='2'></textarea>
                        <button type='button' class='btn btn-primary add_comment_btn'>comment</button>
                        <hr>
                        <div class='comment-container'></div>";
                        }
                        else{
                            echo "<div class='card-header'><h4>". $row['title']."</h4>";
                            echo "<h6>By : ". $row['username']."<br> Posted on : ".$row['time']."</h6></div>";
                            echo "<div class='card-body' style='text-align: left'>". $row['description']."
                            <br><img src='../uploads/".$row['image']."'  style='width: 350px;height:auto;'>
                            <hr>";
                            echo "<div class='main-comment'></div>
                            <div id='error_status'></div>
                            <textarea  class='comment_textbox form-control mb-1' rows='2'></textarea>
                            <button type='button' class='btn btn-primary add_comment_btn'>comment</button>
                            <hr>
                            <div class='comment-container'></div>";
                        }
                        
                        
                    }
                }else{
                    echo "topic not found";
                }
            }else{
                header("Location:indexforum.php");
            }
        ?>
                </div>
            </div>
        </div>
    </div>
</div>
        <br>
        <br>
        <a href="post.php"><button>Post topic</button></a>
    <body>

    </body>
</html>

<?php include('footer.php')   ?>
=======
<?php
    session_start();
    require('../conn.php');
    include('header.php');
    include('navbar.php'); 
?>
<html>
    <head><title>Home Page</title></head>
    <?php include('header.php');?>
    <center>
        <div class="py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">

                        <h1>SEGS Forum</h1>
                        <br>
                        <div class="card">
        <?php
            if($_GET["id"]){
                $check = mysqli_query($con,"SELECT * FROM forum_post INNER JOIN users ON forum_post.user_ID = users.ID WHERE forum_post.topic_id=" . $_GET["id"] . "");
                if(mysqli_num_rows($check)){
                    $topic_id = $_GET["id"];
                    $_SESSION['topic_id'] = $topic_id;
                    while($row = mysqli_fetch_assoc($check)){
                        if($row['image'] == ""){
                            echo "<div class='card-header'><h4>". $row['title']."</h4>";
                        echo "<h6>By : ". $row['username']."<br> Posted on : ".$row['time']."</h6></div>";
                        echo "<div class='card-body' style='text-align: left'>". $row['description']."
                        <hr>";
                        echo "<div class='main-comment'></div>
                        <div id='error_status'></div>
                        <textarea  class='comment_textbox form-control mb-1' rows='2'></textarea>
                        <button type='button' class='btn btn-primary add_comment_btn'>comment</button>
                        <hr>
                        <div class='comment-container'></div>";
                        }
                        else{
                            echo "<div class='card-header'><h4>". $row['title']."</h4>";
                            echo "<h6>By : ". $row['username']."<br> Posted on : ".$row['time']."</h6></div>";
                            echo "<div class='card-body' style='text-align: left'>". $row['description']."
                            <br><img src='../Uploads/".$row['image']."'  style='width: 350px;height:auto;'>
                            <hr>";
                            echo "<div class='main-comment'></div>
                            <div id='error_status'></div>
                            <textarea  class='comment_textbox form-control mb-1' rows='2'></textarea>
                            <button type='button' class='btn btn-primary add_comment_btn'>comment</button>
                            <hr>
                            <div class='comment-container'></div>";
                        }
                        
                        
                    }
                }else{
                    echo "topic not found";
                }
            }else{
                header("Location:indexforum.php");
            }
        ?>
                </div>
            </div>
        </div>
    </div>
</div>
        <br>
        <br>
        <a href="post.php"><button>Post topic</button></a>
    <body>

    </body>
</html>

<?php include('footer.php')   ?>
>>>>>>> Ethan
