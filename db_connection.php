<?php // Ortam değişkenini kullanarak veritabanına bağlanma
$JAWSDB_URL = 'mysql://x2ahu8zx4dd4j2w5:ph27tkiggs3xfvha@d6q8diwwdmy5c9k9.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/pliiurw8rqid4ocx';
$parsedUrl = parse_url($JAWSDB_URL);

if (!$parsedUrl || !isset($parsedUrl['host'], $parsedUrl['user'], $parsedUrl['pass'], $parsedUrl['path'], $parsedUrl['port'])) {
    die("Geçersiz veritabanı bağlantı bilgileri.");
}

$host = $parsedUrl['host'];
$username = $parsedUrl['user'];
$password = $parsedUrl['pass'];
$database = ltrim($parsedUrl['path'], '/');
$port = $parsedUrl['port'];
$conn = new mysqli($host, $username, $password, $database, $port);
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}
?>


