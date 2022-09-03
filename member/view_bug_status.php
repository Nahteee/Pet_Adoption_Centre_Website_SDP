<?php
    include("../conn.php");
    include("../header.php");
    include("../session.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>View Appointment</title>
	<link rel = "stylesheet" href = "../CSS/POOP.css?v=<?php echo time(); ?>">
</head>
<body>
  <div class="center">

<?php
$result = mysqli_query($con,"SELECT * FROM tickets AS t INNER JOIN users as u ON t.user_ID=u.ID WHERE t.user_ID = $userid");

?>

<h1>Bug Report Sent</h1>
<br>

<table id="contacts">
	<tr>
    <th>Title</th>
    <th>Description</th>
    <th>Status</th>
	</tr>
<?php
	while($row=mysqli_fetch_array($result)){
        if($row['status']== 'Fixed'){
            $stat = "Accepted";
        }else{
            $stat = "Pending";
        }
		echo "<tr>"; // alternative way is : echo ‘<trbgcolor="#99FF66">’;
		echo "<td>";
		echo $row['title'];
		echo "</td>";
		echo "<td>";
		echo $row['description'];
		echo "</td>";
		echo "<td>";
		echo $stat;
		echo "</td>";
		echo "</tr>";
		}
		mysqli_close($con);//to close the database connection
?>
</table>
</div>
<br><br><br>
<footer>
<?php include("../footer.php") ?>
</footer>
</body>
</html>
