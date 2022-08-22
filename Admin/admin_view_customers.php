<?php
include("admin_session.php");
include("../conn.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--So that the browser will render the width of the page at the width of its own screen-->
  <link rel="stylesheet" href="../CSS/reset.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="../CSS/style.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="../CSS/admin_style.css?v=<?php echo time(); ?>">
  <title></title>
</head>

<body>
  <header>
    <a href="admin_products.php" class="header-brand"><img src="../images/Brand_Logo.png" alt=""></a>
    <nav>
      <ul>
        <li> <a href="admin_products.php">Products</a> </li>
        <li> <a href="admin_orders.php">Orders</a> </li>
        <li> <a href="admin_view_customers.php"  id="selected">Customers</a> </li>
      </ul>
      <a href="admin_logout.php" class="header-cases">Logout</a>
    </nav>
  </header>
  <main>
    <section class="main-wrapper">
      <div class="box-header">
        <h1>All Customers</h1>
      </div>
      <table>
        <tr>
          <th>Customer ID</th>
          <th>Username</th>
          <th>Name</th>
          <th>Contact Number</th>
          <th>Email</th>
          <th>Address</th>
        </tr>
        <?php
          $result=mysqli_query($con,"SELECT * FROM customers");
          while($row=mysqli_fetch_array($result)){
        		echo "<tr>"; // alternative way is : echo ‘<trbgcolor="#99FF66">’;
        		echo "<td>";
        		echo $row['Cust_ID'];
        		echo "</td>";
        		echo "<td>";
        		echo $row['Username'];
        		echo "</td>";
        		echo "<td>";
        		echo $row['Name'];
        		echo "</td>";
        		echo "<td>";
        		echo $row['Contact_Number'];
        		echo "</td>";
        		echo "<td>";
        		echo $row['Email'];
        		echo "</td>";
        		echo "<td>";
        		echo $row['Address'];
        		echo "</td>";
            }
        		mysqli_close($con);//to close the database connection
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
<script src="JS/script.js"></script>

</html>
