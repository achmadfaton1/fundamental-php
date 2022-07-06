<?php
require_once '/getConnection.php';

$connection = getConnection();

$sql = "SELECT * FROM mahasiswa";
$statement = $connection->query($sql);

foreach($statement as $row){
    var_dump($row);
}

$connection = null;