 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1" />
     <title>About Us</title>
     <link rel="icon" href="image/LOGO.jpg" type="image/png" />
     <link rel="stylesheet" href="About.css" />
 </head>

 <body>
     <header>
         <div class="logo-container">
             <img src="image/LOGO.jpg" alt="Kkopi Tea Logo" class="logo-img" />
             <div class="logo">Kkopi Tea</div>
         </div>

         <!-- HAMBURGER -->
         <div class="menu-toggle" id="menu-toggle">
             <span></span>
             <span></span>
             <span></span>
         </div>

         <nav id="navbar">
             <a href="index.php">Home</a>
             <a href="product.php">Menu</a>
             <a href="Contact.php">Contact</a>
             <a href="About.php" class="active">About</a>
         </nav>
     </header>

     <main>
         <section class="about">
             <h1>About Us</h1>

             <div class="history">
                 <h2>Our History</h2>
                 <p>
                     The Story of Kkopi Tea – Poblacion, San Antonio, Nueva Ecija
                     Est. 2021 | Proudly Local. Lovingly Brewed.
                     <br><br>
                     Kkopi Tea began as a heartfelt idea in the heart of Poblacion, San Antonio, Nueva Ecija — a quiet
                     town rich in community spirit, where every face is familiar and every cup tells a story. The
                     owners, inspired by their love for both coffee and tea, saw a gap in the neighborhood: a place
                     where people could relax, connect, and enjoy quality drinks without having to travel far.
                     <br><br>
                     KKOPI.Tea is a rapidly expanding coffee and milk tea franchise in the Philippines, renowned for its
                     affordable yet high-quality beverages. With the tagline "Ang pinakamasarap na 39php sa buong mundo"
                     ("The most delicious 39 pesos in the world"), the brand has established over 250 branches
                     nationwide, offering a diverse menu that includes milk teas, iced lattes, hot drinks, and seasonal
                     specialties.
                 </p>
             </div>

             <div class="address">
                 <h2>Address</h2>
                 <p>Lot 39, Brgy Poblacion San Antonio, Nueva Ecija Philippines, 3108</p>
                 <p>Phone: 09455591120</p>
                 <p>Email: info@yourcompany.com</p>
             </div>

             <div class="location">
                 <h2>Location</h2>
                 <iframe
                     src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3848.356280802392!2d120.8549860740945!3d15.302861159500077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396dfc7e26ee7c5%3A0xf124a2f4f0b11d3d!2sKKOPI!5e0!3m2!1sen!2sph!4v1747613696185!5m2!1sen!2sph"
                     width="600" height="450" allowfullscreen="" loading="lazy"></iframe>
             </div>
         </section>
     </main>

     <footer>
         <div class="footer-content">
             <p><strong>Business Owner:</strong> Angelica Banson</p>
             <p><strong>Location:</strong> Lot 39, Brgy Poblacion San Antonio, Nueva Ecija Philippines, 3108</p>
             <p><strong>Contact:</strong> 09455591120</p>
             <p><strong>Facebook:</strong> Kkopi tea - Poblacion, San Antonio, Nueva Ecija FB Page</p>
         </div>
         <p class="copy">&copy; 2025 Kkopi Tea. All rights reserved.</p>
     </footer>

     <script>
     const toggle = document.getElementById("menu-toggle");
     const navbar = document.getElementById("navbar");

     toggle.addEventListener("click", () => {
         navbar.classList.toggle("show");
     });
     </script>
 </body>

 </html>