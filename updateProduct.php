<?php
require_once("DB/database.php");
 
$imagePath='';
$errors=[];
 session_start();
if (isset($_POST['pname'])) {

    
  
    $file_name= $_FILES['photo']['name'] ;    
    $file_size=$_FILES['photo']['size'] ;
     $file_tmp=$_FILES['photo']['tmp_name'];

    $exten=strtolower(end(explode(".",$file_name)));
    
    $extentions=array("png","jpg","jpeg");
    if ($file_size>2*1024*1024)  
        $errors[]="file more than 2mb not allowd";
    if(!in_array($exten,$extentions))
    $errors[]=" this file extention not allowd";
 
    if (empty($errors)) {
      $imagePath="uploadimages/".$file_name;
      move_uploaded_file($file_tmp,$imagePath);
          }
    $id=$_POST['id'];
    $name=$_POST['pname'];
    $photo=$imagePath;
    $price=stripslashes($_POST['price']);
    $quantity=stripslashes($_POST['quantity']);
    $category=stripslashes($_POST['category']);

        $st= $conn->prepare("UPDATE products SET pname =?, pprice=?,
        quantity=? ,category=?, photo=? WHERE id =?");
         $st->bind_param('sssssi',$name,$price,$quantity,$category,$photo,$id);
         
         $st->execute();
         
        echo "<h2 style='color:green;'>updated successfully</h2>";
        header('Location:products.php');
        exit;
        }

?>