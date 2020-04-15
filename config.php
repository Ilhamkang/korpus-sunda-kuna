<?php
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "glosarium";
$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Teu konék kana database: " . mysqli_connect_error());
}
?>