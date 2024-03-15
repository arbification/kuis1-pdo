<?php

require 'class/pesanan.php';
$pesanan = new Pesanan();

if (isset($_POST['tambah_pesanan'])){
    $id_pelanggan = $_POST['id_pelanggan'];
    $id_barang = $_POST['id_barang'];
    $jumlah = $_POST['jumlah'];
    $tanggal_pesan = $_POST['tanggal_pesan'];

    $pesanan->tambah($id_pelanggan, $id_barang, $jumlah, $tanggal_pesan);
    header('location: index.php');
}

?>