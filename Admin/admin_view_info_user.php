<?php
include("admin_session.php");
	if(isset($_POST["updateBtn"])){
		include("../conn.php");

		$sql = "UPDATE product SET
		product_name='$_POST[product_name]',
		product_price='$_POST[product_price]',
		product_qty='$_POST[product_qty]',
		Category='$_POST[Category]'

		WHERE id=$_POST[id];";

		if (mysqli_query($con, $sql)) {
		mysqli_close($con);
		echo "<script>alert('Record updated!'); window.location.href='admin_products.php';</script>";
		}

	}

?>
<!DOCTYPE html>
<html>
<head>
<title>Edit Product</title>
<link href="../CSS/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">
</head>

<body>
<?php
	include("../conn.php");
	$id = intval($_GET['ID']); //intval — Get the integer value of a variable
	$result = mysqli_query($con,"SELECT * FROM product WHERE id=$id");
	$row = mysqli_fetch_array($result)
	//while($row = mysqli_fetch_array($result))
	//{
?>

<form method="post" >
<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
<div id="container">
<h2>EcoFresh</h2>
<h3>Edit Product</h3>
<div class="section">
  <div class="label">
    Product Name
  </div>
  <div class="field">
    <input type="text" value="<?php echo $row["product_name"] ?>" name="product_name" required="required">
  </div>
</div>
<div class="section">
  <div class="label">
    Product Price
  </div>
  <div class="field">
    <input type="text" value="<?php echo $row["product_price"] ?>" name="product_price" required="required">
  </div>
</div>
<div class="section">
  <div class="label">
    Quantity
  </div>
  <div class="field">
    <input type="text" value="<?php echo $row["product_qty"] ?>" name="product_qty" required="required">
  </div>
</div>
<div class="section">
  <div class="label">
    Category
  </div>
  <div class="field" style="padding-top:10px;">
    <input type="radio" name="Category"
    <?php
    if ($row["Category"]=="Fruit"){
      echo 'checked="checked"';
    }
    ?>
    value="Fruit" required="required"> &nbsp;&nbsp;Fruit &nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio" name="Category"
    <?php
    if ($row["Category"]=="Vegetable"){
      echo 'checked="checked"';
    }
    ?>
    value="Vegetable" required="required"> &nbsp;&nbsp;Vegetable
  </div>
</div>
<div class="section">
  <div class="label">
    &nbsp;
  </div>
  <div class="field">
    <button type="submit" class="btn" name="updateBtn">Submit</button>
  </div>
	</div>
</div>
</form>
<?php
	mysqli_close($con);
?>
</body>
</html>
