<!-- insertion of boilerplate -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UFT-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial scale=1.0" />
    <title>product details</title>
    <link rel="stylesheet" href="style.css" />
    <script src="script.js"></script>
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    />

    <style>
      @import url("https://fonts.googleapis.com/css2?family=Tourney:ital,wght@1,200&display=swap");
    </style>
  </head>

  <body>
    <section id="header">
      <a href="#"><img src="img\logo.png" class="logo" alt="class" /></a>
      <div>
        <ul id="navbar">
          <li><a class="active" href="index.html">Home</a></li>
          <li>
            <a title="Search through 100s of items!" href="shop.html"
              >Shop Products</a
            >
          </li>
          <li>
            <a title="Info about the website & how to use it" href="about.html"
              >Help</a
            >
          </li>
          <li>
            <a title="Any Questions? Contact our team!" href="contact.html"
              >Contact</a
            >
          </li>
          <li>
            <a title="Want more tokens?" href="tokens.html">Token Currency</a>
          </li>
          <li>
            <a title="Checkout" href="basket.html"
              ><i class="far fa-shopping-bag"></i
            ></a>
          </li>
          <li><a href="login.html">Login</a></li>
        </ul>
      </div>
    </section>

   
        
        <div class = "content">
          <h2 class = "title">Paisley Scarf Print Skirt</h2>
          <div class = "rating">
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star-half-alt"></i>
            <span>4.7(ratings 21)</span>
          </div>

          
          <div class = "wrapper">
            <div class = "card">
              
<?php
  // Step 1: Set up database connection (assuming you have already established the connection)
  $connect = mysqli_connect('localhost', 'njm55_groupuser', 'Jj?CPYz!6Op5', 'njm55_GroupMarketplace');

  // Step 2: Fetch data from the database for a single product
  $productId = 1; // Replace with the ID of the desired product
  $query = "SELECT * FROM product WHERE productid = $productId"; // Modify the query based on your database schema
  $result = mysqli_query($connect, $query);

  // Step 3: Generate HTML dynamically
  if ($row = mysqli_fetch_assoc($result)) {
    $productName = $row['productname'];
    $productImage = $row['image'];
    $productPrice = $row['price'];
    $productid = $rw ['productid'];
    $productDescription = $row['productdesc'];

    // Generate HTML for the product
    echo '
    <div class="card">
      <div class="product">
        <div class="display">
          <div class="showcase">
            <img src="'.$productImage.'" alt="...">
          </div>
        </div>
        <div class="productprice">
          <p class="price">Price: <span>'.$productPrice.'</span></p>
        </div>
        <div class="detail">
          <h2>About this item:</h2>
          <p>'.$productDescription.'</p>
        </div>
        <!-- Rest of the HTML code for product details -->
      </div>
    </div>
    ';
  } else {
    echo 'Product not found.';
  }
  

  // Step 4: Output the generated HTML
  ?>

          <div class = "info">
            <input type = "number" min = "0" value = "1">
            <?php 
            echo '
            <button type="button" class="btn">
              <a href="shoppingcart.php?add-to-cart='.$productid.'">
                Add to Cart <i class="fas fa-shopping-cart"></i>
              </a>
            </button>
            ';
            ?>
            <!-- <button type = "button" class = "btn">
              Add to Cart <i class = "fas fa-shopping-cart"></i>
            </button> -->
            
          </div>

          <div class = "links">
            <p>Share At: </p>
            <a href = "#">
              <i class = "fab fa-facebook-f"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-twitter"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-instagram"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-whatsapp"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-pinterest"></i>
            </a>
          </div>
        </div>
      </div>
    </div> 
    

    <!-- <section id="hero">
        <h4>Exclusive Offers</h4>
        <h2>Shop on Campus</h2>
        <h1>Uniquely to you</h1>
        <h3>Tokens redeemable by game and trading. Up to 20% off</h3>
        <p> </p>
        <button class="button1"><a title="Search Products" href="shop.html">Search Products</a></button>
    </section> -->
  </body>
</html>
