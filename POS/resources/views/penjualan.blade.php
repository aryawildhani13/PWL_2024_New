<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi POS</title>
</head>
<body>
    <h1>Halaman Transaksi POS</h1>

    <!-- Form untuk menambahkan barang -->
    <form action="/tambah-barang" method="post">
        @csrf
        <label for="nama_barang">Nama Barang:</label><br>
        <input type="text" id="nama_barang" name="nama_barang"><br>
        <label for="harga_barang">Harga Barang:</label><br>
        <input type="text" id="harga_barang" name="harga_barang"><br><br>
        <button type="submit">Tambah Barang</button>
    </form>

    <hr>

    <!-- Daftar barang -->
    <h2>Daftar Barang</h2>
    <ul>
        <!-- Daftar barang di sini -->
        <li>Mie Instan - Rp 5000</li>
        <li>Minuman Soda - Rp 3000</li>
        <li>Susu - Rp 10000</li>
        <!-- Anda dapat menambahkan barang sesuai dengan produk yang telah diberikan sebelumnya -->
    </ul>
</body>
</html>
