<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Al Shaheen Medical Center&reg;</title>
    <link rel="shortcut icon" href="./assets/img/favicon.png" type="image/x-icon">

    <!-- Bootstrap CSS Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom CSS File -->
    <link rel="stylesheet" href="./assets/css/insurance_style.css">

</head>
<body>

    <div class="bg-img-wrapper">
        <img class="bg-img bg-cover" src="./assets/img/insurance_qatar.jpg" alt="Life Medical Insurance in Qatar">
    </div>
    
    <!-- !Navigation Section -->
    <nav class="navbar navbar-expand-xl sticky-top">
        <div class="container">
            <a href="#" class="navbar-brand">
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
                        <a href="index.html#services" class="nav-link">SERVICES</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.html#aboutus" class="nav-link">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.html#testomonial" class="nav-link">TESTOMONIAL</a>
                    </li>
                    <li class="nav-item d-block d-xl-none">
                        <a href="index.html#contact" class="nav-link">CONTACT</a>
                    </li>
                </ul>
                <a href="index.html#contact" class="btn btn-brand d-none d-xl-block ms-3">CONTACT</a>
            </div>
        </div>
    </nav>

    <!-- !Footer Section -->
    <footer id="footer" class="fixed-bottom">

        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <a href="#" class="navbar-brand">
                            <img src="./assets/img/logo.png" alt="brand-logo" class="logo-large">
                            <img src="./assets/img/logo1.png" alt="brand-logo" class="logo-small mx-auto">
                        </a>
                        <p>&copy; 2024 Alshaheen Medical Center. All rights reserved. Committed to excellence in healthcare and patient well-being.</p>
                        <div class="social-links">
                            <a href="www.google.com"><i class="fa-brands fa-instagram"></i></a>
                            <a href="www.google.com"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="www.google.com"><i class="fa-brands fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <p>Designed with <i class="fa-solid fa-heart"></i> by Narza Solution&trade;</p>
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


</body>
</html>