<?php
include '../category.php';
$categoryAction = new category();
$nc = $_POST['cat'];
$categoryAction->editCategory($nc);
header("location:editcategory.html");
?>