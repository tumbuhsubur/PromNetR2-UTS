<!-- UTS PromNetR2 -    Nama    : Eka Januard Firdaus 
                        NIM     : 19510006 -->
<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "reservasi";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>