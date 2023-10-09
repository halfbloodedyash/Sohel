<?php 
    // error_reporting(E_ERROR | E_PARSE);
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(isset($_SESSION['username']) || $_COOKIE['username']) {
            header('location:profile.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Application</title>
    <style>
        body{
            background-color: rgb(126, 168, 192);
        }
        h1{
            text-align: center;
            margin-top: 100px;
        }
        .login-page{
            background-color: rgb(224, 217, 178);
            width: 500px;
            height: 250px;
            padding: 50px 35px;
            position: absolute;
            transform: translate(-50%,-50%);
            top: 50%;
            left: 50%;
            border-radius: 9px;
            box-shadow: 20px 20px 35px black;
        }
        label{
            font-size: 25px;
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-weight: bold;

        }
        input{
            display: block;
            width: 80%;
            margin-top: 5px;
            padding: 12px;
            border-radius: 6px;
            outline: none;
            border-width: 2px;
            color: #101010;
            /* text-align: center; */
        }
        button{
            background-color:#812525 ;
            border: none;
            height: 40px;
            width: 40%;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
            text-transform:uppercase;
            font-weight: bold;
            font-size: 15px;
            letter-spacing: 1px;
            cursor: pointer;
            margin-top: 15px;
            border-radius: 6px;
        }
        #login1{
            margin-right: 25px;
        }
        button:hover{
            font-size: 18px;
            color: black;
            background-color:rgb(206, 205, 138);
        }
    </style>
</head>
<body>
    <h1>Login</h1>
    <form method="post" action="validate.php" class="login-page">
        <label for="username">Username: </label>
        <input type="text" id="username" name="username" placeholder="enter username" required><br>
        <label for="pass">Password: </label>
        <input type="password" id="pass" name="password" placeholder="enter password" required><br>

        <button type="submit" id="login1">Login</button>
    </form>
</body>
</html>