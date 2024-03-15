<?php
  include ("header.php");

  require 'class/barang.php';
  $barang = new Barang();
  $data = $barang->tampilBarang();
  $no = 1;
?>

<main>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="mt-5">Manajemen Barang</h1>
        <p class="lead">Selamat datang di Manajemen Barang</p>
        <p>Manajemen Barang adalah aplikasi untuk mengelola data barang</p>
      </div>
    </div>
    <hr>
    <hr>
    <div class="row">
      <div class="card col-md-12 shadow-sm">
        <div class="card-header">
          <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#tambahBarang">Tambah
            Barang</button>
        </div>
        <div class="card-body">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Harga Barang</th>
                <th scope="col">Stok Barang</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
                foreach ($data as $row):
                  ?>
              <tr>
                <th scope="row"><?= $no++; ?></th>
                <td><?= $row['nama_barang']; ?></td>
                <td><?= $row['harga']; ?></td>
                <td><?= $row['stok']; ?></td>
                <td>
                  <!-- Tambahkan atribut data pada tombol edit -->
                  <!-- <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-warning">Edit</a> -->
                  <a href="lihat.php?id=<?= $row['id']; ?>" class="btn btn-info">Lihat</a>
                  <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                    data-bs-target="#editBarang<?= $row['id']; ?>">
                    Edit
                  </button>
                  <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                    data-bs-target="#hapusBarang<?= $row['id']; ?>">
                    Hapus
                  </button>
                </td>
              </tr>
              <?php
                include ("modal.php");
                endforeach;
                ?>
            </tbody>
        </div>
      </div>
    </div>
  </div>
</main>
<?php
  include ("footer.php"); 
?>
