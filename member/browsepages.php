<?php
//Page for members to browse through adoption centres

include("../conn.php");

$result = mysqli_query($con, "SELECT * FROM centre_pages WHERE verified = 1");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Browse Adoption Centre Pages</title>
		<link rel = "stylesheet" href = "../CSS/memberstyle.css?v=<?php echo time(); ?>">
	</head>
	<body>
		<?php include("../header.php"); ?>
		<main>

			<form method="post" class="pet-form-class">
				<p>Search</p> <input placeholder="by name or location." type="text" name="search_key"> <button class="button" name="searchBtn" type="submit" >Submit</button>
			</form>

			<?php
			$search_key = "";
			if(isset($_POST['searchBtn'])){
				$search_key = $_POST['search_key'];
			}
			$result=mysqli_query($con,"SELECT * FROM centre_pages WHERE CONCAT(centre_name, location) LIKE '%".$search_key."%'");
			?>
			<div class="parentbox">
				<?php
				while($row=mysqli_fetch_array($result))
				{
					$data = '<div class="childbox">
					<div class="align-img" style="float: left; margin-right: 15px; border-radius:15px; background-image: url(../Uploads/'.$row['centre_pic'].');
				  background-repeat: no-repeat;
				  background-position: top;
				  background-size: cover;">
					</div>
					<div class="h1-wrap">
					<h1 class="child-h1"> '.$row['centre_name'].' </h1>
					</div>
					<div class="p-wrap">
					<p> Location: '.$row['location'].' </p>
					</div>
					<button class="view-button">
					<a class="buttonlink" href="viewpages.php?id='.$row['ID'].'">
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
