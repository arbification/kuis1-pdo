<?php

  require 'class/barang.php';
  $barang = new Barang();

  if (isset($_POST['tambah_barang'])) {
    $nama_barang = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $barang->tambahBarang($nama_barang, $harga, $stok);
    if($barang){
      header('Location: index.php');
    }else{
      echo "Gagal menambahkan barang";
    }
  }

  if(isset($_POST['edit_barang'])){
    $id = $_POST['id'];
    $nama_barang = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $barang->updateBarang($id, $nama_barang, $harga, $stok);
    if($barang){
      header('Location: index.php');
    }else{
      echo "Gagal mengedit barang";
    }
  }

  if(isset($_POST['hapus_barang'])){
    $id = $_POST['id'];
    $barang->hapusBarang($id);
    if($barang){
      header('Location: index.php');
    }else{
      echo "Gagal menghapus barang";
    }
  }
?>
