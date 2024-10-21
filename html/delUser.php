<?php
if(!isset($_GET['id'])){
    header('Location: showUsers.php');

}

require_once 'classes/User.php';
$user = new User();

$user->delUser($_GET['id']);
header('Location: showUsers.php?msg=User deleted');
  

?>