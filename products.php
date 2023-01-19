
<?php
 
session_start();
require_once('DB/database.php');
$search=$_GET['search'] ?? '';
 
$result=mysqli_query($conn,'SELECT * fROM products');
?>

<?php include_once('includes/header.php'); ?>

    <div class='articles' id='articles'>
    <form action='<?php $_SERVER['PHP_SELF'] ?>' method='get'>
                       <div class='fsearch'>
                           <input type='text' name='search' placeholder='search about product name' class=''>
                           <a href='createProduct.php'> create productd</a>
                  
                          </div>
      </form>
        <h2 class='main-title'>All Products</h2>
        <div class='container'> 
           <?php 
           while($product=mysqli_fetch_array($result)){ 
            echo"
              
            <div class='box'>
              <img src='$product[photo]' height='300px' data-cat=' $product[category]' />
              <div class='content'>
                <p>  $product[pname]  </p>
               
                  <a href='editProduct.php?id=  $product[id] ' style='margin-right:3px;'><i  class='fa fa-edit'></i></a>
                  <a href='deleteProduct.php?id=    $product[id] ' style='margin-left:3px'><i  class='fa fa-trash-alt'></i></a>
                
              </div>
              <div class='info'>
                  <a href='showDetails.php?id=$product[id]  ' class='addcart'>add to cart</a>
                 
                    <span> </span>
                  
                <a href='showDetails.php?id= $product[id] '>Read details</a>
                <i class='fas fa-long-arrow-alt-right'></i>
              </div>
            </div>
            ";}
             ?>

            <hr>
          
       
        </div>
      </div>
      <div class='spikes'></div>
      <!-- End Articles -->
      <?php include_once('includes/footer.php'); ?>
</body>
</html>