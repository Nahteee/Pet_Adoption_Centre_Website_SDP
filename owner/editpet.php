<?php 
//PHP to edit pet details

include("../conn.php");

$id = intval($_GET['id']); 
$result = mysqli_query($con,"SELECT * FROM pets WHERE ID=$id");

while($row = mysqli_fetch_array($result)) {

?>
<html>
<head>
        <link rel = "stylesheet" href = "../style.css">
</head>
<title>Edit pet details</title>

<body>
        <div class = "center">
                <h1>Centre pets </h1>
<form action="updatepet.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $row['ID'] ?>">
        <p>
        Pet name: <br>
        <input type="text" name="petName" required="required" value="<?php echo $row['name'] ?>">
        </p>
        <p>
        Pet Age: <br>
        <input type="text" name="petAge" required="required" value="<?php echo $row['age'] ?>">
        </p>
        <p>
        Pet Species: <br>
        <input type="text" name="petSpecies" required="required" value="<?php echo $row['species'] ?>">
        </p>
        <p>
        Pet Breed: <br>
        <input type="text" name="petBreed" required="required" value="<?php echo $row['breed'] ?>">
        </p>
        <p>
        Pet photo: <br>
        <img src = "<?php echo "../uploads/" . $row['image_name']?>" style = 'width: 300px; height: auto;'> <br>
        <input type="file" name="petPic" id="petPic" value = "<?php echo $row['image_name'] ?>">
        </p>
        <input type="submit" value="Save changes">
    </form>
</div>
</body>

<?php
}

mysqli_close($con);
?>