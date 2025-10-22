 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <title>Kkopi Tea - Home</title>
     <link rel="icon" href="image/LOGO.jpg" type="image/png" />

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

     <!-- Custom CSS -->
     <link rel="stylesheet" href="home.css">
 </head>

 <body>

     <!-- Navbar -->
     <nav class="navbar navbar-expand-lg sticky-top shadow-sm custom-navbar">
         <div class="container">
             <a class="navbar-brand d-flex align-items-center" href="#">
                 <img src="image/LOGO.jpg" alt="Logo" class="logo-img me-2">
                 <span class="fw-bold">Kkopi Tea</span>
             </a>
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                 <ul class="navbar-nav me-3">
                     <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                     <li class="nav-item"><a class="nav-link" href="product.php">Menu</a></li>
                     <li class="nav-item"><a class="nav-link" href="Contact.php">Contact</a></li>
                     <li class="nav-item"><a class="nav-link" href="About.php">About</a></li>
                 </ul>
             </div>
         </div>
     </nav>

     <!-- Hero / Banner -->
     <section class="hero position-relative text-center text-white">
         <img src="image/Background.png" class="w-100 hero-img" alt="Hero Banner">
         <div class="position-absolute top-50 start-50 translate-middle">
             <h1 class="fw-bold display-4"></h1>
             <p class="lead"></p>
             <a href="product.html" class="btn btn-warning btn-lg mt-3">Order Now</a>
         </div>
     </section>

     <!-- Carousel Section -->
     <section class="carousel-section py-5">
         <div class="container">
             <div id="menuCarousel" class="carousel slide shadow rounded" data-bs-ride="carousel">
                 <div class="carousel-inner rounded">
                     <div class="carousel-item active">
                         <img src="image/Caramel Series.png" class="d-block w-100 carousel-img" alt="Carousel 1">
                     </div>
                     <div class="carousel-item">
                         <img src="image/Chocoberry.png" class="d-block w-100 carousel-img" alt="Carousel 2">
                     </div>
                     <div class="carousel-item">
                         <img src="image/matcha.png" class="d-block w-100 carousel-img" alt="Carousel 3">
                     </div>
                 </div>
                 <!-- Controls -->
                 <button class="carousel-control-prev" type="button" data-bs-target="#menuCarousel"
                     data-bs-slide="prev">
                     <span class="carousel-control-prev-icon"></span>
                 </button>
                 <button class="carousel-control-next" type="button" data-bs-target="#menuCarousel"
                     data-bs-slide="next">
                     <span class="carousel-control-next-icon"></span>
                 </button>
                 <!-- Indicators -->
                 <div class="carousel-indicators">
                     <button type="button" data-bs-target="#menuCarousel" data-bs-slide-to="0" class="active"></button>
                     <button type="button" data-bs-target="#menuCarousel" data-bs-slide-to="1"></button>
                     <button type="button" data-bs-target="#menuCarousel" data-bs-slide-to="2"></button>
                 </div>
             </div>
         </div>
     </section>



     <!-- Featured Menu -->
     <section class="featured-menu py-5">
         <div class="container">
             <h2 class="text-center mb-4 fw-bold">Featured Menu</h2>
             <div class="row g-4 justify-content-center text-center">
                 <div class="col-6 col-md-3">
                     <img src="image/icedcoffee.jpg" class="img-fluid rounded shadow" alt="Iced Coffee">
                     <h5 class="mt-3">Iced Coffee</h5>
                 </div>
                 <div class="col-6 col-md-3">
                     <img src="image/milkte.jpg" class="img-fluid rounded shadow" alt="Milk Tea">
                     <h5 class="mt-3">Milk Tea</h5>
                 </div>
                 <div class="col-6 col-md-3">
                     <img src="image/hot coffee.jpg" class="img-fluid rounded shadow" alt="Hot Coffee">
                     <h5 class="mt-3">Hot Coffee</h5>
                 </div>
                 <div class="col-6 col-md-3">
                     <img src="image/fruit juice.jpg" class="img-fluid rounded shadow" alt="Fruit Juice">
                     <h5 class="mt-3">Fruit Juice</h5>
                 </div>
             </div>

             <div class="text-center mt-5">
                 <a href="product.html" class="btn btn-warning px-4 py-2 fw-bold shadow-sm rounded-pill">
                     View All Menu
                 </a>
             </div>
         </div>
     </section>

     <!-- Product Highlights -->
     <section class="products py-5">
         <div class="container">
             <h2 class="text-center mb-4 fw-bold">Best Sellers</h2>
             <div class="row g-4 justify-content-center">
                 <div class="col-6 col-md-3">
                     <div class="card shadow-sm">
                         <img src="image/pro8.jpg" class="card-img-top" alt="Drink">
                         <div class="card-body text-center">
                             <h5 class="card-title">Fruitiy Juice</h5>
                             <p class="card-text">₱50</p>
                         </div>
                     </div>
                 </div>
                 <div class="col-6 col-md-3">
                     <div class="card shadow-sm">
                         <img src="image/snack 2.jpg" class="card-img-top" alt="Snack">
                         <div class="card-body text-center">
                             <h5 class="card-title">Cheesy Nachos</h5>
                             <p class="card-text">₱90</p>
                         </div>
                     </div>
                 </div>
                 <div class="col-6 col-md-3">
                     <div class="card shadow-sm">
                         <img src="image/matcha better.jpg" class="card-img-top" alt="Matcha">
                         <div class="card-body text-center">
                             <h5 class="card-title">Matcha Better</h5>
                             <p class="card-text">₱150</p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>

     <!-- Promos Section -->
     <section class="promos py-5 bg-light">
         <div class="container">
             <h2 class="text-center mb-4 fw-bold">Promos & Deals</h2>
             <div class="row g-4">
                 <div class="col-12 col-md-4"><img src="image/promo 2.jpg" class="img-fluid rounded shadow" alt="">
                 </div>
                 <div class="col-12 col-md-4"><img src="image/promos1.jpg" class="img-fluid rounded shadow" alt="">
                 </div>
                 <div class="col-12 col-md-4"><img src="image/promos2.jpg" class="img-fluid rounded shadow" alt="">
                 </div>
             </div>
         </div>
     </section>

     <!-- Branches -->
     <section class="branches py-5">
         <div class="container">
             <h2 class="text-center mb-4 fw-bold">Our Branches</h2>
             <div class="row g-4">
                 <div class="col-md-4">
                     <div class="card shadow-sm">
                         <img src="image/branch1.jpg" class="card-img-top" alt="Branch">
                         <div class="card-body text-center">
                             <h5>Main Branch</h5>
                             <p>San Antonio, Nueva Ecija</p>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="card shadow-sm">
                         <img src="image/branch2.jpg" class="card-img-top" alt="Branch">
                         <div class="card-body text-center">
                             <h5>Cabanatuan City</h5>
                             <p>#123 Market St.</p>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="card shadow-sm">
                         <img src="image/branch3.jpg" class="card-img-top" alt="Branch">
                         <div class="card-body text-center">
                             <h5>Tarlac City</h5>
                             <p>SM City Tarlac</p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>

     <!-- Footer -->
     <footer class="footer text-white text-center py-4">
         <div class="container">
             <p class="mb-1"><strong>Business Owner:</strong> Angelica Banson</p>
             <p class="mb-1"><strong>Contact:</strong> 09455591120</p>
             <p class="mb-1"><strong>Facebook:</strong> Kkopi Tea - Poblacion, San Antonio FB Page</p>
             <p class="mb-0">&copy; 2025 Kkopi Tea. All rights reserved.</p>
         </div>
     </footer>

     <!-- Bootstrap JS -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
 </body>

 </html>