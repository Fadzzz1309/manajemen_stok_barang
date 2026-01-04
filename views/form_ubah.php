<div class="card shadow col-md-6 mx-auto">
    <div class="card-header bg-warning">
        <h5 class="mb-0">Edit Barang</h5>
    </div>
    <div class="card-body">
        <form action="logic/ubah.php" method="POST">
            <input type="hidden" name="id" value="<?= $data_edit['id']; ?>">
            
            <div class="mb-3">
                <label>Nama Barang</label>
                <input type="text" name="nama" class="form-control" value="<?= $data_edit['nama_barang']; ?>" required>
            </div>
            <div class="mb-3">
                <label>Harga (Rp)</label>
                <input type="number" name="harga" class="form-control" value="<?= $data_edit['harga']; ?>" required>
            </div>
            <div class="mb-3">
                <label>Stok</label>
                <input type="number" name="stok" class="form-control" value="<?= $data_edit['stok']; ?>" required>
            </div>
            <div class="mb-3">
                <label>Deskripsi</label>
                <textarea name="deskripsi" class="form-control" rows="3"><?= $data_edit['deskripsi']; ?></textarea>
            </div>
            <button type="submit" name="update" class="btn btn-primary">Update</button>
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>