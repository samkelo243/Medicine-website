<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicine Company</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/subheader.css">
    <link rel="stylesheet" href="css/about.css">

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
            <p class="subheading">ABOUT US</p>
            <h1>We are here to provide the best service for your needs</h1>
        </div>
    </section>


    <!-- About Section -->
    <section id="about" class="about-section py-5">
        <div class="container">
            <div class="row align-items-center">
                <!-- Image Section -->
                <div class="col-md-6">
                    <img src="pictures/medicine4.jpg" class="img-fluid rounded shadow" alt="About Us">
                </div>
                <!-- Text Section -->
                <div class="col-md-6">
                    <h2 class="fw-bold text-primary">Who We Are</h2>
                    <p class="text-muted">We are a passionate team committed to delivering cutting-edge solutions that enhance businesses and transform lives. Our dedication to excellence, innovation, and customer satisfaction drives everything we do.</p>

                    <!-- Mission Statement -->
                    <h5 class="fw-bold mt-4"><i class="bi bi-bullseye text-primary me-2"></i> Our Mission</h5>
                    <p>To empower individuals and businesses by providing high-quality solutions that improve efficiency, productivity, and overall success.</p>

                    <!-- Vision Statement -->
                    <h5 class="fw-bold mt-4"><i class="bi bi-eye text-primary me-2"></i> Our Vision</h5>
                    <p>To be the leading provider of innovative solutions, recognized globally for excellence, integrity, and impact.</p>

                    <!-- Core Values -->
                    <h5 class="fw-bold mt-4"><i class="bi bi-award text-primary me-2"></i> Core Values</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Commitment to Quality</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Innovation & Creativity</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Integrity & Transparency</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Customer-Centric Approach</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Teamwork & Collaboration</li>
                    </ul>

                    <!-- Call to Action -->
                    <a href="services.php" class="btn mt-3" style="background-color: #f8b400; color: white; border: none; padding: 10px 20px; text-decoration: none; display: inline-block;" onclick="openPopup()">
                        Learn More About Us
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section py-5 text-center">
        <div class="container">
            <h2>Meet Our Team</h2>
            <div class="row">
                <!-- Team Member 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="team-member">
                        <img src="https://randomuser.me/api/portraits/men/45.jpg" class="img-fluid rounded-circle" alt="Team Member">
                        <h5>John Doe</h5>
                        <p>CEO & Founder</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Team Member 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="team-member">
                        <img src="https://randomuser.me/api/portraits/women/47.jpg" class="img-fluid rounded-circle" alt="Team Member">
                        <h5>Jane Smith</h5>
                        <p>Marketing Head</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Team Member 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="team-member">
                        <img src="https://randomuser.me/api/portraits/men/50.jpg" class="img-fluid rounded-circle" alt="Team Member">
                        <h5>Michael Brown</h5>
                        <p>Lead Developer</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>

            </div>
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