<?php
include("admin_session.php");
include("../conn.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--So that the browser will render the width of the page at the width of its own screen-->
  <link rel="stylesheet" href="../CSS/reset.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="../CSS/style.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="../CSS/admin_style.css?v=<?php echo time(); ?>">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- <link rel="stylesheet" href="../CSS/bootstrap.css" /> -->
  <!-- <script src="../JS/jquery-3.3.1.min.js"></script> -->
  <script src="../JS/bootstrap.js"></script>
  <script defer src="../JS/script.js"></script>

  <title></title>
</head>

<body>
  <header>
    <a href="admin_users.php" class="header-brand"><img src="../Imgs/ForeverHome Logo.png" alt=""></a>
    <nav>
      <ul>
        <li> <a href="admin_users.php" id="selected">Users</a> </li>
        <li> <a href="admin_pets.php">Pets</a> </li>
        <li> <a href="admin_centres.php">Centres</a> </li>
        <li> <a href="admin_view_forum.php">Forum</a> </li>
        <li> <a href="admin_view_customers.php">Tickets</a> </li>
        <li> <a href="admin_view_customers.php">Feedback</a> </li>
        <li> <a href="viewapplication.php">Page Requests</a> </li>
        <li> <a href="admin_view_report.php">View Reports</a> </li>
      </ul>
      <a href="admin_logout.php" class="header-cases">Logout</a>
    </nav>
  </header>
  <main>
    <section class="main-wrapper">
      <div class="box-header">
        <h1>Members</h1>
        <!-- <a href="admin_add_products.php" class="add">Add New Product ➕</a> -->
      </div>
      <table>
        <tr>
          <th>User ID</th>
          <th>Username</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Phone Number</th>
          <th>View Details</th>
          <th>Delete</th>
        </tr>
        <?php
        $results_per_page = 04;
        $sql = 'SELECT * FROM users';
        $result = mysqli_query($con, $sql);
        $number_of_results = mysqli_num_rows($result);
        $number_of_pages = ceil($number_of_results / $results_per_page);
        if (isset($_GET["page"])) {
          $page = $_GET["page"];
        } else {
          $page = 1;
        }
        $this_page_first_result = ($page - 1) * 04;
        $sql = 'SELECT * FROM users WHERE role = "member" LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
        $result = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_array($result)) {
          // $product_image = "default1.jpg";
          // if ($row['product_image']!=""){
          // 	$product_image = $row['product_image'];
          // }
          echo "<tr>"; // alternative way is : echo ‘<trbgcolor="#99FF66">’;
          echo "<td>";
          echo $row['ID'];
          echo "</td>";
          echo "<td>";
          echo $row['username'];
          echo "</td>";
          // echo "<td>";
          // echo '<img style="vertical-align: middle; margin-left: 10px; padding-right: 0px" src="'.$product_image.'" width="60px">';
          // echo "</td>";
          echo "<td>";
          echo $row['first_name'];
          echo "</td>";
          // echo "<td>";
          // echo number_format($row['product_price'],2);
          // echo "</td>";
          echo "<td>";
          echo $row['last_name'];
          echo "</td>";
          echo "<td>";
          echo $row['phone'];
          echo "</td>";
          // echo "<td><a href=\"admin_view_info_user.php?id="; //edit.php will be created in Lab 8
          // echo $row['ID'];
          // echo "\">View</a></td>";
          echo "<td id='fix'>
            <button data-modal-target='#modal' class='view' id=";
          echo $row['ID'];
          echo ">View Profile</button>
            <div class='modal' id='modal'>
              <div class='modal-header'>
                <div class='title'>View Profie</div>
                <button data-close-button class='close-button'>&times;</button>
              </div>
              <div class='modal-body'>";
          echo "
              </div>
            </div>
            <div id='overlay'></div></td>";
          echo "<td><a href=\"admin_delete_users.php?id="; //hyperlink to delete.php page with ‘id’ parameter
          echo $row['ID'];
          echo "\" onClick=\"return confirm('Delete "; //JavaScript to confirm the deletion of the record
          echo $row['first_name'];
          echo " details?');\">Delete</a></td></tr>";
        }
        //to close the database connection
        ?>
      </table>
      <?php

      if ($page > 1) {
        echo "<a style='margin-right :5px' href='admin_users.php?page=" . ($page - 1) . "' class='btn btn-danger'>Previous</a>";
      }

      for ($i = 1; $i < $number_of_pages; $i++) {
        echo '<a href="admin_users.php?page=' . $i . '" class="btn btn-primary">' . $i . '</a> ';
      }

      if ($i > $page) {
        echo "<a href='admin_users.php?page=" . ($page + 1) . "' class='btn btn-danger'>Next</a>";
      }
      

      ?>

      <div class="box-header">
        <br>
        <h1>Owners</h1>
        <!-- <a href="admin_add_products.php" class="add">Add New Product ➕</a> -->
      </div>
      <table>
        <tr>
          <th>User ID</th>
          <th>Username</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Phone Number</th>
          <th>View Details</th>
          <th>Delete</th>
        </tr>


        <?php
        $result = mysqli_query($con, "SELECT * FROM users WHERE role='owner'");
        while ($row = mysqli_fetch_array($result)) {
          // $product_image = "default1.jpg";
          // if ($row['product_image']!=""){
          // 	$product_image = $row['product_image'];
          // }
          echo "<tr>"; // alternative way is : echo ‘<trbgcolor="#99FF66">’;
          echo "<td>";
          echo $row['ID'];
          echo "</td>";
          echo "<td>";
          echo $row['username'];
          echo "</td>";
          // echo "<td>";
          // echo '<img style="vertical-align: middle; margin-left: 10px; padding-right: 0px" src="'.$product_image.'" width="60px">';
          // echo "</td>";
          echo "<td>";
          echo $row['first_name'];
          echo "</td>";
          // echo "<td>";
          // echo number_format($row['product_price'],2);
          // echo "</td>";
          echo "<td>";
          echo $row['last_name'];
          echo "</td>";
          echo "<td>";
          echo $row['phone'];
          echo "</td>";

          echo "<td id='fix'>
            <button data-modal-target='#modal' class='view' id=";
          echo $row['ID'];
          echo ">View Profile</button>
            <div class='modal' id='modal'>
              <div class='modal-header'>
                <div class='title'>View Owner Profie</div>
                <button data-close-button class='close-button'>&times;</button>
              </div>
              <div class='modal-body'>";
          echo "
              </div>
            </div>
            <div id='overlay'></div></td>";

          // echo "<td><a href=\"admin_view_info_user.php?id="; //edit.php will be created in Lab 8
          // echo $row['ID'];
          // echo "\">View</a></td>";
          echo "<td><a href=\"admin_delete_users.php?id="; //hyperlink to delete.php page with ‘id’ parameter
          echo $row['ID'];
          echo "\" onClick=\"return confirm('Delete "; //JavaScript to confirm the deletion of the record
          echo $row['first_name'];
          echo " details?');\">Delete</a></td></tr>";
        }
        mysqli_close($con); //to close the database connection
        ?>
      </table>

    </section>
  </main>
  <footer>
    <div class="footer-content">
      <p class="company-name">© 2022 Company, Inc</p>
      <a href="admin_products.php" class="header-brand"><img src="../images/Brand_Logo.png" alt=""></a>
      <nav>
        <ul>
          <li> <a href="admin_products.php">Products</a> </li>
          <li> <a href="admin_orders.php">Orders</a> </li>
          <li> <a href="admin_view_customers.php">Customers</a> </li>
        </ul>
      </nav>
    </div>
  </footer>

</body>

</html>



<script>
  $(document).ready(function() {
    $('button').click(function(e) {
      e.preventDefault();
      user_id = $(this).attr('id')
      $.ajax({
        type: "POST",
        url: "admin_get_user.php",
        data: {
          id_user: user_id
        },
        success: function(response) {
          $(".modal-body").html(response);
        }
      });
      $('#modal').modal("show");

    });
  });
</script>