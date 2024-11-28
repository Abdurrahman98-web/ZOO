<?php
// Ortam değişkenini kullanarak veritabanına bağlanma
$dsn = getenv('JAWSDB_URL'); // JAWSDB_URL'yi al
$parsedUrl = parse_url($dsn);

$host = $parsedUrl['host'];
$username = $parsedUrl['user'];
$password = $parsedUrl['pass'];
$database = ltrim($parsedUrl['path'], '/');
$port = $parsedUrl['port'];

// Veritabanına bağlanma
$conn = new mysqli($host, $username, $password, $database, $port);
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}
echo "Veritabanı bağlantısı başarılı!";
?>


