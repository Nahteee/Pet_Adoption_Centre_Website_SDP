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
    <link rel="stylesheet" href="../CSS/style.css?v=<?php echo time(); ?>">
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
                <li> <a href="admin_users.php">Users</a> </li>
                <li> <a href="admin_pets.php" >Pets</a> </li>
                <li> <a href="admin_centres.php">Centres</a> </li>
                <li> <a href="admin_view_forum.php" id="selected">Forum</a> </li>
                <li> <a href="admin_view_customers.php">Tickets</a> </li>
                <li> <a href="admin_view_customers.php">Feedback</a> </li>
                <li> <a href="admin_view_customers.php">Page Requests</a> </li>
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
        <?php echo '<table border="1px;">'; ?>
        <tr>

            <td width="400px;" style="text-align: center;">
                Name
            </td>
            <td width="80px;" style="text-align: center;">
                Creator
            </td>
            <td width="190px;" style="text-align: center;">
                Date
            </td>
        </tr>

    </center>
    <?php
    $check = mysqli_query($con, "SELECT * FROM forum_post INNER JOIN users ON forum_post.user_ID = users.ID");

    if (mysqli_num_rows($check) != 0) {
        while ($row = mysqli_fetch_assoc($check)) {
            $id = $row['topic_id'];
            echo "<tr>";

            echo "<td style='text-align: center;'><a href='admin_view_topic.php?id=$id'>" . $row['title'] . "</a></td>";
            echo "<td style='text-align: center;'>" . $row['username'] . "</td>";
            echo "<td style='text-align: center;'>" . $row['time'] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "No topics found";
    }
    echo "</table>";
    ?>
    <br>
    <br>




    <?php include('fakejs.php')   ?>