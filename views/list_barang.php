<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Toko Makmur Jaya</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                <li class="nav-item">
                    <a class="btn btn-success btn-md" href="tambah.php">Tambah Data</a>
                </li>
            </ul>
            <form class="d-flex" action="index.php" method="GET" role="search">
                <input class="form-control me-2" type="search" name="cari" placeholder="Cari Data ..." aria-label="Search" value="<?= isset($_GET['cari']) ? $_GET['cari'] : '' ?>">
                <button class="btn btn-outline-success" type="submit">Cari</button>
            </form>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <div class="card">
        <div class="card-header">
          List Barang
        </div>
        <div class="card-body">
            <table class="table table-bordered text-center align-middle">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama barang</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                        if(mysqli_num_rows($data_barang) > 0){
                            while ($row = mysqli_fetch_array($data_barang)) {
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $row['nama_barang']; ?></td>
                            <td>Rp <?= number_format($row['harga'], 0, ',', '.'); ?></td>
                            <td><?= $row['stok']; ?></td>
                            <td><?= $row['deskripsi']; ?></td>
                            <td>
                                <a href="ubah.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="logic/hapus.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</a>
                            </td>
                        </tr>
                        <?php 
                        }
                        } else {
                            echo "<tr><td colspan='6' class='text-center'>Data Kosong</td></tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

