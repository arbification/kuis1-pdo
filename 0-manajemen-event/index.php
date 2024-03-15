<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Event</title>
</head>

<body>
    <?php
    require 'event.php'; // Ubah sesuai dengan nama file EventManager.php Anda
    $eventManager = new EventManager();
    $data_event = $eventManager->tampilEvent();
    $no = 1;
    ?>
    <h1>Data Event</h1>
    <a href="add.php">Tambah Event</a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama Event</th>
            <th>Tanggal</th>
            <th>Lokasi</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = $data_event->fetch(PDO::FETCH_OBJ)) { ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row->nama_event ?></td>
                <td><?= $row->tanggal ?></td>
                <td><?= $row->lokasi ?></td>
                <td>
                    <a href="edit.php?id=<?= $row->id ?>">Edit</a>
                    <a href="function.php?id=<?= $row->id ?>&hapus=true" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>