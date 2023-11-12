<?php
require 'koneksi.php';
$result = mysqli_query($conn, "SELECT * FROM ciyyo_store");

?>

<!DOCTYPE html>
<html lang="'en">
<head><title>HALAMAN ADMIN CIYYO</title></head>
<body>
    <h1>LIST SKINCARE DI CIYYO STORE</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Kode</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
        <tr>
            <td>1</td>
            <td><img src="fw.jpg" alt="" width="100"></td>
            <td>Facial Wash Azarine</td>
            <td>FW001</td>
            <td>RP. 30.000</td>
            <td>100</td>
            <td>
                <a href="">Update</a>
                <a href="">Delete</a>
            </td>
        </tr>
        <tr>
        <td>2</td>
            <td><img src="moist.jpg" alt="" width="100"></td>
            <td>Moisturizer Azarine</td>
            <td>FW001</td>
            <td>RP. 60.000</td>
            <td>100</td>
            <td>
                <a href="">Update</a>
                <a href="">Delete</a>
            </td>
    </table>
</body>
</html>