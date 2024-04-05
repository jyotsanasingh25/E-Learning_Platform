<?php
require_once("adminconnect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Login</title>
<style>
    /* Reset CSS */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-image:url("IMAGE_FOLDER/admin.png");
        background-size:cover;
    }

    /* Login Box */
    .login-box {
        width: 350px;
        padding: 40px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        opacity: 1;
    }

    .login-box h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    .login-box input[type="text"],
    .login-box input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    .login-box input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    .login-box input[type="submit"]:hover {
        background-color: #0056b3;
    }

    .login-box p {
        margin-top: 15px;
        text-align: center;
    }

    .login-box p a {
        color: #007bff;
        text-decoration: none;
    }

    .login-box p a:hover {
        text-decoration: underline;
    }
</style>
</head>
<body>

<div class="login-box">
    <h2>Admin Login</h2>
    <form action="adminconnect.php" method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Login">
    </form>
    <p>Don't have an account? <a href="registration.php">Sign Up</a></p>
</div>

</body>
</html>


