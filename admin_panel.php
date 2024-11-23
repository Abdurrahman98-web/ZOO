<?php
session_start();
require 'db_connection.php';

// Admin yetkisi kontrolü
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'Administrateur') {
    die("Erişim reddedildi. Yalnızca Administrateurs!");
}

// Kullanıcıları listele
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    $action = $_POST['action'];
    $username = $_POST['username'];
    $role = $_POST['role'];
    $plain_password = $_POST['password'];
    $hashed_password = password_hash($plain_password, PASSWORD_BCRYPT);

    if ($action === 'add') {
        $password = $hashed_password;
        $stmt = $conn->prepare("INSERT INTO users (username, password, role) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $password, $role);
        $stmt->execute();
        echo "Kullanıcı başarıyla eklendi.";
    } elseif ($action === 'remove') {
        $stmt = $conn->prepare("DELETE FROM users WHERE username = ? AND role = ?");
        $stmt->bind_param("ss", $username, $role);
        $stmt->execute();
        echo "Kullanıcı başarıyla silindi.";
    }
}

// Tüm kullanıcıları çek
$result = $conn->query("SELECT * FROM users");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <title>Admin Panel</title>
</head>
<body>
    <?php include_once "header-footer.php"?>
<h1>Admin Panel</h1>
    <h2>User Mangement</h2>

    <form method="POST">
        <label for="username">user:</label>
        <input type="email" id="username" name="username" required>
        <label for="password">password:</label>
        <input type="password" id="password" name="password" required>
        
        <label for="role">Rol:</label>
        <select id="role" name="role">
            <option value="Employé">Employé</option>
            <option value="Vétérinaire">Vétérinaire</option>
        </select>
        
        <button type="submit" name="action" value="add">Add</button>
        <button type="submit" name="action" value="remove">Delet</button>
    </form>

    <h2>User  </h2>
    <table class=" border">
        <tr>
            <th class=" border">ID</th>
            <th class=" border">user name</th>
            <th class=" border">Rol</th>
            <th class=" border">password</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td class=" border"><?= $row['id'] ?></td>
            <td class=" border"><?= $row['username'] ?></td>
            <td class=" border"><?= $row['role'] ?></td>
            <td class=" border"><?= $row['password'] ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
   
</body>
</html>
