<?php

session_start();

if (!isset($_SESSION["login"])) {
    header('Location: login.php');
    exit;
}

require 'functions.php';
// cek apakah tombol submit sudah ditekan atau blm
if (isset($_POST["submit"])) {

    // cek data sudah ditambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "
        <script>
            alert('Data BERHASIL ditambahkan');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data GAGAL ditambahkan!');
            document.location.href = 'index.php';
        </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Produk</title>
</head>

<body>
    <h1>Tambah Data Produk</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="NRP">NRP:</label>
                <input type="text" name="NRP" id="NRP">
            </li>
            <li>
                <label for="Nama">Nama:</label>
                <input type="text" name="Nama" id="Nama">
            </li>
            <li>
                <label for="Harga">Harga:</label>
                <input type="text" name="Harga" id="Harga">
            </li>
            <li>
                <label for="Pemilik">Pemilik:</label>
                <input type="text" name="Pemilik" id="Pemilik">
            </li>
            <li>
                <label for="Alamat">Alamat:</label>
                <input type="text" name="Alamat" id="Alamat">
            </li>
            <li>
                <label for="Gambar">Gambar:</label>
                <input type="text" name="Gambar" id="Gambar">
            </li>
            <button type="submit" name="submit">Tambah</button>
        </ul>
    </form>
</body>

</html> 