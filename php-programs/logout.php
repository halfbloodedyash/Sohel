<?php 
    session_start();

    session_destroy();

    setcookie('username', '', time() - 600);

    header('location:index1.php');
?>