<?php

class category
{
   
   private static $conn = Null;

   public function __construct()
   {
      $servername = "localhost";
      $username = "root";
      $password = "iti";
      $dbname = "ecommerce";
      if(is_null(self::$conn)) self::$conn = mysqli_connect('localhost','root','iti','ecommerce');
         
   }
   
   function addCategory()
   {
      $category = $_POST['cat'];
      $sql = "insert into Category (Categ_Name) values('$category')";
      $result = mysqli_query(self::$conn, $sql);
   }
   
   function editCategory($nc)
   {
      $category = $_POST['newcat'];
      $sql = "update Category set Categ_Name='$category' where Categ_Name='$nc'";
      $result = mysqli_query(self::$conn, $sql); 
   }
   
   function removeCategory($nc)
   {
      $sql = "delete from Category where Categ_Name = '$nc'";
      $result = mysqli_query(self::$conn, $sql);
   }
}
?>