<?php 
//PHP to edit centre details

include("conn.php");

$id = intval($_GET['id']); 
$result = mysqli_query($con,"SELECT * FROM centre_pages WHERE id=6");
while($row = mysqli_fetch_array($result))
{
?>

<form action="updatepage.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $row['ID'] ?>">
        <p>
        Centre name:
        <input type="text" name="centreName" required="required" value="<?php echo $row['centre_name'] ?>">
        </p>
        <p>
        SSM:
        <input type="text" name="centreSSM" required="required" value="<?php echo $row['ssm'] ?>">
        </p>
        <p>
        Address:
        <textarea type="text" name="address" required="required"> <?php echo $row['location'] ?> </textarea>
        </p>
        <p>
        Phone number:
        <input type="tel" name="centrePhone" required="required" value="<?php echo $row['phone'] ?>">
        </p>
        <p>
        Your email:
        <input type="email" name="centreEmail" required="required" value="<?php echo $row['email'] ?>">
        </p>
        <p>
        Centre description:
        <textarea type="text" name="centreDesc"> <?php echo $row['description'] ?> </textarea>
        </p>
        <p>
        Centre photo:
        <input type="file" name="centrePic" id="centrePic">
        </p>
        <input type="submit" value="Submit Application">
    </form>


<?php
}

mysqli_close($con);
?> 