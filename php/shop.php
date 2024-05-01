<?php
echo <<<HTML
<!DOCTYPE html>
<html>
<head>
  <title>Welcome to We Bake!</title>
  <link rel="stylesheet" type="text/css" href="demoostyle.css">
</head>
<body>
  <header>
    <h1>Welcome to We Bake!</h1>
    <nav>
      <ul>
        <li><a href="home.html">Home</a></li>
        <li><b href="shops.html">Shops</b></li>
        <li><a href="account.html">Your Account</a></li>
      </ul>
    </nav>
  </header>
  
  <main>
    <section id="bread-products">
      
      <a href="shop1.html">
        <div class="bread-item">
          <img src="b1.jpeg" alt="Loaf of bread">
          <h3>Art Baking</h3>
          <p>When art meets baking</p>
        </div>
      </a>
      
      <div class="bread-item">
        <img src="b2.jpeg" alt="Bread rolls">
        <h3>Softy Rolls</h3>
        <p>Bake goods for family gatherings and dinner parties</p>
      </div>
      
      <div class="bread-item">
        <img src="b3.jpeg" alt="Buns">
        <h3>Sleeping buns</h3>
        <p>The perfect cookies for you my pookie</p>
      </div>
      
    </section>
  </main>
  
  <footer>
    <p>&copy; 2024 My Shop. All rights reserved.</p>
  </footer>
</body>
</html>
HTML;
?>