<?php
include '../subcategory.php';
$subcategoryAction = new subcategory();
$catName = $_POST['cat'];
$subcategoryAction->addSubCategory($catName);
header("location:addsubcategory.html");
?>