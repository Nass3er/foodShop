 
<?php
require_once("DB/database.php");
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location:index.php');
    exit;
}
$id=$_SESSION['user_id'];
$query="SELECT * from orders where user_id='$id'";
$result=mysqli_query($conn,$query);
 ?>       
<?php include_once("includes/header.php"); ?>

    <div class="card">
        <div class="container">
            <h4 >Your Orders</h4> 
            <?php while($row=mysqli_fetch_array($result)):?>

           <div class="row">
              <img src="<?php echo $row['photo'] ?>" width="100px" height="100px" alt=""/>
              <h4 class="total"><?php echo $row['quantity'] ?></h4>
               <div>
               <span data-state="<?php 
                echo $row['orderState'] = ($row['orderState'] ) ? '(Yes)' : '(No)' ;?>">order State</span>
               </div>  
               <?php  if(isset($_SESSION['user_id'])): ?>
                    
                        <a class="confirm" href="acceptOrder.php?id=<?php echo $row['id'] ?>&product_id=<?php echo $row['product_id'] ?> ">acccept</a>
                     
               <?php endif;?>
              
              <a class="cancel" href="#">X</a>
           </div>
           <hr>
           <?php endwhile; ?>
           
        </div>
    </div>
     
</body>
</html>