<?php
  include ("header.php");
  require 'class/barang.php';
  $barang = new Barang();
  $data = $barang->tampilBarangId($_GET['id']);
  $data = $data->fetch();
?>

<main>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="mt-5">Lihat Barang</h1>
        <p class="lead">Lihat data barang</p>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-md-12">
        <div class="card shadow-sm">
          <div class="card-header">
            Lihat Barang
          </div>
          <div class="card-body d-flex justify-content-center align-items-center">
            <ul class="list-group list-group-flush">
              <li class="list-group">Nama Barang : <?= $data['nama_barang']; ?></li>
              <li class="list-group">Harga Barang : <?= $data['harga']; ?></li>
              <li class="list-group">Stok tersedia : <?= $data['stok']; ?></li>
            </ul>
          </div>
          <div class="card-footer d-flex justify-content-center align-items-center">
            <a href="index.php" class="btn btn-dark">Kembali</a>
          </div>
        </div>
      </div>
    </div>

  </div>
</main>
