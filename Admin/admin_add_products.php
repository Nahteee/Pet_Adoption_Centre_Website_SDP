<?php
 include("admin_session.php");
 if (isset($_POST['submitBtn'])) {
	include("../conn.php");

  // To set the folder, file name and file type
	$target_dir = "../uploads/";
	$target_file = $target_dir . basename($_FILES["product_image"]["name"]);

	if (move_uploaded_file($_FILES["product_image"]["tmp_name"], $target_file))

	{
	//To get file name
	  $file_name = basename($_FILES["product_image"]["name"]);

	  $sql="INSERT INTO product (product_name, product_price, product_qty, Category, product_code, product_image) VALUES ('$_POST[name]','$_POST[product_price]','$_POST[product_qty]','$_POST[Category]','$_POST[product_code]', '../uploads/$file_name')";



	  if (!mysqli_query($con,$sql)){
		  die('Error: ' . mysqli_error($con));
	  }
	  else {
		  echo '<script>alert("1 product added!");
		  window.location.href= "admin_products.php";s
		  </script>';
	  }
  }

	mysqli_close($con);
 }
?>

<!DOCTYPE html>
<html>
<head>
<title>Add New Contact</title>
<link rel="stylesheet" href="../CSS/admin_style_2.css?v=<?php echo time(); ?>">
</head>

<body>

<form action="admin_add_products.php" method="post" enctype="multipart/form-data">

<div id="container">
<h2>EcoFresh</h2>
<h3>Add New Product</h3>
	<div class="section">
		<div class="label">
			Product Name
		</div>
		<div class="field">
			<input type="text" name="name" required="required">
		</div>
	</div>
	<div class="section">
		<div class="label">
			Product Price
		</div>
		<div class="field">
			<input type="text" name="product_price" required="required">
		</div>
	</div>
	<div class="section">
		<div class="label">
			Quantity
		</div>
		<div class="field">
			<input type="text" name="product_qty" required="required">
		</div>
	</div>
	<div class="section">
		<div class="label">
			Category
		</div>
    <div class="field" style="padding-top:10px;">
			<input type="radio" name="Category" value="Fruit" required="required"> &nbsp;&nbsp;Fruit &nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" name="Category" value="Vegetable" required="required"> &nbsp;&nbsp;Vegetable
		</div>
	</div>
  <div class="section">
		<div class="label">
			Product Code
		</div>
		<div class="field">
			<input type="text" name="product_code" required="required">
		</div>
	</div>
  <div class="section">
		<div class="label">
			Upload Image
		</div>
		<div class="field">
			<input type="file" name="product_image" required="required">
		</div>
	</div>
	<div class="section">
		<div class="label">
			&nbsp;
		</div>
		<div class="field">
			<button type="submit" class="btn" name="submitBtn">Submit</button>
			<button type="reset" class="btn">Reset</button>
		</div>
	</div>
</div>
</form>
</body>
</html>
