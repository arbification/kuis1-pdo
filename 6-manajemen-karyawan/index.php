<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Karyawan</title>
</head>
<body>
    <?php
    require 'karyawan.php';
    $karyawan = new Karyawan();
    $data_karyawan = $karyawan->tampilKaryawan();
    $no=1;
    ?>
    <h1>Data Karyawan</h1>
    <a href="tambah.php">Tambah Karyawan</a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = $data_karyawan->fetch(PDO::FETCH_OBJ)) { ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row->nama ?></td>
                <td><?= $row->jenis_kelamin ?></td>
                <td><?= $row->tanggal_lahir ?></td>
                <td>
                    <a href="edit.php?id=<?= $row->id ?>">Edit</a>
                    <a href="aksi.php?id=<?= $row->id ?>&hapus=true" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>