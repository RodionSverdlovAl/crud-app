<?php

$connect = mysqli_connect('localhost', 'root', '', 'crud');

if(!$connect){
    die('error connect to database');
}