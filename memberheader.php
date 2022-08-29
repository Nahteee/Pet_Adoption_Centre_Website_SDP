<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="CSS/reset.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="CSS/headerstyle.css?v=<?php echo time(); ?>">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  </head>
  <body>
    <header>
      <!-- <a href="#" class="header-brand"><img src="Imgs/ForeverHome Logo.png" alt=""></a> -->
      <nav>
        <div class="header-brand" onclick="toggleNav()">
        <a><img src="Imgs/ForeverHome Logo.png"  alt=""></a>
        <i class="bi bi-chevron-double-right"></i>
        </div>
        <!-- <a href="#" class="brand-name">ForeverHome</a> -->
        <ul class="list-wrap">
          <li> <a href="index.php" id="selected">Home</a> </li>
          <li> <a href="member/browsepets.php">Pets</a> </li>
          <li> <a href="member/browsepages.php">Centres</a> </li>
          <li> <a href="admin_view_customers.php">Forum</a> </li>
        </ul>
        <div class="header-case">
          <div class="uhh-p-class"><i class="bi bi-chevron-down"></i>&nbspUsername
            <ul class="uhh-class">
              <li><a href="#">Edit profile</a></li>
              <li><a href="#">Logout</a></li>
            </ul>
          </div>
          <div class="profile-image">
            <i class="bi bi-person-fill"></i>
          </div>
          <!-- <div class="menu-btn">
            <i class="bi bi-columns-gap"></i>
          </div> -->
        </div>
        <!-- <a class="header-login" href="login.php">Login</a> -->
      </nav>
      <aside class="nav-sidebar">
          <ul>
            <li> <span>Hello!</span> </li>
            <li> <a href="#">Take our Pet Quiz!</a> </li>
            <li> <a href="#">View pending requests</a> </li>
            <li> <a href="#">View forum posts</a> </li>
            <li> <a href="#">View bug report status</a> </li>
            <!-- <li> <a href="#">Just another day</a> </li> -->
          </ul>
      </aside>
    </header>
    <main>

    </main>
  </body>
  <script src="JS/main.js?v=<?php echo time(); ?>"></script>
</html>
