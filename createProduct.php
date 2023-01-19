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
    $name=$_POST['pname'];
    $photo=$imagePath;
    $price=stripslashes($_POST['price']);
    $quantity=stripslashes($_POST['quantity']);
    $category=stripslashes($_POST['category']);
   
    $sql="INSERT INTO products(pname,pprice,quantity,category,photo)
    VALUES('$name', '$price', '$quantity','$category','$photo')";
    $result=mysqli_query($conn,$sql);

    if($result){
        echo "<h2 style='color:green;'> created successfully </h2>";
        echo' 
        <script type="text/javascript">
          setTimeout(function(){
              window.location.href="products.php";
          },2000);
        </script> ';

    } else{
        echo "</h2 style='color:red;'> not added ..?? </h2>";
    }


}  else{
    echo "<h3>there are property not has value </h3> ";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create product</title>
    <link rel="stylesheet" href="css/other.css">
</head>
<body>
    <div class="login">
        <div class="box1">
            <div class="bord  ">
            <h4  >Add new Product</h4>
            <form class="form" action="<?php $_SERVER['PHP_SELF']?>" method="post"   enctype="multipart/form-data">
                <div class=" fgroup ">
                    <label for="pname">product name  :</label>
                    <input type="name"   placeholder="Enter name " name="pname" id="" required>
                </div>
                
                <div class="fgroup">
                    <label for="userPassword">product  quantity:</label> 
                    <input type="text"  placeholder="Enter quantity" name="quantity" id="nam" required>
                </div>
                <div class="fgroup">
                    <label for="userPassword">product  image:</label> 
                    <input type="file"  name="photo" id="nam" required>
                </div>
                <div class="fgroup">
                    <label for="userPassword">product price:</label> 
                    <input type="text"   placeholder="Enter price" name="price" id="nam" required>
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
                     <button class="" id="log" type="submit">Add</button>
                    </div>
                   
            </form>
          
        </div>
        </div>
    
 
</div>
</body>
</html>