<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration Page</title>
<link rel="stylesheet" href="../CSS/registration.css">
</head>
<body>

<div class="container">
    <h2>Registration</h2>
    <form action="DBconnection.php" method="post">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>
        </div>
        <div class="form-group">
            <a href="regissucc.php"><button class="Butt" type="submit" id="Hit">Register</button></a>
        </div>
         <div class="form-group">
         <a href="../index.php"><button type="button">Cancel</button></a>
        </div>
    </form>
</div>

</body>

<script type="text/javascript" src="JS/regissucc.js"></script>

</html>
