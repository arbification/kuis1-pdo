<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Management Pelanggan</title>
    <!-- Tambahkan link CSS Tailwind -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 text-gray-800 font-sans antialiased">
    <div class="container mx-auto p-6">
        <a href="tambahPelanggan.php" class="inline-block mb-4 py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-600">Tambah Data Pelanggan</a>
        <?php
        require 'class/pelanggan.php';
        $pelanggan = new Pelanggan();
        $data = $pelanggan->TampilPelanggan();
        $no = 1;
        ?>
        <table class="w-full border-collapse border border-gray-200 mt-4">
            <thead>
                <tr>
                    <th class="py-2 px-4 bg-gray-200 text-gray-600 uppercase font-medium text-sm">No</th>
                    <th class="py-2 px-4 bg-gray-200 text-gray-600 uppercase font-medium text-sm">Nama</th>
                    <th class="py-2 px-4 bg-gray-200 text-gray-600 uppercase font-medium text-sm">Alamat</th>
                    <th class="py-2 px-4 bg-gray-200 text-gray-600 uppercase font-medium text-sm">Email</th>
                    <th class="py-2 px-4 bg-gray-200 text-gray-600 uppercase font-medium text-sm">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $value) { ?>
                    <tr>
                        <td class="border py-2 px-4"><?= $no++ ?></td>
                        <td class="border py-2 px-4"><?= $value['nama'] ?></td>
                        <td class="border py-2 px-4"><?= $value['alamat'] ?></td>
                        <td class="border py-2 px-4"><?= $value['email'] ?></td>
                        <td class="border py-2 px-4">
                            <a href="editPelanggan.php?id=<?= $value['id'] ?>" class="text-blue-500 hover:text-blue-600 mr-2">Edit</a>
                            <a href="aksi.php?id=<?= $value['id'] ?>" class="text-red-500 hover:text-red-600">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>
