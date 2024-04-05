<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="CSS/login.css">
</head>
<body>
  <div class="container">
    <h2>Login</h2>
    <form id="loginForm">
      <div class="form-group">
        <label for="stulogemail">Username</label>
        <input type="email" placeholder="Enter the email" id="stulogemail" name="stulogemail">
      </div>

      <div class="form-group">
        <label for="stulogpass">Password</label>
        <input type="password" placeholder="Enter the password" id="stulogpass" name="stulogpass">
      </div>

      <button type="button" id="stuloginbtn" onclick="checkstulogin()">Login</button>
      
      <div class="form-group">
            <button type="button"><a href="index.php">Cancel</a></button>
      </div>
    </form>
  </div>
  <!-- initialize the js file -->
  <script type="text/javascript" src="JS/login.js"></script>

  </script>
</body>
</html>
