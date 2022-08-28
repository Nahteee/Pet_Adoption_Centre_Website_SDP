<?php
include("../conn.php");
//get amount of users
$user_query = $con->query("SELECT COUNT(ID) as total_user FROM users WHERE role = 'member';");
foreach($user_query as $data){
    $amount_user= $data['total_user'];
}
$user_value = json_decode($amount_user);

//get amount of pet
$pet_query = $con->query("SELECT COUNT(ID) as total_pet FROM pets;");
foreach($pet_query as $data){
    $amount_pet= $data['total_pet'];
}
$pet_value = json_decode($amount_pet);

//get amount of owners
$owner_query = $con->query("SELECT COUNT(ID) as total_owner FROM users WHERE role = 'owner';");
foreach($owner_query as $data){
    $amount_owner= $data['total_owner'];
}
$owner_value = json_decode($amount_owner);

//get amount of forum post
$forum_query = $con->query("SELECT COUNT(topic_id) as total_post FROM forum_post;");
foreach($forum_query as $data){
    $amount_forum= $data['total_post'];
}
$forum_value = json_decode($amount_forum);

//get amount of feedback
$feedback_query = $con->query("SELECT COUNT(ID) as total_feedback FROM feedback;");
foreach($feedback_query as $data){
    $amount_feedback= $data['total_feedback'];
}
$feedback_value = json_decode($amount_feedback);

//get amount of bug report
$bug_query = $con->query("SELECT COUNT(ID) as total_bug FROM tickets;");
foreach($bug_query as $data){
    $amount_bug= $data['total_bug'];
}
$bug_value = json_decode($amount_bug);

$array= [];
array_push($array,$user_value,$pet_value,$owner_value,$forum_value,$feedback_value,$bug_value);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
    <title>Forever Home Report</title>
</head>

<body>
    <center>
        <div style="width: 90%;">
            <canvas id="myChart"></canvas>
        </div>
    </center>
</body>

</html>
<script>
    const labels = ['Total amount of user registered', 'Total Pet Avaliable', 'Total Adoption Owners registered', 'Total Forum Posted', 'Total Feedbacks Recieved', 'Total Bug Report Recieved'];
    const data = {
        labels: labels,
        datasets: [{
            label: 'Amount',
            data: <?=json_encode(array_values($array));?>,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 205, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
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
                'rgb(153, 102, 255)',
                'rgb(201, 203, 207)'
            ],
            borderWidth: 1
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

    var myChart = new Chart(
        document.getElementById('myChart'),
        config
    );
</script>