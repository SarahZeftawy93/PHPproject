<?php
include '../user.php';

$userAction = new user();
$un = $_POST['del'];
$userAction->deleteUser($un);
header("location:deleteuser.html");
