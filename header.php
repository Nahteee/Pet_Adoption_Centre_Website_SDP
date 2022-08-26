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
        <a href="#" class="header-brand"><img src="Imgs/ForeverHome Logo.png" alt=""></a>
        <!-- <a href="#" class="brand-name">ForeverHome</a> -->
        <ul class="list-wrap">
          <li> <a href="admin_users.php" id="selected">Home</a> </li>
          <li> <a href="admin_pets.php">Pets</a> </li>
          <li> <a href="admin_centres.php">Centres</a> </li>
          <li> <a href="admin_view_customers.php">Forum</a> </li>
        </ul>
        <!-- <form class="search-form" action="index.html" method="post">
          <input type="text" name="" value="">
          <button type="submit" name="button"><i class="bi-search"></i></button>
        </form> -->
        <?php
        echo '<a class="header-login" href="login.php">
          Login
        </a>';
        ?>
      </nav>
    </header>
    <main>

    </main>
  </body>
</html>
