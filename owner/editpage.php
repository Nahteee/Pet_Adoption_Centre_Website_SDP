<?php 
//PHP to edit centre details

include("../conn.php");

$id = intval($_GET['id']); 
$result = mysqli_query($con,"SELECT * FROM centre_pages WHERE ID=$id");
$pets = mysqli_query($con, "SELECT * FROM pets WHERE centre_ID=$id");

while($row = mysqli_fetch_array($result)) {

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
echo "<a href=\"petform.php?id=";
echo $row['ID'];
echo "\">Add pet</a>";
?>

    <table>
        <tr>
                <td>Pet's Name</td>
                <td>Pet's Age</td>
                <td>Species</td>
                <td>Breed</td>
                <td>Edit details</td>
                <td>Delete record</td>
        </tr>
        <?php
        while($row = mysqli_fetch_array($pets)) {
                echo "<tr>";
                echo "<td>";
                echo $row['name'];
                echo "</td>";

                echo "<td>";
                echo $row['age'];
                echo "</td>";

                echo "<td>";
                echo $row['species'];
                echo "</td>";

                echo "<td>";
                echo $row['breed'];
                echo "</td>";

                echo "<td>";
                echo "<a href=\"editpet.php?id=";
                echo $row['ID'];
                echo "\">Edit</a></td>";

                
                echo "<td><a href=\"deletepet.php?id=";
                echo $row['ID'];
                echo "\" onClick=\"return confirm('Delete ";
                echo $row['name'];
                echo " details?');\">Delete</a></td></tr>";;
        }

}

mysqli_close($con);
?> 