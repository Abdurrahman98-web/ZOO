<?php
session_start();
require 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $role = $_POST['role'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    



    // Kullanıcıyı doğrula
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND role = ?");
    $stmt->bind_param("ss", $username, $role);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        // Şifre doğrulama
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['role'] = $user['role'];

            if ($user['role'] === 'Administrateur') {
                header("Location: admin_panel.php");
            } else {
                echo "Connexion réussie. Bienvenue, $role!";
            }
            exit();
        } else {
            echo "Mot de passe incorrect.";
        }
    } else {
        echo "Nom d'utilisateur ou rôle invalide.";
    }
}
?>
