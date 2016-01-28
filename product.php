<?php

class product
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
   
   function addProduct($scatID)
   {
      $product = $_POST['product'];
      $price = $_POST['price'];
      $quantity = $_POST['quantity'];
      echo $product;
      $sql = "insert into Product (SubCategoryId, Product_Name, Current_Price, Available_Quantity) values('$scatID', '$product', '$price', '$quantity')";
      $result = mysqli_query(self::$conn, $sql);
   }

}

?>