<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Event</title>
</head>

<body>
    <h1>Edit Event</h1>
    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        require 'event.php';
        $eventManager = new EventManager();
        $data_event = $eventManager->lihatEvent($id); // Memanggil method lihatEvent dari objek EventManager
        if ($data_event) {
    ?>
            <form method="post" action="function.php"> <!-- Ganti action menjadi function.php -->
                <input type="hidden" name="id" value="<?= $data_event->id ?>">
                <label for="nama_event">Nama Event:</label>
                <input type="text" id="nama_event" name="nama_event" value="<?= $data_event->nama_event ?>" required>
                <br>
                <label for="tanggal">Tanggal:</label>
                <input type="date" id="tanggal" name="tanggal" value="<?= $data_event->tanggal ?>" required>
                <br>
                <label for="lokasi">Lokasi:</label>
                <input type="text" id="lokasi" name="lokasi" value="<?= $data_event->lokasi ?>" required>
                <br>
                <button type="submit" name="edit">Simpan</button>
                <a href="index.php">Kembali</a>
            </form>
    <?php
        } else {
            echo "<p>Data event tidak ditemukan.</p>";
        }
    } else {
        header('Location: index.php');
    }
    ?>
</body>

</html>