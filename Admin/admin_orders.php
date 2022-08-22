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
        <li> <a href="admin_orders.php"  id="selected">Orders</a> </li>
        <li> <a href="admin_view_customers.php" >Customers</a> </li>
      </ul>
      <a href="admin_logout.php" class="header-cases">Logout</a>
    </nav>
  </header>
  <main>
    <section class="main-wrapper">
      <div class="box-header">
        <h1>Recent Orders</h1>
      </div>
      <table>
        <tr>
          <th>Order ID</th>
          <th>Customer Name</th>
          <th>Contact No</th>
          <th>Address</th>
          <th>Items</th>
          <th>Price</th>
          <th>Payment Method</th>
          <th>Delete</th>
        </tr>
        <?php
          $result=mysqli_query($con,"SELECT * FROM orders");
          while($row=mysqli_fetch_array($result)){
        		echo "<tr>"; // alternative way is : echo ‘<trbgcolor="#99FF66">’;
        		echo "<td>";
        		echo $row['id'];
        		echo "</td>";
        		echo "<td>";
        		echo $row['name'];
        		echo "</td>";
        		echo "<td>";
        		echo $row['phone'];
        		echo "</td>";
        		echo "<td>";
        		echo $row['address'];
        		echo "</td>";
        		echo "<td>";
        		echo $row['products'];
        		echo "</td>";
        		echo "<td>";
        		echo $row['amount_paid'];
        		echo "</td>";
            echo "<td>";
        		echo $row['pmode'];
        		echo "</td>";
        		echo "<td><a href=\"admin_delete_orders.php?id="; //hyperlink to delete.php page with ‘id’ parameter
        		echo $row['id'];
        		echo "\" onClick=\"return confirm('Delete "; //JavaScript to confirm the deletion of the record
        		echo $row['name'];
        		echo "\'s\ order details?');\">Delete</a></td></tr>";
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
