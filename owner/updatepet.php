<?php
//PHP to update table after editing centre details

include("../conn.php");
include("../session.php");


if (basename($_FILES["petPic"]["name"])){

		// To set the folder, file name and file type
		$target_dir = "/SDP-Source-Code/Uploads/";
		$target_file = $target_dir.basename($_FILES["petPic"]["name"]);


    if (move_uploaded_file($_FILES["Petpic"]["tmp_name"], $target_file))
    		{
    			//To get file name
    			$file_name = basename($_FILES["Petpic"]["name"]);

    		}
        $sql = "UPDATE pets

        SET name='$_POST[petName]',
        age='$_POST[petAge]',
        species='$_POST[petSpecies]',
        breed='$_POST[petBreed]',
        image_name= '$file_name'

        WHERE ID=$_POST[id];";

}
else {
  $sql = "UPDATE pets

  SET name='$_POST[petName]',
  age='$_POST[petAge]',
  species='$_POST[petSpecies]',
  breed='$_POST[petBreed]',
  image_name= '$_POST[oldpic]'

  WHERE ID=$_POST[id];";
}



// $image = $_FILES['petPic']['name'];


if (!mysqli_query($con, $sql)) {
    die("Error: " . mysqli_error($con));
}
else {
	  echo '<script type="text/JavaScript"> alert("Pet Succesfully Updated!"); window.location.href = "/SDP-Source-Code/member/browsepages.php" </script>';
}

mysqli_close($con);

?>
