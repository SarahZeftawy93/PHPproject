<?php
include '../user.php';
session_start();
$usern = $_SESSION['username'];
$user = new user();
$userpass = $user->getPassword($usern)['password'];
var_dump($userpass);
$mypass = $_POST['password'];
if($mypass == $userpass && $_POST['newpassword'] == $_POST['renewpassword'])
{
   $user->changePassword($usern, $_POST['newpassword']);
}
?>