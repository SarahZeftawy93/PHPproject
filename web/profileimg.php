<?php

session_start();
if (isset($_POST['avatar']))
{
   $name = $_FILES['img']['name'];
   $size = $_FILES['img']['size'];
   $type = $_FILES['img']['type'];
   $tmp_name = $_FILES['img']['tmp_name'];

   $allowed_types = array('image/png', 'image/jpg', 'image/jpeg');

   if (!in_array($type, $allowed_types))
   {
      echo 'plz, upload image type';
   } else if ($size > 42565433)
   {
      echo 'plz, dun exceed the max limit of size';
   } else
   {
      move_uploaded_file($tmp_name, 'assets/img/' . $name);
      $_SESSION['imgName'] = $name;
      header("location:profile.php");
      
   }



   echo $name . "<br/>";
   echo $size . "<br/>";
   echo $type . "<br/>";
   echo $tmp_name . "<br/>";
} else
{
   echo 'please, submit the form';
}
?>
