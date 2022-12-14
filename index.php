<?php
require_once 'config/connect.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
    }
    th,td{
        padding:10px;
        border: 2px solid black;
    }
    th{
        background: #7cbf8f;
    }
    td{
        max-width: 600px;
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
                    <td><a href="update.php?id=<?= $product[0]?>">изменить</a></td>
                    <td style="background: darkred; color: white">
                        <a style="text-decoration: none; color: white" href="vendor/delete.php?id=<?= $product[0]?>">удалить</a>
                    </td>
                    <td><a href="product.php?id=<?=$product[0]?>">посмотреть</a></td>
                </tr>
            <?php
        }
        ?>
    </table>

    <form action="vendor/create.php", method="post">
        <p>Заголовок</p>
        <input type="text" name="title">
        <p>Описание</p>
        <textarea  name="description"></textarea>
        <p>Цена</p>
        <input type="number" name="price"><br>
        <button type="submit">Добавить</button>
    </form>

</body>
</html>


