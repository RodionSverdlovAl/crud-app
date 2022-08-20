<?php
require_once '../config/connect.php';

$comment = $_POST['comment'];
$id = $_POST['id'];
mysqli_query($connect, "INSERT INTO `comments` (`id`, `comment`, `product_id`) VALUES (NULL, '$comment', '$id')");
header('Location: /product.php?id='.$id);

