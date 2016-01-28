<?php
include '../user.php';

$userAction = new user();
$userAction->addUser();
header("location:adduser.html");
?>