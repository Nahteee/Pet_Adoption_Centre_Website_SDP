<?php
//Page for members to browse through adoption centres

include("../conn.php");

$result = mysqli_query($con, "SELECT * FROM pets");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Browse Pets</title>
		<link rel = "stylesheet" href = "../CSS/memberstyle.css?v=<?php echo time(); ?>">
	</head>
	<body>
		<?php include("../header.php"); ?>
		<main>

			<form method="post" class="pet-form-class">
				<p>Search</p> <input placeholder="by species, breed, age." type="text" name="search_key"> <button class="button" name="searchBtn" type="submit" >Submit</button>
				<?php
				// session_start();
				if (isset($_SESSION['owner'])) {
					echo '<a class="owned-pets">View owned pets</a>';
				}
				 ?>

			</form>

			<?php
			$search_key = "";
			if(isset($_POST['searchBtn'])){
				$search_key = $_POST['search_key'];
			}
			$result=mysqli_query($con,"SELECT * FROM pets WHERE CONCAT(age, species, breed) LIKE '%".$search_key."%'");
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
					<a class="buttonlink" href="viewpages.php?id='.$row['centre_ID'].'">
					View page
					</a>
					</button>


					</div>
					';
					echo $data;

					}
				mysqli_close($con);


				 ?>
			</div>


		</main>

	<footer>
	<?php include("../footer.php") ?>
	</footer>
	</body>
</html>
