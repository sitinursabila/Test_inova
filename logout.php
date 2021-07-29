<?php 
	session_start();

    unset($_SESSION['login']);
    unset($_SESSION['login2']);
    session_destroy();
    header("Location: login.php");
 ?>