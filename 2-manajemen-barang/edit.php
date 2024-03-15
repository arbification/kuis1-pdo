<?php
  include ("header.php");
  include ("class/barang.php");

  $id = $_GET['id'];
  $barang = new Barang();
  $data = $barang->tampilBarangId($id);
  $row = $data->fetch(PDO::FETCH_ASSOC);
  ?>

<main>
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="card col-md-5 mt-5 shadow-sm">
        <div class="card-header">
          <h5>Edit
            Barang
            <h5 />
        </div>
        <div class="card-body">
          <form action="aksi.php" method="post">
            <input type="hidden" name="id" value="<?= $row['id']; ?>">
            <div class="mb-3">
              <label for="nama" class="form-label">Nama Barang</label>
              <input type="text" class="form-control" id="nama" name="nama" required
                value="<?= $row['nama_barang']; ?>">
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
</main>
<?php
  include ("footer.php");
  ?>
