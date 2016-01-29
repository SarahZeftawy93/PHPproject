<?php
include '../user.php';
$user = new user();
$userInterest = $_POST['interset'];
$user->addInterests($usern, $userInterest);
header("location:adminpanel.html");
?>