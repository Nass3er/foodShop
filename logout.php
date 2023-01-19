<?php
   session_start();
    
   if (isset($_SESSION['userEmail'])) {
    //    unset($_SESSION['username']);
    //    unset($_SESSION['password']);
       session_unset();
       session_destroy();

       header('Location:index.php');
       exit;
   }else{
    echo "you are not login";
   }
?>
