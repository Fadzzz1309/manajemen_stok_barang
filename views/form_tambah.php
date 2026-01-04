<div class="card shadow col-md-6 mx-auto">
    <div class="card-header bg-success text-white">
        <h5 class="mb-0">Tambah Barang</h5>
    </div>
    <div class="card-body">
        <form action="logic/tambah.php" method="POST">
            <div class="mb-3">
                <label>Nama Barang</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Harga (Rp)</label>
                <input type="number" name="harga" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Stok</label>
                <input type="number" name="stok" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Deskripsi</label>
                <textarea name="deskripsi" class="form-control" rows="3"></textarea>
            </div>
            <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>