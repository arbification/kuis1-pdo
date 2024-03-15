<?php

require 'class/pesanan.php';
$pesanan = new Pesanan();

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $pesanan->hapus($id);
    header('location: index.php');
}

?>