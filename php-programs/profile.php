<?php
    session_start();
    if(isset($_SESSION['username']) || $_COOKIE['username']) {
        $username = $_SESSION['username'];
        if ($username === null) {
            $username = $_COOKIE['username'];
        }
    }
    else {
        header('location:index.php');
    }
?>

<html>
    <head>
        <title>Profile</title>
    </head>
    <body>
        <h1>
            Welcome, <?php echo $username ?>.........!! <br>
            <a href="logout.php">Logout</a>
        </h1>
    </body>
</html>