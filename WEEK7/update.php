<?php
require 'function.php';

$no = $_GET["no"];

$brg = query("SELECT * FROM semua_barang WHERE no = $no")[0];

if (isset($_POST["submit"])){
    if (ubah($_POST)> 0){
        echo "
            <script>
            alert('Barang berhasil diubah!');
            document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
        <script>
        alert('Barang gagal diubah!');
        document.location.href = 'index.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Ubah Data Barang CIYYO STORE</title>
        <style>
            body {
            background: linear-gradient(to right, #ABB2B9,#808B96);
            color: white; 
            font-family: Arial;
            }
        </style>
    </head>
    <body>
        <h1>Ubah Data Barang CIYYO STORE</h1>
        <form action="" method="post">
            <input type="hidden" name="no" value="<?=$brg['no'];?>">
            <ul>
                <li>
                    <label for="kode">Kode Barang</label>
                    <input type="text" name="kode" id="kode" required value = <?= $brg["kodeb"];?>>
                </li>
                <li>
                    <label for="nama">Nama Barang</label>
                    <input type="text" name="nama" id="nama" required value = <?= $brg["nama"];?>>
                </li>
                <li>
                    <label for="harga">Harga Barang</label>
                    <input type="text" name="harga" id="harga" required value = <?= $brg["harga"];?>>
                </li>
                <li>
                    <label for="stok">Stok Barang</label>
                    <input type="text" name="stok" id="stok" required value = <?= $brg["stok"];?>>
                </li>
                <li>
                    <label for="gambar">Gambar Barang</label>
                    <input type="text" name="gambar" id="gambar" required value = <?= $brg["gambar"];?>>
                </li>
                <li>
                    <button type="submit" name="submit">Ubah Data</button>
                </li>
            </ul>
        </form>
    </body>
</html>