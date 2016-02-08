<?php

class user {

	private static $conn = Null;

	public function __construct() {
		$servername = "localhost";
		$username   = "root";
		$password   = "iti";
		$dbname     = "ecommerce";
		if (is_null(self::$conn)) {
			self::$conn = mysqli_connect('localhost', 'root', 'iti', 'ecommerce');
		}
	}

	function addUser() {
		//insert what ever to user data
		$user   = $_POST['username'];
		$birth   = $_POST['birth'];
		$email   = $_POST['email'];
		$address = $_POST['address'];
		$job     = $_POST['job'];
		$pass    = $_POST['password'];
		$credit  = $_POST['credit'];
		$interest = $_POST['check'];
      	$interests = implode(", ", $interest);
		$sql  = "INSERT INTO Customer(Name, birthday, email, address, job, interests, password, credit_limi) VALUES ('$user','$birth','$email','$address','$job','$interests','$pass','$credit')";
		$result = mysqli_query(self::$conn, $sql);
		var_dump($result);
	}
	function displayUser() {
		//display user data
		$sql    = "select * from Customer where email = '$email'";
		$result = mysqli_query(self::$conn, $sql);
		$user   = mysqli_num_rows($result);
		return $user;

	}
}

?>