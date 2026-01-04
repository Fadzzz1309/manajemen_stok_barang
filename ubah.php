<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM barang WHERE id='$id'");
$data_edit = mysqli_fetch_array($query);

include 'views/header.php';
include 'views/form_ubah.php';
include 'views/footer.php';
?>