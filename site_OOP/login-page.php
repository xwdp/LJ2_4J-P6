<!DOCTYPE html>
<html lang="en">
  <?php include "inlog.php"?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login Page</title>
</head>
<body>
    <div class="login-container">
        <h1>Welcome Back</h1>
        <form method="post">
            <input type="hidden" name="action" value="login">
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" id="username" name="username" placeholder="Enter your username" required>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <button type="submit">Submit</button> 
          </form>
        <div class="forgot-password">
            <a href="#">Forgot Password?</a>
        </div>
        <div class="register-now">
            <a href="register-page.php">Register Now</a>
        </div>
    </div>
</body>
</html>
