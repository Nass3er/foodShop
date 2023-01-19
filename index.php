
<?php
session_start();
if(isset($_SESSION['user_id'])){
  // setcookie("userId",$_SESSION['user_id'],time()+3600,"/");
  // setcookie("userName",$_SESSION['userName'],time()+3600,"/");
  // setcookie("userEmail",$_SESSION['userEmail'],time()+3600,"/");
}
?>
<?php include_once("includes/header.php"); ?>

      </div class="back">
    <div class="landing">
    <div class="container">
      <img src="imgs/sho6.jpg" width="500px" alt="">

      <div class="text">
          <h1>Welcome to our Food shop</h1>
          <p> you can order from shopping store</p>
          <a href="products.php"> Views All foods</a>
        </div>
      
    </div>
      <a href="#articles" class="go-down">
        <i class="fas fa-angle-double-down fa-2x"></i>
      </a>
  
    </div>
    
    <!-- End Landing -->
    <!-- Start Articles -->
    <div class="articles" id="articles">
      <h2 class="main-title">What we make in shopping food</h2>
      <div class="container">
        <div class="box">
          <img src="imgs/team.jpg" height="250px" alt="" />
          <div class="content">
            
            <p>We have athe best cookers and tearoom, self guided tours and fun shopping food.</p>
          </div>
          <div class="info">
            <a href="">Read More</a>
            <i class="fas fa-long-arrow-alt-right"></i>
          </div>
        </div>
        <div class="box">
          <img src="imgs/sho5.jpg" height="250px" alt="" />
          <div class="content">
            
            <p>We have a takeout farm-to-table window onsite and make food in small batches.</p>
          </div>
          <div class="info">
            <a href="">Read More</a>
            <i class="fas fa-long-arrow-alt-right"></i>
          </div>
        </div>
        <div class="box">
          <img src="imgs/sho8.jpg" height="250px" alt="" />
          <div class="content">
           
            <p>Founding Member of Farmhouse Food Cooperative
            </p>
          </div>
          <div class="info">
            <a href="">Read More</a>
            <i class="fas fa-long-arrow-alt-right"></i>
          </div>
        </div>
        <div class="box">
          <img src="imgs/pho16.jpg" height="250px" alt="" />
          <div class="content">
            
            <p>Amazing food Team</p>
          </div>
          <div class="info">
            <a href="">Read More</a>
            <i class="fas fa-long-arrow-alt-right"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="spikes"></div>
    <!-- End  -->
     
    <!-- Start   -->
    <div class="testimonials" id="testimonials">
      <h2 class="main-title">Our Costomer </h2>
      <div class="container">
        <div class="box">
          <img src="imgs/pho15.jpg" alt="" />
          <h3>High quality ,nurching food</h3>
          <span class="title">customer from jazan</span>
          <div class="rate">
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <p>
            I received my order today and it’s the first time I've ordered through your store directly.  I was so impressed by not only the delicately packaged goods that came intact but also because of the freshness of all the produce. Wow this just blew my mind. I order most of our produce online from local organic vendors but you guys have been, by far, the best. The collard greens, kale, lettuce, dill…etc etc just popped out in colour and crispness.
          </p>
        </div>
        <div class="box">
          <img src="imgs/pho14.jpg" alt="" />
          <h3> loving the delivery service  </h3>
          <span class="title">customer from Nagran</span>
          <div class="rate">
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <p>
            Just wanted to tell you guys how much we are loving your delivery service. The food is amazing. It’s the highlight of our week.
          </p>
        </div>
        <div class="box">
          <img src="imgs/farm4.jpeg" alt="" />
          <h3> what keeps me coming back</h3>
          <span class="title">customer from Aseer</span>
          <div class="rate">
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores et reiciendis voluptatum, amet est natus
            quaerat ducimus
          </p>
        </div>
        
      </div>
    </div>
    <!-- End   -->
    
    <!-- Start Footer -->
    <?php include_once("includes/footer.php"); ?>
  </body>
</html>
