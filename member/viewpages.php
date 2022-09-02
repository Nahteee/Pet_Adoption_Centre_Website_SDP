<?php
//View a selected centre page in more detail

include("../conn.php");
include("../header.php");
include("../session.php");

$id = intval($_GET['id']);
$result = mysqli_query($con,"SELECT * FROM centre_pages WHERE ID=$id");
$comments = mysqli_query($con, "SELECT * FROM centre_comments WHERE centre_ID=$id");
// $pets = mysqli_query($con, "SELECT * FROM pets WHERE centre_ID=$id");
?>

<html>
<body>
	<head>
		<link rel = "stylesheet" href = "../CSS/viewstyle.css?v=<?php echo time(); ?>">
		<title>Centre Page</title>
	</head>
	<main>
		<div class="page-flex">
			<div class="flex1">

			<?php
				while($row = mysqli_fetch_array($result)) {

					$data = '<div class= "centre_img" style=" border-radius:15px; background-image: url(../Uploads/'.$row['centre_pic'].');
				  background-repeat: no-repeat;
				  background-position: top;
				  background-size: cover;"></div>
					<div class="text-wrap">
					<h1>' . $row['centre_name'] . '</h1>
					<p>'.$row['description']. '</p> <br><br>
					<p><b>Located at:</b> <br>' . $row['location'] . '</p> <br>
					<p><b>Contact Number:</b> ' . $row['phone'].'</p>
					<p><b>Email: </b>' . $row['email'].'</p>
					</div>
					';
					echo $data;

				}
			?>

			</div>
			<div class="flex2">
				<form method="post" class="pet-form-class">
					<p>Search</p> <input placeholder="by species, breed, age." type="text" name="search_key"> <button class="button" name="searchBtn" type="submit" >Submit</button>

				</form>
					<?php
					$search_key = "";
					if(isset($_POST['searchBtn'])){
						$search_key = $_POST['search_key'];
					}
					$result=mysqli_query($con,"SELECT * FROM pets WHERE centre_ID=$id AND CONCAT(age, species, breed) LIKE '%".$search_key."%'" );
					?>
					<div class="parentbox">
						<?php
						while($row=mysqli_fetch_array($result))
						{
							$data = '<div class="childbox">
							<div class="align-img" style="float: left; margin-right: 15px;">
							<img src="../Uploads/'.$row['image_name'].'" height="200" style="border-radius:15px;">
							</div>
							<h1 class="child-h1"> '.$row['name'].' </h1>
							<p> Species: '.$row['species'].' </p>
							<p> Breed: '.$row['breed'].' </p>
							<p> Age: '.$row['age'].' </p>
							<button class="small">
							<a class="buttonlink" href="placebooking.php?id='.$row['ID'].'">
							Adopt Me!
							</a>
							</button>


							</div>
							';
							echo $data;

							}?>
			</div>
		</div>
	</div>
		<h1 class="comment-h1"> Page Comment Section</h1>
		<form action = "centrecomment.php" method = "post" class="comment-form">
			<input type="hidden" name="userID" value="<?php echo $userid ?>">
				<input type="hidden" name="centreId" value="<?php echo $id ?>">
				<textarea class="input-box" type = "text"  name = "centreComment" placeholder="Type a comment!"></textarea> <br> <br>
			<input type = "submit" value = "Submit comment"> <br> <br>
		</form>


		<?php
		//display comments
				while($row = mysqli_fetch_array($comments)) {
					echo "<div class = 'comment'>";
					$uid = $row['user_ID'];
					$username = mysqli_query($con, "SELECT * FROM users WHERE ID=$uid");
					while($row2 = mysqli_fetch_array($username)) {
						echo "<b>" . $row2['username'] . "</b>";
					}
					echo " posted at " . $row['time'];
					echo "<br>";
					echo $row['comment'];

					echo "</div>";
					echo "<br>";
				}

		?>
	</main>

</body>
</html>
