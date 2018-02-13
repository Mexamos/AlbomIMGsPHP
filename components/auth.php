<?php
if(!empty($_REQUEST['email_auth'] && !empty($_REQUEST['password_auth']))) {
    $email_auth = $_REQUEST['email_auth'];
    $password_auth = $_REQUEST['password_auth'];

    $query = 'SELECT *FROM soc WHERE email="'.$email_auth.'"';

    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    $user = mysqli_fetch_assoc($result);

    if(!empty($user)) {
        $salt = $user['salt'];

        $saltedPassword = md5($password_auth.$salt);

        if($user['password'] == $saltedPassword) {
            session_start();

            $_SESSION['auth'] = true;
            $_SESSIN['id'] = $user['id'];
            $_SESSION['email'] = $user['email'];

            if(!empty($_REQUEST['remember']) && $_REQUEST['remember'] == 1) {
                $key = generateSalt();

                setcookie('email', $user['email'], time()+60*60*24*30);
                setcookie('key', $key, time()+60*60*24*30);

                $query = 'UPDATE soc SET cookie="'.$key.'" WHERE email="'.$email_auth.'"';

                mysqli_query($link, $query) or die(mysqli_error($link));

                echo '<script>
                location.replace("profile.php");
                </script>';
            }
        }
        else {
            echo "<script>alert('Неправильный пароль!');</script>";
        }
    }
    else {
        echo "<script>alert('Вы не зарегистрированны!');</script>";
    }
}
?>