<?php
include '../subcategory.php';
$subcategoryAction = new subcategory();
$nsc = $_POST['scat'];
$subcategoryAction->editSubCategory($nsc);
header("location:editsubcategory.html");
?>