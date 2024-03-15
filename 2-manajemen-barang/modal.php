<!-- Modal Tambah Barang -->
<div class="modal fade" id="tambahBarang" tabindex="-1" aria-labelledby="tambahBarangLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahBarangLabel">Tambah Barang</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="aksi.php" method="post">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
          </div>
          <div class="mb-3">
            <label for="harga" class="form-label">Harga Barang</label>
            <input type="number" class="form-control" id="harga" name="harga" required>
          </div>
          <div class="mb-3">
            <label for="stok" class="form-label">Stok Barang</label>
            <input type="number" class="form-control" id="stok" name="stok" required>
          </div>
          <button type="submit" class="btn btn-dark" name="tambah_barang">Tambah</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal Hapus Barang berdasarkan id -->

<div class="modal fade" id="hapusBarang<?= $row['id']; ?>" tabindex="-1" aria-labelledby="hapusBarangLabel"
  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="hapusBarangLabel">Hapus Barang</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Apakah anda yakin ingin menghapus barang ini?
      </div>
      <div class="modal-footer">
        <form action="aksi.php" method="post">
          <input type="hidden" name="id" value="<?= $row['id']; ?>">
          <button type="submit" class="btn btn-danger" name="hapus_barang">Hapus</button>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- Modal Edit Barang berdasarkan id -->
<div class="modal fade" id="editBarang<?= $row['id']; ?>" tabindex="-1" aria-labelledby="editBarangLabel"
  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editBarangLabel">Edit Barang</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="aksi.php" method="post">
          <input type="hidden" name="id" value="<?= $row['id']; ?>">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="nama" name="nama" required value="<?= $row['nama_barang']; ?>">
          </div>
          <div class="mb-3">
            <label for="harga" class="form-label">Harga Barang</label>
            <input type="number" class="form-control" id="harga" name="harga" required value="<?= $row['harga']; ?>">
          </div>
          <div class="mb-3">
            <label for="stok" class="form-label">Stok Barang</label>
            <input type="number" class="form-control" id="stok" name="stok" required value="<?= $row['stok']; ?>">
          </div>
          <button type="submit" class="btn btn-dark" name="edit_barang">Edit</button>
        </form>
      </div>
    </div>
  </div>
</div>
