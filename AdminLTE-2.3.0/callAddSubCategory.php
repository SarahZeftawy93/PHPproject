<?php
include '../subcategory.php';
$subcategoryAction = new subcategory();
$catID = $_POST['cat'];
$subcategoryAction->addSubCategory($catID);
//
header("location:addsubcategory.php");
?>