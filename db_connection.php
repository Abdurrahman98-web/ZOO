<?php
require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Heroku'daki JAWSDB_URL'yi kontrol edi
$dbUrl = getenv('JAWSDB_URL') ;
// ?: $_ENV['JAWSDB_URL'];
if ($dbUrl) {
    $dbParts = parse_url($dbUrl);
    $host = $dbParts['host'];
    $dbname = ltrim($dbParts['path'], '/');
    $username = $dbParts['user'];
    $password = $dbParts['pass'];
} else {
    die("Veritabanı URL'si bulunamadı.");
}

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Veritabanı bağlantısı başarısız: " . $e->getMessage());
}
?>




