<?php
include("../conn.php");
if(isset($_POST['id_user'])){
    $output='';

    $query = mysqli_query($con, "SELECT * FROM users WHERE ID='".$_POST['id_user']."'");

    $output .= '  
    <div class="table-responsive">  
         <table class="table table-bordered">';  
    while($row = mysqli_fetch_array($query))  
    {  
         $output .= '  
              <tr>  
                   <td width="30%"><label>Username</label></td>  
                   <td width="70%">'.$row["username"].'</td>  
              </tr>  
              <tr>  
                   <td width="30%"><label>IC</label></td>  
                   <td width="70%">'.$row["IC"].'</td>  
              </tr>  
              <tr>  
                   <td width="30%"><label>Email</label></td>  
                   <td width="70%">'.$row["email"].'</td>  
              </tr>  
              <tr>  
                   <td width="30%"><label>Income</label></td>  
                   <td width="70%">RM '.$row["income"].'</td>  
              </tr>  
              <tr>  
                   <td width="30%"><label>Address</label></td>  
                   <td width="70%">'.$row["address"].'</td>  
              </tr>  
              ';  
    }  
    $output .= "</table></div>";  
    echo $output;  
}
?>
