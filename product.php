<?php
require_once 'config/connect.php';
$product_id = $_GET['id'];
$product = mysqli_query($connect, "SELECT * FROM `products` WHERE `id`='$product_id'");
$product = mysqli_fetch_assoc($product);

$comments = mysqli_query($connect, "SELECT * FROM `comments` WHERE `product_id` = '$product_id'");
$comments = mysqli_fetch_all($comments);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product</title>
</head>
<body>
    <div class="product">
        <h3><?= $product['title']?></h3>
        <p>Цена:<?= $product['price']?> руб </p>
        <p>Описание:<?= $product['description']?> </p>
    </div>
    <a href="index.php">Назад</a>

    <p>Добавить комментарий</p>
    <form action="vendor/create_comment.php" method="post" >
        <input type="hidden" name="id" value="<?=$product_id?>">
        <textarea name="comment"></textarea>
        <button type="submit">добавить</button>
    </form>

    <h4>Комментарии</h4>
    <ul>
        <?php
        foreach ($comments as $comment){
        ?>
            <li><?=$comment[1]?></li>
        <?php
        }
        ?>
    </ul>


</body>
</html>