<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "azibas_lounge";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>

        body{
            font-family: Arial;
            background: #111;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-box{
            background: #1c1c1c;
            padding: 30px;
            border-radius: 10px;
            width: 300px;
        }

        h1{
            text-align: center;
            margin-bottom: 20px;
        }

        input{
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: none;
            border-radius: 5px;
        }

        button{
            width: 100%;
            padding: 12px;
            background: gold;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover{
            opacity: 0.9;
        }

    </style>

</head>
<body>

<div class="login-box">

    <h1>Login</h1>

    <form method="POST">

        <input type="email"
               name="email"
               placeholder="Enter Email"
               required>

        <input type="password"
               name="password"
               placeholder="Enter Password"
               required>

        <button type="submit" name="login">
            Login
        </button>

    </form>

</div>

</body>
</html>