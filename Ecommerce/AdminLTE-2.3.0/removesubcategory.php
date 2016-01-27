<?php
include '../subcategory.php';
$subcategoryAction = new subcategory();
$catName = $_POST['scat'];
$subcategoryAction->removeCategory($catName);
header("location:removesubcategory.html");
?>