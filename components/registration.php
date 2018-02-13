<?php
if(!empty($_REQUEST['name_reg']) && 
    !empty($_REQUEST['sureName_reg']) &&
    !empty($_REQUEST['email_reg']) &&
    !empty($_REQUEST['password_reg']) && 
    !empty($_REQUEST['password_confirm_reg'])) {

    $name_reg = $_REQUEST['name_reg'];
    $sureName_reg = $_REQUEST['sureName_reg'];
    $email_reg = $_REQUEST['email_reg'];
    $password_reg = $_REQUEST['password_reg'];
    $password_confirm_reg = $_REQUEST['password_confirm_reg'];


    if($password_reg == $password_confirm_reg) {
        $query = 'SELECT * FROM soc WHERE email="'.$email_reg.'"';

        $is_login_free = mysqli_fetch_assoc(mysqli_query($link, $query));

        if(empty($is_login_free)) {
            $salt = generateSalt();
            $saltPassword = md5($password_reg.$salt);

            $query = 'INSERT INTO soc SET name="'.$name_reg.'", 
            surename="'.$sureName_reg.'", email="'.$email_reg.'",
            password="'.$saltPassword.'",
            salt="'.$salt.'",
            cookie="",
            status="1"';

            echo mysqli_query($link, $query) or die(mysqli_error($link));

            echo '<script>
            location.replace("checkIn.php");
            </script>';

            // $subject = 'the subject';
            // $message = 'Вы зарегистрировались!';
            // mail($email_reg, $subject, $message);
        }
        else {
            echo "<script>alert('Такой email уже зарегистрирован!');</script>";
        }
    }
    else {
        echo "<script>alert('Пароли не совпадают!');</script>";
    }
}
?>