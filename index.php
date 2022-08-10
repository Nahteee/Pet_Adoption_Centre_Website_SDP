<?php 
session_start();
include('dbcon.php');
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
    $check = mysqli_query($con,"SELECT * FROM topics");

    if(mysqli_num_rows($check) != 0){
        while($row = mysqli_fetch_assoc($check)){
            $id = $row['topic_id'];
            echo "<tr>";
            
            echo "<td style='text-align: center;'><a href='topic.php?id=$id'>".$row['topic_name']."</a></td>";
            echo "<td style='text-align: center;'>".$row['topic_creator']."</td>";
            echo "<td style='text-align: center;'>".$row['date']."</td>";
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