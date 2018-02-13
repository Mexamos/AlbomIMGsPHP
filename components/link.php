<?php
$host = 'localhost';
$user = 'mybd_user';
$pass = '123';
$db_name = 'test';
$link = mysqli_connect($host, $user, $pass, $db_name) or die(mysqli_error($link));
?>