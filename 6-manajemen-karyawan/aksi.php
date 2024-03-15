<?php
require 'karyawan.php';
$karyawan = new Karyawan();

if (isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $tambah = $karyawan->tambahKaryawan($nama, $jenis_kelamin, $tanggal_lahir);
    if ($tambah == "Berhasil menambahkan karyawan") {
        header('Location: index.php');
    }
}

if (isset($_POST['edit'])) {
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $id = $_POST['id'];
    $edit = $karyawan->editKaryawan($id, $nama, $jenis_kelamin, $tanggal_lahir);
    if ($edit == "Berhasil mengubah karyawan") {
        header('Location: index.php');
    }
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $hapus = $karyawan->hapusKaryawan($id);
    if ($hapus == "Berhasil menghapus karyawan") {
        header('Location: index.php');
    }
}
?>