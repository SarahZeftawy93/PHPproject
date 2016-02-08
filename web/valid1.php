<?php
include 'user1.php';
$_method = $_SERVER['REQUEST_METHOD'];
if ($_method == 'GET') {
	$user = new user();
	$r    = $user->displayUser($_GET['email']);
	// echo "$r";
	// echo "<pre>";
 // 	var_dump($r);
 // 	echo "</pre>";
	
	if ($r == 0) {
		echo "valid";
	}
	else {
		echo "invalid";
	}
}
// $user = new user();
// $r    = $user->displayUser($_GET['email']);
?>