<?php

$servername = "localhost";
$username = "root";
$password = "iti";
$dbname = "ecommerce";
$email = $_POST['email'];
$conn = null;
if (is_null($conn))
   $conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "select state from Customer where email='$email'";
$result = mysqli_query($conn, $sql);
$table = mysqli_fetch_assoc($result);

//if it's normal user ===>0 , if it's admin ===> 1
if(current($table) == 1)
{
   header('location:web/indexadmin.html');

}
else
{
   header('location:web/indexuser.php');
}

?>
