 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <title>Kkopi Tea - Product</title>
     <link rel="stylesheet" href="product.css" />
     <link rel="icon" href="image/LOGO.jpg" type="image/png" />
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
 </head>

 <body>
     <!-- Navbar -->
     <header>
         <nav class="navbar navbar-dark sticky-top">
             <div class="container">
                 <a class="navbar-brand d-flex align-items-center" href="#">
                     <img src="image/LOGO.jpg" alt="Kkopi Tea Logo" class="logo-img me-2">
                     <span class="fw-bold fs-4">Kkopi Tea</span>
                 </a>

                 <!-- Toggler for mobile sidebar -->
                 <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas"
                     data-bs-target="#mobileNav">
                     <span class="navbar-toggler-icon"></span>
                 </button>

                 <!-- Desktop Menu -->
                 <div class="d-none d-lg-flex ms-auto">
                     <ul class="navbar-nav d-flex flex-row align-items-center">
                         <li class="nav-item mx-2"><a class="nav-link fw-bold" href="index.php">Home</a></li>
                         <li class="nav-item mx-2"><a class="nav-link active fw-bold" href="product.html">Menu</a></li>

                         <li class="nav-item mx-2"><a class="nav-link fw-bold" href="Contact.php">Contact</a></li>
                         <li class="nav-item mx-2"><a class="nav-link fw-bold" href="About.php">About</a></li>
                         <li class="nav-item mx-2">
                             <a class="nav-link position-relative" href="#" data-bs-toggle="offcanvas"
                                 data-bs-target="#cartCanvas">
                                 <i class="bi bi-cart3 fs-5"></i>
                                 <span id="cart-count"
                                     class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">0</span>

                             </a>
                         </li>
                     </ul>
                 </div>
             </div>
         </nav>

         <!-- Mobile Offcanvas Sidebar -->
         <div class="offcanvas offcanvas-start" tabindex="-1" id="mobileNav">
             <div class="offcanvas-header">
                 <h5 class="offcanvas-title fw-bold" id="mobileNavLabel">Kkopi Tea</h5>
                 <img src="image/LOGO.jpg" alt="Kkopi Tea Logo" class="logo-img me-2">
                 <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
             </div>
             <div class="offcanvas-body">
                 <ul class="navbar-nav">
                     <li class="nav-item"><a class="nav-link fw-bold" href="index.html">Home</a></li>
                     <li class="nav-item"><a class="nav-link active fw-bold" href="product.html">Menu</a></li>

                     <li class="nav-item"><a class="nav-link fw-bold" href="#contact">Contact</a></li>
                     <li class="nav-item"><a class="nav-link fw-bold" href="#about">About</a></li>
                     <li class="nav-item">
                         <a class="nav-link position-relative" href="#" data-bs-toggle="offcanvas"
                             data-bs-target="#cartCanvas">
                             <i class="bi bi-cart3 fs-5"></i>
                             <span id="cart-count-mobile"
                                 class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">0</span>
                         </a>
                     </li>
                 </ul>
             </div>
         </div>
     </header>


     <!-- Main -->
     <main class="container py-4" id="home">
         <!-- Menu Section -->
         <section id="menu" class="mb-5">
             <h2 class="text-center mb-4">Menu</h2>

             <!-- Iced Coffee -->
             <div class="drink-category mb-5">
                 <h3>Iced Coffee</h3>
                 <div class="row g-4">

                     <!-- Americano -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Americano" data-img="image/icedcoffee.jpg"
                             data-price16="49" data-price22="59" data-category="Iced Coffee">
                             <img src="image/icedcoffee.jpg" class="card-img-top" alt="Americano">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Americano</p>
                                 <p class="mb-1">₱49 / ₱59</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Latte -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Latte" data-img="image/icedcoffee.jpg"
                             data-price16="55" data-price22="65" data-category="Iced Coffee">
                             <img src="image/icedcoffee.jpg" class="card-img-top" alt="Latte">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Latte</p>
                                 <p class="mb-1">₱55 / ₱65</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Mocha -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Mocha" data-img="image/icedcoffee.jpg"
                             data-price16="59" data-price22="69" data-category="Iced Coffee">
                             <img src="image/icedcoffee.jpg" class="card-img-top" alt="Mocha">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Mocha</p>
                                 <p class="mb-1">₱59 / ₱69</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Caramel Macchiato -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Caramel Macchiato"
                             data-img="image/icedcoffee.jpg" data-price16="62" data-price22="72"
                             data-category="Iced Coffee">
                             <img src="image/icedcoffee.jpg" class="card-img-top" alt="Caramel Macchiato">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Caramel Macchiato</p>
                                 <p class="mb-1">₱62 / ₱72</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Hazelnut -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Hazelnut" data-img="image/icedcoffee.jpg"
                             data-price16="58" data-price22="68" data-category="Iced Coffee">
                             <img src="image/icedcoffee.jpg" class="card-img-top" alt="Hazelnut">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Hazelnut</p>
                                 <p class="mb-1">₱58 / ₱68</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Vanilla -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Vanilla" data-img="image/icedcoffee.jpg"
                             data-price16="57" data-price22="67" data-category="Iced Coffee">
                             <img src="image/icedcoffee.jpg" class="card-img-top" alt="Vanilla">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Vanilla</p>
                                 <p class="mb-1">₱57 / ₱67</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Espresso -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Espresso" data-img="image/icedcoffee.jpg"
                             data-price16="50" data-price22="60" data-category="Iced Coffee">
                             <img src="image/icedcoffee.jpg" class="card-img-top" alt="Espresso">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Espresso</p>
                                 <p class="mb-1">₱50 / ₱60</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Coffee Jelly -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Coffee Jelly" data-img="image/icedcoffee.jpg"
                             data-price16="63" data-price22="73" data-category="Iced Coffee">
                             <img src="image/icedcoffee.jpg" class="card-img-top" alt="Coffee Jelly">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Coffee Jelly</p>
                                 <p class="mb-1">₱63 / ₱73</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- White Mocha -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="White Mocha" data-img="image/icedcoffee.jpg"
                             data-price16="65" data-price22="75" data-category="Iced Coffee">
                             <img src="image/icedcoffee.jpg" class="card-img-top" alt="White Mocha">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">White Mocha</p>
                                 <p class="mb-1">₱65 / ₱75</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Matcha Latte -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Matcha Latte" data-img="image/icedcoffee.jpg"
                             data-price16="60" data-price22="70" data-category="Iced Coffee">
                             <img src="image/icedcoffee.jpg" class="card-img-top" alt="Matcha Latte">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Matcha Latte</p>
                                 <p class="mb-1">₱60 / ₱70</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Peppermint Mocha -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Peppermint Mocha"
                             data-img="image/icedcoffee.jpg" data-price16="66" data-price22="76"
                             data-category="Iced Coffee">
                             <img src="image/icedcoffee.jpg" class="card-img-top" alt="Peppermint Mocha">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Peppermint Mocha</p>
                                 <p class="mb-1">₱66 / ₱76</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Brown Sugar -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Brown Sugar" data-img="image/icedcoffee.jpg"
                             data-price16="64" data-price22="74" data-category="Iced Coffee">
                             <img src="image/icedcoffee.jpg" class="card-img-top" alt="Brown Sugar">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Brown Sugar</p>
                                 <p class="mb-1">₱64 / ₱74</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Tiramisu -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Tiramisu" data-img="image/icedcoffee.jpg"
                             data-price16="67" data-price22="77" data-category="Iced Coffee">
                             <img src="image/icedcoffee.jpg" class="card-img-top" alt="Tiramisu">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Tiramisu</p>
                                 <p class="mb-1">₱67 / ₱77</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                 </div>
             </div>


             <!-- Milk Tea -->
             <div class="drink-category mb-5">
                 <h3>Milk Tea</h3>
                 <div class="row g-4">
                     <!-- Taro -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Taro Milk Tea" data-img="image/milkte.jpg"
                             data-price16="60" data-price22="70" data-category="Milk Tea">
                             <img src="image/milkte.jpg" class="card-img-top" alt="Taro Milk Tea">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Taro Milk Tea</p>
                                 <p class="mb-1">₱60 / ₱70</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Classic -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Classic Milk Tea" data-img="image/milkte.jpg"
                             data-price16="55" data-price22="65" data-category="Milk Tea">
                             <img src="image/milkte.jpg" class="card-img-top" alt="Classic Milk Tea">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Classic Milk Tea</p>
                                 <p class="mb-1">₱55 / ₱65</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Matcha -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Matcha Milk Tea" data-img="image/milkte.jpg"
                             data-price16="65" data-price22="75" data-category="Milk Tea">
                             <img src="image/milkte.jpg" class="card-img-top" alt="Matcha Milk Tea">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Matcha Milk Tea</p>
                                 <p class="mb-1">₱65 / ₱75</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Honeydew -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Honeydew Milk Tea" data-img="image/milkte.jpg"
                             data-price16="60" data-price22="70" data-category="Milk Tea">
                             <img src="image/milkte.jpg" class="card-img-top" alt="Honeydew Milk Tea">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Honeydew Milk Tea</p>
                                 <p class="mb-1">₱60 / ₱70</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Chocolate -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Chocolate Milk Tea" data-img="image/milkte.jpg"
                             data-price16="65" data-price22="75" data-category="Milk Tea">
                             <img src="image/milkte.jpg" class="card-img-top" alt="Chocolate Milk Tea">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Chocolate Milk Tea</p>
                                 <p class="mb-1">₱65 / ₱75</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Strawberry -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Strawberry Milk Tea"
                             data-img="image/milkte.jpg" data-price16="60" data-price22="70" data-category="Milk Tea">
                             <img src="image/milkte.jpg" class="card-img-top" alt="Strawberry Milk Tea">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Strawberry Milk Tea</p>
                                 <p class="mb-1">₱60 / ₱70</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Wintermelon -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Wintermelon Milk Tea"
                             data-img="image/milkte.jpg" data-price16="60" data-price22="70" data-category="Milk Tea">
                             <img src="image/milkte.jpg" class="card-img-top" alt="Wintermelon Milk Tea">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Wintermelon Milk Tea</p>
                                 <p class="mb-1">₱60 / ₱70</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Okinawa -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Okinawa Milk Tea" data-img="image/milkte.jpg"
                             data-price16="65" data-price22="75" data-category="Milk Tea">
                             <img src="image/milkte.jpg" class="card-img-top" alt="Okinawa Milk Tea">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Okinawa Milk Tea</p>
                                 <p class="mb-1">₱65 / ₱75</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Caramel -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Caramel Milk Tea" data-img="image/milkte.jpg"
                             data-price16="65" data-price22="75" data-category="Milk Tea">
                             <img src="image/milkte.jpg" class="card-img-top" alt="Caramel Milk Tea">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Caramel Milk Tea</p>
                                 <p class="mb-1">₱65 / ₱75</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Brown Sugar -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Brown Sugar Milk Tea"
                             data-img="image/milkte.jpg" data-price16="70" data-price22="80" data-category="Milk Tea">
                             <img src="image/milkte.jpg" class="card-img-top" alt="Brown Sugar Milk Tea">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Brown Sugar Milk Tea</p>
                                 <p class="mb-1">₱70 / ₱80</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Vanilla -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Vanilla Milk Tea" data-img="image/milkte.jpg"
                             data-price16="60" data-price22="70" data-category="Milk Tea">
                             <img src="image/milkte.jpg" class="card-img-top" alt="Vanilla Milk Tea">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Vanilla Milk Tea</p>
                                 <p class="mb-1">₱60 / ₱70</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Almond -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Almond Milk Tea" data-img="image/milkte.jpg"
                             data-price16="65" data-price22="75" data-category="Milk Tea">
                             <img src="image/milkte.jpg" class="card-img-top" alt="Almond Milk Tea">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Almond Milk Tea</p>
                                 <p class="mb-1">₱65 / ₱75</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Lychee -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Lychee Milk Tea" data-img="image/milkte.jpg"
                             data-price16="60" data-price22="70" data-category="Milk Tea">
                             <img src="image/milkte.jpg" class="card-img-top" alt="Lychee Milk Tea">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Lychee Milk Tea</p>
                                 <p class="mb-1">₱60 / ₱70</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Blueberry -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Blueberry Milk Tea" data-img="image/milkte.jpg"
                             data-price16="65" data-price22="75" data-category="Milk Tea">
                             <img src="image/milkte.jpg" class="card-img-top" alt="Blueberry Milk Tea">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Blueberry Milk Tea</p>
                                 <p class="mb-1">₱65 / ₱75</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Peach -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Peach Milk Tea" data-img="image/milkte.jpg"
                             data-price16="60" data-price22="70" data-category="Milk Tea">
                             <img src="image/milkte.jpg" class="card-img-top" alt="Peach Milk Tea">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Peach Milk Tea</p>
                                 <p class="mb-1">₱60 / ₱70</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                 </div>
             </div>

             <!-- Frappe -->
             <div class="drink-category mb-5">
                 <h3>Frappe</h3>
                 <div class="row g-4">

                     <!-- Flavor 1 -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Mocha Frappe" data-img="image/frappe/mo.jpg"
                             data-price16="75" data-price22="85" data-category="Frappe">
                             <img src="image/frappe/mo.jpg" class="card-img-top" alt="Mocha Frappe">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Mocha Frappe</p>
                                 <p class="mb-1">₱75 / ₱85</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Flavor 2 -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Caramel Frappe" data-img="image/frappe/mo.jpg"
                             data-price16="75" data-price22="85" data-category="Frappe">
                             <img src="image/frappe/mo.jpg" class="card-img-top" alt="Caramel Frappe">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Caramel Frappe</p>
                                 <p class="mb-1">₱75 / ₱85</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Flavor 3 -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Chocolate Frappe"
                             data-img="image/frappe/mo.jpg" data-price16="75" data-price22="85" data-category="Frappe">
                             <img src="image/frappe/mo.jpg" class="card-img-top" alt="Chocolate Frappe">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Chocolate Frappe</p>
                                 <p class="mb-1">₱75 / ₱85</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Flavor 4 -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Vanilla Frappe" data-img="image/frappe/mo.jpg"
                             data-price16="75" data-price22="85" data-category="Frappe">
                             <img src="image/frappe/mo.jpg" class="card-img-top" alt="Vanilla Frappe">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Vanilla Frappe</p>
                                 <p class="mb-1">₱75 / ₱85</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Flavor 5 -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Strawberry Frappe"
                             data-img="image/frappe/mo.jpg" data-price16="75" data-price22="85" data-category="Frappe">
                             <img src="image/frappe/mo.jpg" class="card-img-top" alt="Strawberry Frappe">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Strawberry Frappe</p>
                                 <p class="mb-1">₱75 / ₱85</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Flavor 6 -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Matcha Frappe" data-img="image/frappe/mo.jpg"
                             data-price16="75" data-price22="85" data-category="Frappe">
                             <img src="image/frappe/mo.jpg" class="card-img-top" alt="Matcha Frappe">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Matcha Frappe</p>
                                 <p class="mb-1">₱75 / ₱85</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Flavor 7 -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Coffee Frappe" data-img="image/frappe/mo.jpg"
                             data-price16="75" data-price22="85" data-category="Frappe">
                             <img src="image/frappe/mo.jpg" class="card-img-top" alt="Coffee Frappe">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Coffee Frappe</p>
                                 <p class="mb-1">₱75 / ₱85</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Flavor 8 -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Caramel Macchiato Frappe"
                             data-img="image/frappe/mo.jpg" data-price16="80" data-price22="90" data-category="Frappe">
                             <img src="image/frappe/mo.jpg" class="card-img-top" alt="Caramel Macchiato Frappe">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Caramel Macchiato Frappe</p>
                                 <p class="mb-1">₱80 / ₱90</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Flavor 9 -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Cookies & Cream Frappe"
                             data-img="image/frappe/mo.jpg" data-price16="80" data-price22="90" data-category="Frappe">
                             <img src="image/frappe/mo.jpg" class="card-img-top" alt="Cookies & Cream Frappe">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Cookies & Cream Frappe</p>
                                 <p class="mb-1">₱80 / ₱90</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Flavor 10 -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Peanut Butter Frappe"
                             data-img="image/frappe/mo.jpg" data-price16="80" data-price22="90" data-category="Frappe">
                             <img src="image/frappe/mo.jpg" class="card-img-top" alt="Peanut Butter Frappe">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Peanut Butter Frappe</p>
                                 <p class="mb-1">₱80 / ₱90</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Flavor 11 -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Oreo Frappe" data-img="image/frappe/mo.jpg"
                             data-price16="80" data-price22="90" data-category="Frappe">
                             <img src="image/frappe/mo.jpg" class="card-img-top" alt="Oreo Frappe">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Oreo Frappe</p>
                                 <p class="mb-1">₱80 / ₱90</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Flavor 12 -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Hazelnut Frappe" data-img="image/frappe/mo.jpg"
                             data-price16="80" data-price22="90" data-category="Frappe">
                             <img src="image/frappe/mo.jpg" class="card-img-top" alt="Hazelnut Frappe">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Hazelnut Frappe</p>
                                 <p class="mb-1">₱80 / ₱90</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Flavor 13 -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="White Chocolate Frappe"
                             data-img="image/frappe/mo.jpg" data-price16="80" data-price22="90" data-category="Frappe">
                             <img src="image/frappe/mo.jpg" class="card-img-top" alt="White Chocolate Frappe">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">White Chocolate Frappe</p>
                                 <p class="mb-1">₱80 / ₱90</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Flavor 14 -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Dark Chocolate Frappe"
                             data-img="image/frappe/mo.jpg" data-price16="80" data-price22="90" data-category="Frappe">
                             <img src="image/frappe/mo.jpg" class="card-img-top" alt="Dark Chocolate Frappe">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Dark Chocolate Frappe</p>
                                 <p class="mb-1">₱80 / ₱90</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Flavor 15 -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Banana Frappe" data-img="image/frappe/mo.jpg"
                             data-price16="80" data-price22="90" data-category="Frappe">
                             <img src="image/frappe/mo.jpg" class="card-img-top" alt="Banana Frappe">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Banana Frappe</p>
                                 <p class="mb-1">₱80 / ₱90</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Flavor 16 -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Mango Frappe" data-img="image/frappe/mo.jpg"
                             data-price16="80" data-price22="90" data-category="Frappe">
                             <img src="image/frappe/mo.jpg" class="card-img-top" alt="Mango Frappe">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Mango Frappe</p>
                                 <p class="mb-1">₱80 / ₱90</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Flavor 17 -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Blueberry Frappe"
                             data-img="image/frappe/mo.jpg" data-price16="80" data-price22="90" data-category="Frappe">
                             <img src="image/frappe/mo.jpg" class="card-img-top" alt="Blueberry Frappe">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Blueberry Frappe</p>
                                 <p class="mb-1">₱80 / ₱90</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Flavor 18 -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Raspberry Frappe"
                             data-img="image/frappe/mo.jpg" data-price16="80" data-price22="90" data-category="Frappe">
                             <img src="image/frappe/mo.jpg" class="card-img-top" alt="Raspberry Frappe">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Raspberry Frappe</p>
                                 <p class="mb-1">₱80 / ₱90</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Flavor 19 -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Hazelnut Mocha Frappe"
                             data-img="image/frappe/mo.jpg" data-price16="80" data-price22="90" data-category="Frappe">
                             <img src="image/frappe/mo.jpg" class="card-img-top" alt="Hazelnut Mocha Frappe">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Hazelnut Mocha Frappe</p>
                                 <p class="mb-1">₱80 / ₱90</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Flavor 20 -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Mint Frappe" data-img="image/frappe/mo.jpg"
                             data-price16="80" data-price22="90" data-category="Frappe">
                             <img src="image/frappe/mo.jpg" class="card-img-top" alt="Mint Frappe">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Mint Frappe</p>
                                 <p class="mb-1">₱80 / ₱90</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                 </div>
             </div>

             <!-- Hot Coffee -->
             <div class="drink-category mb-5">
                 <h3>Hot Coffee</h3>
                 <div class="row g-4">

                     <!-- Flavor 1 -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Cappuccino" data-img="image/hot coffee.jpg"
                             data-price16="55" data-price22="65" data-category="Hot Coffee">
                             <img src="image/hot coffee.jpg" class="card-img-top" alt="Cappuccino">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Cappuccino</p>
                                 <p class="mb-1">₱55 / ₱65</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Flavor 2 -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Americano" data-img="image/hot coffee.jpg"
                             data-price16="50" data-price22="60" data-category="Hot Coffee">
                             <img src="image/hot coffee.jpg" class="card-img-top" alt="Americano">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Americano</p>
                                 <p class="mb-1">₱50 / ₱60</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Flavor 3 -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Latte" data-img="image/hot coffee.jpg"
                             data-price16="60" data-price22="70" data-category="Hot Coffee">
                             <img src="image/hot coffee.jpg" class="card-img-top" alt="Latte">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Latte</p>
                                 <p class="mb-1">₱60 / ₱70</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Flavor 4 -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Mocha" data-img="image/hot coffee.jpg"
                             data-price16="65" data-price22="75" data-category="Hot Coffee">
                             <img src="image/hot coffee.jpg" class="card-img-top" alt="Mocha">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Mocha</p>
                                 <p class="mb-1">₱65 / ₱75</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Flavor 5 -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Hazelnut Coffee"
                             data-img="image/hot coffee.jpg" data-price16="65" data-price22="75"
                             data-category="Hot Coffee">
                             <img src="image/hot coffee.jpg" class="card-img-top" alt="Hazelnut Coffee">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Hazelnut Coffee</p>
                                 <p class="mb-1">₱65 / ₱75</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Flavor 6 -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Caramel Coffee" data-img="image/hot coffee.jpg"
                             data-price16="70" data-price22="80" data-category="Hot Coffee">
                             <img src="image/hot coffee.jpg" class="card-img-top" alt="Caramel Coffee">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Caramel Coffee</p>
                                 <p class="mb-1">₱70 / ₱80</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Flavor 7 -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Espresso" data-img="image/hot coffee.jpg"
                             data-price16="50" data-price22="60" data-category="Hot Coffee">
                             <img src="image/hot coffee.jpg" class="card-img-top" alt="Espresso">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Espresso</p>
                                 <p class="mb-1">₱50 / ₱60</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Flavor 8 -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Flat White" data-img="image/hot coffee.jpg"
                             data-price16="65" data-price22="75" data-category="Hot Coffee">
                             <img src="image/hot coffee.jpg" class="card-img-top" alt="Flat White">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Flat White</p>
                                 <p class="mb-1">₱65 / ₱75</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Flavor 9 -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Irish Coffee" data-img="image/hot coffee.jpg"
                             data-price16="70" data-price22="80" data-category="Hot Coffee">
                             <img src="image/hot coffee.jpg" class="card-img-top" alt="Irish Coffee">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Irish Coffee</p>
                                 <p class="mb-1">₱70 / ₱80</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Flavor 10 -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Vanilla Latte" data-img="image/hot coffee.jpg"
                             data-price16="70" data-price22="80" data-category="Hot Coffee">
                             <img src="image/hot coffee.jpg" class="card-img-top" alt="Vanilla Latte">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Vanilla Latte</p>
                                 <p class="mb-1">₱70 / ₱80</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Flavor 11 -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Café Mocha" data-img="image/hot coffee.jpg"
                             data-price16="70" data-price22="80" data-category="Hot Coffee">
                             <img src="image/hot coffee.jpg" class="card-img-top" alt="Café Mocha">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Café Mocha</p>
                                 <p class="mb-1">₱70 / ₱80</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Flavor 12 -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="White Coffee" data-img="image/hot coffee.jpg"
                             data-price16="65" data-price22="75" data-category="Hot Coffee">
                             <img src="image/hot coffee.jpg" class="card-img-top" alt="White Coffee">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">White Coffee</p>
                                 <p class="mb-1">₱65 / ₱75</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                 </div>
             </div>

             <!-- Fruity Juice -->
             <div class="drink-category mb-5">
                 <h3>Fruity Juice</h3>
                 <div class="row g-4">

                     <!-- Flavor 1 -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Mango Juice" data-img="image/fruitiy.jpg"
                             data-price16="50" data-price22="60" data-category="Fruity Juice">
                             <img src="image/fruitiy.jpg" class="card-img-top" alt="Mango Juice">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Mango Juice</p>
                                 <p class="mb-1">₱50 / ₱60</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Flavor 2 -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Strawberry Juice" data-img="image/fruitiy.jpg"
                             data-price16="55" data-price22="65" data-category="Fruity Juice">
                             <img src="image/fruitiy.jpg" class="card-img-top" alt="Strawberry Juice">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Strawberry Juice</p>
                                 <p class="mb-1">₱55 / ₱65</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Flavor 3 -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Orange Juice" data-img="image/fruitiy.jpg"
                             data-price16="50" data-price22="60" data-category="Fruity Juice">
                             <img src="image/fruitiy.jpg" class="card-img-top" alt="Orange Juice">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Orange Juice</p>
                                 <p class="mb-1">₱50 / ₱60</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Flavor 4 -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Pineapple Juice" data-img="image/fruitiy.jpg"
                             data-price16="55" data-price22="65" data-category="Fruity Juice">
                             <img src="image/fruitiy.jpg" class="card-img-top" alt="Pineapple Juice">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Pineapple Juice</p>
                                 <p class="mb-1">₱55 / ₱65</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Flavor 5 -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Apple Juice" data-img="image/fruitiy.jpg"
                             data-price16="50" data-price22="60" data-category="Fruity Juice">
                             <img src="image/fruitiy.jpg" class="card-img-top" alt="Apple Juice">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Apple Juice</p>
                                 <p class="mb-1">₱50 / ₱60</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Flavor 6 -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Watermelon Juice" data-img="image/fruitiy.jpg"
                             data-price16="55" data-price22="65" data-category="Fruity Juice">
                             <img src="image/fruitiy.jpg" class="card-img-top" alt="Watermelon Juice">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Watermelon Juice</p>
                                 <p class="mb-1">₱55 / ₱65</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Flavor 7 -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Grape Juice" data-img="image/fruitiy.jpg"
                             data-price16="55" data-price22="65" data-category="Fruity Juice">
                             <img src="image/fruitiy.jpg" class="card-img-top" alt="Grape Juice">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Grape Juice</p>
                                 <p class="mb-1">₱55 / ₱65</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Flavor 8 -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Banana Juice" data-img="image/fruitiy.jpg"
                             data-price16="50" data-price22="60" data-category="Fruity Juice">
                             <img src="image/fruitiy.jpg" class="card-img-top" alt="Banana Juice">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Banana Juice</p>
                                 <p class="mb-1">₱50 / ₱60</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Flavor 9 -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Lychee Juice" data-img="image/fruitiy.jpg"
                             data-price16="55" data-price22="65" data-category="Fruity Juice">
                             <img src="image/fruitiy.jpg" class="card-img-top" alt="Lychee Juice">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Lychee Juice</p>
                                 <p class="mb-1">₱55 / ₱65</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Flavor 10 -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Peach Juice" data-img="image/fruitiy.jpg"
                             data-price16="50" data-price22="60" data-category="Fruity Juice">
                             <img src="image/fruitiy.jpg" class="card-img-top" alt="Peach Juice">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Peach Juice</p>
                                 <p class="mb-1">₱50 / ₱60</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Flavor 11 -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Cantaloupe Juice" data-img="image/fruitiy.jpg"
                             data-price16="55" data-price22="65" data-category="Fruity Juice">
                             <img src="image/fruitiy.jpg" class="card-img-top" alt="Cantaloupe Juice">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Cantaloupe Juice</p>
                                 <p class="mb-1">₱55 / ₱65</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                     <!-- Flavor 12 -->
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 product-card" data-name="Blueberry Juice" data-img="image/fruitiy.jpg"
                             data-price16="60" data-price22="70" data-category="Fruity Juice">
                             <img src="image/fruitiy.jpg" class="card-img-top" alt="Blueberry Juice">
                             <div class="card-body text-center">
                                 <p class="fw-bold mb-1">Blueberry Juice</p>
                                 <p class="mb-1">₱60 / ₱70</p>
                                 <p class="text-muted">16oz / 22oz</p>
                             </div>
                         </div>
                     </div>

                 </div>
             </div>

             <!-- Snacks -->
             <div class="drink-category mb-5">
                 <h3>Snacks</h3>
                 <div class="card-container">
                     <!-- Cheese Stick -->
                     <div class="card product-card" data-name="Cheese Stick" data-img="image/snack/chesse stick.jpg"
                         data-price16="25" data-price22="35" data-category="Snacks">
                         <img src="image/snack/chesse stick.jpg" alt="Cheese Stick">
                         <div class="card-body">
                             <p class="fw-bold mb-1">Cheese Stick</p>
                             <p class="mb-1">₱25 / ₱35</p>
                         </div>
                     </div>

                     <!-- Cheese Roll -->
                     <div class="card product-card" data-name="Cheese Roll" data-img="image/snack/chesse rol.jpg"
                         data-price16="30" data-price22="0" data-category="Snacks">
                         <img src="image/snack/chesse rol.jpg" alt="Cheese Roll">
                         <div class="card-body">
                             <p class="fw-bold mb-1">Cheese Roll</p>
                             <p class="mb-1">₱30</p>
                         </div>
                     </div>

                     <!-- French Fries -->
                     <div class="card product-card" data-name="French Fries" data-img="image/snack/fries.jpg"
                         data-price16="35" data-price22="0" data-category="Snacks">
                         <img src="image/snack/fries.jpg" alt="French Fries">
                         <div class="card-body">
                             <p class="fw-bold mb-1">French Fries</p>
                             <p class="mb-1">₱35</p>
                         </div>
                     </div>

                     <!-- Onion Rings -->
                     <div class="card product-card" data-name="Onion Rings" data-img="image/snack/onion rings.jpg"
                         data-price16="40" data-price22="0" data-category="Snacks">
                         <img src="image/snack/onion rings.jpg" alt="Onion Rings">
                         <div class="card-body">
                             <p class="fw-bold mb-1">Onion Rings</p>
                             <p class="mb-1">₱40</p>
                         </div>
                     </div>

                     <!-- Spring Roll / Chicken Wings -->
                     <div class="card product-card" data-name="Spring Roll" data-img="image/snack/wings.jpg"
                         data-price16="30" data-price22="0" data-category="Snacks">
                         <img src="image/snack/wings.jpg" alt="Spring Roll">
                         <div class="card-body">
                             <p class="fw-bold mb-1">Chicken Wings</p>
                             <p class="mb-1">₱30</p>
                         </div>
                     </div>

                     <!-- Fried Wonton -->
                     <div class="card product-card" data-name="Fried Wonton" data-img="image/snack/shanghai.jpg"
                         data-price16="35" data-price22="0" data-category="Snacks">
                         <img src="image/snack/shanghai.jpg" alt="Fried Wonton">
                         <div class="card-body">
                             <p class="fw-bold mb-1">Fried Shanghai</p>
                             <p class="mb-1">₱35</p>
                         </div>
                     </div>

                     <!-- Chicken Nuggets -->
                     <div class="card product-card" data-name="Chicken Nuggets" data-img="image/snack/siomai.jpg"
                         data-price16="45" data-price22="0" data-category="Snacks">
                         <img src="image/snack/siomai.jpg" alt="Chicken Nuggets">
                         <div class="card-body">
                             <p class="fw-bold mb-1">Siomai</p>
                             <p class="mb-1">₱45</p>
                         </div>
                     </div>

                     <!-- Mozzarella Balls / Beef Tacos -->
                     <div class="card product-card" data-name="Mozzarella Balls" data-img="image/snack/tacos.webp"
                         data-price16="50" data-price22="0" data-category="Snacks">
                         <img src="image/snack/tacos.webp" alt="Mozzarella Balls">
                         <div class="card-body">
                             <p class="fw-bold mb-1">Beef Tacos</p>
                             <p class="mb-1">₱50</p>
                         </div>
                     </div>

                     <!-- Burger -->
                     <div class="card product-card" data-name="Burger" data-img="image/snack/cheese burger.jpg"
                         data-price16="75" data-price22="0" data-category="Snacks">
                         <img src="image/snack/cheese burger.jpg" alt="Burger">
                         <div class="card-body">
                             <p class="fw-bold mb-1">Cheese Burger</p>
                             <p class="mb-1">₱75</p>
                         </div>
                     </div>

                     <!-- Pizza -->
                     <div class="card product-card" data-name="Pizza" data-img="image/snack/pizza.jpg"
                         data-price16="120" data-price22="0" data-category="Snacks">
                         <img src="image/snack/pizza.jpg" alt="Pizza">
                         <div class="card-body">
                             <p class="fw-bold mb-1">Pizza</p>
                             <p class="mb-1">₱120</p>
                         </div>
                     </div>

                     <!-- Nachos -->
                     <div class="card product-card" data-name="Nachos" data-img="image/snack/nachos.jpg"
                         data-price16="65" data-price22="0" data-category="Snacks">
                         <img src="image/snack/nachos.jpg" alt="Nachos">
                         <div class="card-body">
                             <p class="fw-bold mb-1">Nachos</p>
                             <p class="mb-1">₱65</p>
                         </div>
                     </div>

                     <!-- Shawarma -->
                     <div class="card product-card" data-name="Shawarma" data-img="image/snack/shawarma.jpg"
                         data-price16="80" data-price22="0" data-category="Snacks">
                         <img src="image/snack/shawarma.jpg" alt="Shawarma">
                         <div class="card-body">
                             <p class="fw-bold mb-1">Shawarma</p>
                             <p class="mb-1">₱80</p>
                         </div>
                     </div>

                     <!-- Hotdog -->
                     <div class="card product-card" data-name="Hotdog" data-img="image/snack/hotdog.jpg"
                         data-price16="50" data-price22="0" data-category="Snacks">
                         <img src="image/snack/hotdog.jpg" alt="Hotdog">
                         <div class="card-body">
                             <p class="fw-bold mb-1">Hotdog</p>
                             <p class="mb-1">₱50</p>
                         </div </div>
         </section>
     </main>

     <!-- Cart Offcanvas -->
     <div class="offcanvas offcanvas-end" tabindex="-1" id="cartCanvas">
         <div class="offcanvas-header">
             <h5 class="offcanvas-title">🛒 Your Cart</h5>
             <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
         </div>
         <div class="offcanvas-body d-flex flex-column">
             <!-- Cart Items List -->
             <ul id="cart-items" class="list-group mb-3">
                 <!-- Dynamic cart items will appear here -->
             </ul>

             <!-- Total -->
             <div class="d-flex justify-content-between align-items-center mb-3">
                 <strong>Total:</strong>
                 <span id="cart-total">₱0</span>
             </div>

             <!-- Checkout Button -->
             <a href="#" id="checkoutBtn" class="btn btn-warning w-100 mt-auto">Checkout</a>
         </div>
     </div>


     <!-- Product Modal -->
     <div class="modal fade" id="productModal" tabindex="-1">
         <div class="modal-dialog modal-dialog-centered">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="modalTitle">Product</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                 </div>
                 <div class="modal-body">
                     <img id="modalImg" src="" class="img-fluid rounded mb-3" alt="Product">

                     <!-- Size -->
                     <div id="sizeSection">
                         <h6 class="fw-bold">Choose Size:</h6>
                         <div class="form-check">
                             <input class="form-check-input size-option" type="radio" name="size" id="size16" value="0"
                                 checked>
                             <label class="form-check-label" for="size16" id="label16">16oz</label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input size-option" type="radio" name="size" id="size22" value="0">
                             <label class="form-check-label" for="size22" id="label22">22oz</label>
                         </div>
                     </div>
                     <!-- Add-ons -->
                     <div id="addonSection">
                         <h6 class="fw-bold mt-3">Add-ons:</h6>

                         <!-- Sweeteners / Syrups -->
                         <div class="form-check">
                             <input class="form-check-input addon-option" type="checkbox" id="addon1" value="10">
                             <label class="form-check-label" for="addon1">Honey - ₱10</label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input addon-option" type="checkbox" id="addon2" value="10">
                             <label class="form-check-label" for="addon2">Brown Sugar - ₱10</label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input addon-option" type="checkbox" id="addon3" value="10">
                             <label class="form-check-label" for="addon3">Caramel Syrup - ₱10</label>
                         </div>

                         <!-- Creams / Milk Options -->
                         <div class="form-check">
                             <input class="form-check-input addon-option" type="checkbox" id="addon4" value="10">
                             <label class="form-check-label" for="addon4">Whipped Cream - ₱10</label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input addon-option" type="checkbox" id="addon5" value="15">
                             <label class="form-check-label" for="addon5">Extra Shot of Espresso - ₱15</label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input addon-option" type="checkbox" id="addon6" value="15">
                             <label class="form-check-label" for="addon6">Milk Foam - ₱15</label>
                         </div>

                         <!-- Toppings / Jelly -->
                         <div class="form-check">
                             <input class="form-check-input addon-option" type="checkbox" id="addon7" value="15">
                             <label class="form-check-label" for="addon7">Pearls / Tapioca - ₱15</label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input addon-option" type="checkbox" id="addon8" value="15">
                             <label class="form-check-label" for="addon8">Nata de Coco - ₱15</label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input addon-option" type="checkbox" id="addon9" value="15">
                             <label class="form-check-label" for="addon9">Coffee Jelly - ₱15</label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input addon-option" type="checkbox" id="addon10" value="15">
                             <label class="form-check-label" for="addon10">Pudding - ₱15</label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input addon-option" type="checkbox" id="addon11" value="15">
                             <label class="form-check-label" for="addon11">Grass Jelly - ₱15</label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input addon-option" type="checkbox" id="addon12" value="15">
                             <label class="form-check-label" for="addon12">Aloe Vera - ₱15</label>
                         </div>

                         <!-- Others -->
                         <div class="form-check">
                             <input class="form-check-input addon-option" type="checkbox" id="addon13" value="10">
                             <label class="form-check-label" for="addon13">Chocolate Chips - ₱10</label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input addon-option" type="checkbox" id="addon14" value="10">
                             <label class="form-check-label" for="addon14">Marshmallows - ₱10</label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input addon-option" type="checkbox" id="addon15" value="10">
                             <label class="form-check-label" for="addon15">Oreo Crumbs - ₱10</label>
                         </div>
                     </div>


                     <!-- Quantity Selector -->
                     <div class="d-flex align-items-center mt-3">
                         <h6 class="me-3 mb-0 fw-bold">Quantity:</h6>
                         <button class="btn btn-outline-secondary btn-sm" id="qtyMinus">-</button>
                         <input type="text" id="quantity" value="1"
                             class="form-control form-control-sm text-center mx-2" readonly>
                         <button class="btn btn-outline-secondary btn-sm" id="qtyPlus">+</button>
                     </div>

                     <h5 class="mt-4">Total: ₱<span id="modalTotal">0</span></h5>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                     <button type="button" class="btn btn-primary" id="addToCartBtn">Add to Cart</button>
                 </div>
             </div>
         </div>
     </div>

     <!-- Footer -->
     <footer class="bg-dark text-white py-4 mt-5">
         <div class="container text-center">
             <p><strong>Business Owner:</strong> Angelica Banson</p>
             <p><strong>Location:</strong> Lot 39, Brgy Poblacion San Antonio, Nueva Ecija, Philippines 3108</p>
             <p><strong>Contact:</strong> 09455591120</p>
             <p><strong>Facebook:</strong> Kkopi Tea - Poblacion, San Antonio, Nueva Ecija FB Page</p>
             <p class="copy mt-2 mb-0">&copy; 2025 Kkopi Tea. All rights reserved.</p>
         </div>
     </footer>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


 </body>

 </html>