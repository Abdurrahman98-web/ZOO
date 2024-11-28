<?php
// Heroku'nun DATABASE_URL ortam değişkenini al
$databaseUrl = parse_url(getenv('JAWSDB_URL'));

if ($databaseUrl) {
    // DATABASE_URL varsa Heroku'da çalışıyoruz
    $url = parse_url($databaseUrl);

    $servername = $url['host'];
    $username = $url['user'];
    $password = $url['pass'];
    $dbname = ltrim($url['path'], '/');
} else {
    // Yerel ortam için bağlantı bilgileri
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "login_db";
}

// MySQL bağlantısı oluşturuluyor
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantı kontrolü
if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}
?>

