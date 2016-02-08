<?php
include 'user1.php';

// echo $_POST['username'];
// var_dump($_POST);
if (isset($_POST)) {
	// var_dump($_POST);
 	# code...
 	// echo "<pre>";
 	// var_dump($_POST);
 	// echo "</pre>";
 	$user    = new user();
	$user->addUser();
	session_start();
	$_SESSION['email'] = $_POST['email'];
	header('location: men.html');
	// echo '<META HTTP-EQUIV=REFRESH CONTENT="1; men.html">';
 	// echo "string";
 }
 else{
 	echo "not found";
 }

?>