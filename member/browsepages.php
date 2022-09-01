<?php
//Page for members to browse through adoption centres

include("../conn.php");

$result = mysqli_query($con, "SELECT * FROM centre_pages WHERE verified = 1");
$i = 0;
?>

<html>
<head>
	<link rel = "stylesheet" href = "../CSS/style.css">
</head>
<body>
	<header>
		<?php include("../header.php"); ?>
	</header>
	<title>Browse Adoption Centre Pages</title>
	<div class="beeg">
	<h2>All Adoption Centres</h2> <br><br>
	<br>

	<button onclick="listView()" class="small">List</button>
	<button onclick="gridView()" class="small">Grid</button>

	<br><br><br><br>

	<div class='container'>
		<?php
		while($row = mysqli_fetch_array($result)) {

			echo "<div class='child'>";
			echo "<img src = '../Uploads/" . $row['centre_pic'] . "' style = 'width:100px; height:auto; float:left;'>";

			echo "<a href=\"viewpages.php?id=";
			echo $row['ID'];
			echo "\">" . $row['centre_name'] . "</a><br><br>";
			echo "<b>Address: </b>" . $row['location'] . "<br>";

			echo "<small>" . $row['description'] . "</small>";
			echo "<br><br>";

			echo "<button class='small' onclick=\"location.href='viewpages.php?id=";
			echo $row['ID'];
			echo "'\">Visit Page</button><br><br><br>";
			echo "</div>";

		}
		mysqli_close($con);
		?>

</div>
</div>

<script>
// Get the elements with class="column"
var elements = document.getElementsByClassName("child");

// Declare a loop variable
var i;

// List View
function listView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "100%";
  }
}

// Grid View
function gridView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "33.3%";
  }
}
</script>

</body>
</html>
