<?php
    include('../../header.php');
    include('../../session.php');
    require('../../conn.php');
    if(@$userid){
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

<style media="screen">
  .margin-thing {
    padding: 150px 0px;
  }
</style>
<html>
    <body>
      <div class="margin-thing">
      <head><title>Post a Forum</title></head>
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
          <input style="text-decoration: none;
          color: #444;
          font-family: 'Tangerine', cursive;
          height: 300;
          font-size: 16px;
          padding: 5px 15px;
          border-radius: 15px;
          /* display: block; */
          /* height: auto; */
          /* width: 250px; */
          background-color: #f0c040;
          transition: 0.2s ease-in-out;
          line-height: 25px;
          margin-top: 10px;
          /* margin-left: 150px; */" type="submit" name="submit" value="post">
      </center>
      </form>
      </div>
    </body>
</html>
<?php
    $t_name = @$_POST['topic_name'];
    $content = @$_POST['con'];
    if (isset($_POST['submit'])){
        // To set the folder, file name and file type
        $target_dir = "forum_image/";
        $target_file = $target_dir.basename($_FILES['image']['name']);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file))
        {
            //To get file name
            $file_name = basename($_FILES['image']['name']);
        }
        if ($t_name && $content) {
            if(strlen($t_name) >= 10 && strlen($t_name) <= 70) {

                $sql="INSERT INTO forum_post (title, description,user_ID,image)
                    VALUES ('$t_name','$content','$userid', '$file_name')";
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
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- <link rel="stylesheet" href="CSS/reset.css?v=<//?php echo time(); ?>"> -->
    <link rel="stylesheet" href="/SDP-Source-Code/CSS/footerstyle.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  </head>
  <body>
    <footer>
      <div class="footer-wrap">
        <div class="element1">
          <img src="/SDP-Source-Code/Imgs/ForeverHome Logo.png" alt="">
          <div class="socials">
            <a href="https://www.instagram.com/" target=”_blank”><i class="bi-instagram"></i></a>
            <a href="https://www.facebook.com/" target=”_blank”><i class="bi-facebook"></i></a>
            <a href="https://www.twitter.com/" target=”_blank”><i class="bi-twitter"></i></a>
          </div>
        </div>
        <div class="element3">
          <h1>Contact Us</h1>
          <ul>
            <li><strong>Contact - </strong></li>
            <li>+6012-323-5423</li>
            <li><strong>Email - </strong></li>
            <li>foreverhome@gmail.com</li>
            <li><strong>Address - </strong></li>
            <li>Bandar Utara, Batu 12 Jalan Ipoh</li>
          </ul>
        </div>
        <div class="element2">
          <h1>Useful Links</h1>
          <ul>
            <li> <a href="/SDP-Source-Code/member/browsepets.php">Pets</a> </li>
            <li> <a href="/SDP-Source-Code/member/browsepages.php">Centres</a> </li>
            <li> <a href="/SDP-Source-Code/member/Forum/indexforum.php">Forum</a> </li>
            <li> <a href="/SDP-Source-Code/member/Quiz/quiz.php">Quiz</a> </li>
          </ul>
        </div>

        <div class="element4">
          <h1> <i style="font-size: 18px;">Something wrong with our site? </i> <br> <i style="font-style: normal; height: 50;">Send us your bug report.</i> </h1>
          <a href="/SDP-Source-Code/member/sendbug.php">Bug Report</a>
          <h1> <i style="font-size: 18px;">What do you think of our website? </i> <br> <i style="font-style: normal;">Send us your feedback</i> </h1>
          <a href="/SDP-Source-Code/member/feedback.php">Feedback</a>
        </div>
      </div>
      <h2>Adoption 2022 ©. All Rights Reserved</h2>
    </footer>
  </body>
</html>
