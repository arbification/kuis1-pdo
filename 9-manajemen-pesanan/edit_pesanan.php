<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pesanan</title>
</head>
<body>
    <h1>Edit Pesanan</h1>
    <?php
    require 'class/pesanan.php';
    $pesanan = new Pesanan();
    $id = $_GET['id'];
    $data = $pesanan->lihat_id($id);
    ?>
    <form action="edit_pesanan.php" method="post">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        <label for="id_pelanggan">ID Pelanggan</label><br>
        <input type="number" name="id_pelanggan" id="id_pelanggan" value="<?php echo $data['id_pelanggan']; ?>"><br>
        <label for="id_barang">ID Barang</label><br>
        <input type="number" name="id_barang" id="id_barang" value="<?php echo $data['id_barang']; ?>"><br>
        <label for="jumlah">Jumlah</label><br>
        <input type="number" name="jumlah" id="jumlah" value="<?php echo $data['jumlah']; ?>"><br>
        <label for="tanggal_pesan">Tanggal Pesan</label><br>
        <input type="date" name="tanggal_pesan" id="tanggal_pesan" value="<?php echo $data['tanggal_pesan']; ?>"><br>
        <br>
        <input type="submit" value="Edit" name="edit_pesanan">
    </form>
    <?php
    if (isset($_POST['edit_pesanan'])) {
        $id = $_POST['id'];
        $id_pelanggan = $_POST['id_pelanggan'];
        $id_barang = $_POST['id_barang'];
        $jumlah = $_POST['jumlah'];
        $tanggal_pesan = $_POST['tanggal_pesan'];
        $pesanan->edit($id, $id_pelanggan, $id_barang, $jumlah, $tanggal_pesan);
        header('location: index.php');
    }
    ?>
</body>
</html>