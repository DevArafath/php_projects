<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Al Shaheen Medical Center&reg; Qatar | Aesthetic, Surgical & Fertility Services</title>
    <link rel="shortcut icon" href="./assets/img/favicon.png" type="image/x-icon">

    <!-- Meta Description -->
    <meta name="description" content="Visit our Qatar-based medical center for top aesthetic treatments, surgical care, and fertility services. Expert healthcare with a patient-first approach.">

    <!-- Keywords -->
    <meta name="keywords" content="medical center Qatar, aesthetic services Qatar, surgical services Doha, fertility clinic Qatar, reproductive health Qatar, diagnostic services Qatar">

    <!-- Open Graph for Social Media -->
    <meta property="og:title" content="Top Medical Center in Qatar for Aesthetic, Surgical, and Fertility Services">
    <meta property="og:description" content="Providing advanced aesthetic treatments, surgical services, and reproductive health care in Qatar.">
    <!-- <meta property="og:image" content="https://yourwebsite.com/images/medical-center-qatar.jpg"> -->
    <!-- <meta property="og:url" content="https://yourwebsite.com"> -->
    <meta property="og:type" content="website">


    <!-- Bootstrap CSS Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom CSS File -->
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
<style>
    .portfolio-container {
    clear: both;
}

.portfolio-wrap {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 100%;
}

</style>
</head>
<body>

    <!-- !Navigation Section -->
    <nav class="navbar navbar-expand-xl sticky-top">
        <div class="container">
            <a href="index.html" class="navbar-brand">
                <img src="./assets/img/logo.png" alt="brand-logo" class="logo-large">
                <img src="./assets/img/logo1.png" alt="brand-logo" class="logo-small">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="#navbar" aria-expanded="false" aria-label="toggle-button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.html#clinic" class="nav-link">OUR CLINIC</a>
                    </li>
                    <li class="nav-item">
                        <a href="doctors.php" class="nav-link active">DOCTORS</a>
                    </li>
                    <li class="nav-item">
                        <a href="services.php" class="nav-link">SERVICES</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.html#aboutus" class="nav-link">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.html#testomonial" class="nav-link">REVIEWS</a>
                    </li>
                    <li class="nav-item d-block d-xl-none">
                        <a href="contact.html" class="nav-link" data-bs-toggle="modal" data-bs-target="#contactModal">CONTACT</a>
                    </li>
                </ul>
                <a href="contact.html" class="btn btn-brand d-none d-xl-block ms-3" data-bs-toggle="modal" data-bs-target="#contactModal">CONTACT</a>
            </div>
        </div>
    </nav>

    <!-- Services Section -->
    <section id="services" class="section-padding">
        <div class="container">

            <!-- Title Row for Each Section -->
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-title">
                        <h1>Our Doctors</h1>
                        <div class="section-line">
                            <div class="thin-line" data-aos="zoom-in"></div>
                            <div class="bold-line"></div>
                        </div>
                        <p>Our team of highly skilled and compassionate doctors is dedicated to providing exceptional care and personalized treatments for every patient.</p>
                    </div>
                </div>
            </div>

            <div class="row g-2">

                    <?php
                        include './includes/db.php';
                        $sql = "SELECT * FROM doctors";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo "<div class='col-md-4 mb-2'>";
                                echo "<div class='card h-100'>";
                                echo "<img src='images/{$row['image']}' class='card-img-top' alt='{$row['name']}'>";
                                echo "<div class='card-body'>";
                                echo "<h5 class='card-title'>Doctor Name: {$row['name']}</h5>";
                                echo "<p class='card-text'>Specialty: {$row['specialty']}</p>";
                                echo "</div>";
                                echo "<div class='card-footer text-center'>";
                                echo "<small class='text-muted'><a href='tel:+97444823673'><i class='fa-solid fa-phone-volume'></i>&nbsp;&nbsp;Call us now! for Bookings</a></small>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                            }
                        } else {
                            echo "<p>No doctors found.</p>";
                        }
                        $conn->close();
                    ?>

            </div>

            
        </div>
        
    </section>

    <!-- Footer Section -->
    <footer id="footer" class="mt-5">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                        <a href="#" class="navbar-brand">
                            <img src="./assets/img/logo.png" alt="brand-logo" class="logo-large">
                            <img src="./assets/img/logo1.png" alt="brand-logo" class="logo-small mx-auto">
                        </a>
                        <p>&copy; 2024 Alshaheen Medical Center. All rights reserved. Committed to excellence in healthcare and patient well-being.</p>
                        <div class="social-links">
                            <a href="https://www.instagram.com/alshaheenmedical/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                            <a href="https://www.facebook.com/alshaheenmedicalcenter/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="https://www.linkedin.com/alshaheenmedicalcenter/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container text-center">
                <p>Designed with <i class="fa-solid fa-heart"></i> by Narza Solution™</p>
            </div>
        </div>
    </footer>



<!-- JS Code for the Page -->
<script>

// Footer Image Change Based on Time of the Day
document.addEventListener("DOMContentLoaded", function() {
    const footer = document.getElementById("footer");
    const hour = new Date().getHours();

    // Apply 'morning' background if between 6 AM and 6 PM, else apply 'night'
    if (hour >= 6 && hour < 18) {
        footer.classList.add("footer-morning");
    } else {
        footer.classList.remove("footer-morning");
    }
});

</script>

<!-- Javascrip CDN -->
<script src="./assets/js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap CDN for JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- JS CDN for Filter Type -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Owl Carousel CDN -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <!-- AOS JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <!-- Custom JavaScript Code -->
    <script src="./assets/js/main.js"></script>
</body>
</html>

