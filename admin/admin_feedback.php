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
  <title>Feedback</title>
</head>

<body>
  <header>
    <a href="admin_users.php" class="header-brand"><img src="../Imgs/ForeverHome Logo.png" alt=""></a>
    <nav>
      <ul>
        <li> <a href="admin_users.php">Users</a> </li>
        <li> <a href="admin_owners.php"> Owners</a> </li>
        <li> <a href="admin_pets.php" >Pets</a> </li>
        <li> <a href="admin_centres.php" >Centres</a> </li>
        <li> <a href="admin_view_forum.php">Forum</a> </li>
        <li> <a href="admin_ticket.php" >Tickets</a> </li>
        <li> <a href="admin_feedback.php" id="selected">Feedback</a> </li>
        <li> <a href="admin_view_application.php">Page Requests</a> </li>
        <li> <a href="admin_view_report.php"> view Reports</a> </li>
      </ul>
      <a href="admin_logout.php" class="header-cases">Logout</a>
    </nav>
  </header>
  <main>
    <section class="main-wrapper">
      <div class="box-header">
        <h1>Admin View Feedback</h1>
      </div>
      <table>
        <tr>
          <th>Feedback ID</th>
          <th>User ID</th>
          <th>Title</th>
          <th>Feedback</th>
        </tr>
        <?php
        $results_per_page = 04;
        $sql = 'SELECT * FROM feedback';
        $result = mysqli_query($con, $sql);
        $number_of_results = mysqli_num_rows($result);
        $number_of_pages = ceil($number_of_results / $results_per_page);
        if (isset($_GET["page"])) {
            $page = $_GET["page"];
        } else {
            $page = 1;
        }
        $this_page_first_result = ($page - 1) * 04;
        $sql = 'SELECT * FROM feedback LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
        $result = mysqli_query($con, $sql);
        while($row=mysqli_fetch_array($result)){
            echo "<tr>"; // alternative way is : echo ‘<trbgcolor="#99FF66">’;
            echo "<td>";
            echo $row['ID'];
            echo "</td>";
            echo "<td>";
            echo $row['user_ID'];
            echo "</td>";
            echo "<td>";
            echo $row['title'];
            echo "</td>";
            echo "<td>";
            echo $row['description'];
            echo "</td>";
            echo "</tr>";
            }
            mysqli_close($con);//to close the database connection
        ?>
      </table>
      <?php
            if ($page > 1) {
                echo "<a style='margin-right :5px' href='admin_feedback.php?page=" . ($page - 1) . "' class='btn btn-danger'>Previous</a>";
            }

            for ($i = 1; $i < $number_of_pages; $i++) {
                echo '<a href="admin_feedback.php?page=' . $i . '" class="btn btn-primary">' . $i . '</a> ';
            }

            if ($i > $page) {
                echo "<a href='admin_feedback.php?page=" . ($page + 1) . "' class='btn btn-danger'>Next</a>";
            }
            ?>

      <div class="box-header">
      </div>


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
