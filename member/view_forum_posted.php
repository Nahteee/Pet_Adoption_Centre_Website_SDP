<?php
    include("../conn.php");
    include("../header.php");
    include("../session.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>View Forum Posted</title>
	<link rel="stylesheet" href="../CSS/POOP.css">
</head>
<body>
	<div class="center">

<?php
$result = mysqli_query($con,"SELECT * FROM forum_post WHERE user_ID = $userid");

?>
<br><br>
<center> <h1>Your Forum Posts</h1> </center>



<br><br>
<table id="contacts">
	<tr>
    <th>Title</th>
    <th>Description</th>
    <th>Time Posted</th>
	</tr>
<?php
	while($row=mysqli_fetch_array($result)){
        $id = $row['topic_id'];
		echo "<tr>"; // alternative way is : echo ‘<trbgcolor="#99FF66">’;
		echo "<td><b><a href='/SDP-Source-Code/member/Forum/topic.php?id=$id'>".$row['title']."</a></b></td>";
		echo "<td>";
		echo $row['description'];
		echo "</td>";
        echo "<td>";
		echo $row['time'];
		echo "</td>";
		echo "</tr>";
		}
		mysqli_close($con);//to close the database connection
?>
</table>
</div>
<footer>
<?php include("../footer.php") ?>
</footer>
</body>
</html>
