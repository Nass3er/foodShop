 
<?php
require_once("DB/database.php");
 
 
session_start();
   $pro_id=$_GET['id'] ?? null;
   $res="";
  $product=null;
  
 if(isset($_SESSION['user_id'])){
    if(isset($_SESSION['cart'])){
        foreach ($_SESSION['cart'] as $key =>$val) {  
            if ($val['id']==$pro_id) {
               $user_id=$_SESSION['user_id'];
               $product_id=$val['id'];
               $photo=$val['photo'];
               $quantity=$val['quantity'];
               $date= date('Y-m-d H:i:s');
               $sql="INSERT INTO orders(user_id,product_id,quantity,photo,date)
               VALUES('$user_id', '$product_id', '$quantity','$photo','$date')";
               $result=mysqli_query($conn,$sql);
            }
        }
        header('Location:showUserOrders.php');
        exit;
    }  
   }else{
    header('Location:login.php');
    exit;
 } 

 header('Location:showUserOrders.php');
    exit;
?>
 