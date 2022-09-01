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
    <!--We really gotta change these header links man :skull:-->
    <a href="admin_users.php" class="header-brand"><img src="/sdp/Imgs/ForeverHome Logo.png" alt=""></a>
    <nav>
      <ul>
        <li> <a href="/sdp/Admin/admin_users.php">Users</a> </li>
        <li> <a href="/sdp/Admin/admin_pets.php">Pets</a> </li>
        <li> <a href="/sdp/Admin/admin_centres.php" id="selected">Centres</a> </li>
        <li> <a href="/sdp/Admin/admin_view_customers.php">Forum</a> </li>
        <li> <a href="/sdp/Admin/admin_view_customers.php">Tickets</a> </li>
        <li> <a href="/sdp/Admin/admin_view_application.php">Feedback</a> </li>
        <li> <a href="/sdp/Admin/admin_view_application">Page Requests</a> </li>
      </ul>
      <a href="/sdp/Admin/admin_logout.php" class="header-cases">Logout</a>
    </nav>
  </header>
  <main>
    <section class="main-wrapper">
      <div class="box-header">
        <h1>Centre Applications</h1>
        <!-- <a href="admin_add_products.php" class="add">Add New Product ➕</a> -->
      </div>
      <table>
        <tr>
          <th>Centre ID</th>
          <th>Name</th>
          <th>Image</th>
          <th>Description</th>
          <th>SSM</th>
          <th>Address</th>
          <th>Contact number</th>
          <th>Approve</th>
          <th>Delete</th>
        </tr>
        <?php
          $result=mysqli_query($con,"SELECT * FROM centre_pages WHERE verified='0'");
          while($row=mysqli_fetch_array($result)){
            $product_image = "default1.jpg";
        		if ($row['centre_pic']!=""){
        			$product_image = $row['centre_pic'];
        		}
        		echo "<tr>";
          echo "<td>";
          echo $row['ID'];
          echo "</td>";

          echo "<td>";
          echo $row['centre_name'];
          echo "</td>";

          echo "<td>";
          echo "<img src = '../Uploads/" . $row['centre_pic'] . "' style = 'width:100px; height:auto;'>";
          echo "</td>";

          echo "<td>";
          echo $row['description'];
          echo "</td>";

          echo "<td>";
          echo $row['ssm'];
          echo "</td>";

          echo "<td>";
          echo $row['location'];
          echo "</td>";

          echo "<td>";
          echo $row['phone'];
          echo "</td>";
      
          echo "<td>";
          echo "<button class = 'small'> <a class = 'buttonlink' href=\"admin_verify_application.php?id=";
          echo $row['ID'];
          echo "\">Verify</a> </button> </td>";
      
          echo "<td> <button class = 'small'><a href class = 'buttonlink' =\"admin_delete_application.php?id=";
          echo $row['ID'];
          echo "\" onClick=\"return confirm('Delete ";
          echo $row['centre_name'];
          echo " details?');\">Delete</a></td> </button></tr>";
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

</html>
