<?php 
session_start();
include('../conn.php');
include('header.php');
include('navbar.php'); 
?>

<html>
<head>
    <link rel = "stylesheet" href = "../CSS/style.css">
    <title>Forum</title>
</head>
<div class = "center">
    <h1>ForeverHome Forums</h1> <br><br><br>
    <table>
        <tr>
            <td>
                <b>Name</b>
            </td>
            <td>
                <b>Creator</b>
            </td>
            <td>
                <b>Date</b>
            </td>
        </tr>

<?php
    $check = mysqli_query($con,"SELECT * FROM forum_post INNER JOIN users ON forum_post.user_ID = users.ID");

    if(mysqli_num_rows($check) != 0){
        while($row = mysqli_fetch_assoc($check)){
            $id = $row['topic_id'];
            echo "<tr>";
            
            echo "<td><b><a href='topic.php?id=$id'>".$row['title']."</a></b></td>";
            echo "<td>".$row['username']."</td>";
            echo "<td>".$row['time']."</td>";
            echo "</tr>";
        }
    }else{
        echo "No topics found";
    }
    echo "</table>";
    ?>
    <br>
    <br>
    <a href="post.php"><button>Post topic</button></a>
</div>
</html>



    
 <?php include('footer.php')   ?>