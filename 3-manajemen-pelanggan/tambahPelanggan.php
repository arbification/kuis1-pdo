<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pelanggan</title>
    <!-- Tambahkan link CSS Tailwind -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 text-gray-800 font-sans antialiased">
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6">Tambah Pelanggan</h1>
        <form action="aksi.php" method="post" class="max-w-md space-y-4">
            <div>
                <label for="nama" class="block font-medium">Nama</label>
                <input type="text" name="nama" id="nama" class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:border-blue-500" required>
            </div>
            <div>
                <label for="alamat" class="block font-medium">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:border-blue-500" required>
            </div>
            <div>
                <label for="email" class="block font-medium">Email</label>
                <input type="email" name="email" id="email" class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:border-blue-500" required>
            </div>
            <button type="submit" name="tambah_pelanggan" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg">Tambah</button>
        </form>
    </div>
</body>

</html>
