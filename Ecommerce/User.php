<?php
class user
{
   private static $conn = Null;

   public function __construct($id=-1) 
   {
      $servername = "localhost";
      $username = "root";
      $password = "iti";
      $dbname = "demo";
		if(is_null(self::$conn)) self::$conn = mysqli_connect($servername,$username,$password,$dbname);
   }
   
   function addUser()
   {
      //insert what ever to user data
      $sql = "insert into users values()";
      $result = mysqli_query($conn, $sql);
   }
   
   function deleteUser()
   {
      //delete user by id where user name is equal what ever admin wants
      $sql = "delete from users where username = $whatEver";
      $result = mysqli_query($conn, $sql);
   }
   
   function displayUser()
   {
      //display user data
      $sql = "select * from users where username = $whatever";
      $result = mysqli_query($conn, $sql);
   }
   
}
?>