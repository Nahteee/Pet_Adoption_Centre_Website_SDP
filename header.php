<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="/SDP-Source-Code/CSS/reset.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/SDP-Source-Code/CSS/headerstyle.css?v=<?php echo time(); ?>">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  </head>
  <body>
    <header>
      <!-- <a href="#" class="header-brand"><img src="Imgs/ForeverHome Logo.png" alt=""></a> -->
      <nav>

        <?php
        session_start();
        if (!isset($_SESSION['username'])) {
          echo '<a href="#" class="header-brand"><img src="/SDP-Source-Code/Imgs/ForeverHome Logo.png" alt=""></a>';
        }
        else {
          echo'<div class="header-brand" onclick="toggleNav()">
          <a><img src="/SDP-Source-Code/Imgs/ForeverHome Logo.png"  alt=""></a>
          <i class="bi bi-chevron-double-right"></i>
          </div>';
        }
         ?>
        <!-- <a href="#" class="brand-name">ForeverHome</a> -->
        <ul class="list-wrap">
          <li> <a href="/SDP-Source-Code/index.php">Home</a> </li>
          <li> <a href="/SDP-Source-Code/member/browsepets.php">Pets</a> </li>
          <li> <a href="/SDP-Source-Code/member/browsepages.php">Centres</a> </li>
          <li> <a href="/SDP-Source-Code/member/Forum/indexforum.php">Forum</a> </li>
        </ul>
        <?php
        if (!isset($_SESSION['username'])) {
          echo '<a class="header-login" href="/SDP-Source-Code/login.php">
            Login
          </a>';
        }
        else {
          echo '<div class="header-case">
            <div class="uhh-p-class"><i class="bi bi-chevron-down"></i>&nbsp';echo $_SESSION['username'];
              echo '<ul class="uhh-class">
                <li><a href="/SDP-Source-Code/member/profile.php">Edit profile</a></li>';
                if (isset($_SESSION['owner'])) {
                 echo '<li><a href="#">Edit page details</a></li>';
               }
               echo '<li><a href="/SDP-Source-Code/logout.php">Logout</a></li>
             </ul>
           </div>
           <div class="profile-image">
             <i class="bi bi-person-fill"></i>
           </div>
           <!-- <div class="menu-btn">
             <i class="bi bi-columns-gap"></i>
           </div> -->
         </div>';
        }



        ?>

      </nav>

      <?php if (isset($_SESSION['username'])) {
        echo '<aside class="nav-sidebar">
            <ul>
              <li> <span>Hello!</span> </li>
              <li> <a href="/SDP-Source-Code/member/Quiz/quiz.php">Take our Pet Quiz!</a> </li>';
              if (isset($_SESSION['owner'])) {
                echo '<li> <a href="#">View page request</a> </li>';
              }
              else {
                echo '<li> <a href="#">View pending requests</a> </li>';
              }
              if (isset($_SESSION['owner'])) {
                echo '<li> <a href="#">View adoption bookings</a> </li>';
              }
              echo '<li> <a href="#">View forum posts</a> </li>
              <li> <a href="#">View bug report status</a> </li>
              <li> <a href="/SDP-Source-Code/member/sendbug.php">Send Bug Report</a> </li>
              <li> <a href="/SDP-Source-Code/member/feedback.php">Send Site Feedback</a> </li>
            </ul>
        </aside>';
      } ?>

    </header>
    <main>

    </main>
  </body>
  <script src="/SDP-Source-Code/JS/main.js?v=<?php echo time(); ?>"></script>
</html>
