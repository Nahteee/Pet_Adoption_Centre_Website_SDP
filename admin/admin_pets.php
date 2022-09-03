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
  <link rel="stylesheet" href="../CSS/admin_style_2.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="../CSS/admin_style.css?v=<?php echo time(); ?>">
  <title></title>
</head>

<body>
  <header>
    <a href="admin_users.php" class="header-brand"><img src="../Imgs/ForeverHome Logo.png" alt=""></a>
    <nav>
      <ul>
        <li> <a href="admin_users.php">Users</a> </li>
        <li> <a href="admin_owners.php"> Owners</a> </li>
        <li> <a href="admin_pets.php" id="selected">Pets</a> </li>
        <li> <a href="admin_centres.php">Centres</a> </li>
        <li> <a href="admin_view_forum.php">Forum</a> </li>
        <li> <a href="admin_ticket.php">Tickets</a> </li>
        <li> <a href="admin_feedback.php">Feedback</a> </li>
        <li> <a href="admin_view_application.php">Page Requests</a> </li>
        <li> <a href="admin_view_report.php"> view Reports</a> </li>
      </ul>
      <a href="admin_logout.php" class="header-cases">Logout</a>
    </nav>
  </header>
  <main>
    <section class="main-wrapper">
      <div class="box-header">
        <h1>Pets List</h1>
      </div>
      <table>
        <tr>
          <th>Pet ID</th>
          <th>Image</th>
          <th>Name</th>
          <th>Centre</th>
          <th>Age</th>
          <th>Species</th>
          <th>Breed</th>
          <th>Delete</th>
        </tr>
        <?php
        $results_per_page = 04;
        $sql = 'SELECT * FROM pets';
        $result = mysqli_query($con, $sql);
        $number_of_results = mysqli_num_rows($result);
        $number_of_pages = ceil($number_of_results / $results_per_page);
        if (isset($_GET["page"])) {
          $page = $_GET["page"];
        } else {
          $page = 1;
        }
        $this_page_first_result = ($page - 1) * 04;
        $sql = 'SELECT * FROM pets LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
        $result = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_array($result)) {
          $product_image = "default.jpg";
          if ($row['image_name'] != "") {
            $product_image = $row['image_name'];
          }
          echo "<tr>"; 
          echo "<td>";
          echo $row['ID'];
          echo "</td>";
          echo "<td>";
          echo '<img style="vertical-align: middle; margin-left: 10px; padding-right: 0px" src="../uploads/' . $product_image . '" width="60px">';
          echo "</td>";
          echo "<td>";
          echo $row['name'];
          echo "</td>";
          $ID = $row['centre_ID'];
          $result1 = mysqli_query($con, "SELECT centre_name FROM centre_pages,pets WHERE centre_ID='$ID'");
          $row1 = mysqli_fetch_array($result1);
          echo "<td>";
          echo $row1['centre_name'];
          echo "</td>";
          echo "<td>";
          echo $row['age'];
          echo "</td>";
          echo "<td>";
          echo $row['species'];
          echo "</td>";
          echo "<td>";
          echo $row['breed'];
          echo "<td><a href=\"admin_delete_pets.php?id="; //hyperlink to delete.php page with ‘id’ parameter
          echo $row['ID'];
          echo "\" onClick=\"return confirm('Delete "; //JavaScript to confirm the deletion of the record
          echo $row['name'];
          echo " details?');\">Delete</a></td></tr>";
        }
        mysqli_close($con); //to close the database connection
        ?>
      </table>
      <?php
      if ($page > 1) {
        echo "<a style='margin-right :5px' href='admin_pets.php?page=" . ($page - 1) . "' class='btn btn-danger'>Previous</a>";
      }

      for ($i = 1; $i < $number_of_pages; $i++) {
        echo '<a href="admin_pets.php?page=' . $i . '" class="btn btn-primary">' . $i . '</a> ';
      }

      if ($i > $page) {
        echo "<a href='admin_pets.php?page=" . ($page + 1) . "' class='btn btn-danger'>Next</a>";
      }
      ?>
    </section>
  </main>
  <footer>
			<div class="footer-content">
			  <p class="company-name">© 2022 ForeverHome, Inc</p>
			  <a href="admin_products.php" class="header-brand"><img src="../images/Brand_Logo.png" alt=""></a>
			  <nav>
				<ul>
				  <li> <a href="admin_pets.php">Pets</a> </li>
				  <li> <a href="admin_centres.php">Centres</a> </li>
				  <li> <a href="admin_users.php">Users</a> </li>
				</ul>
			  </nav>
			</div>
		</footer>
</body>

</html>