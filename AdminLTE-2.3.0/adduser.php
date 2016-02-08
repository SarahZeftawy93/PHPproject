<?php
include '../user.php';

$userAction = new user();
$userAction->addUser();
header("location:addInterestFromAdmin.php");
?>