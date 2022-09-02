<?php
include("../session.php");
$id = $userid;
?>
<html>
<!--Page to fill up form to add a new pet<-->
<head>
    <link rel = "stylesheet" href = "../CSS/ownerstyle.css">
</head>
<body style='background-image: url("/SDP-Source-Code/Imgs/bg.png");'>
    <title>Add a pet</title>
    <div class = "center" style='background-color: white;'>
    <h2>Add a pet to your Centre Page</h2>
    <h4>Please enter your pet's details below: </h4>
    <br>
    <form action="petinsert.php" method="post" enctype="multipart/form-data">
        <input type = "hidden" name = "centreID" value = "<?php echo "$id" ?>">
        <p>
        Pet Name: <br>
        <input type="text" name="petName" required="required">
        </p>
        <p>
        Pet Age: <br>
        <input type="text" name="petAge" required="required">
        </p>
        <p>
        Pet Species: <br>
        <input type="text" name="petSpecies" required="required">
        </p>
        <p>
        Pet Breed: <br>
        <input type="text" name="petBreed" required="required">
        </p>
        Pet photo: <br>
        <input type="file" name="petPic" id="centrePic">
        </p>
        <input type="submit" value="Submit Application">
    </form>
</div>
</body>
</html>
