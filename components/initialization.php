<?php
include 'link.php';
$query = 'SELECT * FROM soc WHERE email="'.$_COOKIE['email'].'"';
$result = mysqli_query($link, $query);
$user = mysqli_fetch_assoc($result);
echo "<span>".$user['name']." ".$user['surename']." это Ваш профиль!</span>";
?>