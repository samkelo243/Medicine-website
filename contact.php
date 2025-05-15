<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicine Company</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="css/subheader.css">
</head>
<body>
  

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="index.html">
            <img src="pictures/logo.png" alt="Company Logo" width="40" height="40" class="me-2">
            Medicine <!-- Replace with actual company name -->
        </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.php">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
     <!-- About Hero Section -->
     <section class="subheader text-center d-flex align-items-center">
    <div class="container">
        <p class="subheading">Contact Us</p>
        <h1>We are here to provide the best service for your needs</h1>
    </div>
     </section>

  
    <!-- Contact Section -->
    <section class="contact-section py-5">
        <div class="container">
            <div class="row">
                <!-- Contact Form -->
                <div class="col-md-7">
                    <h2>Get in Touch</h2>
                    <form id="contactForm">
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn w-100" style="background-color: #f8b400; color: white; border: none;">
                            Send Message
                        </button>
                    </form>
                    <p id="formStatus" class="mt-3 text-success"></p>
                </div>

                <!-- Contact Info -->
               <!-- Contact Information Section -->
                <div class="col-md-5">
                    <div class="contact-card p-4 shadow rounded bg-white">
                        <h2 class="fw-bold text-primary mb-3">Contact Information</h2>
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <i class="fas fa-map-marker-alt text-danger me-2"></i> 
                                <strong>Address:</strong> 123 Medical Street, New York, NY
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-phone text-success me-2"></i> 
                                <strong>Phone:</strong> +1 555-123-4567
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-envelope text-warning me-2"></i> 
                                <strong>Email:</strong> <a href="mailto:support@medicinesite.com" class="text-decoration-none text-dark">support@medicinesite.com</a>
                            </li>
                        </ul>

                        <!-- Working Hours -->
                        <h3 class="fw-bold text-primary mt-4">Working Hours</h3>
                        <p><i class="fas fa-clock text-info me-2"></i> <strong>Monday - Friday:</strong> 9:00 AM - 8:00 PM</p>
                        <p><i class="fas fa-clock text-info me-2"></i> <strong>Saturday - Sunday:</strong> 10:00 AM - 5:00 PM</p>
                    </div>
                </div>
                            </div>
        </div>
    </section>

    <!-- Google Map -->
    <section class="map-section">
        <div class="container">
            <h2 class="text-center">Find Us Here</h2>
            <iframe class="map-frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8354345085776!2d144.9559283153163!3d-37.817209879751555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d5dfb1c7917%3A0x2a9d25b08f8f6123!2sMelbourne%20CBD%2C%20Melbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2sin!4v1611773256955!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-3">
        <div class="container text-center">
            <p>&copy; 2025 [Company Name]. All rights reserved.</p>
            <p>Email: info@[companydomain].com | Phone: +123 456 7890</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
