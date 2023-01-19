
<?php
require_once("DB/database.php");

if (isset($_POST['userPassword'])  && isset($_POST['password2'])) {
  
  if ($_POST['userPassword'] === $_POST['password2']) {
    $place=$_POST['place'];
    $email=$_POST['userEmail'];
    $pass=$_POST['userPassword'];
    $sql="INSERT INTO users(password,place,email)
    VALUES('$pass', '$place', '$email')";
    $result=mysqli_query($conn,$sql);

    if($result){

        echo "<h2 style='color:green;'>register successfully </h2>";
        echo' 
                  <script type="text/javascript">
                    setTimeout(function(){
                        window.location.href="index.php";
                    },2000);
                  </script> ';
    }
    }
        echo "</h2 style='color:red;'> not added ..?? </h2>";
  }  
  
 include_once("includes/header.php");  
?>
    <div class="login">
        <div class="box1">
            <div class="bord  ">
            <h4  >register</h4>
            <form class="form" action="<?php $_SERVER['PHP_SELF']?>" method="post">
                <div class=" fgroup ">
                    <label for="userEmail">Email  :</label>
                    <input type="email" class=" " placeholder="Enter email" name="userEmail" id="" required>
                </div>
                
                <div class="fgroup">
                    <label for="userPassword">place:</label> 
                    <input type="text" class=" " placeholder="Enter place" name="place" id=" " required>
                </div>
                <div class="fgroup">
                    <label for="userPassword">password:</label> 
                    <input type="password" class=" " placeholder="Enter password" name="userPassword" id="passw" required>
                </div>
            
                    <div class="fgroup">
                        <label for="userPassword">password:</label> 
                        <input type="password" class="" placeholder="confirm password" name="password2" id="passw" required>
                    </div>
                <div class="sub">
                     <button class="" id="log" type="submit">register</button>
                     
                    </div>
                   
            </form>
          
        </div>
        </div>
    
 
</div>
<?php include_once("includes/footer.php"); ?>
</body>
</html>