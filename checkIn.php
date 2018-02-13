<?php
include '\components\link.php';
include '\components\functions.php';

include '\components\authAfterRegistr.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Practic</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="templates\css\checkIn.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>


    <div id="auth">
    <h2>Enter</h2>
    <form action="checkIn.php" method="POST">
        <input type="text" name="email_auth" placeholder="Введите эл. адрес">
        <input type="password" name="password_auth" placeholder="Введите пароль">
        <br>
        <input name="remember" type="checkbox" value="1" id="remember">
        <label for="remember">Запомнить меня</label>
        <br>
        <input type="submit" value="Войти">
    </form>
    </div>

    <div id="triangle-down"></div>

    </body>
</html>