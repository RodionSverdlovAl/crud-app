<?php
    require_once 'config/connect.php';
    $product_id = $_GET['id'];
    $product = mysqli_query($connect, "SELECT * FROM `products` WHERE `id`='$product_id'");
    $product = mysqli_fetch_assoc($product);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update product</title>
</head>
<body>
    <form action="vendor/update.php", method="post">
        <input type="hidden" name="id" value="<?=$product_id?>">
        <p>Заголовок</p>
        <input type="text" name="title" value="<?=$product['title']?>">
        <p>Описание</p>
        <textarea  name="description"><?=$product['description']?></textarea>
        <p>Цена</p>
        <input type="number" name="price" value="<?=$product['price']?>"><br>
        <button type="submit">Изменить</button>
    </form>
</body>
</html>