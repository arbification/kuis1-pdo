<?php

require 'class/pelanggan.php';
$pelanggan = new Pelanggan();

//jika menekan tombol tambah pelanggan
if (isset($_POST['tambah_pelanggan'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $tambah = $pelanggan->TambahPelanggan($nama, $alamat, $email);
    if ($tambah == 'berhasil') {
        header('location:index.php');
    }
}

//jika menekan tombol hapus
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $hapus = $pelanggan->HapusPelanggan($id);
    if ($hapus == 'berhasil') {
        header('location:index.php');
    }
}

//jika menekean tombol edit
if (isset($_POST['edit_pelanggan'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $edit = $pelanggan->EditPelanggan($id, $nama, $alamat, $email);
    if ($edit == 'berhasil') {
        header('location:index.php');
    }
}

?>