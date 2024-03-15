<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Event</title>
</head>

<body>
    <h1>Tambah Event</h1>
    <form method="post" action="function.php"> <!-- Ganti action menjadi function.php -->
        <label for="nama_event">Nama Event:</label>
        <input type="text" id="nama_event" name="nama_event" required>
        <br>
        <label for="tanggal">Tanggal:</label>
        <input type="date" id="tanggal" name="tanggal" required>
        <br>
        <label for="lokasi">Lokasi:</label>
        <input type="text" id="lokasi" name="lokasi" required>
        <br>
        <button type="submit" name="tambah">Tambah</button>
        <a href="index.php">Kembali</a>
    </form>
</body>

</html>