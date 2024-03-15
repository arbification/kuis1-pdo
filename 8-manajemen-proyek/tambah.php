<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Proyek</title>
</head>

<body>
    <h1>Tambah Data Proyek</h1>
    <form action='aksi.php' method="post">
        Nama Proyek <br>
        <input type='text' name="nama_proyek" required>
        <br>Deskripsi <br>
        <input type='text' name="deskripsi" required>
        <br>Deadline <br>
        <input type='date' name="deadline" required>
        <br><br>
        <input type="submit" name="tambah_proyek" value="tambah">
    </form>
</body>

</html>