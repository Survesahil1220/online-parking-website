<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Space Finder | Home</title>
    
    
    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/styles.css" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
            margin: 0;
            font-family: 'Montserrat', sans-serif;
            display: flex;
            flex-direction: column;
        }
        .navbar {
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .masthead {
            padding: 100px 0;
            background: linear-gradient(to right, #007bff, #6610f2);
            flex: 1;
        }
        .masthead img {
            border-radius: 50%;
            max-width: 200px;
        }
        .masthead h1 {
            font-size: 2.5rem;
            font-weight: 700;
        }
        .divider-custom {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 1rem 0;
        }
        .divider-custom-line {
            width: 50px;
            height: 3px;
            background-color: white;
        }
        .divider-custom-icon {
            margin: 0 10px;
            color: white;
        }
        
        /* New Footer Styles */
        .footer {
            background-color: #232f3e;
            color: white;
            padding: 40px 0 20px;
        }
        .footer a {
            color: #ddd;
            text-decoration: none;
        }
        .footer a:hover {
            color: white;
            text-decoration: underline;
        }
        .footer-heading {
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 15px;
            color: white;
        }
        .footer-list {
            list-style-type: none;
            padding-left: 0;
        }
        .footer-list li {
            margin-bottom: 10px;
        }
        .footer-logo {
            text-align: center;
            margin-top: 20px;
        }
        .footer-bottom {
            background-color: #131a22;
            padding: 15px 0;
            text-align: center;
            border-top: 1px solid #3a4553;
        }
        .language-selector {
            margin-top: 20px;
        }
        .country-selector {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">Space Finder</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="admin/index.php">Admin</a></li>
                    <li class="nav-item"><a class="nav-link" href="users/login.php">Users</a></li>
                    <li class="nav-item"><a class="nav-link" href="mainAdmin/index.php">Main Admin</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- Header -->
    <header class="masthead text-white text-center">
        <div class="container">
            <img class="mb-4" src="assets/img/images.jpg" alt="Space Finder">
            <h1 class="text-uppercase">Welcome to Space Finder</h1>
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-car"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <p class="lead">Your one-stop solution for hassle-free parking management.</p>
        </div>
    </header>
    
    <!-- New Footer -->
    <footer class="footer mt-auto">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 mb-4">
                    <h5 class="footer-heading">Get to Know Us</h5>
                    <ul class="footer-list">
                        <li><a href="#">About Space Finder</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Press Releases</a></li>
                        <li><a href="#">Space Finder Science</a></li>
                    </ul>
                </div>
                
                <div class="col-md-3 col-sm-6 mb-4">
                    <h5 class="footer-heading">Connect with Us</h5>
                    <ul class="footer-list">
                        <li><a href="https://www.facebook.com/login/?next=https%3A%2F%2Fwww.facebook.com%2F"><i class="fab fa-facebook me-2"></i>Facebook</a></li>
                        <li><a href="#"><i class="fab fa-twitter me-2"></i>Twitter</a></li>
                        <li><a href="https://www.instagram.com/thug_99999/?__pwa=1"><i class="fab fa-instagram me-2"></i>Instagram</a></li>
                    </ul>
                </div>
                
                <div class="col-md-3 col-sm-6 mb-4">
                    <h5 class="footer-heading">Make Money with Us</h5>
                    <ul class="footer-list">
                        <li><a href="#">Sell parking spaces</a></li>
                        <li><a href="#">Become an Affiliate</a></li>
                        <li><a href="#">Advertise Your Parking</a></li>
                    </ul>
                </div>
                
                <div class="col-md-3 col-sm-6 mb-4">
                    <h5 class="footer-heading">Let Us Help You</h5>
                    <ul class="footer-list">
                        <li><a href="#">Your Account</a></li>
                        <li><a href="#">Returns Centre</a></li>
                        <li><a href="#">100% Purchase Protection</a></li>
                        <li><a href="#">Help</a></li>
                    </ul>
                </div>
            </div>
            
            
                
                
            </div>
        </div>
        
        
    </footer>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>