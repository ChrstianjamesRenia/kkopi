 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1" />
     <title>Contact - Kkopi Tea</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="Contact.css">
     <link rel="icon" href="image/LOGO.jpg" type="image/png" />
 </head>

 <body>

     <!-- ===== HEADER / NAVBAR ===== -->
     <header>
         <nav class="navbar navbar-expand-lg">
             <div class="container">
                 <!-- Logo -->
                 <a class="navbar-brand d-flex align-items-center" href="index.php">
                     <img src="image/LOGO.jpg" alt="Kkopi Tea Logo" class="logo-img me-2">
                     Kkopi Tea
                 </a>

                 <!-- Burger Button -->
                 <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse"
                     data-bs-target="#navbarNav">
                     <span></span>
                     <span></span>
                     <span></span>
                 </button>

                 <!-- Links -->
                 <div class="collapse navbar-collapse" id="navbarNav">
                     <ul class="navbar-nav ms-auto">
                         <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                         <li class="nav-item"><a href="product.php" class="nav-link">Menu</a></li>
                         <li class="nav-item"><a href="contact.php" class="nav-link active">Contact</a></li>
                         <li class="nav-item"><a href="About.php" class="nav-link">About</a></li>
                     </ul>
                 </div>
             </div>
         </nav>
     </header>

     <!-- ===== MAIN ===== -->
     <main class="container my-5">
         <!-- Welcome -->
         <section class="text-center mb-5">
             <h1 class="fw-bold">Get in Touch</h1>
             <p class="text-muted">We’d love to hear from you! Whether you have questions, feedback, or just want to say
                 hi, feel free to reach out.</p>
             <img src="image/kkopi.jpg" alt="Kkopi Tea Drinks" class="welcome-img img-fluid rounded shadow mt-3">
         </section>

         <div class="row g-4">
             <!-- Contact Form -->
             <div class="col-lg-6">
                 <div class="card shadow-sm">
                     <div class="card-body">
                         <h2 class="h5 mb-3">Send us a Message</h2>
                         <form>
                             <div class="mb-3">
                                 <label class="form-label">Your Name</label>
                                 <input type="text" class="form-control" placeholder="Enter your name" required>
                             </div>
                             <div class="mb-3">
                                 <label class="form-label">Your Email</label>
                                 <input type="email" class="form-control" placeholder="Enter your email" required>
                             </div>
                             <div class="mb-3">
                                 <label class="form-label">Message</label>
                                 <textarea class="form-control" rows="4" placeholder="Write your message"
                                     required></textarea>
                             </div>
                             <button type="submit" class="btn btn-dark w-100">Send Message</button>
                         </form>
                     </div>
                 </div>
             </div>

             <!-- Info + Map -->
             <div class="col-lg-6">
                 <div class="card shadow-sm mb-4">
                     <div class="card-body">
                         <h2 class="h5 mb-3">Operating Hours</h2>
                         <p><strong>Monday – Friday:</strong> 9:00 AM – 9:00 PM</p>
                         <p><strong>Saturday – Sunday:</strong> 10:00 AM – 10:00 PM</p>
                     </div>
                 </div>

                 <div class="card shadow-sm">
                     <div class="card-body">
                         <h2 class="h5 mb-3">Find Us</h2>
                         <iframe
                             src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3848.356280802392!2d120.8549860740945!3d15.302861159500077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396dfc7e26ee7c5%3A0xf124a2f4f0b11d3d!2sKKOPI!5e0!3m2!1sen!2sph!4v1747613696185!5m2!1sen!2sph"
                             width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                             referrerpolicy="no-referrer-when-downgrade"></iframe>
                     </div>
                     width="100%" height="250" allowfullscreen="" loading="lazy" class="rounded"></iframe>
                 </div>
             </div>
         </div>
         </div>


     </main>

     <!-- ===== FOOTER ===== -->
     <footer>
         <div class="container">
             <p><strong>Business Owner:</strong> Angelica Banson</p>
             <p><strong>Location:</strong> Lot 39, Brgy Poblacion San Antonio, Nueva Ecija, Philippines 3108</p>
             <p><strong>Contact:</strong> 0945 559 1120</p>
             <p><strong>Facebook:</strong> Kkopi Tea - Poblacion, San Antonio, Nueva Ecija FB Page</p>
             <p class="copy">&copy; 2025 Kkopi Tea. All rights reserved.</p>
         </div>
     </footer>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
 </body>

 </html>