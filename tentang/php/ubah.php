<?php

session_start();

if (!isset($_SESSION["login"])) {
    header('Location: login.php');
    exit;
}

require 'functions.php';

// Ambil data dari url
$id = $_GET["id"];

// query data komoditas berdasarkan id
$commodity = query("SELECT * FROM komoditas WHERE id = $id")[0];


// cek apakah tombol submit sudah ditekan atau blm
if (isset($_POST["submit"])) {

    // cek data sudah diubah atau tidak
    if (ubah($_POST) > 0) {
        echo "
        <script>
            alert('Data BERHASIL diubah');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data GAGAL diubah!');
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
    <title>Ubah Data</title>
</head>

<body>
    <h1>Ubah Data Produk</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $commodity["id"]; ?>">
        <ul>
            <li>
                <label for="NRP">NRP:</label>
                <input type="text" name="NRP" id="NRP" required value="<?= $commodity["NRP"]; ?>">
            </li>
            <li>
                <label for="Nama">Nama:</label>
                <input type="text" name="Nama" id="Nama" required value="<?= $commodity["Nama"]; ?>">
            </li>
            <li>
                <label for="Harga">Harga:</label>
                <input type="text" name="Harga" id="Harga" required value="<?= $commodity["Harga"]; ?>">
            </li>
            <li>
                <label for="Pemilik">Pemilik:</label>
                <input type="text" name="Pemilik" id="Pemilik" required value="<?= $commodity["Pemilik"]; ?>">
            </li>
            <li>
                <label for="Alamat">Alamat:</label>
                <input type="text" name="Alamat" id="Alamat" required value="<?= $commodity["Alamat"]; ?>">
            </li>
            <li>
                <label for="Gambar">Gambar:</label>
                <input type="text" name="Gambar" id="Gambar" required value="<?= $commodity["Gambar"]; ?>">
            </li>
            <button type="submit" name="submit">Ubah</button>
        </ul>
    </form>
</body>

</html> 