<?php
require 'function.php';

if (isset($_POST["submit"])){   
    if (tambah($_POST)> 0){
        echo "
            <script>
            alert('Penambahan Data Barang Berhasil!');
            document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
        <script>
        alert('Penambahan Data Barang Tidak Berhasil!');
        document.location.href = 'index.php';
        </script>
        ";
    }
};

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Data Barang Ciyyo Store</title>
        <style>
            body {
            background: linear-gradient(to right, #ABB2B9,#808B96);
            color:black;
            font-family: sans-serif; 
            }
        </style>
    </head>
    <body>
        <h1>Tambah Data Barang</h1>
        <form action="" method="post">
            <ul>
                <li>
                    <label for="kode">Kode Barang</label>
                    <input type="text" name="kode" id="kode">
                </li>
                <li>
                    <label for="nama">Nama Barang</label>
                    <input type="text" name="nama" id="nama">
                </li>
                <li>
                    <label for="harga">Harga Barang</label>
                    <input type="text" name="harga" id="harga">
                </li>
                <li>
                    <label for="stok">Stok Barang</label>
                    <input type="text" name="stok" id="stok">
                </li>
                <li>
                    <label for="gambar">Gambar Barang</label>
                    <input type="text" name="gambar" id="gambar">
                </li>
                <li>
                    <button type="submit" name="submit">Ubah Data</button>
                </li>
            </ul>
        </form>
    </body>
</html>