<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Pesanan</title>
</head>
<body>
    <!-- lihat -->
    <h1>Daftar Pesanan</h1>
    <table border="1">
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>ID Pelanggan</th>
            <th>ID Barang</th>
            <th>Jumlah</th>
            <th>Tanggal Pesan</th>
            <th>Aksi</th>
        </tr>
        <?php
        require 'class/pesanan.php';
        $pesanan = new Pesanan();
        $data = $pesanan->lihat();
        $no = 1;
        foreach ($data as $row) {
            echo "<tr>";
            echo "<td>".$no++."</td>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['id_pelanggan']."</td>";
            echo "<td>".$row['id_barang']."</td>";
            echo "<td>".$row['jumlah']."</td>";
            echo "<td>".$row['tanggal_pesan']."</td>";
            echo "<td><a href='edit_pesanan.php?id=".$row['id']."'>Edit</a> | <a href='hapus_pesanan.php?id=".$row['id']."'>Hapus</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
    <br>
    <!-- tambah -->
    <h1>Tambah Pesanan</h1>
    <form action="tambah_pesanan.php" method="post">
        <label for="id_pelanggan">ID Pelanggan</label><br>
        <input type="number" name="id_pelanggan" id="id_pelanggan"><br>
        <label for="id_barang">ID Barang</label><br>
        <input type="number" name="id_barang" id="id_barang"><br>
        <label for="jumlah">Jumlah</label><br>
        <input type="number" name="jumlah" id="jumlah"><br>
        <label for="tanggal_pesan">Tanggal Pesan</label><br>
        <input type="date" name="tanggal_pesan" id="tanggal_pesan"><br>
        <br>
        <input type="submit" value="Tambah" name="tambah_pesanan">
    </form>
</body>
</html>