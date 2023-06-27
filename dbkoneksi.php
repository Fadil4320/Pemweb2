<?php
// Connect ke mysql database menggunakan driver invocation atau host dan username
$dsn = 'mysql:dbname=dbkoprasi;host=localhost';
$user = 'root';
$password = '';

try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo '<h1>Sukses Koneksi Database';
    $dbh->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, TRUE);
} catch (PDOExeption $e) {
    echo 'Terjadi kesalahan saat koneksi' .$e->getMessage();
}
?>