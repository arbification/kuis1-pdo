<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Karyawan</title>
</head>
<body>
    <h1>Edit Karyawan</h1>
    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        require 'karyawan.php';
        $karyawan = new Karyawan();
        $data_karyawan = $karyawan->lihatKaryawan($id);
        if ($data_karyawan) {
            ?>
            <form method="post" action="aksi.php">
                <input type="hidden" name="id" value="<?= $data_karyawan->id ?>">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" value="<?= $data_karyawan->nama ?>" required>
                <br>
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <select id="jenis_kelamin" name="jenis_kelamin" required>
                    <option value="Laki-laki" <?= $data_karyawan->jenis_kelamin == 'Laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
                    <option value="Perempuan" <?= $data_karyawan->jenis_kelamin == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
                </select>
                <br>
                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="<?= $data_karyawan->tanggal_lahir ?>" required>
                <br>
                <button type="submit" name="edit">Simpan</button>
                <a href="index.php">Kembali</a>
            </form>
            <?php
        } else {
            echo "<p>Data karyawan tidak ditemukan.</p>";
        }
    } else {
        header('Location: index.php');
    }
    ?>
</body>
</html>