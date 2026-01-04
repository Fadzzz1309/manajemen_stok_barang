<?php
include '../koneksi.php';

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $deskripsi = $_POST['deskripsi'];

    $query = mysqli_query($koneksi, "INSERT INTO barang (nama_barang, harga, stok, deskripsi) VALUES ('$nama', '$harga', '$stok', '$deskripsi')");

    if ($query) {
        header("Location: ../index.php?pesan=sukses_tambah");
    } else {
        header("Location: ../tambah.php?pesan=gagal");
    }
}
?>