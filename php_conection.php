<?php

function connection(){
    $host = "localhost:3306";
    $user = "root";
    $pass = "root";

    $bd = "northwind";

    $connect=mysqli_connect($host, $user, $pass);

    mysqli_select_db($connect, $bd);

    return $connect;

}

$con = connection();

$sql = "SELECT ProductID, ProductName, UnitsInStock FROM products";
$query = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Products</title>
</head>
<body>
<div class="container d-flex justify-content-center .align-items-center gap-3">
    <table>
        <?php while ($row = mysqli_fetch_array($query)): ?>
            <tr>
                <td><p><?= $row['ProductID']?></p></td>
                <td><p><?= $row['ProductName']?></p></td>
                <td><p><?= $row['UnitsInStock']?></p></td>
                
            </tr>
        <?php endwhile; ?>
    </table>
</div>
</body>
</html>