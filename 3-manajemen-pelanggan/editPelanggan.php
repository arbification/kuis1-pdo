<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pelanggan</title>
    <!-- Tambahkan link CSS Tailwind -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<?php
require 'class/Pelanggan.php';
$pelanggan = new Pelanggan();
$id = $_GET['id'];
$ambil = $pelanggan->AmbilPelanggan($id);
$value = $ambil->fetch(PDO::FETCH_OBJ);
?>

<body class="bg-gray-100 text-gray-800 font-sans antialiased">
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-4">Tambah Pelanggan</h1>
        <form action="aksi.php" method="post" class="space-y-4 max-w-md">
            <input type="hidden" name="id" value="<?= $value->id ?>" required>
            <label for="nama" class="block font-medium">Nama</label>
            <input type="text" name="nama" id="nama" value="<?= $value->nama ?>" class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:border-blue-500" required>
            <label for="alamat" class="block font-medium">Alamat</label>
            <input type="text" name="alamat" id="alamat" value="<?= $value->alamat ?>" class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:border-blue-500" required>
            <label for="email" class="block font-medium">Email</label>
            <input type="email" name="email" id="email" value="<?= $value->email ?>" class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:border-blue-500" required>
            <button type="submit" name="edit_pelanggan" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">Edit</button>
        </form>
    </div>
</body>

</html>
