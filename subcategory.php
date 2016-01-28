<?php
class subcategory
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
   
   function getCategory()
   {
//      $subcategory = $_POST['scat'];
//      $sql = "insert into Sub_Category (Category_id,Sub_category_Name) values((select Categ_id from Category where Categ_Name='$catName'),'$subcategory');";
//      $result = mysqli_query(self::$conn, $sql);
      $sql = "select * from Category";
      $result = mysqli_query(self::$conn, $sql);
      return $result;
   }
   
   function addSubCategory($cid)
   {
      $subcategory = $_POST['scat'];
      $sql = "insert into Sub_Category (Category_id, Sub_category_Name) values('$cid', '$subcategory')";
      $result = mysqli_query(self::$conn, $sql);
   }
           
   function editSubCategory($nsc)
   {
      $subcategory = $_POST['nscat'];
      $sql = "update Sub_Category set Sub_category_Name='$subcategory' where Categ_Name='$nsc'";
      $result = mysqli_query(self::$conn, $sql); 
   }
   
   function removeCategory($sc)
   {
      $sql = "delete from Sub_Category where Sub_category_Name = '$sc'";
      $result = mysqli_query(self::$conn, $sql);
   }
}
?>