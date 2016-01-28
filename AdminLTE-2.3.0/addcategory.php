<?php
include '../category.php';
$categoryAction = new category();
$categoryAction->addCategory();
header("location:addcategory.html");
?>