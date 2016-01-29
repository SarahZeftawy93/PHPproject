<?php
include '../user.php';
session_start();
$usern = $_SESSION['username'];
$user = new user();
$user->editUserSelf($usern);
?>