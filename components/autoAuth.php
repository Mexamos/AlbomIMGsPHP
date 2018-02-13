<?php
if (empty($_SESSION['auth']) or $_SESSION['auth'] == false) {
    if ( !empty($_COOKIE['email']) and !empty($_COOKIE['key']) ) {
        $email = $_COOKIE['email']; 
        $key = $_COOKIE['key'];

        $query = 'SELECT*FROM soc WHERE email="'.$email.'" AND cookie="'.$key.'"';

        $result = mysqli_query($link, $query); 
        $user = mysqli_fetch_assoc($result);
        
        if (!empty($result)) {
            session_start(); 
            $_SESSION['auth'] = true; 
            $_SESSION['id'] = $user['id']; 
            $_SESSION['email'] = $user['email'];
            
            echo '<script>
                location.replace("profile.php");
                </script>';
        }
    }
}
?>