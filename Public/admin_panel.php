<?php
session_start();
if (!isset($_SESSION['user']) || $_SESSION['user']['role'] != 'Administrateur') {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panneau d'Administration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Bienvenue, <?php echo htmlspecialchars($_SESSION['user']['username']); ?></h1>
        <a href="logout.php" class="btn btn-danger">Déconnexion</a>
        <!-- Çalışan ve Veteriner ekleme alanı -->
        <form action="add_user.php" method="POST">
            <div class="mb-3">
                <label for="new_role" class="form-label">Role</label>
                <select id="new_role" name="new_role" class="form-select">
                    <option value="Employé">Employé</option>
                    <option value="Vétérinaire">Vétérinaire</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="new_username" class="form-label">Username</label>
                <input type="email" id="new_username" name="new_username" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="new_password" class="form-label">Password</label>
                <input type="password" id="new_password" name="new_password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
</body>
</html>

