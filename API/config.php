<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "web-admin";

$conn = mysqli_connect($server, $user, $password, $nama_database);

if( $conn->connect_error ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>