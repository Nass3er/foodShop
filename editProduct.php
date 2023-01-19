<?php
     /**  @var   $pdo \PDO */
     require_once("control/product.php");
      
    $id=$_GET['id'] ?? null;
     $product=null;
    if($id){
       
        $stmtquant=$conn->prepare('SELECT * from products where id=?');
        $stmtquant->bind_param('s',$id);
        $stmtquant->execute();
        $result=$stmtquant->get_result();
        $product=$result->fetch_assoc();  
    }
?>
<?php include_once("includes/header.php"); ?>
    <div class="login">
        <div class="box1">
            <div class="bord  ">
            <h4  >Update Product <span style="color:red;"><?php echo $product['pname'] ?> </span></h4>
            <form class="form" action="updateProduct.php" method="post"   enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $product['id'] ?>">
                <div class=" fgroup ">
                    <label for="pname">product name  :</label>
                    <input type="name"   placeholder="Enter name " value="<?php echo $product['pname'] ?>" name="pname" id="" required>
                </div>
                
                
                <div class="fgroup">
                    <label for="quantity">product  quantity:</label> 
                    <input type="text"  placeholder="Enter quantity" value="<?php echo $product['quantity'] ?>" name="quantity" id="nam" required>
                </div>
                <div class="fgroup">
                    <label for="photo">product  image:</label> 
                    <input type="file"  name="photo" value="<?php echo $product['photo'] ?>" id="nam" required>
                </div>
                <div class="fgroup">
                    <label for="pprice">product price:</label> 
                    <input type="text"   placeholder="Enter price"  value="<?php echo $product['pprice'] ?>" name="price" id="nam" required>
                </div>
                 
                <div class="fgroup">
                    <label for="category">choose category of product:</label> 
                    <select name="category" id=""  >
                        <option value="vegtables">vegtables</option>
                        <option value="tomato"> tomato</option>
                        <option value="tomato1"> tomato1</option>
                    </select>
                </div>
                <div class="sub">
                     <button class="" id="log" type="submit">update</button>
                    </div>
                   
            </form>
          
        </div>
        </div>
</div>
<?php include_once("includes/footer.php"); ?>
</body>
</html>