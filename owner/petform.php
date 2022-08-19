<?php
$id = intval($_GET['id']); 
?>
<html>
<!--Page to fill up form to add a new pet<-->

<body>
    <title>Add a pet</title>
    <h2>Add a pet to your Centre Page</h2>
    <h4>Please enter your pet's details below: </h4>
    <br>
    <form action="petinsert.php" method="post" enctype="multipart/form-data">
        <input type = "hidden" name = "centreID" value = "<?php echo "$id" ?>">
        <p>
        Pet Name:
        <input type="text" name="petName" required="required">
        </p>
        <p>
        Pet Age:
        <input type="text" name="petAge" required="required">
        </p>
        <p>
        Pet Species:
        <input type="text" name="petSpecies" required="required">
        </p>
        <p>
        Pet Breed:
        <input type="text" name="petBreed" required="required">
        </p>
        Pet photo:
        <input type="file" name="petPic" id="centrePic">
        </p>
        <input type="submit" value="Submit Application">
    </form>
</body>
</html>

