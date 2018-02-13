<?php
	session_start();
	session_destroy(); 
	setcookie('email', '', time()); 
	setcookie('key', '', time()); 
	header('Location: index.php');
	exit();	
?>