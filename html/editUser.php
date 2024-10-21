<?php

require_once 'classes/User.php';
$user = new User();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Edit user
    $user = new User();
    $user->editUser($_POST['id'], $_POST['username'], $_POST['password'], $_POST['email']);
    header('Location: showUsers.php?msg=User edited');
}elseif(!isset($_GET['id'])){
    // Redirect to showUsers.php if the id is not set
    header('Location: showUsers.php');
}else{
    // Show the user
    $user = $user->showUser($_GET['id']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="editUser.php">
        <input type="text" name="username" value="<?php echo $user->username; ?>">
        <input type="password" name="password" value="<?php echo $user->password; ?>">
        <input type="email" name="email" value="<?php echo $user->email; ?>">
        <input type="hidden" name="id" value="<?php echo $user->id; ?>">
        <input type="submit" value="Edit user">
</body>
</html>
