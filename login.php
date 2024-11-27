<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/CSS/styles.css">
</head>
<body>
<main class="login">
    <div class="container-fluid login-container">
        <div class="row justify-content-end align-items-center vh-100 mx-5">
            <div class="col-md-6 col-lg-4 login-box p-5">
                <h3 class="text-center mb-4">Connexion</h3>
                <form action="submit_login.php" method="POST">
                    <!-- Role Selection -->
                    <div class="mb-3">
                        <label for="role" class="form-label">Role *</label>
                        <select class="form-select" id="role" name="role" required>
                            <option value="" disabled selected>Sélectionner votre rôle</option>
                            <option value="Administrateur">Administrateur</option>
                            <option value="Employé">Employé</option>
                            <option value="Vétérinaire">Vétérinaire</option>
                        </select>
                    </div>
                    
                    <!-- Username -->
                    <div class="mb-3">
                        <label for="username" class="form-label">Username *</label>
                        <input type="email" class="form-control" id="username" name="username" placeholder="User@gmail.com" required>
                    </div>
                    
                    <!-- Phone Number -->
                    <div class="mb-3">
                        <label for="password" class="form-label">password *</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                    </div>
                    
                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-success w-100">SE CONNECTER</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
   
</main>
<?php include_once 'header-footer.php'?> 
</body>

</html>
