<?php
require_once("./DB/database.php");
$id=$_GET['id'] ?? null;
$orderState=true ;
$product_id=$_GET['product_id'];
if (!$id) {
    header('Location:showUserOrders.php');
    exit; 
}
$q="UPDATE orders SET orderState ='$orderState'  WHERE id ='$id'";
$conn->query($q);

$q2="UPDATE products SET salestate = '$orderState' WHERE id = '$product_id'";
$conn->query($q2);
// Products::update_product_saleState($pdo,$product_id);
header('Location:showUserOrders.php');
exit;
?>

