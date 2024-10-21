<?php
require_once 'classes/User.php';
// Get all users
$users = User::getUsers();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show users</title>
</head>
<body>
    <?php 
    // Loop through the users and display their usernames
    foreach ($users as $user) {
        echo $user->username . '<br>';
    }

    ?>
</body>
</html>