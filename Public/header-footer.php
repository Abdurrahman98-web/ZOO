<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/CSS/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    
    <title>Document</title>
</head>
<body>
    <!-- Header -->
    <header class="navbar navbar-expand-lg navbar-light fixed-top bg-white">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="./assets/Images/logo.png" alt="Zoo Arcadia" height="70">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="./index.php">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="./habitats.php">Habitats</a></li>
                    <li class="nav-item"><a class="nav-link" href="./services.php">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="./login.php">Connexion</a></li>
                </ul>
                <a href="./contact.php" class="btn btn-outline-success ms-3 p-2">Contact</a>
            </div>
        </div>
    </header>
    
<!-- footer -->
<footer class="footer text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h4>Arcadia Zoo</h4>
                </div>
                <div class="col-md-4">
                    <p><a href="mailto:aqucilabdurrahman@gmail.com">aqucilabdurrahman@gmail.com</a></p>
                    <p>Location: Bretagne, FR</p>
                </div>
                <div class="col-md-4">
                   
                    <input type="text" class="p-1 " placeholder="Ouvert tous les jours de 9h">
                    <button class="btn btn-success btn-sm  ">OUVERT</button>
                </div>
            </div>
        </div>
    </footer> 
    <!-- javascript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>