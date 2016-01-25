<?php
include '../user.php';

$userAction = new user();
$un = $_POST['editedun'];
$userAction->editUser($un);
?>