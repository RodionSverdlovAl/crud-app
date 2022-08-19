<?php

require_once '../config/connect.php';

$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];
$product_id = $_POST['id'];

mysqli_query($connect, "UPDATE `products` SET `title` = '$title', `price` = '$price', `description` = '$description' WHERE `products`.`id` = '$product_id'");
header('Location: ../index.php');