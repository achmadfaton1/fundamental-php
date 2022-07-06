<?php
require_once __DIR__ . '/getConnection.php';
//panggil method
$connection = getConnection();

//insert
$sql = <<<SQL
    INSERT INTO mahasiswa(nim, nama, kelas)
    VALUES (123123, ali, b4)

SQL;

$connection->exec($sql);
//close connection
$connection = null;