<?php
include '../user.php';
session_start();
$usern = $_SESSION['username'];
$user = new user();
$userInterest = $_POST['interset'];
$user->addInterests($usern, $userInterest);
header("location:profile.php");
?>