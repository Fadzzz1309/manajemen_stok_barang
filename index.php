<?php
include "koneksi.php";

if (isset($_GET['cari'])) {
    $cari = $_GET['cari'];
    $query = "SELECT * FROM barang WHERE nama_barang LIKE '%$cari%' OR deskripsi LIKE '%$cari%' ORDER BY id DESC";
    $data_barang = mysqli_query($koneksi, $query);
} else {
    $data_barang = mysqli_query($koneksi, "SELECT * FROM barang ORDER BY id DESC");
}

include "views/header.php";
include "views/list_barang.php";
include "views/footer.php";
?>