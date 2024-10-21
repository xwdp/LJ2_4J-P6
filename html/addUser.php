<?php
require_once 'classes/User.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = new User();
    $user->addUser($_POST['username'], $_POST['password'], $_POST['email']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add user</title>
</head>
<body>
    <form method="POST" action="addUser.php">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="email" name="email" placeholder="Email">
        <input type="submit" value="Add user">
    </form>
</body>
</html>