<?php

require 'class/proyek.php';
$Proyek = new Proyek();

//jika menekan tombol tambah proyek
if (isset($_POST['tambah_proyek'])) {
    $id = $_POST['id'];
    $nama_proyek = $_POST['nama_proyek'];
    $deskripsi = $_POST['deskripsi'];
    $deadline = $_POST['deadline'];
    $tambah = $Proyek->TambahProyek($id, $nama_proyek, $deskripsi, $deadline);
    if ($tambah == 'berhasil') {
        header('location:index.php');
    }
}

//jika menekan tombol hapus
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $hapus = $Proyek->HapusProyek($id);
    if ($hapus == 'berhasil') {
        header('location:index.php');
    }
}

//jika menekean tombol edit
if (isset($_POST['edit_proyek'])) {
    $id = $_POST['id'];
    $nama_proyek = $_POST['nama_proyek'];
    $deskripsi = $_POST['deskripsi'];
    $deadline = $_POST['deadline'];
    $edit = $Proyek->EditProyek($id, $nama_proyek, $deskripsi, $deadline);
    if ($edit == 'berhasil') {
        header('location:index.php');
    }
}
