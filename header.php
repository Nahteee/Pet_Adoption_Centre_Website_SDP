<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="/sdp/CSS/reset.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/sdp/CSS/headerstyle.css?v=<?php echo time(); ?>">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  </head>
  <body>
    <header>
      <!-- <a href="#" class="header-brand"><img src="Imgs/ForeverHome Logo.png" alt=""></a> -->
      <nav>
        <a href="/sdp/index.php" class="header-brand"><img src="/sdp/Imgs/ForeverHome Logo.png" alt=""></a>
        <!-- <a href="#" class="brand-name">ForeverHome</a> -->
        <ul class="list-wrap">
          <li> <a href="/sdp/index.php" id="selected">Home</a> </li>
          <li> <a href="/sdp/member/browsepets.php">Pets</a> </li>
          <li> <a href="/sdp/member/browsepages.php">Centres</a> </li>
          <li> <a href="/sdp/member/indexforum.php">Forum</a> </li>
        </ul>
        <?php
        session_start();
        if (!isset($_SESSION['username'])) {
          echo '<a class="header-login" href="/sdp/login.php">
          Login
        </a>';
        }
        else {
          echo '<a class="header-login" href="/sdp/member/logout.php">
          Logout
        </a>';
      }
        ?>
      </nav>
    </header>
    <main>

    </main>
  </body>
</html>
