<?php
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        print_r($_POST);
        $user = $_POST['username'];
        $pass = $_POST['password'];

        if($user === 'chandra' && $pass ==='7143') {
            session_start();
            $_SESSION['username'] = $user;

            setcookie('username', $user, time() + 60 * 60 * 24);

            header('location:profile.php');
        }

        else {
            echo 'Invalid username or password';
        }
    }
?>