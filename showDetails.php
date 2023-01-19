
<?php
require_once("./DB/database.php");
$id=$_GET['id'] ?? null;

if (!$id) {
    header('Location:index.php');
    exit;
}
$stmtquant=$conn->prepare('SELECT * from products where id=?');
$stmtquant->bind_param('s',$id);
$stmtquant->execute();
$result=$stmtquant->get_result();
$product=$result->fetch_assoc();
 
?>

<?php include_once("includes/header.php"); ?>

   <div class="detail">
    <div class="container">
        <div class="image">
            <img src="<?php echo $product['photo'] ?>" alt="">

        </div>
        <div class="info">
            <h3>category:<?php echo $product['category'] ?></h3>
            <h2>name:<?php echo $product['pname'] ?></h2>
            <h4>price:<?php echo $product['pprice'] ?></h4>
            <div class="naser">
                <div class="gbtn">
                    <button onclick="minusfunc(<?php echo $product['pprice'] ?>);">-</button>
                    <button id="quant">1</button>
                    <button onclick="plusfunc(<?php echo $product['pprice'] ?>);">+</button>
                </div>
                <div>
                    <span>total:</span>
                <h5 id="total"><?php echo $product['pprice'] ?></h5>
                </div>
              
            </div>
            <form style="display:inline" action="addToCart.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $product['id'] ?>">
                        <input type="hidden" name="count"  id="valcount">
                        <button type="submit" class="" >ADD TO CARD</button>
                   </form> 
          
        </div>
      
    </div>
   </div>
   <?php include_once("includes/footer.php"); ?>
</body>
</html>