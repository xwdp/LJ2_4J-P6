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
    echo '<h1>Users</h1>';
    // Display the message
    $message = $_GET['msg'] ?? '';
    echo "<span style='color:green'>" .$message."</span><br><br>";
    echo '<a href="addUser.php">Add user</a>';
    echo '<br><br>';
    echo '<table>';
    foreach ($users as $user) {

        echo '<tr>';
        echo '<td>' . $user->username . '</td>';
        echo '<td>' . $user->email . '</td>';
        echo "<td><a href='editUser.php?id={$user->id}'>Edit</td>";
        echo "<td><a href='delUser.php?id={$user->id}'>Delete</td>";
        echo '</tr>';
    }
    echo '</table>';

    ?>
</body>
</html>