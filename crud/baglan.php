 <?php
/* Sürücü isteğiyle bir ODBC veritabanına bağlanalım */
$dsn = 'mysql:dbname=crude;host=127.0.0.1';
$user = 'root';
$password = '';
 
try {
    $baglan = new PDO($dsn, $user, $password);
    // echo "Bağlandı";
} catch (PDOException $e) {
    echo 'Bağlantı kurulamadı: ' . $e->getMessage();
}
 ?> 