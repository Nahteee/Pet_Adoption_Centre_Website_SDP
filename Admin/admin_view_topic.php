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

    <head>
        <title>Home Page</title>
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
                <li> <a style="text-decoration: none;" href="admin_view_customers.php">Feedback</a> </li>
                <li> <a style="text-decoration: none;" href="viewapplication.php">Page Requests</a> </li>
                <li> <a style="text-decoration: none;" href="admin_view_report.php"> view Reports</a> </li>
            </ul>
            <a href="admin_logout.php" class="header-cases">Logout</a>
        </nav>
    </header>
</body>
<center>
    <div class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">

                    <h1>Admin view topic!</h1>
                    <br>
                    <div class="card">
                        <?php
                        if ($_GET["id"]) {
                            $check = mysqli_query($con, "SELECT * FROM forum_post INNER JOIN users ON forum_post.user_ID = users.ID WHERE forum_post.topic_id=" . $_GET["id"] . "");
                            if (mysqli_num_rows($check)) {
                                $topic_id = $_GET["id"];
                                $_SESSION['topic_id'] = $topic_id;
                                while ($row = mysqli_fetch_assoc($check)) {
                                    if ($row['image'] == "") {
                                        echo "<div class='card-header'><h4>" . $row['title'] . "</h4>";
                                        echo "<h6>By : " . $row['username'] . "<br> Posted on : " . $row['time'] . "</h6></div>";
                                        echo "<div class='card-body' style='text-align: left'>" . $row['description'] . "
                        <hr>";
                                        echo "<div class='main-comment'></div>
                        <div id='error_status'></div>


                        <hr>
                        <div class='comment-container'></div>";
                                    } else {
                                        echo "<div class='card-header'><h4>" . $row['title'] . "</h4>";
                                        echo "<h6>By : " . $row['username'] . "<br> Posted on : " . $row['time'] . "</h6></div>";
                                        echo "<div class='card-body' style='text-align: left'>" . $row['description'] . "
                            <br><img src='uploads/" . $row['image'] . "'  style='width: 350px;height:auto;'>
                            <hr>";
                                        echo "<div class='main-comment'></div>
                            <div id='error_status'></div>


                            <hr>
                            <div class='comment-container'></div>";
                                    }
                                }
                            } else {
                                echo "topic not found";
                            }
                        } else {
                            header("Location:admin_view_forum.php");
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>



</html>

<?php include('fakejs.php')   ?>
