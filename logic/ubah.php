<?php
include '../koneksi.php';

if (isset($_POST['update'])) {
    $id = $_POST['id']; 
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $deskripsi = $_POST['deskripsi'];

    $query = mysqli_query($koneksi, "UPDATE barang SET nama_barang='$nama', harga='$harga', stok='$stok', deskripsi='$deskripsi' WHERE id='$id'");

    if ($query) {
        header("Location: ../index.php?pesan=sukses_update");
    } else {
        header("Location: ../ubah.php?id=$id&pesan=gagal");
    }
}
?>