<?php
include '../product.php';
$productAction = new product();
$scatID = $_POST['scat'];

$productAction->addProduct($scatID);

header("location:addProduct.php");
?>