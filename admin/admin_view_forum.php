<?php
session_start();
include("../conn.php");
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../CSS/reset.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../CSS/admin_style_2.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../CSS/admin_style.css?v=<?php echo time(); ?>">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Admin view Forum</title>
</head>

<body>
    <header>
        <a href="admin_users.php" class="header-brand"><img src="../Imgs/ForeverHome Logo.png" alt=""></a>
        <nav>
            <ul>
                <li> <a style="text-decoration: none;" href="admin_users.php">Users</a> </li>
                <li> <a style="text-decoration: none;" href="admin_owners.php"> Owners</a> </li>
                <li> <a style="text-decoration: none;" href="admin_pets.php">Pets</a> </li>
                <li> <a style="text-decoration: none;" href="admin_centres.php">Centres</a> </li>
                <li> <a href="admin_view_forum.php" id="selected">Forum</a> </li>
                <li> <a style="text-decoration: none;" href="admin_ticket.php">Tickets</a> </li>
                <li> <a style="text-decoration: none;" href="admin_feedback.php">Feedback</a> </li>
                <li> <a style="text-decoration: none;" href="admin_view_application.php">Page Requests</a> </li>
                <li> <a style="text-decoration: none;" href="admin_view_report.php"> view Reports</a> </li>
            </ul>
            <a href="admin_logout.php" class="header-cases">Logout</a>
        </nav>
    </header>
    <center>
        <br>
        <br>
        <br>
        <br>
        <h1>Admin View Forum</h1>
        <?php echo '<table style="max-width:700px;border:none">'; ?>
        <tr>
            <td width="400px;" style="text-align:center;background-color:#f0c040;line-height:50px;height:0px">
                Title
            </td>
            <td width="80px;" style="text-align:center;background-color:#f0c040;line-height:50px;height:0px">
                Creator
            </td>
            <td width="190px;" style="text-align:center;background-color:#f0c040;line-height:50px;height:0px">
                Date
            </td>
            <td width="80px;" style="text-align:center;background-color:#f0c040;line-height:50px;height:0px">
                Delete
            </td>
        </tr>

    </center>
    <?php
    $check = mysqli_query($con, "SELECT * FROM forum_post INNER JOIN users ON forum_post.user_ID = users.ID");

    if (mysqli_num_rows($check) != 0) {
        while ($row = mysqli_fetch_assoc($check)) {
            $id = $row['topic_id'];
            echo "<tr>";
            echo "<td><a href='admin_view_topic.php?id=$id'>" . $row['title'] . "</a></td>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['time'] . "</td>";
            echo "<td><a href=\"admin_delete_topic.php?id="; //hyperlink to delete.php page with ‘id’ parameter
            echo $row['topic_id'];
            echo "\" onClick=\"return confirm('Delete "; //JavaScript to confirm the deletion of the record
            echo $row['title'];
            echo " details?');\">Delete</a></td>";
            echo "</tr>";
        }
    } else {
        echo "No topics found";
    }
    echo "</table>";
    ?>
    <br>
    <br>
    <footer>
        <div class="footer-content">
            <p class="company-name">© 2022 ForeverHome, Inc</p>
            <a href="admin_products.php" class="header-brand"><img src="../images/Brand_Logo.png" alt=""></a>
            <nav>
                <ul>
                    <li> <a style="text-decoration: none;" href="admin_pets.php">Pets</a> </li>
                    <li> <a style="text-decoration: none;" href="admin_centres.php">Centres</a> </li>
                    <li> <a style="text-decoration: none;" href="admin_users.php">Users</a> </li>
                </ul>
            </nav>
        </div>
    </footer>
</body>



<?php include('fakejs.php')   ?>