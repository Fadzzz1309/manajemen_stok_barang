<?php
$host="localhost";
$user="root";
$pass="root@123";
$db_name="db_stok";

$koneksi=mysqli_connect($host,$user,$pass,$db_name);

if(!$koneksi) {
    die("Koneksi gagal = ".mysqli_connect_error());
}
?>