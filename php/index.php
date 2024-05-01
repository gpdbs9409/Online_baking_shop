<?php include('files/constants.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to We Bake!</title>
    <link rel="stylesheet" type="text/css" href="./css/index.css">
</head>

<body>
  <header>
    <h1>Welcome to We Bake!</h1>
    <nav>
      <ul>
        <li><a href="./index.php">Home</a></li>
        <li><a href="./providers.php">Food</a></li>
        <li><a href="./login.php">Account</a></li>
      </ul>
    </nav>
  </header>
  
  <main>
    <div class="explore-products">

      <!--first product shown on main-->
      <div class="bread-item">
          <div class="home-images">
            <img src="./images/b1.jpg" alt="Loaf of bread">
          </div>
          <h3>Art Baking</h3>
          <p>When art meets baking</p>
      </div>

      <!--second product shown on main-->
      <div class="bread-item">
        <img src="./images/b2.jpeg" alt="Bread rolls">
        <h3>Softy Rolls</h3>
        <p>Bake goods for family gatherings and dinner parties</p>
      </div>

      <!--first product shown on main-->
      <div class="bread-item">
        <img src="./images/b3.jpeg" alt="Buns">
        <h3>Sleeping buns</h3>
        <p>The perfect cookies for you my pookie</p>
      </div>

    </div>

  </main>
  
  <footer>
    <p>&copy; 2024 My Shop. All rights reserved.</p>
  </footer>
</body>
</html>