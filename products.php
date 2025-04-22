<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
      body {
        background-color:rgb(255, 255, 255);
      }

      @font-face {
        font-family: fontt;
        src: url(Gemstone.ttf);
      }

      .font {
        font-family: fontt;
        text-align: center;
        color: black;
      }

      .fontBody {
        color: black;
      }

      .carousel-inner img {
        width: 100%;
        height: 725px; /* Adjust this height as needed */
        object-fit: cover;
      }

      /* Navbar Styling */
      .navbar {
        position: sticky;
        top: 0;
        z-index: 1000;
        background: rgba(52, 58, 64, 0.7); /* Slight transparency */
        backdrop-filter: blur(10px); /* Blur effect when scrolling */
        font-size: 14px; /* Smaller text */
        padding: 0.3rem 1rem; /* Less padding to make it compact */
        height: 50px; /* Adjust height */
        display: flex;
        align-items: center;
      }

      .navbar-nav {
        display: flex;
        justify-content: center;
        width: 100%;
        gap: 10px; /* Adds space between menu items */
      }

      .navbar-brand img {
        width: 30px; /* Smaller logo */
        height: auto;
      }

      .form-control {
        background-color: rgba(255, 255, 255, 0.1); /* Transparent search bar */
        border: none;
        color: white;
        padding: 5px 10px;
        border-radius: 20px;
      }

      .form-control::placeholder {
        color: rgba(255, 255, 255, 0.5);
      }

      .navbar a {
        color: white;
        text-decoration: none;
        font-weight: 500;
      }

      .navbar a:hover {
        color: lightgray;
      }

      /* Optional: Adjust button styling */
      button {
        background: transparent;
        border: 1px solid white;
        color: white;
        padding: 5px 12px;
        border-radius: 20px;
        font-size: 14px;
      }

      button:hover {
        background: white;
        color: black;
      }

      .button {
        background-color: rgba(255, 255, 255, 0.1); /* Transparent search bar */
        border: none;
        color: white;
        padding: 5px 10px;
        border-radius: 20px;
        width: 100px;
      }
      
      .equal-height-card {
        height: 100%;
        display: flex;
        flex-direction: column;
      }

      .equal-height-card .card-body {
        flex-grow: 1;
        display: flex;
        flex-direction: column;
      }

      .equal-height-card .btn {
        margin-top: auto;
      }

      .card-img-top {
        height: 250px;
        object-fit: contain;
      }
      
      footer {
        position: relative;
        bottom: 0;
        width: 100%;
      }
</style>

</style>
<body>
   <!-- Nav Bar -->
      
       <nav class="navbar navbar-expand-sm navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="Home.php">
            <img src="Pictures/logoSC.png" alt="Avatar Logo" style="width:40px;" class="rounded-pill">
          </a>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="Home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="products.php">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contactUs.php">Contact Us</a>
            </li>
          </ul>

          <a class="nav-link me-3" href="cart.php">Cart</a> <!--Add a cart -->
          <form class="d-flex">
            <input class="form-control me-2" type="text" placeholder="Search">
          </form>
          <button class="button">Sign In</button>
        </div>
      </nav>
        
</body>
</html>
<?php 
  // Description: Connects to a MySQL database to retrieve product information.
  echo "<h2 class='font'>Products</h2>";
  $servername = "localhost";
  $username = "Display_db";
  $password = "123456";
  $dbname = "shoes_table"; 

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM shoes"; 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  /*
    Description:
    - This code displays the products in a grid layout using Bootstrap classes.
    - Each product is displayed in a card format with an image, name, brand, type, color, size, price, and stock information.
    - The card also includes a form to add the product to the cart.
    - The form includes hidden inputs for product details and a submit button.
    - When the button is clicked, the product details are sent to the cart.php page.
    FIXES: Need to be able to click *add to cart* and have it add the item to the cart intsead of taking you to the cart page
  */
  echo "<div class='container'><div class='row'>";
  while($row = $result->fetch_assoc()) {
      echo "
          <div class='col-md-4 mb-4 d-flex'>
              <div class='card mb-4 equal-height-card d-flex flex-column w-100'>
                  <img class='card-img-top' src='{$row['img']}' alt='{$row['name']}'>
                  <div class='card-body d-flex flex-column' style='background-color: lightgrey;'>
                              <h5 class='card-title'>{$row['name']}</h5>
                              <p class='card-text'><strong>Brand:</strong> {$row['brand']}</p>
                              <p class='card-text'><strong>Type:</strong> {$row['type']}</p>";
                              
                              if (!empty($row['color'])) {
                                echo "<p class='card-text'><strong>Color:</strong> {$row['color']}</p>";
                              }
                              if (!empty($row['size'])) {
                                echo "<p class='card-text'><strong>Size:</strong> {$row['size']}</p>";
                              }

      echo "<p class='card-text'><strong>Price:</strong> $ {$row['price']}</p>
                      <p class='card-text'><strong>Stock:</strong> {$row['in_stock']}</p>
                      
                      
                      <form method='POST' action='cart.php'> 
                          <input type='hidden' name='product_id' value='{$row['id']}'>
                          <input type='hidden' name='product_name' value='{$row['name']}'>
                          <input type='hidden' name='product_price' value='{$row['price']}'>
                          <input type='hidden' name='product_image' value='{$row['img']}'>
                          <input type='hidden' name='product_brand' value='{$row['brand']}'>
                          <input type='hidden' name='product_type' value='{$row['type']}'>";
                          
                          if (!empty($row['color'])) {
                            echo "<input type='hidden' name='product_color' value='{$row['color']}'>";
                          }
                          if (!empty($row['size'])) {
                            echo "<input type='hidden' name='product_size' value='{$row['size']}'>";
                          }
                          echo "<input type='hidden' name='product_stock' value='{$row['in_stock']}'>

                          <input type='submit' class='btn btn-primary mt-2' value='Add to Cart'>
                      </form>
                  </div>
              </div>
          </div>";
  }
  echo "</div></div>";
} else {
  echo "<p class='text-center'>No products available</p>";
}

$conn->close();
?>

<!-- Footer has to stay here so that it is at the bottom of the page -->
<footer class="text-center text-lg-start bg-light text-muted">
  <div class="text-center p-4">
    © 2023 SneakCity. All rights reserved.
  </div>
</footer>