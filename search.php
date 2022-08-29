<?php
// include("conn.php");
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT image_name, age, species, breed FROM pets WHERE CONCAT(age, species, breed) LIKE '%".$valueToSearch."%'";
    // $query = "SELECT * FROM `pets`";
    $search_result = filterTable($query);

}
 else {
    $query = "SELECT * FROM pets";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "pet-adoption-system-new");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>

        <form action="search.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>

            <table>
                <tr>
                    <th>Image</th>
                    <th>Age</th>
                    <th>Species</th>
                    <th>Breed</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['image_name'];?></td>
                    <td><?php echo $row['age'];?></td>
                    <td><?php echo $row['species'];?></td>
                    <td><?php echo $row['breed'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>

    </body>
</html>
