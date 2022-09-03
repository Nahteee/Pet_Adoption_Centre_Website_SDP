<?php
// session_start();
include('../../header.php');
include('../../conn.php');
// include('navbar.php');
?>

<html>
<head>
    <link rel = "stylesheet" href = "../../CSS/forumstyle.css?v=<?php echo time(); ?>">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <title>Forum</title>
</head>
<div class = "center">
    <h1 style="font-size: 24px; font-family: 'Tangerine', cursive;">ForeverHome Forums</h1> <br><br><br>
    <table>
        <tr>
            <td>
                <b>Name</b>
            </td>
            <td>
                <b>Creator</b>
            </td>
            <td>
                <b>Date</b>
            </td>
        </tr>

<?php
    $check = mysqli_query($con,"SELECT * FROM forum_post INNER JOIN users ON forum_post.user_ID = users.ID");

    if(mysqli_num_rows($check) != 0){
        while($row = mysqli_fetch_assoc($check)){
            $id = $row['topic_id'];
            echo "<tr>";

            echo "<td><b><a href='topic.php?id=$id'>".$row['title']."</a></b></td>";
            echo "<td>".$row['username']."</td>";
            echo "<td>".$row['time']."</td>";
            echo "</tr>";
        }
    }else{
        echo "No topics found";
    }
    echo "</table>";
    ?>
    <br>
    <br>
    <a href="post.php" ><button style="background-color: #f0c040;  font-family: 'Tangerine', cursive; color: black; border-radius: 10px;" >Post topic</button></a>
</div>
</html>




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
