<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Proyek</title>
</head>
<?php
require 'class/Proyek.php';
$Proyek = new Proyek();
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $ambil = $Proyek->AmbilProyek($id);
    $value = $ambil->fetch(PDO::FETCH_OBJ);
} else {
    echo "ID tidak tersedia.";
    exit;
}
?>

<body>
    <h1>Edit Data Proyek</h1>
    <form action='aksi.php' method="post">
        <input type='hidden' name='id' value="<?= $id ?>">
        <br>Nama Proyek <br>
        <input type='text' name=" nama_proyek" value="<?= $value->nama_proyek ?>" required>
        <br>Deskripsi <br>
        <input type='text' name=" deskripsi" value="<?= $value->deskripsi ?>" required>
        <br>Deadline <br>
        <input type='date' name=" deadline" value="<?= $value->deadline ?>" required>
        <br>
        <br>
        <input type="submit" name="edit_proyek" value="edit">
    </form>
</body>

</html>