<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Login</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href ="../CSS/admin.css">
</head>
<body>

<div class="login-box">
    <h2>Admin Login <i class="fa-solid fa-lock"></i> </h2>
    <form action="admin_login_process.php" method="post" class="login-form">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <div class="form-group">
            <button class="Butt" type="submit" id="Hit">Submit</button>
        </div>
    </form>
</div>

</body>
</html>


