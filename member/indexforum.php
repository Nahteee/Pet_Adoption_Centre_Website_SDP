<?php 
session_start();
include('../conn.php');
include('header.php');
include('navbar.php'); 
?>

<center>
    <br>
    <br>
    <br>
    <br>
    <?php echo '<table border="1px;">';?>
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
    $check = mysqli_query($con,"SELECT * FROM forum_post INNER JOIN users ON forum_post.user_ID = users.ID");

    if(mysqli_num_rows($check) != 0){
        while($row = mysqli_fetch_assoc($check)){
            $id = $row['topic_id'];
            echo "<tr>";
            
            echo "<td style='text-align: center;'><a href='topic.php?id=$id'>".$row['title']."</a></td>";
            echo "<td style='text-align: center;'>".$row['username']."</td>";
            echo "<td style='text-align: center;'>".$row['time']."</td>";
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



    
 <?php include('footer.php')   ?>