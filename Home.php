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
        background: rgba(58, 62, 66, 0.7); /* Slight transparency */
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

      .button {
        background-color: rgba(255, 255, 255, 0.1); /* Transparent search bar */
        border: none;
        color: white;
        padding: 5px 10px;
        border-radius: 20px;
        width: 100px;
      }

      footer {
        position: relative;
        bottom: 0;
        width: 100%;
      }
</style>

<body>
   <!-- Nav Bar: Home Page-->     
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
          
            <a class="nav-link me-3" href="cart.php">Cart</a>  <!--Cart page: -->
          <form class="d-flex">
            <input class="form-control me-2" type="text" placeholder="Search">
          </form>
          <button class="button">Sign In</button>
        </div>
      </nav>

          <div class="font">
            <h1 class="display-1">SneakCity</h1> 
          </div>
    <!-- Carousel Start -->
          <div id="demo" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
              <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
              <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="Pictures/Carousel/Screenshot 2025-04-03 at 9.09.21 PM.png" alt="Sneaker" class="d-block w-100">
              </div>
              <div class="carousel-item">
                <img src="Pictures/Carousel/Screenshot 2025-04-03 at 9.09.39 PM.png" alt="Sneaker" class="d-block w-100">
              </div>
              <div class="carousel-item">
                <img src="Pictures/Carousel/Screenshot 2025-04-03 at 9.09.51 PM.png" alt="Sneaker" class="d-block w-100">
              </div>
            </div>
            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
              <span class="carousel-control-next-icon"></span>
            </button>
          </div>
          <br><br>
    <!-- Carousel End -->          

    <!-- Test Products Start -->
      <!-- Four product cards (Used to test) We can add actual products from the database -->
        <h1 class="fontBody">Featured Products</h1>
        <div class="d-flex justify-content-between flex-wrap mb-6" style="margin: 16px; padding: 16px;">
          <div class="card" style="width: 200px;">
            <img class="card-img-top" src="Pictures/Screenshot 2025-02-03 at 5.18.03 PM.png" alt="Jordan Product Picture">
            <div class="card-body">
              <h4 class="card-title">Jordan 1</h4>
              <p class="card-text">Some example text.</p>
              <a href="#" class="btn btn-primary">Add to Cart</a>
            </div>
          </div>
          
          <div class="card" style="width: 200px;">
            <img class="card-img-top" src="Pictures/Screenshot 2025-02-03 at 5.18.03 PM.png" alt="Jordan Product Picture">
            <div class="card-body">
              <h4 class="card-title">Jordan 2</h4>
              <p class="card-text">Some example text.</p>
              <a href="#" class="btn btn-primary">Add to Cart</a>
            </div>
          </div>
          
          <div class="card" style="width: 200px;">
            <img class="card-img-top" src="Pictures/Screenshot 2025-02-03 at 5.18.03 PM.png" alt="Jordan Product Picture">
            <div class="card-body">
              <h4 class="card-title">Jordan 3</h4>
              <p class="card-text">Some example text.</p>
              <a href="#" class="btn btn-primary">Add to Cart</a>
            </div>
          </div>
          
          <div class="card" style="width: 200px;">
            <img class="card-img-top" src="Pictures/Screenshot 2025-02-03 at 5.18.03 PM.png" alt="Jordan Product Picture">
            <div class="card-body">
              <h4 class="card-title">Jordan 4</h4>
              <p class="card-text">Some example text.</p>
              <a href="#" class="btn btn-primary">Add to Cart</a>
            </div>
          </div>

          <div class="card" style="width: 200px;">
            <img class="card-img-top" src="Pictures/Screenshot 2025-02-03 at 5.18.03 PM.png" alt="Jordan Product Picture">
            <div class="card-body">
              <h4 class="card-title">Jordan </h4>
              <p class="card-text">Some example text.</p>
              <a href="#" class="btn btn-primary">Add to Cart</a>
            </div>
          </div>
        </div>
    <!-- Test Products End -->

    <!--Footer Start--> 
        <footer class="text-center text-lg-start bg-light text-muted">
          <div class="text-center p-4">
            © 2023 SneakCity. All rights reserved.
          </div>
        </footer>
    <!-- Footer End -->
</body>
</html>