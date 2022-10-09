<?php
include("../conn.php");
//get amount of users
$user_query = $con->query("SELECT COUNT(ID) as total_user FROM users WHERE role = 'member';");
foreach ($user_query as $data) {
    $amount_user = $data['total_user'];
}
$user_value = json_decode($amount_user);

//get amount of pet
$pet_query = $con->query("SELECT COUNT(ID) as total_pet FROM pets;");
foreach ($pet_query as $data) {
    $amount_pet = $data['total_pet'];
}
$pet_value = json_decode($amount_pet);

//get amount of owners
$owner_query = $con->query("SELECT COUNT(ID) as total_owner FROM users WHERE role = 'owner';");
foreach ($owner_query as $data) {
    $amount_owner = $data['total_owner'];
}
$owner_value = json_decode($amount_owner);

//get amount of forum post
$forum_query = $con->query("SELECT COUNT(topic_id) as total_post FROM forum_post;");
foreach ($forum_query as $data) {
    $amount_forum = $data['total_post'];
}
$forum_value = json_decode($amount_forum);

//get amount of feedback
$feedback_query = $con->query("SELECT COUNT(ID) as total_feedback FROM feedback;");
foreach ($feedback_query as $data) {
    $amount_feedback = $data['total_feedback'];
}
$feedback_value = json_decode($amount_feedback);

//get amount of bug report
$bug_query = $con->query("SELECT COUNT(ID) as total_bug FROM tickets;");
foreach ($bug_query as $data) {
    $amount_bug = $data['total_bug'];
}
$bug_value = json_decode($amount_bug);

$array = [];
array_push($array, $user_value, $pet_value, $owner_value, $forum_value, $feedback_value, $bug_value);

//get verified centre pages
$veri_query = $con->query("SELECT COUNT(ID) AS total_verified FROM centre_pages WHERE verified = false;");
foreach ($veri_query as $data) {
    $amount_verified = $data['total_verified'];
}

//get not verified centre pages
$no_veri_query = $con->query("SELECT COUNT(ID) AS total_not_verified FROM centre_pages WHERE verified = true;");
foreach ($no_veri_query as $data) {
    $amount_no_verified = $data['total_not_verified'];
}

$stat = [];
array_push($stat,$amount_verified,$amount_no_verified);

//get amount of unfixed bugs
$unfixed_query = $con->query("SELECT COUNT(ID) as unfixed_bug FROM tickets WHERE status = 'Not Fixed'");
foreach ($unfixed_query as $data) {
    $unfixed_bug = $data['unfixed_bug'];
}
$bug_no_fix = json_decode($unfixed_bug);

//get amount of fixed bugs
$fixed_query = $con->query("SELECT COUNT(ID) as fixed_bug FROM tickets WHERE status = 'Fixed'");
foreach ($fixed_query as $data) {
    $fixed_bug = $data['fixed_bug'];
}
$bug_fix = json_decode($fixed_bug);
$bug_array = [];
array_push($bug_array, $bug_fix, $bug_no_fix);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
    <title>Forever Home Report</title>
    <link rel="stylesheet" href="../CSS/reset.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../CSS/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../CSS/admin_style.css?v=<?php echo time(); ?>">
    <style>
        .wrapper {
            margin: 0 auto;
            width: 50%;
        }

        .user {
            margin-left: 47%;
        }
    </style>
</head>

<body>
    <header>
        <a href="admin_users.php" class="header-brand"><img src="../Imgs/ForeverHome Logo.png" alt=""></a>
        <nav>
            <ul>
                <li> <a href="admin_users.php">Users</a> </li>
                <li> <a href="admin_owners.php"> Owners</a> </li>
                <li> <a href="admin_pets.php">Pets</a> </li>
                <li> <a href="admin_centres.php">Centres</a> </li>
                <li> <a href="admin_view_forum.php">Forum</a> </li>
                <li> <a href="admin_ticket.php">Tickets</a> </li>
                <li> <a href="admin_feedback.php">Feedback</a> </li>
                <li> <a href="admin_view_application.php">Page Requests</a> </li>
                <li> <a href="admin_view_report.php" id="selected"> view Reports</a> </li>
            </ul>
            <a href="admin_logout.php" class="header-cases">Logout</a>
        </nav>
    </header>
    <br><br>
    <div class="wrapper">
        <div class="pie" style="width: 50%;float :left">
            <center>
                <h4>Bugs Report</h4>
            </center>
            <canvas id="pieChart"></canvas>
        </div>
        <div class="donut" style="width: 50%;float :right">
            <center>
                <h4>Centre Report</h4>
            </center>
            <canvas id="donutChart"></canvas>
        </div>
        <div class="bar" style="width: 100%; float :left">
            <center>
                <h4>Totals</h4>
            </center>
            <canvas id="barChart"></canvas>
        </div>
        <br><br>
        <center>
            <h4>Recent 5 members that registered</h4>
        </center>
        <div class="user">
            <?php
            $result = mysqli_query($con, "SELECT * FROM users WHERE role = 'member' ORDER BY ID DESC LIMIT 5;");
            echo "<ol>";
            while ($row = mysqli_fetch_array($result)) {
                echo "<li>";
                echo $row['username'];
                echo "</li>";
            }
            echo "</ol>";
            ?>
        </div>
    </div>
    <br>
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
<script>
    //totals
    const labels = ['Total amount of user registered', 'Total Pet Avaliable', 'Total Adoption Owners registered', 'Total Forum Posted', 'Total Feedbacks Recieved', 'Total Bug Report Recieved'];
    const data = {
        labels: labels,
        datasets: [{
            label: 'Amount',
            data: <?= json_encode(array_values($array)); ?>,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 205, 86, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(201, 203, 207, 0.2)'
            ],
            borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
                'rgb(54, 162, 235)',
                'rgb(201, 203, 207)'
            ],
            borderWidth: 2
        }]
    };
    const config = {
        type: 'bar',
        data: data,
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        },
    };
    var barChart = new Chart(
        document.getElementById('barChart'),
        config
    );

    // bugs pie chart
    const labelpie = ['Total Bugs Fixed', 'Unfixed Bugs'];
    const datapie = {
        labels: labelpie,
        datasets: [{
            label: 'Amount',
            data: <?= json_encode(array_values($bug_array)); ?>,
            backgroundColor: [
                'rgba(153, 102, 255, 0.2)',
                'rgba(201, 203, 207, 0.2)'
            ],
            borderColor: [
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)'
            ],
            borderWidth: 1
        }]
    };
    const config2 = {
        type: 'pie',
        data: datapie,
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        },
    };

    var pieChart = new Chart(
        document.getElementById('pieChart'),
        config2
    );

    //adoption donut chart
    const labeldonut = ['Centre Pending Verification', 'Total Centre Verified'];
    const datadonut = {
        labels: labeldonut,
        datasets: [{
            label: 'Amount',
            data: <?= json_encode(array_values($stat)); ?>,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(201, 203, 207, 0.2)'
            ],
            borderColor: [
                'rgb(75, 192, 192)',
                'rgb(54, 162, 235)'
            ],
            borderWidth: 1
        }]
    };
    const config3 = {
        type: 'doughnut',
        data: datadonut,
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        },
    };

    var donutChart = new Chart(
        document.getElementById('donutChart'),
        config3
    );
</script>
