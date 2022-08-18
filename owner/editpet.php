<?php 
//PHP to edit pet details

include("../conn.php");

$id = intval($_GET['id']); 
$result = mysqli_query($con,"SELECT * FROM pets WHERE ID=$id");

while($row = mysqli_fetch_array($result)) {

?>

<form action="updatepet.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $row['ID'] ?>">
        <p>
        Pet name:
        <input type="text" name="petName" required="required" value="<?php echo $row['name'] ?>">
        </p>
        <p>
        Pet Age:
        <input type="text" name="petAge" required="required" value="<?php echo $row['age'] ?>">
        </p>
        <p>
        Pet Species:
        <input type="text" name="petSpecies" required="required" value="<?php echo $row['species'] ?>">
        </p>
        <p>
        Pet Breed:
        <input type="text" name="petBreed" required="required" value="<?php echo $row['breed'] ?>">
        </p>
        <p>
        Pet photo:
        <input type="file" name="petPic" id="petPic">
        </p>
        <input type="submit" value="Submit Application">
    </form>

<?php
}

mysqli_close($con);
?>