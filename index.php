<?php
require_once 'connect.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products</title>
</head>
<style>
    th,td{
        padding:10px;
        border: 2px solid black;
    }
    th{
        background: #7cbf8f;
    }
</style>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>title</th>
            <th>description</th>
            <th>price</th>
        </tr>

        <?php
        $products = mysqli_query($connect, "SELECT * FROM `products`");
        $products = mysqli_fetch_all($products);
        foreach ($products as $product){
            ?>
                <tr>
                    <td><?= $product[0]?></td>
                    <td><?= $product[1]?></td>
                    <td><?= $product[3]?></td>
                    <td><?= $product[2]?></td>
                </tr>
            <?php
        }
        ?>

    </table>

</body>
</html>


