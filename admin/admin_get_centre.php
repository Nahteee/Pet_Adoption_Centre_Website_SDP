<?php
include("../conn.php");
if(isset($_POST['id_user'])){
    $output='';

    $query = mysqli_query($con, "SELECT * FROM centre_pages WHERE ID='".$_POST['id_user']."'");

    $output .= '  
    <div class="table-responsive">  
         <table class="table table-bordered">';  
    while($row = mysqli_fetch_array($query))  
    {  
         $output .= '  
              <tr>  
                   <td width="30%"><label>Location</label></td>  
                   <td width="70%">'.$row["location"].'</td>  
              </tr>  
              <tr>  
                   <td width="30%"><label>Phone</label></td>  
                   <td width="70%">'.$row["phone"].'</td>  
              </tr>  
              <tr>  
                   <td width="30%"><label>Email</label></td>  
                   <td width="70%">'.$row["email"].'</td>  
              </tr>  
              <tr>  
                   <td width="30%"><label>Description</label></td>  
                   <td width="70%">RM '.$row["description"].'</td>  
              </tr>  
              <tr>  
                   <td width="30%"><label>Verfied page?</label></td>  
                   <td width="70%">'.$row["verified"].'</td>  
              </tr>  
              ';  
    }  
    $output .= "</table></div>";  
    echo $output;  
}
?>
