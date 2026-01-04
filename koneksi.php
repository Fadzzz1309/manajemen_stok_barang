<?php
$host="localhost";
$user="root";
$pass="";
$db_name="db_stoc";

$connection=mysqli_connect($host,$user,$pass,$db_name);

if(!$connection) {
 die("Koneksi gagal = ".mysqli_connect_error());
}

?>