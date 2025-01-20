<!DOCTYPE html>
<html lang="en">
  <?php include "inlog.php"?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Register Page</title>
</head>
<body>
    <div class="login-container">
        <h1>Create an Account</h1>
        <form method="post">
            <input type="hidden" name="action" value="register">
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
            <div class="form-group">
              <label for="confirm-password">Confirm Password</label>
              <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm your password" required>
            </div>
            <button type="submit">Submit</button> 
        </form>
        <div class="forgot-password">
            <a href="login-page.php">Already have an account? Go back to login</a>
        </div>
    </div>
</body>
</html>