<!DOCTYPE html>
<html>
<head>
    <title>Tambah Order</title>
</head>
<body>

    <h1>Form Tambah Order</h1>

    <form action="{{ route('orders.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <p>
            Nama Klien<br>
            <input type="text" name="nama_klien">
        </p>

        <p>
            Layanan<br>
            <input type="text" name="layanan">
        </p>

        <p>
            Jumlah<br>
            <input type="number" name="jumlah">
        </p>

        <p>
            Harga Awal<br>
            <input type="number" name="harga_awal">
        </p>

        <p>
            File Referensi<br>
            <input type="file" name="file_referensi">
        </p>

        <button type="submit">
            Simpan Order
        </button>

    </form>

</body>
</html>