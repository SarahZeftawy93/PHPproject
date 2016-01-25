<?php
include '../category.php';
$categoryAction = new category();
$nc = $_POST['cat'];
$categoryAction->removeCategory($nc);
header("location:removecategory.html");
?>