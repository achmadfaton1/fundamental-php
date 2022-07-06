<?php
$host = "localhost";
$port = 3306;
$database = "test";
$username = "root";
$password = "";

try {
    $connection = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
    echo "koneksi berhasil";
    $connection = null;
} catch (PDOException $exception ) {
    echo "gagal koneksi" . $exception->getMessage();
}