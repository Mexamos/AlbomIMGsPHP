<?php
include_once('\components\downloadFile.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Practic</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="templates\css\profile.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>

    <header>
        <div id="h2">
            <h2>RELAX</h2>
        </div>
        <div id="profile">
            
            <?php
            include '\components\initialization.php';
            ?>
            <a href="logOut.php"><button>Выйти</button></a>
 
        </div>
    </header>

    <div id="mainCont">
            <img src="https://s-media-cache-ak0.pinimg.com/originals/9d/85/b2/9d85b2100776ed739e6bc251ea8f2c11.gif">

            <div id="formDown">
            <form method="post" enctype="multipart/form-data">
                <br>
                <input type="file" name="file">
                <br>
                <a href="header.php"><input type="submit" value="Загрузить изображене!"></a>
            </form>
            </div>
    </div>

    <div id="cont">
        
        <?php
        include '\components\viewIMG.php';
        ?>

    </div>

    <div class="overlay">
        <div class="popup">
            <img src="#" width='500px'>
            <div class="close-popup"></div>
        </div>
    </div>
    
    <script src="templates\js\profile.js"></script>
    </body>
</html>