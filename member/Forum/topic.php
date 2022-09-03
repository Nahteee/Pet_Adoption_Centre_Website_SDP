<?php
    require('../../conn.php');
    include('../../header.php');
    include('../../session.php');
?>
<html>
    <head>
      <title>
        Home Page
      </title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>

    <style media="screen">
      .py-5 {
        padding-top: 150px;
      }
    </style>
    <body>
      <center>
          <div class="py-5">
              <div class="container">
                  <div class="row justify-content-center">
                      <div class="col-md-8">
                        <br><br><br>
                          <h1>ForeverHome Forum</h1>
                          <br>
                          <div style="position: static;" class="card">
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
                          <br><br>";
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
                              <br><img src='forum_image/".$row['image']."'  style='width: 350px;height:auto;'>
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
          <a href="post.php" style="text-decoration: none;
          color: #444;
          font-family: 'Tangerine', cursive;
          weight: 300;
          font-size: 16px;
          padding: 10px;
          border-radius: 15px;
          /* display: block; */
          /* height: auto; */
          /* width: 250px; */
          background-color: #f0c040;
          transition: 0.2s ease-in-out;
          line-height: 25px;
          margin-top: 10px;
          /* margin-left: 150px; */">Post topic</a>
          <br><br>
    </body>
</html>

<?php include('forumfooter.php')   ?>
