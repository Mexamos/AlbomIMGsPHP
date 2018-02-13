<?php
    include '\components\link.php';
    include '\components\functions.php';

    //автоматический вход
    include '\components\autoAuth.php';
  
    //Вход
    include '\components\auth.php';

    //Регистрация
    include '\components\registration.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Practic</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="templates\css\main.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
        <header>
            <div id="h2">
                <h2>RELAX</h2>
            </div>
            <div id="auth">
                <form action="index.php" method="POST">
                    <input type="text" name="email_auth" placeholder="Введите эл. адрес">
                    <input type="password" name="password_auth" placeholder="Введите пароль">
                    <input type="submit" value="Вход">
                    <br>
                    <input name="remember" type="checkbox" value="1" id="remember">
                    <label for="remember">Запомнить меня</label>
                </form>
            </div>
        </header>


        <div id="mainCont">
            <img src="https://s-media-cache-ak0.pinimg.com/originals/75/d4/ee/75d4eebb74bd12b0a8f07ba23ee14f54.gif">

            <div id="registr">
                <h2>Регистрация</h2>

                <form action="index.php" method="POST">
                    <input name="name_reg" placeholder="Имя">
                    <input name="sureName_reg" placeholder="Фамилия">
                    <br>
                    <input name="email_reg" placeholder="Эл. адрес">
                    <br>
                    <input name="password_reg" placeholder="Пароль" type="password">
                    <input name="password_confirm_reg" placeholder="Повторите пароль" type="password">
                    <br>
                    <input type="submit" value="Создать аккаунт">
                </form>


                <div class="clearfix"></div>
        

            </div>
        </div>
    </body>
</html>