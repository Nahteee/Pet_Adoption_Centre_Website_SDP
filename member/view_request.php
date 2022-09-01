<?php
    include("../conn.php");
    include("../header.php");
    include("../session.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>View Appointment</title>
	<link rel="stylesheet" href="POOP.css">
</head>
<body>
	<div class="center">

<?php
$result = mysqli_query($con,"SELECT * FROM adoption_request AS ar INNER JOIN centre_pages as cp ON ar.centre_ID=cp.ID WHERE ar.user_ID = $userid");

?>
<br><br><br><br><br><br>
<table id="contacts">
	<tr>
    <th>Species</th>
    <th>Remarks</th>
    <th>Center Name</th>
    <th>Status</th>
	</tr>
<?php 
	while($row=mysqli_fetch_array($result)){
        if($row['status']== true){
            $stat = "Accepted";
        }else{
            $stat = "Pending";
        }		
		echo "<tr>"; // alternative way is : echo ‘<trbgcolor="#99FF66">’;
		echo "<td>";
		echo $row['species'];
		echo "</td>";
		echo "<td>";
		echo $row['remarks'];
		echo "</td>";
        echo "<td>";
		echo $row['centre_name'];
		echo "</td>";
		echo "<td>";
		echo $stat;
		echo "</td>";
		echo "</tr>";
		} 
		mysqli_close($con);//to close the database connection
?>
</div>
</table>
</body>
</html>