<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Proyek</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            background-color: #F2F2F2;
            /* Warna latar belakang tabel */
        }

        th,
        td {
            border: 1px solid black;
            padding: 4px;
            /* Padding pada sel TD */
            text-align: center;
            /* Teks di tengah sel TD */
        }

        th {
            background-color: #333;
            color: white;
            font-size: 20px;
        }

        td {
            font-size: 18px;
        }

        img {
            margin: 1px;
            /* Jarak antara gambar dengan border sel TD */
        }
    </style>
</head>

<body>
    <center>
        <h1>Data Proyek</h1>
        <p>
            <a href="tambah.php">Tambah Data Proyek</a>
        </p>
        <?php
        require 'class/proyek.php';
        $proyek = new Proyek();
        $data = $proyek->TampilProyek();
        $no = 1;
        ?>
        <table border="1">
            <thead style="background-color: #F2F2F2; font-weight: bold;">
                <th>No</th>
                <th>ID</th>
                <th>Nama Proyek</th>
                <th>Deskripsi</th>
                <th>Deadline</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                <?php
                foreach ($data as $value) { ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $value['id'] ?></td>
                        <td><?= $value['nama_proyek'] ?></td>
                        <td><?= $value['deskripsi'] ?></td>
                        <td><?= $value['deadline'] ?></td>
                        <td>
                            <a href="edit.php?id=<?= $value['id'] ?>">Edit</a>
                            <a href="aksi.php?id=<?= $value['id'] ?>">Hapus</a>

                        </td>
                    </tr>

                <?php } ?>
            </tbody>
        </table>
    </center>
</body>

</html>