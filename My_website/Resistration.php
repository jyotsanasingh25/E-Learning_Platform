
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration Page</title>
<link rel="stylesheet" href="CSS/resistration.css">
</head>
<body>

<div class="container">
    <h2>Registration</h2>
    <form action="#" method="post">
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
         <label for="username">Address:</label>
         <input type="text" id="Address" name="Address" required>
     </div>
        <div class="form-group">
            <input type="submit" value="Register">
        </div>
         <div class="form-group">
            <button>Cancel</button>
      </div>
    </form>
</div>

</body>
</html>