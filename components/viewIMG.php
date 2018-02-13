<?php
//добавление и вывод картинок на экран
$dir_path = 'users_img/'.$_COOKIE['email'];
$scan = scandir($dir_path);
for($i = 2; $i < count($scan); $i++) {
    $filename = $scan[$i];
    $format = substr($filename, strrpos($filename, '.'));

    $types = array('.jpg', '.png', '.gif', '.bmp', '.jpeg');

    if(!in_array($format, $types)) { 
        echo 'Недопустимый тип файла.';
    }
    else {
        echo "<form action='' method='POST' name='delForm'>
                <button name='del' class='del'></button><br>
                <img width='100px' id='userImage' src='".$dir_path."/".$scan[$i]."'><br>
                <input name='delName' value='".$scan[$i]."'>
            </form>";
    }

}
//удаление картинок
if(isset($_REQUEST['del'])) {
    $del = $_REQUEST['delName'];
    unlink($dir_path.'/'.$del);
    echo '<script>
    location.replace("profile.php");
    </script>';
}
?>