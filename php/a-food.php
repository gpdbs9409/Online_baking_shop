<?php

$conn = mysqli_connect('localhost', 'admin', '1234', 'bakery_project');

if(!$conn){
    echo 'connection error'. mysqli_connect_error();
}
?>


<!DOCTYPE html>
<html>
<head>
  <title>Welcome to We Bake!</title>
  <link rel="stylesheet" type="text/css" href="./css/food.css">
</head>
<body>
  <header>
    <h1>Welcome to We Bake!</h1>
    <nav>
        <ul>
          <li><a href="./index.php">Home</a></li>
          <li><a href="./food.php">Food</a></li>
          <li><a href="./login.php">Your Account</a></li>
        </ul>
      </nav>
  </header>
  
  <main>
    <section class="food-menu">
      <div class="food-icons">
        <div class="col1">
          <!--cat bread-->
            <div class="box">
              <img src="./images/products/cat-bread.jpg" alt="car-shaped-bread">
              <div class="img-desc">
                <div class="product-title">
                  <h4>Cat Bread</h4>
                  <h4>7HKD</h4>
                </div>
                  <a class="btn-ordering" href="">Order Now</a>
              </div>
            </div>
            <!--choco burger-->
            <div class="box">
              <img src="./images/products/chocolate-burger.jpg" alt="chocolate-burger">
              <div class="img-desc">
                <div class="product-title">
                  <h4>Choco Burger</h4>
                  <h4>10HKD</h4>
                </div>
                  <a class="btn-ordering" href="">Order Now</a>
              </div>
            </div>
            <!--strawberry slice-->
            <div class="box">
              <img src="./images/products/strawberry-slice.jpg" alt="car-shaped-bread">
              <div class="img-desc">
                <div class="product-title">
                  <h4>Strawberry Slice</h4>
                  <h4>21HKD</h4>
                </div>
                  <a class="btn-ordering" href="">Order Now</a>
              </div>
            </div>
            <!--mango roll-->
            <div class="box">
              <img src="./images/products/mango-roll.jpg" alt="car-shaped-bread">
              <div class="img-desc">
                <div class="product-title">
                  <h4>Mango Roll</h4>
                  <h4>12HKD</h4>
                </div>
                  <a class="btn-ordering" href="">Order Now</a>
              </div>
            </div>
<!--column 2-->
        </div>
        <div class="col2">
          <div class="box">
            <img src="./images/products/coconut-tart.jpg" alt="coconut-tart" >
            <div class="img-desc">
              <div class="product-title">
                <h4>Coconut Tart</h4>
                <h4>7HKD</h4>
              </div>
                <a class="btn-ordering" href="">Order Now</a>
            </div>
          </div>

          <div class="box">
            <img src="./images/products/mango-slice.jpg" alt="car-shaped-bread">
            <div class="img-desc">
              <div class="product-title">
                <h4>Mango Slice</h4>
                <h4>17HKD</h4>
              </div>
                <a class="btn-ordering" href="">Order Now</a>
            </div>
          </div>

          <div class="box">
            <img src="./images/products/jumbo-bun.jpg" alt="car-shaped-bread">

            <div class="img-desc">
              <div class="product-title">
                <h4>Jumbo Bun</h4>
                <h4>10HKD</h4>
              </div>
                <a class="btn-ordering" href="">Order Now</a>
            </div>
          </div>
          
          <div class="box">
            <img src="./images/products/strawberry-tart.jpg" alt="car-shaped-bread">
            <div class="img-desc">
              <div class="product-title">
                <h4>Strawberry Tart</h4>
                <h4>17HKD</h4>
              </div>
                <a class="btn-ordering" href="">Order Now</a>
            </div>
          </div>
        </div>
    </div>
          <!-- <h2 class="text-center">Available products</h2>
            <div class="food-container">
              <div class="food-img">
                <img src="./images/products/cat-bread.jpg" alt="ca-shaped-bread" class="img-responsive img-curve">                                      
              </div>

              <div class="food-desc">
                <h4>Chicken Biriyani</h4>
                    <p class="food-price">₹120.00</p>
                    <p class="food-detail">
                        Richly flavored aromatic rice layered with marinated chicken 
                    </p>
                    <a href="http://localhost/food-order/order.php?food_id=10" class="btn btn-primary">Order Now</a>
              </div>
            </div> -->
    </section>
  </main>
  
  <footer>
    <p>&copy; 2024 My Shop. All rights reserved.</p>
  </footer>
</body>
</html>