<?php
require 'event.php'; // Pastikan file event.php di-require di sini
$eventManager = new EventManager(); // Membuat objek EventManager

if (isset($_POST['tambah'])) {
    $nama_event = $_POST['nama_event'];
    $tanggal = $_POST['tanggal'];
    $lokasi = $_POST['lokasi'];
    $tambah = $eventManager->tambahEvent($nama_event, $tanggal, $lokasi); // Memanggil method tambahEvent dari objek EventManager
    if ($tambah == "Berhasil menambahkan event") {
        header('Location: index.php');
    }
}

if (isset($_POST['edit'])) {
    $nama_event = $_POST['nama_event'];
    $tanggal = $_POST['tanggal'];
    $lokasi = $_POST['lokasi'];
    $id = $_POST['id'];
    $edit = $eventManager->editEvent($id, $nama_event, $tanggal, $lokasi); // Memanggil method editEvent dari objek EventManager
    if ($edit == "Berhasil mengubah event") {
        header('Location: index.php');
    }
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $hapus = $eventManager->hapusEvent($id); // Memanggil method hapusEvent dari objek EventManager
    if ($hapus == "Berhasil menghapus event") {
        header('Location: index.php');
    }
}
