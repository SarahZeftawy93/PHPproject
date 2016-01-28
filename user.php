<?php

class user
{

   private static $conn = Null;

   public function __construct()
   {
      $servername = "localhost";
      $username = "root";
      $password = "iti";
      $dbname = "ecommerce";
      if (is_null(self::$conn))
         self::$conn = mysqli_connect('localhost', 'root', 'iti', 'ecommerce');
   }

   function addUser()
   {
      //insert what ever to user data
      $user = $_POST['username'];
      $birth = $_POST['birth'];
      $email = $_POST['email'];
      $address = $_POST['address'];
      $job = $_POST['job'];
      $pass = $_POST['password'];
      $credit = $_POST['credit'];
      $state = $_POST['admin'];
      $sql = "insert into Customer (Name,birthday,email,address,job,password,credit_limi,state) values('$user','$birth','$email','$address','$job','$pass','$credit','$state')";
      $result = mysqli_query(self::$conn, $sql);
      var_dump($result);
   }

   function editUser($un)
   {
      $user = $_POST['username'];
      $birth = $_POST['birth'];
      $email = $_POST['email'];
      $address = $_POST['address'];
      $job = $_POST['job'];
      $pass = $_POST['password'];
      $credit = $_POST['credit'];
      $state = $_POST['admin'];

      if ($birth != "")
      {
         $sql = "update Customer set birthday='$birth' where Name='$un'";
         $result = mysqli_query(self::$conn, $sql);
      }
      if ($email != "")
      {
         $sql = "update Customer set email='$email' where Name='$un'";
         $result = mysqli_query(self::$conn, $sql);
      }
      if ($address != "")
      {
         $sql = "update Customer set address='$address' where Name='$un'";
         $result = mysqli_query(self::$conn, $sql);
      }
      if ($job != "")
      {
         $sql = "update Customer set job='$job' where Name='$un'";
         $result = mysqli_query(self::$conn, $sql);
      }
      if ($pass != "")
      {
         $sql = "update Customer set password='$pass' where Name='$un'";
         $result = mysqli_query(self::$conn, $sql);
      }
      if ($credit != "")
      {
         $credit = intval($credit);
         $sql = "update Customer set credit_limi='$credit' where Name='$un'";
         $result = mysqli_query(self::$conn, $sql);
      }
      if ($state != "")
      {
         $state = intval($state);
         $sql = "update Customer set state='$state' where Name='$un'";
         $result = mysqli_query(self::$conn, $sql);
      }

      if ($user != "")
      {
         $sql = "update Customer set Name='$user' where Name='$un'";
         $result = mysqli_query(self::$conn, $sql);
      }
   }
   
   function editUserSelf($un)
   {
      $user = $_GET['username'];
      $birth = $_GET['birth'];
      $email = $_GET['email'];
      $address = $_GET['address'];
      $job = $_GET['job'];
      $credit = $_GET['credit'];

      if ($birth != "")
      {
         $sql = "update Customer set birthday='$birth' where Name='$un'";
         $result = mysqli_query(self::$conn, $sql);
      }
      if ($email != "")
      {
         $sql = "update Customer set email='$email' where Name='$un'";
         $result = mysqli_query(self::$conn, $sql);
      }
      if ($address != "")
      {
         $sql = "update Customer set address='$address' where Name='$un'";
         $result = mysqli_query(self::$conn, $sql);
      }
      if ($job != "")
      {
         $sql = "update Customer set job='$job' where Name='$un'";
         $result = mysqli_query(self::$conn, $sql);
      }
      if ($credit != "")
      {
         $credit = intval($credit);
         $sql = "update Customer set credit_limi='$credit' where Name='$un'";
         $result = mysqli_query(self::$conn, $sql);
      }

      if ($user != "")
      {
         $sql = "update Customer set Name='$user' where Name='$un'";
         $result = mysqli_query(self::$conn, $sql);
      }
   }
   

   function deleteUser($un)
   {
      //delete user by id where user name is equal what ever admin wants
      $sql = "delete from Customer where Name = '$un'";
      $result = mysqli_query(self::$conn, $sql);
   }

   function displayUser()
   {
      //display user data
      $sql = "select * from users where username = $whatever";
      $result = mysqli_query(self::$conn, $sql);
   }

   function getPassword($usern)
   {
      $sql = "select password from Customer where Name='$usern'";
      $result = mysqli_query(self::$conn, $sql);
      $fetched = mysqli_fetch_assoc($result);
      return $fetched;
   }

   function changePassword($usern, $pass)
   {
      $sql = "update Customer set password='$pass' where Name='$usern'";
      $result = mysqli_query(self::$conn, $sql);
   }

}

?>