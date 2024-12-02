<?php
session_start();
require 'db_connection.php';

if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] !== 'https') {
    header("Location: https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
    exit();
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $role = $_POST['role'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE role = :role AND username = :username");
    $stmt->execute(['role' => $role, 'username' => $username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user'] = $user;
        if ($role == 'Administrateur') {
            header("Location: admin_panel.php");
        } else {
            echo "Erişim izniniz yok.";
        }
    } else {
        echo "Geçersiz kullanıcı adı veya şifre.";
    }
}
?>

