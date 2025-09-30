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
        body {
            font-family: 'Montserrat', sans-serif;
        }
        .navbar {
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .masthead {
            padding: 100px 0;
            background: linear-gradient(to right, #007bff, #6610f2);
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
        .footer {
            background-color: #343a40;
            color: white;
            padding: 15px 0;
            text-align: center;
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
                    <li class="nav-item"><a class="nav-link" href="xampp_mobile/admin/index.php">Admin</a></li>
                    <li class="nav-item"><a class="nav-link" href="xampp_mobile/users/login.php">Users</a></li>
                    <li class="nav-item"><a class="nav-link" href="xampp_mobile/mainAdmin/index.php">Main Admin</a></li>
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
    
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <small>&copy; 2025 Space Finder | Vehicle Parking Management System</small>
        </div>
    </footer>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
